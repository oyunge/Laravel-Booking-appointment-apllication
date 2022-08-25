<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Mail;
use App\Mail\NotifyMail;

class AdminController extends Controller
{
    public function showAppointments()
    {
        $appointments = Appointment::all();
        return view('admin',['appointments'=>$appointments] );
    }
    
    public function deleteAppointment($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return back();
                       
    }
    public function approveAppointment($id)
    {
        $appointments = Appointment::find($id);
        $appointments->isAppointment_approved = 1;
        $appointments->save();

        $this->sendMiail($appointments->email);
        return back();
    }
    public function approvedAppointments()
    {
        $appointments = Appointment::where("isAppointment_approved",1)->get();
        return view('approvedAppointments',['appointments'=>$appointments] );
    }

    public function sendMiail($userEmail)
    {
 
      Mail::to($userEmail)->send(new NotifyMail());
    }

}

