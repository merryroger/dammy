<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;


class AuthController extends Controller
{
    public function listenRequest(Request $request)
    {   //$request->request->all()
        return response()->json(['Retcode' => 404]);
    }
}
