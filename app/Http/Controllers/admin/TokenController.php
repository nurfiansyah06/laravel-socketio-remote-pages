<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Token;
use App\Models\Page;
use Illuminate\Support\Str;
use App\Models\Guest;

class TokenController extends Controller
{
    public function index()
    {
        // return to create token pages
        return view('admin.token');
    }

    public function createToken(Request $request)
    {
        $token = new Token;

        // insert to table name and token
        $token->name = $request->name;
        $token->token = Str::random(20);

        $token->save();

        return redirect('/admin/listtoken');
    }

    public function deleteToken($token_id)
    {
        // find the item to delete
        $token = Token::findorfail($token_id);

        $token->delete();

        return redirect('admin/listtoken');

    }

     public function listGuest()
    {
        $guests = Guest::all();

        return view('receiver',[
            'guests' => $guests
        ]);
    }

    public function receiverByToken($token)
    {
        $token = Token::find($token);
        $guests = Guest::all();
        // dd($token);
        return view('receiver',[
            'token' => $token,
            'guests' => $guests
        ]);
    }
}
