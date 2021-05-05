<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Token;
use App\Models\Guest;
Use Alert;

class TokenDashboardController extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function sendtoken(Request $request, Token $token)
    {
        try {
            // get data from token's table
        $token = Token::where('token','like',"%".$request->token."%")->get();

        // looping the data to get token
        foreach ($token as $key ) {
            if ($request->token == $key->token) {
                return redirect('receiver/' . $key->token);
            }
        }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function jumlahPengguna()
    {
        $guests = Guest::paginate(15);

        return view('admin.pengguna',[
            'guests' => $guests
        ]);
    }


}
