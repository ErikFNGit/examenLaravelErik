<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Casal;
use App\Models\Ciutat;

use App\Http\Requests\StoreUserRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
    public function auth(){
        request()->validate([
            'userName' => 'required',
            'userPass' => 'required',
        ]);
        $userName = request()->input('userName');
        $passwd = request()->input('userPass');
        $user = User::where('nick', $userName)->first();
        if($user && Hash::check($passwd, $user->password)) {
            Auth::guard('user')->login($user);
            session(['userName' => $user->userName]);
            return redirect()->route('user.main');
        }elseif(!$user){
            return redirect()->route('user.login')->with('error', 'Nombre de usuario incorrecto.');
        }else{
            return redirect()->route('user.login')->with('error', 'Contraseña incorrecta.');
        }
    }
    public function login($fail = null){
        $error = $fail;
        return view('user.login', compact("error"));
    }
   public function main(){
        $casals=Casal::allCasals();
        $ciutats=Ciutat::allCiutats();
        return view('user.main', compact('casals', 'ciutats'));
   }

}
