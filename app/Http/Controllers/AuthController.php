<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => bcrypt($request->input('password')),
            'address' => $request->input('adress'),
            'housenumber' => $request->input('housenumber'),
            'postalcode' => $request->input('postalcode')
        ]);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response([
                'message' => 'Het wachtwoord of email is fout'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user = Auth::user();

        return ["token" => $user->createToken('token')->plainTextToken]; //Er is een error maar de token wordt wel aangemaakt in postman

    }


    public function user()
    {
        return Auth::user();
    }

    public function logout()
    {
        $cookie = Cookie::forget('jwt');

        return response([
            'message' => 'Success'
        ])->withCookie($cookie);
    }

    public function update(Request $request){
        $user = user::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address= $request->address;
        $user->housenumber = $request->housenumber;
        $user->postalcode = $request->postalcode;

        try{
            $user->save();
        } catch(Exception $e){
            return redirect("/profile");
        }
    }
}
