<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // On recupère l'utilisateur authentifié
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return redirect()->intended(url('admin/accueil'));
        } elseif ($user->hasRole('association')) {
            return redirect()->intended(route('evennements.index'));
        } elseif ($user->hasRole('participant')) {
            return redirect()->intended(url('reservations'));
        } else {
            return redirect(route('home'));
        }
       
    }
        

    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
