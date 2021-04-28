<?php

namespace App\Http\Controllers\API;

use App\Models\Guest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReceiverController extends Controller
{
    public function get(Request $request)
    {
        $length = $request->input('length');
        $sortBy = $request->input('column');
        $orderBy = $request->input('dir');
        $searchValue = $request->input('search');

        // $query = Guest::with($sortBy, $orderBy, $searchValue);

        $data = Guest::paginate($length);
        if ($data) {
            return ResponseFormatter::success($data, 'Data berhasil diambil');
        } else {
            return ResponseFormatter::error($data, 'Data error diambil');
        }
    }
}
