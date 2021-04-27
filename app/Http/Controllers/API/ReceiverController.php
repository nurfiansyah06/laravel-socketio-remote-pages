<?php

namespace App\Http\Controllers\API;

use App\Models\Token;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReceiverController extends Controller
{
    public function get(Request $request)
    {
        $tokens = Token::with(['pages'])->get();

        if ($tokens) {
            return ResponseFormatter::success($tokens, 'Data berhasil diambil');
        } else {
            return ResponseFormatter::error($tokens, 'Data error diambil');
        }
    }
}
