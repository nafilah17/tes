<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       \App\Dogs::truncate();

       \App\Dogs::create(['name' => 'Joe', 'age' => 5]);
       \App\Dogs::create(['name' => 'Jock', 'age' => 7]);
       \App\Dogs::create(['name' => 'Jackie', 'age' => 2]);
       \App\Dogs::create(['name' => 'Jane', 'age' => 9]);
    }
}
