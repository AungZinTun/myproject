<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$Qz0Km0K8Zra2AhYJM4dWZeEqIljkI83nWvTzcnMirq1YnEDvIUri2', 'role_id' => 1, 'remember_token' => '', 'township_id' => 1, 'phone' => '1646896', 'health_facility' => 'aa',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
