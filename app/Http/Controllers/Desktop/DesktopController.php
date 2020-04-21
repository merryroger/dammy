<?php

namespace App\Http\Controllers\Desktop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesktopController extends Controller
{
    public function handle(Request $request)
    {
        //dump($request->session()->get('user'));
        return view('desktop.desktop');
    }

    public function treatRequests(Request $request)
    {
        return response()->json(['loaded' => true]);
    }

    public function logout(Request $request)
    {
        return response()->json(['logoff' => true]);
    }
}
