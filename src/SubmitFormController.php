<?php

namespace Vendorform\Laravelform;
 
use App\Http\Controllers\Controller;
 
class SubmitFormController extends Controller
{

 	public function index()
    {
        // echo "fadsfsd";
    	return view('laravelform::testingform');
    }
}