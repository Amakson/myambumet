<?php

use Illuminate\Database\Seeder;

use App\Openschedule;

class OpenSchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $openschedule_one = new Openschedule();
        $openschedule_one->title = 'Schedule One';
        $openschedule_one->type = 'Full Time';
        $openschedule_one->start_time ='02/01/2017';
        $openschedule_one->end_time ='02/01/2017';
        $openschedule_one->save();

        $openschedule_two = new Openschedule();
        $openschedule_two->title = 'Schedule Two';
        $openschedule_two->type = 'Full Time';
        $openschedule_two->start_time ='02/01/2017';
        $openschedule_two->end_time ='02/01/2017';
        $openschedule_two->save();

        $openschedule_three = new Openschedule();
        $openschedule_three->title = 'Schedule Three';
        $openschedule_three->type = 'Full Time';
        $openschedule_three->start_time ='02/01/2017';
        $openschedule_three->end_time ='02/01/2017';
        $openschedule_three->save();
    }
}
