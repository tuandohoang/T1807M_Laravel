<?php

use Illuminate\Database\Seeder;

class NxbTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Nxb::class,100)->create();
    }
}
