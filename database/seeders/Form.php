<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Form extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $forms = [
            [
                'id'    => 1,
                'title' => 'Cadastro',
            ],
            [
                'id'    => 2,
                'title' => 'Radios',
            ],
        ];

        foreach ($forms as $form) {
            \App\Models\Form::insert($form);
        }
    }
}
