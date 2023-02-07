<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locker;

class DashboardLockerController extends ModuleController
{
    public function index()
    {
        return view('dashboard.moduleLockers');
    }

    public function show(Locker $locker)
    {
        return view('dashboard.moduleEditLockers', compact(['locker']));
    }
}
