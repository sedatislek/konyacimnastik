<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        Menu::truncate();

        // admin.* GET + parametresiz route'lar
        $routes = collect(Route::getRoutes())
            ->filter(function ($route) {
                return
                    $route->getName() &&
                    str_starts_with($route->getName(), 'admin.') &&
                    in_array('GET', $route->methods()) &&
                    empty($route->parameterNames());
            });

        /**
         * Route'ları prefix'e göre grupla
         * admin.aiapplication.codeGenerator
         * → group: aiapplication
         */
        $grouped = $routes->groupBy(function ($route) {
            $parts = explode('.', $route->getName());
            return $parts[1] ?? 'other';
        });

        $parentOrder = 1;

        foreach ($grouped as $group => $groupRoutes) {

            // Parent menu
            $parent = Menu::create([
                'title' => $this->humanize($group),
                'route_name' => null, // parent link YOK
                'is_active' => 1,
                'sort_order' => $parentOrder++,
            ]);

            $childOrder = 1;

            foreach ($groupRoutes as $route) {
                Menu::create([
                    'parent_id' => $parent->id,
                    'title' => $this->titleFromRoute($route->getName()),
                    'route_name' => $route->getName(),
                    'is_active' => 1,
                    'sort_order' => $childOrder++,
                ]);
            }
        }
    }

    protected function titleFromRoute(string $routeName): string
    {
        // admin.aiapplication.codeGeneratorNew
        // → Code Generator New
        $last = collect(explode('.', $routeName))->last();

        return ucwords(
            preg_replace('/([a-z])([A-Z])/', '$1 $2', $last)
        );
    }

    protected function humanize(string $value): string
    {
        return ucwords(
            preg_replace('/([a-z])([A-Z])/', '$1 $2', $value)
        );
    }
}
