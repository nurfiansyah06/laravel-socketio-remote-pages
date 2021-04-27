<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Token;
use App\Models\Page;
use Illuminate\Support\Str;

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

        // insert data url page to page's table
        $page = new Page;

        $page->url_page = $request->page;
        $token->pages()->save($page);

        return redirect('/admin/listtoken');
    }

    public function deleteToken($token_id)
    {
        // find the item to delete
        $token = Token::findorfail($token_id);

        $token->delete();

        return redirect('admin/listtoken');

    }
}
