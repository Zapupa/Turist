<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as TourRequest;

class AdminController extends Controller
{
    public function index()
    {
        $requests = TourRequest::all();

        return view('admin.admin', compact('requests'));
    }
}
