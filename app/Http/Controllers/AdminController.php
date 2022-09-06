<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use App\Models\Rule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Hostel;
use Alert;
use PHPUnit\Util\Exception;

class AdminController extends Controller
{
    public function addingNew(Request $request)
    {
//        return $request;
        $detail = new Hostel;
        $image = $request->image;
        $filename=time(). '.' .$image->getClientoriginalExtension();
        $request->image->move('imagename', $filename);
        $detail->image=$filename;

        $detail->name=$request->name;
        $detail->location=$request->location;
        $detail->price=$request->price;
        $detail->rooms=$request->rooms;
        $detail->type=$request->type;
        $detail->Save();

        $message='thanks for adding a new hostel';

        alert()->success('Thank you', $message)->persistent();
        return redirect()->back()->with('success', $message);
//        log::info($request);
    }

    public function new_hostels()
    {
        return view('admin.new_hostels');
    }
    public function available_hostels()
    {
        $detail = Hostel::all();
        $rooms =Room::all();
        return view('admin.available',compact('detail'));
    }
    public function update(Request $request)
    {

        $hostels = Hostel::find($request->id);
        if(! $hostels){
            $message = 'Hostel update failure';
            alert()->error('error!!', $message);
            return back()->with('Error', $message);
        }
        $hostels ->update($request->all());

        $message = 'Hostel updated successfully';
        alert()->success('Success',$message)->persistent();
        //FacadesAlert::alert('success', $message)->persistent();//so wako wrong kwa iyo do
        return back()->with('success', $message);
    }
    public function destroy(Request $request)
    {
        $hostels = Hostel::find($request->id);
        if(! $hostels){
            $message='hostel deletion failed!!';
            alert()->info('error!!!', $message);
            return back()->with('Error', 'User not found');
        }
        $hostels ->delete();
        $message='Hostel deleted successfully';
        alert()->success('success', $message)->persistent();
        return back()->with('success', $message);
    }

    public function availableusers()
    {
        $users = User::all();
        return view('admin.all_users', compact('users'));
    }

    public function user_update(Request $request)
    {

        $users = User::find($request->id);
        if(! $users){
            $message = 'product upload failure';
            alert()->error('error!!', $message);
            return back()->with('Error', $message);
        }
        $users ->update($request->all());

        $message = 'User updated successfully';
        alert()->success('Success',$message)->persistent();
        //FacadesAlert::alert('success', $message)->persistent();//so wako wrong kwa iyo do
        return back()->with('success', $message);
    }
    public function user_destroy(Request $request)
    {
        $users = User::find($request->id);
        if(! $users){
            $message='User deletion failed!!';
            alert()->info('error!!!', $message);
            return back()->with('Error', 'User not found');
        }
        $users ->delete();
        $message='Hostel deleted successfully';
        alert()->success('success', $message)->persistent();
        return back()->with('success', $message);
    }
    public function booking()
    {
        $hostels = Hostel::all();
        return view('admin.booking', compact('hostels'));
    }

    public function hostelbooking(Request $request)
    {
        $booking = new Booking;

        try {
            $booking->hostel_id=$request->hostel_id;
            $booking->room=$request->room;
            $booking->price=$request->price;
            $booking->people=$request->people;
            $booking->phone=$request->phone;
            $booking->balance=$request->balance;
            $booking->date=$request->date;

            $booking->save();
            $message='hostel booked successfully';
            alert()->success('Booked successfully', $message);
            return redirect()->back()->with('success', $message);

        } catch (Exception $e) {
            $message='error while updating';
            alert()->error('error!!', $message);
            return redirect()->back()->with('error!!', $message);
        }
//        return $request;
    }

    public function booked()
    {
        $booked = Booking::all();
        return view('admin.booked', compact('booked'));
    }

