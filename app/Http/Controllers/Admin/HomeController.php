<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        return redirect()->route('admin.loan-applications.index');
    }
}
