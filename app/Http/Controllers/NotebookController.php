<?php

namespace App\Http\Controllers;

use App\Models\Notebook;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotebookController extends Controller
{
    public function caiet(): View
    {
       
        $userId = Auth::user()->id;
        $caiet = Notebook::where('user_id', $userId)->latest()->paginate(5);
        return view('notebooks', ['caiet' => $caiet]);
    }

    public function add()
    {

        return view('notebooks.addNotebooks');
    }

    public function store(Request $request)
    {
        $test = $request-> all();
        $test = $request->validate([
            
            'carNumber' => 'required',
            'kmCar' => 'required',
            'store' => 'required'

        ]);
        
        $test['user_id'] = Auth::user()->id;
        
        $newStore = Notebook::create($test);

        return redirect(route('notebooks'))->with('success', 'Înregistrarea a fost adaugată cu succes');
    }

    public function edit(Notebook $caiet)
    {
        return view('notebooks.editNotebooks', ['caiet' => $caiet]);
    }

    public function update(Notebook $caiet, Request $request)
    {
        $data = $request->validate([
            'carNumber' => 'required',
            'store' => 'required'
        ]);
        $caiet->update($data);
        return redirect(route('notebooks'))->with('success', 'Modificarea a fost realizată cu succes');
    }

    public function destroy(Notebook $caiet)
    {
        $caiet->delete();
        return redirect(route('notebooks'))->with('success', 'Înregistrarea a fost ștearsă cu succes');
    }
}
