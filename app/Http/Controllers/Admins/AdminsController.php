<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }
    public function index()
    {
        return view('admins.index');
    }
}
