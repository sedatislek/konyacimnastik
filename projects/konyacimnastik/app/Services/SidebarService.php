<?php

namespace App\Services;

use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class SidebarService
{
    public function getMenus()
    {
        $admin = Auth::guard('admin')->user();
        $currentRoute = Route::currentRouteName();

        return Menu::whereNull('parent_id')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get()
            ->filter(function ($menu) use ($admin) {
                if (! $menu->permission_key) {
                    return true;
                }

                return admin_can($menu->permission_key);
            })
            ->map(function ($menu) use ($currentRoute) {
                // child’ları da yüklüyoruz
                $menu->setRelation(
                    'children',
                    $menu->children->filter(function ($child) {
                        return ! $child->permission_key || admin_can($child->permission_key);
                    })
                );

                // ACTIVE / OPEN hesapla
                $menu->is_active = $this->isMenuActive($menu, $currentRoute);
                $menu->is_open   = $this->isMenuOpen($menu, $currentRoute);

                return $menu;
            });
    }

    private function isMenuActive($menu, $currentRoute): bool
    {
        if ($menu->route_name && $menu->route_name === $currentRoute) {
            return true;
        }

        return $menu->children->contains(function ($child) use ($currentRoute) {
            return $child->route_name === $currentRoute;
        });
    }

    private function isMenuOpen($menu, $currentRoute): bool
    {
        return $menu->children->contains(function ($child) use ($currentRoute) {
            return $child->route_name === $currentRoute;
        });
    }
}
