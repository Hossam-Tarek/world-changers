<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function view;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('user.index');
    }
}
