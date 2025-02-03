<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnStub;

class DashboardController extends Controller
{
    public function index(Request $request){
        return redirect()->route('dashboard');
    }
}
