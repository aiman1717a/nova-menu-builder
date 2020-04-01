<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'code' => 'en',
            'label' => 'English',
        ]);
        DB::table('languages')->insert([
            'code' => 'dh',
            'label' => 'Dhivehi',
        ]);
    }
}
