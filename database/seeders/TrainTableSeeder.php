<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentDate = date('Y-m-d');

        $data = [
            [
                'agency' => 'Italo',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Roma',
                'departure_date' => $currentDate,
                'arrival_eta' => '20:00',
                'train_code' => 8372,
                'n_wagons' => '14',
                'on_time' => '1',
                'cnx' => '0',
            ],
            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Bologna Centrale',
                'arrival_station' => 'Roma Termini',
                'departure_date' => $currentDate,
                'arrival_eta' => '14:50',
                'train_code' => 8401,
                'n_wagons' => '8',
                'on_time' => '0',
                'cnx' => '0',
            ],
            [
                'agency' => 'Italo',
                'departure_station' => 'Torino',
                'arrival_station' => 'Firenze Santa Maria Novella',
                'departure_date' => '2023/02/01',
                'arrival_eta' => '09:00',
                'train_code' => 1849,
                'n_wagons' => '14',
                'on_time' => '1',
                'cnx' => '1',
            ],
            [
                'agency' => 'FlixTrain',
                'departure_station' => 'Napoli Centrale',
                'arrival_station' => 'Verona Porta Nuova',
                'departure_date' => '2023/12/04',
                'arrival_eta' => '06:35',
                'train_code' => 5491,
                'n_wagons' => '6',
                'on_time' => '1',
                'cnx' => '0',
            ],
            [
                'agency' => 'Italo',
                'departure_station' => 'Torino Porta Nuova',
                'arrival_station' => 'Padova',
                'departure_date' => $currentDate,
                'arrival_eta' => '12:40',
                'train_code' => 7671,
                'n_wagons' => '16',
                'on_time' => '0',
                'cnx' => '0',
            ],
        ];

        foreach($data as $train){
            $newTrain = new Train();
            $newTrain->agency = $train['agency'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_date = $train['departure_date'];
            $newTrain->arrival_eta = $train['arrival_eta'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->n_wagons = $train['n_wagons'];
            $newTrain->on_time = $train['on_time'];
            $newTrain->cnx = $train['cnx'];
            $newTrain->save();
        }


    }
}
