<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(json_decode(file_get_contents(__DIR__.'/ecovillages.json'), true))->each(function($village) {
            $village['natural'] = is_bool($village['natural']) ? $village['natural'] : null;
            $village['green'] = is_bool($village['green']) ? $village['green'] : null;
            $village['languages'] = json_encode(array_wrap($village['languages']));

            DB::table('villages')->insert($village);
        });
    }
}
