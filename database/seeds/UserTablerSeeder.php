<?php

use Illuminate\Database\Seeder;

class UserTablerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,1000)->create();
    }
}
