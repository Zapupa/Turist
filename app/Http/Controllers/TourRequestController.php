<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Request as TourRequest;
use App\Models\Tour;

class TourRequestController extends Controller
{
    public function index()
    {
        $requests = TourRequest::all();

        return view('request.request', compact('requests'));
    }

    public function show(Tour $tour)
    {
        return view('tour.reservation', compact('tour'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'number' => 'int',
            'costs' => 'int',
            'tour_id' => 'int'
        ]);
        TourRequest::create([
            'number' => $data['number'],
            'costs' => $data['costs'] * $data['number'],
            'tour_id' => $data['tour_id'],
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('dashboard');
    }
}
