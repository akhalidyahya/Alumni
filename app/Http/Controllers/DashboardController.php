<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\Admin;

class DashboardController extends Controller
{
    public function index(request $request){
       if($request->session()->has('login_status') != true) {
          return redirect('login');
       } else {
            $role = $request->session()->get('role');
           if ($role == 2) {
             return view('pages/dashboard/admin');
           }
           elseif ($role == 1) {
             return view('pages/dashboard/alumni');
           }
           else {
             return view('pages/alumni');
           }
       }
    }
}
