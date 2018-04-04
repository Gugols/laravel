<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;
use Image;

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

    if($this::ownerOrHasPermission($user->id, 'edit users')) {
        return view('pages.users.edit-user')->with(['user'=>$user]);
    } else {
        flash("You have no permission to access this page.")->error();
        return redirect()->route('home');
    }
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

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->school = $request->input('school');
        $user->short_description = $request->input('short_description');
        $user->description = $request->input('description');

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
            //dd($filename);
            $a = Image::make($avatar)->crop(300, 300)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));
            //dd($a);
    		$user->avatar = $filename;
    		$user->save();
    	}

        $user->save();
        flash($user->name."'s profile has been successfully updated.")->success();
        return redirect()->route('user.show', $id);

    }

    public function editType($id)
    {
        $user = User::find($id);

        if(Auth::check()) {

            if($user->profile_type || $user->id != Auth::id())
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

    public static function getAvatar($id) {
        $user = User::find($id);
        return $user->avatar;
    }

     public static function ownerOrHasPermission($owner_id, $permission) {
        if(Auth::check()) {
            if(($owner_id == Auth::id()) || Auth::user()->hasPermissionTo($permission)) {
                return true;
            }
        }
        return false;
     }

 
}
