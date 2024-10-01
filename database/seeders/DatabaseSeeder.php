<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Province;
use App\Models\User;
use App\Models\Ward;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::create([
//            'email' => 'administrator@gmail.com',
//            'password' => Hash::make('12345678'),
//            'name' => 'Administrator',
//            'role' => 'admin',
//        ]);

        $response = file_get_contents('https://esgoo.net/api-tinhthanh/1/0.htm');

        $data = json_decode($response, true)['data'];

        foreach($data as $province){
            $createdProvince = Province::create([
                '_id' => $province['id'],
                'name' => $province['name'],
                'name_en' => $province['name_en'],
                'full_name' => $province['full_name'],
                'full_name_en' => $province['full_name_en'],
                'latitude' => $province['latitude'],
                'longitude' => $province['longitude']
            ]);

            $districtsResponse = file_get_contents("https://esgoo.net/api-tinhthanh/2/" . $province['id'] . ".htm");

            $districts = json_decode($districtsResponse, true)['data'];

            foreach($districts as $district){
                $createdDistrict = District::create([
                    '_id' => $district['id'],
                    'province_id' => $createdProvince->id,
                    'name' => $district['name'],
                    'name_en' => $district['name_en'],
                    'full_name' => $district['full_name'],
                    'full_name_en' => $district['full_name_en'],
                    'latitude' => $district['latitude'],
                    'longitude' => $district['longitude']
                ]);

                $wardsResponse = file_get_contents("https://esgoo.net/api-tinhthanh/3/" . $district['id'] . ".htm");

                $wards = json_decode($wardsResponse, true)['data'];

                foreach($wards as $ward){
                    $createdWard = Ward::create([
                        '_id' => $ward['id'],
                        'district_id' => $createdDistrict->id,
                        'name' => $ward['name'],
                        'name_en' => $ward['name_en'],
                        'full_name' => $ward['full_name'],
                        'full_name_en' => $ward['full_name_en'],
                        'latitude' => $ward['latitude'],
                        'longitude' => $ward['longitude']
                    ]);

                }


            }


        }

    }
}
