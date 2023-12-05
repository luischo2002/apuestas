<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::orderBy('id', 'ASC')->get();

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::where('id', $id)->get()->first();
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reglas = Validator::make($request->all(), [
            //'name' => 'required|min:3|max:255',
            //'email' => 'required|email',
            //'password' => 'required', (?
            'balance' => 'required|max:' . User::find($id)->balance,

        ]);
        if ($reglas->fails()) {
            return back()->withInput()->with('errorUpdate', 'fail')->withErrors($reglas);
        } else {
            $registro = User::find($request->id);
            $registro->name = $request->name;
            //            $registro->email = $request->email;

            $registro->balance = ($registro->balance - $request->balance);


            $registro->save();
            return response()->json([
                'status' => 'success',
                'message' => 'Datos actualizados'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}