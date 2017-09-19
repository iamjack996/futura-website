<?php

use Illuminate\Database\Seeder;
use App\Models\dashboard_menu;

class DashBoardMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $dashboardmenus =[
        [
            'name' => '主控台',
            'icon' => 'dashboard',
            'url' => '/admin'
        ],
        [
            'name' => '會員資料',
            'icon' => 'person',
            'url' => 'null'
        ]
    ];
    
    DB::table('dashboard_menu')->delete();
    foreach ($dashboardmenus as $menu){
        dashboard_menu::create($menu);
        }
    }
}
