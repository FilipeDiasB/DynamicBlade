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
                'name'      => 'nome',
                'form_id'   => 2,

            ],
        ];

        foreach ($radios as $radio) {
            \App\Models\Radio::insert($radio);
        }
    }
}
