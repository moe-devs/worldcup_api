<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('countries')->insert([
            
            [
                'population'    =>  17.564014,
                'name'          =>  'Netherland',
                'capital_city'  =>  'Amsterdam',
                'continent'     =>  'Europe',
                'ranking'       =>  8,
                'groups_id'      =>  1,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  18.282585,
                'name'          =>  'Ecuador',
                'capital_city'  =>  'Quito',
                'continent'     =>  'South America',
                'ranking'       =>  44,
                'groups_id'      =>  1,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  17.796403,
                'name'          =>  'Senegal',
                'capital_city'  =>  'Dakar',
                'continent'     =>  'Africa',
                'ranking'       =>  18,
                'groups_id'      =>  1,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  2.997332,
                'name'          =>  'Qatar',
                'capital_city'  =>  'Doha',
                'continent'     =>  'Asia',
                'ranking'       =>  50,
                'groups_id'      =>  1,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  56.489800,
                'name'          =>  'England',
                'capital_city'  =>  'London',
                'continent'     =>  'Europe',
                'ranking'       =>  5,
                'groups_id'      =>  2,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  3.107500,
                'name'          =>  'Wales',
                'capital_city'  =>  'Cardiff',
                'continent'     =>  'Europe',
                'ranking'       =>  19,
                'groups_id'      =>  2,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  332.403650,
                'name'          =>  'USA',
                'capital_city'  =>  'Washington DC',
                'continent'     =>  'North America',
                'ranking'       =>  16,
                'groups_id'      =>  2,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  86.559049,
                'name'          =>  'Iran',
                'capital_city'  =>  'Téhéran',
                'continent'     =>  'Asia',
                'ranking'       =>  20,
                'groups_id'      =>  2,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  36.102206,
                'name'          =>  'Arabie Saoudite',
                'capital_city'  =>  'Riyad',
                'continent'     =>  'Asia',
                'ranking'       =>  51,
                'groups_id'      =>  3,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  37.747758 ,
                'name'          =>  'Poland',
                'capital_city'  =>  'Varsovie',
                'continent'     =>  'Europe',
                'ranking'       =>  26,
                'groups_id'      =>  3,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  132.165784 ,
                'name'          =>  'Mexico',
                'capital_city'  =>  'Mexico',
                'continent'     =>  'South America',
                'ranking'       =>  13,
                'groups_id'      =>  3,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  46.185523,
                'name'          =>  'Argentina',
                'capital_city'  =>  'Buenos Aires',
                'continent'     =>  'South America',
                'ranking'       =>  3,
                'groups_id'      =>  3,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  67.813396,
                'name'          =>  'France',
                'capital_city'  =>  'Paris',
                'continent'     =>  'Europe',
                'ranking'       =>  4,
                'groups_id'      =>  4,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  12.113769,
                'name'          =>  'Tunisia',
                'capital_city'  =>  'Tunis',
                'continent'     =>  'Africa',
                'ranking'       =>  30,
                'groups_id'      =>  4,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  5.840863,
                'name'          =>  'Denmark',
                'capital_city'  =>  'Copenhague',
                'continent'     =>  'Europe',
                'ranking'       =>  10,
                'groups_id'      =>  4,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  25.890773,
                'name'          =>  'Australia',
                'capital_city'  =>  'Canberra',
                'continent'     =>  'Oceanie',
                'ranking'       =>  38,
                'groups_id'      =>  4,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  46.797971,
                'name'          =>  'Spain',
                'capital_city'  =>  'Madrid',
                'continent'     =>  'Europe',
                'ranking'       =>  7,
                'groups_id'      =>  5,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  125.553272,
                'name'          =>  'Japan',
                'capital_city'  =>  'Tokyo',
                'continent'     =>  'Asia',
                'ranking'       =>  24,
                'groups_id'      =>  5,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  84.423782,
                'name'          =>  'Germany',
                'capital_city'  =>  'Berlin',
                'continent'     =>  'Europe',
                'ranking'       =>  11,
                'groups_id'      =>  5,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  5.205131,
                'name'          =>  'Costa Rica',
                'capital_city'  =>  'San josé',
                'continent'     =>  'North America',
                'ranking'       =>  31,
                'groups_id'      =>  5,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  11.709960,
                'name'          =>  'Belgium',
                'capital_city'  =>  'Brussels',
                'continent'     =>  'Europe',
                'ranking'       =>  2,
                'groups_id'      =>  6,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  4.044920,
                'name'          =>  'Croatia',
                'capital_city'  =>  'Zagreb',
                'continent'     =>  'Europe',
                'ranking'       =>  12,
                'groups_id'      =>  6,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  37.948805,
                'name'          =>  'Morocco',
                'capital_city'  =>  'Rabat',
                'continent'     =>  'Africa',
                'ranking'       =>  22,
                'groups_id'      =>  6,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  38.929902,
                'name'          =>  'Canada',
                'capital_city'  =>  'Ottawa',
                'continent'     =>  'North America',
                'ranking'       =>  41,
                'groups_id'      =>  6,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  216.164927,
                'name'          =>  'Brazil',
                'capital_city'  =>  'Brasília',
                'continent'     =>  'South America',
                'ranking'       =>  1,
                'groups_id'      =>  7,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  8.805308,
                'name'          =>  'Switzerland',
                'capital_city'  =>  'Bern',
                'continent'     =>  'Europe',
                'ranking'       =>  15,
                'groups_id'      =>  7,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  28.125564,
                'name'          =>  'Cameroon',
                'capital_city'  =>  'Yaoundé',
                'continent'     =>  'Africa',
                'ranking'       =>  43,
                'groups_id'      =>  7,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  8.653462,
                'name'          =>  'Serbia',
                'capital_city'  =>  'Belgrade',
                'continent'     =>  'Europe',
                'ranking'       =>  21,
                'groups_id'      =>  7,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  10.125737,
                'name'          =>  'Portugal',
                'capital_city'  =>  'Lisbon',
                'continent'     =>  'Europe',
                'ranking'       =>  9,
                'groups_id'      =>  8,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  51.374546,
                'name'          =>  'Korean Republic',
                'capital_city'  =>  'Seoul',
                'continent'     =>  'Asia',
                'ranking'       =>  28,
                'groups_id'      =>  8,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  3.502450,
                'name'          =>  'Uruguay',
                'capital_city'  =>  'Montevideo',
                'continent'     =>  'South America',
                'ranking'       =>  14,
                'groups_id'      =>  8,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'population'    =>  32.619785,
                'name'          =>  'Ghana',
                'capital_city'  =>  'Accra',
                'continent'     =>  'Africa',
                'ranking'       =>  61,
                'groups_id'      =>  8,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ]
            ]);
            DB::table('groups')->insert([
                [
                    'group_stage'   =>  'A',
                    'created_at'    =>  now(),
                    'updated_at'    =>  now()
                ],
                [
                    'group_stage'   =>  'B',
                    'created_at'    =>  now(),
                    'updated_at'    =>  now()
                ],
                [
                    'group_stage'   =>  'C',
                    'created_at'    =>  now(),
                    'updated_at'    =>  now()
                ],

                [
                    'group_stage'   =>  'D',
                    'created_at'    =>  now(),
                    'updated_at'    =>  now()
                ],

                [
                    'group_stage'   =>  'E',
                    'created_at'    =>  now(),
                    'updated_at'    =>  now()
                ],

                [
                    'group_stage'   =>  'F',
                    'created_at'    =>  now(),
                    'updated_at'    =>  now()
                ],

                [
                    'group_stage'   =>  'G',
                    'created_at'    =>  now(),
                    'updated_at'    =>  now()
                ],

                [
                    'group_stage'   =>  'H',
                    'created_at'    =>  now(),
                    'updated_at'    =>  now()
                ],

            ]);
    }
}
