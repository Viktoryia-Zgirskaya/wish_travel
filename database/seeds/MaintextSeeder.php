<?php

use Illuminate\Database\Seeder;
use App\Maintext;

class MaintextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maintext::create([
        	'name'=>'Добро пожаловать',
        	'body'=>'привет ',
        	'url'=>'index',
        	'user_id'=>0,
        	]);
    }
}
