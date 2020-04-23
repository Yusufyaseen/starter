<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
//use Illuminate\Routing\Controller;

class FiristController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
		public function showString1(){
		return 'Hi يا كبير يا معلم';
	}
}
