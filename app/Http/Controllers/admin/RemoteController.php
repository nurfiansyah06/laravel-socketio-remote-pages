<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Token;

class RemoteController extends Controller
{
    public function index()
    {
        $tokens = Token::get();

        return view('admin.listtoken',[
            'tokens' => $tokens
        ]);
    }

    public function remotePage(Request $request)
    {
        $tokens = Token::get();

        return view('admin.remotetoken',[
            'tokens' => $tokens
        ]);
    }
}
