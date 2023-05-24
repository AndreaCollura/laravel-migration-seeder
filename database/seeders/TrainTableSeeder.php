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
        $data = [
            [
                'agency' => 'Italo',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Roma',
                'arrival_eta' => '20:00',
                'train_code' => '83726323',
                'n_wagons' => '14',
                'on_time' => '1',
                'cnx' => '0',
            ],
            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Bologna Centrale',
                'arrival_station' => 'Roma Termini',
                'arrival_eta' => '14:50',
                'train_code' => '84012823',
                'n_wagons' => '8',
                'on_time' => '0',
                'cnx' => '0',
            ],
            [
                'agency' => 'Italo',
                'departure_station' => 'Torino',
                'arrival_station' => 'Firenze Santa Maria Novella',
                'arrival_eta' => '09:00',
                'train_code' => '18492374',
                'n_wagons' => '14',
                'on_time' => '1',
                'cnx' => '1',
            ],
            [
                'agency' => 'FlixTrain',
                'departure_station' => 'Napoli Centrale',
                'arrival_station' => 'Verona Porta Nuova',
                'arrival_eta' => '06:35',
                'train_code' => '54912346',
                'n_wagons' => '6',
                'on_time' => '1',
                'cnx' => '0',
            ],
            [
                'agency' => 'Italo',
                'departure_station' => 'Torino Porta Nuova',
                'arrival_station' => 'Padova',
                'arrival_eta' => '12:40',
                'train_code' => '76710293',
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
            $newTrain->arrival_eta = $train['arrival_eta'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->n_wagons = $train['n_wagons'];
            $newTrain->on_time = $train['on_time'];
            $newTrain->cnx = $train['cnx'];
            $newTrain->save();
        }


    }
}