    public function bookingupdate(Request $request)
    {

        $booked = Booking::find($request->id);
        if(! $booked){
            $message = 'product upload failure';
            alert()->error('error!!', $message);
            return back()->with('Error', $message);
        }

//        $booked->status='approved';
        $booked ->update($request->all());

        $message = 'Booking Confirmed successfully';
        alert()->success('Success',$message)->persistent();
        return back()->with('success', $message);
    }
    public function bookingdestroy(Request $request)
    {
        $booked = Booking::find($request->id);
        if(! $booked){
            $message='Booking deletion failed!!';
            alert()->info('error!!!', $message);
            return back()->with('Error', 'Booking not found');
        }
        $booked ->delete();
        $message='Booking deleted successfully';
        alert()->success('Great!!!', $message)->persistent();
        return back()->with('success', $message);
    }

    public function rooms()
    {
        $rooms = Room::all();
        $hostel = Hostel::all();
        return view('admin.rooms', compact('rooms', 'hostel'));
    }

    public function NewRooms(Request $request)
    {
        $rooms = new Room();

        $rooms->hostel=$request->hostel;
        $rooms->room=$request->room;
        $rooms->type=$request->type;

        $rooms->save();

        $message='Rooms added successfully';
        alert()->success('Wonderful!!', $message);
        return redirect()->back()->with('success', $message);
    }

    public function Update_Rooms(Request $request)
    {
        $hostels = Room::find($request->id);
        if(! $hostels){
            $message = 'product upload failure';
            alert()->error('error!!', $message);
            return back()->with('Error', $message);
        }

//        $booked->status='approved';
        $hostels ->update($request->all());

        $message = 'Room Updated successfully';
        alert()->success('Success',$message)->persistent();
        //FacadesAlert::alert('success', $message)->persistent();//so wako wrong kwa iyo do
        return back()->with('success', $message);
    }

    public function destroyrooms(Request $request)
    {
        $hostels = Room::find($request->id);
        if(! $hostels){
            $message='Booking deletion failed!!';
            alert()->info('error!!!', $message);
            return back()->with('Error', 'Booking not found');
        }
        $hostels ->delete();
        $message='Hostels deleted successfully';
        alert()->success('Great!!!', $message)->persistent();
        return back()->with('success', $message);
    }

    public function ShowReceipt(Request $request)
    {
        $booking = Booking::all();
        return view('admin.receipt', compact('booking'));
    }

    public function approveBooking()
    {
        $approve = Booking::all();
        return view('admin.approve', compact('approve'));
    }
    public function approvingBooking(Request $request)
    {
        $data = Booking::find($request->id);
        $data->status='approved';
        $data->save();

        $message='booking approved successfully';
        alert()->success('thank you!!', $message);
        return redirect()->back()->with('success', $message);


    }

    public function Newrules(Request $request)
    {
        $rules = new Rule();
        $rules->body=$request->body;
        $rules->save();

        $message='new rule added successfully';
        alert()->success('success', $message);
        return redirect()->back()->with('success', $message);
    }
    public function HostelRules()
    {
        $rules = Rule::all();
        return view('admin.rules', compact('rules'));
    }
    public function UpdatingRules(Request $request)
    {
        $rules = Rule::find($request->id);
        if(! $rules){
            $message = 'Rule Update failure';
            alert()->error('error!!', $message);
            return back()->with('Error', $message);
        }

//        $booked->status='approved';
        $rules ->update($request->all());

        $message = 'Rule Updated successfully';
        alert()->success('Success',$message)->persistent();
        //FacadesAlert::alert('success', $message)->persistent();
        return back()->with('success', $message);
    }

    public function DestroyRule(Request $request)
    {
        $rules = Rule::find($request->id);
        if(! $rules){
            $message='Rule deletion failed!!';
            alert()->info('error!!!', $message);
            return back()->with('Error', 'Booking not found');
        }
        $rules ->delete();
        $message='Rule deleted successfully';
        alert()->success('Great!!!', $message)->persistent();
        return back()->with('success', $message);
    }

//
//    public function PrintReceipt(Request $request)
//    {
//        $booking = Booking::find($request->id);
//        if(! $booking){
//            $message = 'printing receipt failure';
//            alert()->error('error!!', $message);
//            return back()->with('Error', $message);
//        }
//
////        $booked->status='approved';
//        $booking ->update($request->all());
//
//        $message = 'Print printed successfully';
//        alert()->success('Success',$message)->persistent();
//        return view('admin.receipt')->with('success', $message);
//    }

}
