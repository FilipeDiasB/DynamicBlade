<?php

namespace App\Http\Controllers;

use App\Models\Form;

class FormCadastroController extends Controller
{
    public function index()
    {
        $form = Form::where('id')->with(['inputs', 'radios'])
                    ->first();

        return view('index', compact('form'));
    }
}
