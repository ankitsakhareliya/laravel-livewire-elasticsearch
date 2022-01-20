<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecretController extends Controller
{
    public function index(Request $request)
    {
        return $request->user()->secrets;
    }
}
