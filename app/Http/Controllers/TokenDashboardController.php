<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Token;
use App\Models\Guest;

class TokenDashboardController extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function sendtoken(Request $request)
    {
        // get data from token's table
        $token = Token::get();

        // looping the data to get token
        foreach ($token as $key ) {
            if ($request->token == $key->token) {
                return redirect($key->pages->url_page);
            }
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
