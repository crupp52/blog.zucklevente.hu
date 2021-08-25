<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('admin.post.index');
    }
}
