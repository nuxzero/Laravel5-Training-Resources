<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag')->delete();

        DB::table('tag')->insert([
            [
                'id' => '1',
                'title' => 'Tech'
            ],
            [
                'id' => '2',
                'title' => 'Design'
            ],
            [
                'id' => '3',
                'title' => 'UX'
            ],
            [
                'id' => '4',
                'title' => 'UI'
            ],
            [
                'id' => '5',
                'title' => 'Android'
            ],
            [
                'id' => '6',
                'title' => 'iOS'
            ],
            [
                'id' => '7',
                'title' => 'Web'
            ]
        ]);
    }
}
