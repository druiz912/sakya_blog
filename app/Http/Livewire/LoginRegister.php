<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginRegister extends Component
{
    public $email;
    public $password;
    public $register = false;

    public function toggleRegister()
    {
        $this->register = !$this->register;
    }

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // El método login valida la entrada del usuario. 
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        // la función Auth::attempt de Laravel para intentar iniciar sesión.
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Si el inicio de sesión es exitoso, se redirige al usuario a la ruta /home.
            return redirect()->to('/home');
        } else {
            //Si no es exitoso, se redirige al usuario de vuelta a la página de inicio de sesión con un mensaje de error.
            return redirect()->back()->with('error', 'Incorrect email or password');
        }
    }

    /**
     * Handle the register request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // El método register valida la entrada del usuario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        // crea un nuevo usuario en la tabla de usuarios
        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        // Iniciar sesión con el nuevo usuario. 
        Auth::login($user);
        // Finalmente, se redirige al usuario a la ruta /home con un mensaje de éxito.
        return redirect()->to('/home')->with('message', 'Successfully registered and logged in!');
    }

    public function render()
    {
        if (Auth::check()) {
            return view('home');
        }

        return view('livewire.login-register', [
            'register' => $this->register,
        ]);
    }
}
