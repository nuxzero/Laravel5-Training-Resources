<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->delete();
        DB::table('category')->insert([
            [
                'id' => '1',
                'title' => 'Web'
            ],
            [
                'id' => '2',
                'title' => 'Android'
            ],
            [
                'id' => '3',
                'title' => 'iOS'
            ]
        ]);
    }
}
