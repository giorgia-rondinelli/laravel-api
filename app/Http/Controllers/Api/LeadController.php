<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function store(Request $request){
        $data= $request->all();
        // $validator= Validator::make($data, [
        // 'nome' => 'required|min:3|max:100',
        // 'email' => 'required|email',
        // 'text' => 'required|min:3',
        // ],
        // [
        // 'nome.required'=>'il nome è obbligatorio',
        // 'nome.min'=>'il nome deve contenere almeno :min caratteri',
        // 'nome.max'=> 'il nome può contenere :max caratteri',
        // 'email.required'=> 'la mail è obbligatoria',
        // 'email.email'=> 'il formato mail non è corretto',
        // 'text.required'=> 'il messaggio è obbligatorio',
        // 'text.min'=> 'il messaggio deve contenere almeno :min caratteri',

        // ]

        // );
        // if($validator->fails()){
        //     $succes=false;
        //     $errors=$validator->errors();
        //     return response()->json(compact('success','errors'));

        // }
        // $succes=true;
        // return response()->json(compact('success'));

        // $new_lead=new Lead();
        // $new_lead->fill($data);
        // $new_lead->save();




    }
}
