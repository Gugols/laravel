<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('pages.users.user-page')->with(['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('pages.users.user-page')->with(['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.users.edit-user')->with(['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

            $this->validate(request(), [
                'name' => 'required|min:2',
            ]);

        //dd($request->all(), $id);
        $user = User::find($id);
        $user->name = $request->input('name');
        //dd($user);
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->school = $request->input('school');
        $user->profile_type = $request->input('profile_type');
        $user->short_description = $request->input('short_description');
        $user->description = $request->input('description');
        $user->save();
        return redirect('home');

       // dd($user);

    }

    public function editType($id)
    {
        $user = User::find($id);

        if(Auth::check()) {

            if($user->profile_type)
            {
                return redirect()->route('home');
            }
        }

        return view('pages.users.user-type-select')->with(['user'=>$user]);
    }

    public function editTypeUpdate(Request $request, $id)
    {

            //dd($request->all());
            $this->validate(request(), [
                'profile_type' => 'required|integer|between:1,3',
            ]);

        $user = User::find($id);
        $user->profile_type = $request->input('profile_type');
        $user->save();
        return redirect()->route('home');

       // dd($user);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
