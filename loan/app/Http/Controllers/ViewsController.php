<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class ViewsController extends Controller
{
 
    public function Perleft()
    {
        return view('common/left');
    }
}
