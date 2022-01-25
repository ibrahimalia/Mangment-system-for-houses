<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            'title' => Str::random(10),
            'desc' => Str::random(10),
            'state' => rand(0,1),
        ]);
    }
}
