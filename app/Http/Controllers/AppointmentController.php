<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AppointmentController extends Controller
{
    public function appointment(): View
    {
        $userId = Auth::user()->id;
        $appointment = Appointment::where('user_id', $userId)->latest()->paginate(5);
        return view('programari', ['programari' => $appointment]);
    }

    public function add(): View
    {

        return view('programari.add');
    }

    public function store(Request $request)
    {
        $data = $request->validate([

            'appointment' => 'required',
            'date_wanted' => 'required',
            'customer_message' => 'required'

        ]);
        $test = $request->all();
        $test['user_id'] = Auth::user()->id;
        $newStore = Appointment::create($test);

        return redirect(route('programari'))->with('success', 'Cerere inregistrata cu succes');
    }

    public function edit(Appointment $programare)
    {
        return view('programari.edit', ['programare' => $programare]);
    }

    public function update(Appointment $programare, Request $request)
    {
        $data = $request->validate([
            'appointment' => 'required',
            'date_wanted' => 'required',
            'customer_message' => 'required'
        ]);
        $programare->update($data);
        return redirect(route('programari'))->with('success', 'Modificarea a fost realizată cu succes');
    }

    public function destroy(Appointment $programare)
    {
        $programare->delete();
        return redirect(route('programari'))->with('success', 'Înregistrarea a fost ștearsă cu succes');
    }

    // Admin function

    public function appointmentadmin(): View
    {
        $appointment = Appointment::latest()->paginate(10);
        
        return view('admin.appointment.indexappo', ['ids' => $appointment]);
    }

    public function show($id)
    {
        $appointments = Appointment::latest()->paginate(10);
        $appointment = Appointment::findOrFail($id);
        
        return view('admin.appointment.viewAppo', ['id' => $appointment, 'ids' => $appointments]);
    }

    public function editappo(Appointment $id)
    {
        return view('admin.appointment.answer', ['id' => $id]);
    }

    public function updateappo(Appointment $id, Request $request)
    {
        $data = $request->validate([
            'date_wanted' => 'required',
            'status' => 'required',
            'serv_message' => 'required'
        ]);
        $id->update($data);
        return redirect(route('programarishow', ['id' => $id]))->with('success', 'Modificarea a fost realizată cu succes');
    }
    public function destroyappo(Appointment $id)
    {
        $id->delete();
        return redirect(route('programariadmin'))->with('success', 'Înregistrarea a fost ștearsă cu succes');
    }
}
