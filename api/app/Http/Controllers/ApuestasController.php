<?php

namespace App\Http\Controllers;

use App\Models\Apuesta;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class ApuestasController extends Controller
{
    public function index()
    {
        $data = Apuesta::orderBy('id_apuesta', 'ASC')->get();

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
    public function show(string $id)
    {
        $data = Apuesta::where('id_apuesta', $id)->get();
        if ($data) {

            return response()->json([
                'status' => 'success',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'data' => 'Data no found'
            ]);
        }
    }
}
