<?php

namespace App\Http\Controllers;

use App\Http\Requests\academiacourFormRequest;
use Illuminate\Http\Request;
use App\Models\Academiacour;
use Illuminate\Http\Response;

class academiacourController extends Controller
{
    public function index(){
        $view = Academiacour::orderBy('created_at', 'desc')->paginate(10);
        return response()->json([
            'data' => $view
        ], Response::HTTP_OK);
    }

    public function store(academiacourFormRequest $request){
        $validate = Academiacour::create($request->validated());
        return response()->json([
            'message' => "L'opération a réussi avec succès"
        ], Response::HTTP_OK);
    }

    public function show(Academiacour $academi){
        if ($academi) {
            return response()->json([
                'data' => $academi
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                'message' => 'L\'ID spécifié n\'existe pas'
            ], Response::HTTP_NOT_FOUND);
        }
    }

    public function update(academiacourFormRequest $request, Academiacour $academi){
        $academi->update($request->validated());
        return response()->json([
            'message' => "L'opération a réussi avec succès"
        ], Response::HTTP_OK);
    }

    public function destroy(string $id){
        
    }
}
