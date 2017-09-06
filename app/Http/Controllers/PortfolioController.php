<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
   public function getPortfolio()
   {
       $all_portfolio = Portfolio::all();
       
       return view ('portfolio',compact('all_portfolio')); 
 
   }

   public function getSabbir()
   {
       return view('sabbir');
   }

}

