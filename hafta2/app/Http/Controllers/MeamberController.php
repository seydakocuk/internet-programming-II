<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeamberController extends Controller
{
    public function register()
    {
        $isim = 'Şeyda';
        return view('meamber.register' , [
            'isim' => $isim ,
        ]);

    }

    public function lostPassword(){
        return view('meamber.lostpwd');
    }

    public  function loginForm(){
       return view('meamber.login');
    }

    public function login(Request $request){

        echo "Mail:" , $request->post('email');
        echo "</br>";
        echo "Password:" , $request->post('password');
    }

}
