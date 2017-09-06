<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function getJobs()
    {
        
    $job= DB::table('jobs')->get();
  
    }

}
