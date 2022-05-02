<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Input extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $inputs = [
            [
                'id'          => 1,
                'component'   => 'input',
                'label'       => 'Nome',
                'name'        => 'nome',
                'placeholder' => 'Nome',
                'form_id'     => 1,

            ],
        ];

        foreach ($inputs as $input) {
            \App\Models\Input::insert($input);
        }
    }
}
