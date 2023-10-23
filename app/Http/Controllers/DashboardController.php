<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $role_id = Auth::user()->role_id;

        if ($role_id == '1') {
            $role_id = "Administrator";
            return view('dashboard.admin.index', compact('role_id')); //ROLE ADMIN
        }
        if ($role_id == '2') {
            $role_id = "Guru";
            return view('dashboard.pengurus.index', compact('role_id')); //ROLE PENGURUS
        }
        if ($role_id == '3') {
            $role_id = "Ketua Kelas";
            return view('dashboard.pengurus.index', compact('role_id')); //ROLE MEMBER
        }
    }
}
