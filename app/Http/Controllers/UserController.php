<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::all();      for all users

        $users = User::simplepaginate(4);           

        // $users =User::where('city', 'Delhi')
        //             ->where('age','>',20)->get();



        // $users =User::find(2,['name','email']);
        //  $users =User::where('city','Delhi')->get();

        //$users =User::sum('age');

        // return $users;

        //    foreach ($users as $user){
        //     echo $user->name. '<br>';
        //     echo $user->email. '<br>';
        //     echo $user->age. '<br>';
        //     echo $user->city.'<br><br>';

        //    }

        // return view("welcome",['data' => $users]);

        return view("home", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("adduser");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;

        //    $user = new User;
        //    $user->name = $request->username;
        //    $user->email = $request->useremail;
        //    $user->age = $request->userage;
        //    $user->city = $request->usercity;

        //    $user->save();

        $request->validate([
            'username' => 'required|alpha',
            'useremail' => 'required|email',
            'username' => 'required|numeric',
            'username' => 'required|alpha',
        ]);

        User::create([
            'name' => $request->username,
            'email' => $request->useremail,
            'age' => $request->userage,
            'city' => $request->usercity,
        ]);

        return redirect()->route('user.index')
            ->with('status', 'New User Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::find($id);
        // return $users;
        return view("viewuser", compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $users = User::find($user->id);
        return view("updateuser", compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $user = User::find($id);
        
        // $user->name = $request->username;
        // $user->email = $request->useremail;
        // $user->age = $request->userage;
        // $user->city = $request->usercity;

        // $user->save();

        $request->validate([
            'username' => 'required|string',
            'useremail' => 'required|email',
            'username' => 'required|numeric',
            'username' => 'required|alpha',
        ]);
        //return $request; 
        $user = User::where('id',$id)
                    ->update([
                        'name' => $request->username,
                        'email' => $request->useremail,
                        'age' => $request->userage,
                        'city' => $request->usercity,
                    ]);

       if ($user) {
        return redirect()->route('user.index')
        ->with('status', 'User Data Updated Successfully');
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
       // Methos 1
        $users = User::find($id);
      // $users = User::where('email','aliyabhatt@gmail.com');
       $users->delete();

       // Method 2     - Delete the specified resource  from storage   
     //  User::destroy($id);
    
      //Method 3       - Delete all records from storage   it is used when delete all records
     // User::truncate();

        return redirect()->route('user.index')
        ->with('status', 'User Data delated Successfully');
    }
}
