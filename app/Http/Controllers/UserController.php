<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Hostel;
use App\Models\Room;
use App\Models\Rule;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function available()
    {
        return view('user.available');
    }

    public function AllRules()
    {
        $rules= Rule::all();
        return view('user.rules', compact('rules'));
    }

    public function sidebar()
    {
        $users = \App\Models\User::all();
        return view('user.sidebar', compact('users'));
    }

    public function UserAvailableRooms()
    {
        $rooms = Room::all();
        return view('user.available_rooms', compact('rooms'));
    }

    public function UserAllHostels()
    {
        $hostel = Hostel::all();
        return view('user.all_hostels', compact('hostel'));
    }

    public function UserBooking()
    {
        $hostels = Hostel::all();
        return view('user.user_booking', compact('hostels'));
    }
}
