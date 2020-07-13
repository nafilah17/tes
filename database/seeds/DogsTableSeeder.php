<?php

use Illuminate\Database\Seeder;

class DogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Dogs::truncate();
        \App\Dogs::create(['name' => 'Joe']);
        \App\Dogs::create(['name' => 'Jock']);
        \App\Dogs::create(['name' => 'Jackie']);
        \App\Dogs::create(['name' => 'Jane']);

    }
}
