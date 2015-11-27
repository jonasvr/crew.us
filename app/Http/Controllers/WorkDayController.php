<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;


class WorkDayController extends Controller
{
    public function index($day , $month)
    {
        $workday        = new Carbon($day . " " . $month);

        $datum          = $workday->format('l jS \\of F Y');

        $data=array(
                'datum' =>$datum,
            );
        return View('workday')->with($data);
    }
}
