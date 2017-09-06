<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Illuminate\Support\Facades\DB;


class JobsController extends Controller
{
    
    public function job_list(){
     
    $job_details= DB::table('jobs')->get();
    
    return view('jobs',compact('job_details'));
    }


}
