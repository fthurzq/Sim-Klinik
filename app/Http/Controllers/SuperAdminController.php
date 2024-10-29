<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SuperAdminController extends Controller
{
    // Menampilkan halaman dashboard super admin
    public function dashboard()
    {
        return view('super_admin.dashboard');
    }

    // Menampilkan halaman untuk pengelolaan pengguna
    public function manageUsers()
    {
        $users = User::all(); // Mengambil semua pengguna
        return view('super_admin.users.index', compact('users'));
    }

    // Menampilkan halaman pengaturan umum
    public function settings()
    {
        return view('super_admin.settings.general');
    }

    // Metode tambahan untuk fungsi super admin lainnya dapat ditambahkan di sini
}
