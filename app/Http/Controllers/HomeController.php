<?php

namespace App\Http\Controllers;

use App\Models\Hostel;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $user=User::all();
                return view('user.dashboard', compact('user'));
            }

            else
            {

                $users= User::all();
                return view('admin.home', compact('users'));
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    public function index()
    {
        $hostels = Hostel::all();
        return view('hms/index', compact('hostels'));
    }
    // about us
    public function about()
    {
        return view('hms.about');
    }

    // gallery
    public function gallery()
    {
        return view('hms.gallery');
    }

    // hostels
    public function hostels()
    {
        $hostel = Hostel::all();
        return view('hms.hostels', compact('hostel'));
    }

    public function contact()
    {
        return view('hms.contact');
    }
}
