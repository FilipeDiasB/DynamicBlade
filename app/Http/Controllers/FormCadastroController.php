<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Input;

class FormCadastroController extends Controller
{
    public function index()
    {
        $form = Form::with('inputs')
                      ->where('id', '=', 1)
                      ->first();

        return view('index', compact('form'));
    }
}
