<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('partidos')->insert([
            'id' => '1',
            'name' => 'Otro',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '19',
            'name' => '3 de Febrero',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '2007',
            'name' => 'Ciudad Autonoma de Buenos Aires',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6252',
            'name' => 'Escobar',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6371',
            'name' => 'San Martin',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6408',
            'name' => 'Hurlingham',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6410',
            'name' => 'Ituzaingo',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6412',
            'name' => 'José C Paz',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6427',
            'name' => 'La Matanza',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6515',
            'name' => 'Malvinas Argentinas',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6539',
            'name' => 'Merlo',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6560',
            'name' => 'Moreno',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6568',
            'name' => 'Moron',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6638',
            'name' => 'Pilar',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6749',
            'name' => 'San Fernando',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6756',
            'name' => 'San Isidro',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6760',
            'name' => 'San Miguel',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6805',
            'name' => 'Tigre',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6840',
            'name' => '3 de Febrero',
            'latitude' => '0',
            'longitude' => '0'
        ]);
        DB::table('partidos')->insert([
            'id' => '6861',
            'name' => 'Vicente Lopez',
            'latitude' => '0',
            'longitude' => '0'
        ]);
    }
}
