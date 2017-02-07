<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class MedicController extends Controller
{
        public function index()
    {
    	// $events =[];

    	// $events[] = \Calendar::event(
    	// 	"Event One",
    	// 	true,
    	// 	'2017-04-02T0900',
    	// 	'2017-04-06T0800',
    	// 	0
    		
    	// 	);

    	// $calendar = \Calendar::addEvents($events)
    	// 			->setOptions([
    	// 				'firstDay' => 1
    	// 				])
    	// 			->setCallbacks([
    	// 				]);

        return view ('medic.index');
    }

        public function test(){
    	$events =[];

    	$events[] = \Calendar::event(
    		"Event One",
    		true,
    		'2017-04-02T0900',
    		'2017-04-06T0800',
    		0
    		
    		);

    	$calendar = \Calendar::addEvents($events)
    				->setOptions([
    					'firstDay' => 1
    					])
    				->setCallbacks([
    					]);

        return view ('medic.test', array('calendar' => $calendar));
    }
}
