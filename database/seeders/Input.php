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
                'component'   => 'inputText',
                'label'       => 'Homem',
                'name'        => 'homem_input',
                'placeholder' => 'Homem',
                'form_id'     => 1,

            ],
            [
                'id'          => 2,
                'component'   => 'inputText',
                'label'       => 'Nome',
                'name'        => 'mulher_input',
                'placeholder' => 'Mulher',
                'form_id'     => 1,

            ],
            [
                'id'        => 3,
                'component' => 'inputRadio',
                'label'     => 'Homem',
                'name'      => 'genero',
                'form_id'   => 1,

            ],
            [
                'id'        => 4,
                'component' => 'inputRadio',
                'label'     => 'Mulher',
                'name'      => 'genero',
                'form_id'   => 1,

            ],
        ];

        foreach ($inputs as $input) {
            \App\Models\Input::insert($input);
        }
    }
}
