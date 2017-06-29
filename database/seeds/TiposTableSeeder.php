<?php

use Illuminate\Database\Seeder;
use App\Tipo;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('Semibecas.tipos')->insert([
            ['descripcion' => 'Partida de nacimiento del postulante.'],
            ['descripcion' => 'Documento Nacional de identidad (DNI).'],
            ['descripcion' => 'Certificado de estudios (1ero a 5to de secundaria).'],
            ['descripcion' => 'Boletas de pago o recibos por honorarios del padre y de la madre, correspondiente a los dos últimos meses (Mayo-Junio 2017).'],
            ['descripcion' => 'Autovalúo (PU-HR) o título de propiedad. Si vive en casa alquilada, recibo de pago o el contrato de alquiler. En caso de vivir alojado presentar la constancia de alojamiento simple..'],
            ['descripcion' => 'Recibo de agua, energía eléctrica y teléfono de la vivienda que ocupa el postulante en la ciudad de Lima, correspondiente a los dos últimos meses (Mayo-Junio 2017).'],
            ['descripcion' => 'Formato de registro de datos que tiene que escanearlo enviar por internet según la guía de procedimientos.'],
        ]);
    }
}
