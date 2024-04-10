<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class UserController extends Controller
{
    public function view(): View
    {

        $users = User::latest()->paginate(10);
        return view('admin.admin', ['users' => $users]);
    }
    public function show($id)
    {
        $users = User::latest()->paginate(10);
        $user = User::findOrFail($id);

        return view('admin.singel', ['user' => $user, 'users' => $users]);
    }

    public function add()
    {

        return view('admin.add');
    }

    public function store(Request $request)
    {


        $test = $request->validate([

            'name' => 'required',
            'email' => ['email', 'max:255', 'unique:' . User::class],
            'password' => 'required | min:8'


        ]);

        $test['nickName'] = $request->nickName;
        if ($request->car_reg) {
            $fileName = $request->id . $request->name . '.' . $request->car_reg->extension();
            $request->car_reg->move(public_path('talon'), $fileName);

            $test['car_reg'] = 'talon/' . $fileName;
        }
        $newStore = User::create($test);

        return redirect(route('admin'))->with('success', 'Înregistrarea a fost adaugată cu succes');
    }

    public function edit(User $id)
    {
        return view('admin.edit', ['user' => $id]);
    }

    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);

        if ($request->filled('nickName')) {
            $data->update(['nickName' => $request->nickName]);
        }
        if ($request->filled('name')) {
            $data->update(['name' => $request->name]);
        }
        if ($request->filled('email')) {
            $data->update(['email' => $request->email]);
        }
        if ($request->filled('phone')) {
            $data->update(['phone' => $request->phone]);
        }

        if ($request->car_reg) {

            if (File::exists(public_path($data->car_reg))) {
                File::delete(public_path($data->car_reg));
            }

            
                $fileName = $request->name . $request->id . '.' . $request->car_reg->extension();
                $request->car_reg->move(public_path('talon'), $fileName);
                $data->update(['car_reg' => 'talon/' . $fileName]);
        
        }
        if ($request->filled('is_admin')) {
            $data->update(['is_admin' => $request->is_admin]);
        }

        return redirect(route('admin'))->with('success', 'Modificarea a fost realizată cu succes');
    }

    public function destroy(User $id)
    {


        if (File::exists(public_path($id->car_reg))) {
            File::delete(public_path($id->car_reg));
        }

        $id->delete();
        return redirect(route('admin'))->with('success', 'Înregistrarea a fost ștearsă cu succes');
    }

    // public function updateuser(Request $request, $id)
    // {
    //     $data = User::findOrFail($id);

    //     if ($request->filled('nickName')) {
    //         $data->update(['nickName' => $request->nickName]);
    //     }
    //     if ($request->filled('name')) {
    //         $data->update(['name' => $request->name]);
    //     }
    //     if ($request->filled('email')) {
    //         $data->update(['email' => $request->email]);
    //     }
    //     if ($request->filled('phone')) {
    //         $data->update(['phone' => $request->phone]);
    //     }

    //     if ($request->car_reg) {

    //         if (File::exists(public_path($data->car_reg))) {
    //             File::delete(public_path($data->car_reg));
    //         }

            
    //             $fileName = $request->name . $request->id . '.' . $request->car_reg->extension();
    //             $request->car_reg->move(public_path('talon'), $fileName);
    //             $data->update(['car_reg' => 'talon/' . $fileName]);
        
    //     }
        

    //     return redirect(route('profile.edit'))->with('success', 'Modificarea a fost realizată cu succes');
    // }
}
