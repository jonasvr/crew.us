<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class CalanderController extends Controller
{
  

    public function index()
    {
    	$start = new Carbon('first day of this month'); //find first day
    	return $this->setCalendar($start);
    	
    }


    public function setCalendar($start)
    {
    	$month 				= $start->format('F Y');
    	$nrOfDays 			= $start->daysInMonth; //count days in this month
    	
    	if($start->dayOfWeek != Carbon::MONDAY) //if the month starts at monday, set all on 0
    	{
    		$dayStartWeek	= $start->startOfWeek()->format('d'); //find the number day
    		$daysInPrev 	= $start->startOfWeek()->daysInMonth;//days is previous month
    		$daysToAddPrev	= $daysInPrev-$dayStartWeek;// find the difference
    	}
    	else
    	{
    		$daysInPrev 	= 0;
    		$daysToAddPrev	= 0;
    	}
    	
    	$daysToAddNext 		=7-((($daysToAddPrev+1) + $nrOfDays)%7); //+1 -> dayscount from 0
    						//count all days add at the moment % 7
    						// 1 week minus the rest

        $next               = $start->addMonth()->format('F Y');
        $previous           = $start->subMonth()->format('F Y');

    	$data = array(
    		'month'			=> $month,
    		'nrOfDays' 		=> $nrOfDays,
    		'daysInPrev'	=> $daysInPrev,
    		'daysToAddPrev'	=> $daysToAddPrev,
    		'daysToAddNext' => $daysToAddNext,
            'next'          => $next,
            'previous'      => $previous,

    		);
    	
    	return View('calender')->with($data);
    }

    public function otherMonth(Request $request)
    {
        $data = $request->all(); // get next or previous month
        $start = new Carbon('first day of '.$data['month']); //find first day
        return $this->setCalendar($start);	
    }
}
