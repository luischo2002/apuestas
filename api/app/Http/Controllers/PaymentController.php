<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class PaymentController extends Controller
{
    public function index()
    {
        $data = Payment::orderBy('id_payment', 'ASC')->get();

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_usuario' => 'required',
            'metodo' => 'required',
            'numero_tarjeta' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ]);
        } else {
            Payment::create([
                'id_usuario' => $request->id_usuario,
                'metodo' => $request->metodo,
                'numero_tarjeta' => Hash::make($request->numero_tarjeta)


            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Data created'
            ]);
        }
    }






    public function show(string $id)
    {
        $data = Payment::where('id_payment', $id)->get()->first();
        if ($data) {
            return response()->json([
                'status' => 'success',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data not found'
            ]);
        }
    }


    public function destroy(string $id)
    {
        if (Payment::find($id)) {
            $data = Payment::find($id);
            $data->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Record deleted'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data not found'
            ]);
        }
    }
}
