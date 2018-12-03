<?php

class ItemsTableSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        factory(\App\Models\Items::class, 10)->create([
            'type' => \App\Models\Items::TYPE_ITEM
        ]);
        factory(\App\Models\Items::class, 5)->create([
            'type' => \App\Models\Items::TYPE_CLASS
        ]);
    }
}