<?php

namespace App\Http\Controllers;

use App\Http\Requests\MulherHomemRequest;
use App\Models\Form;
use App\Models\HomemMulher;

class HomemMulherController extends Controller
{
    public function create()
    {
        $form = Form::where('id', '=', 1)->with(['inputs'])
                    ->first();

        return view('formCreate', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(MulherHomemRequest $request)
    {
        $data = $request->validated();
        HomemMulher::create($data);
    }
}
