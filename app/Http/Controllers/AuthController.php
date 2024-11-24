<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): void
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('login.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //validate
        $attributes = $request->validate([
            'email' => ['email', 'required'],
            'password' => ['required', Password::min(6)],
        ]);
        //attempt to login
        if (! Auth::attempt($attributes)) {
            //throw excemption
            throw ValidationException::withMessages(['email' => 'Invalid Credentials, Please Try again']);
        }
        //regenerate session id
        $request->session()->regenerate();
        //redirect

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        Auth::logout();

        return redirect('/');
    }
}
