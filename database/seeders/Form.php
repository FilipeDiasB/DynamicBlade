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
            ]
        ];

        foreach ($forms as $form) {
            \App\Models\Form::insert($form);
        }
    }
}
