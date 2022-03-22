<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(Request $request){
        return view('dashboard');
    }
    public function login(Request $request){
        return view('authentications.login');
    }
    public function password(Request $request){
        return view('authentications.password');
    }
    public function register(Request $request){
        return view('authentications.register');
    }
    public function withoutmenu(Request $request){
        return view('layout.withoutmenu');
    }
    public function withoutnarbar(Request $request){
        return view('layout.withoutnarbar');
    }
    public function withoutcontainer(Request $request){
        return view('layout.withoutcontainer');
    }
    public function fluid(Request $request){
        return view('layout.fluid');
    }
    public function blank(Request $request){
        return view('layout.blank');
    }
    public function accounts(Request $request){
        return view('account.accounts');
    }
    public function notifications(Request $request){
        return view('account.notifications');
    }
    public function connections(Request $request){
        return view('account.connections');
    }
    public function error(Request $request){
        return view('misc.error');
    }
    public function undermaintenance(Request $request){
        return view('misc.undermaintenance');
}
}