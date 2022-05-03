<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Radio extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $radios = [
            [
                'id'        => 1,
                'component' => 'radio',
                'name'      => 'Sim',
                'form_id'   => 1,
            ],
            [
                'id'        => 2,
                'component' => 'radio',
                'name'      => 'Não',
                'form_id'   => 1,
            ],
        ];

        foreach ($radios as $radio) {
            \App\Models\Radio::insert($radio);
        }
    }
}
