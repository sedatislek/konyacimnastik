<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Permission;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('children')
            ->whereNull('parent_id')
            ->orderBy('sort_order')
            ->get();

        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        $parents = Menu::whereNull('parent_id')->get();
        $permissions = Permission::orderBy('key')->get();

        return view('admin.menus.create', compact('parents', 'permissions'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:menus,id',
            'icon' => 'nullable|string',
            'route_name' => 'nullable|string',
            'permission_key' => 'nullable|string',
            'sort_order' => 'nullable|integer',
            'is_active' => 'boolean',
        ]);

        Menu::create($data);

        return redirect()
            ->route('admin.menus.index')
            ->with('success', 'Menü oluşturuldu');
    }

    public function edit(Menu $menu)
    {
        $parents = Menu::whereNull('parent_id')
            ->where('id', '!=', $menu->id)
            ->get();

        $permissions = Permission::orderBy('key')->get();

        return view('admin.menus.edit', compact('menu', 'parents', 'permissions'));
    }

    public function update(Request $request, Menu $menu)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'nullable|string',
            'permission_key' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        // 🔥 kritik satır
        $data['is_active'] = $request->has('is_active');

        $menu->update($data);

        return back()->with('success', 'Menü güncellendi');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();

        return back()->with('success', 'Menü silindi');
    }
}
