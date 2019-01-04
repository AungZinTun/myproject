<?php

use Illuminate\Database\Seeder;

class TownshipSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Taunggyi',],
            ['id' => 2, 'title' => 'Hopong',],

        ];

        foreach ($items as $item) {
            \App\Township::create($item);
        }
    }
}
