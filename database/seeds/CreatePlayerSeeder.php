<?php

use Illuminate\Database\Seeder;
use App\Player;
use App\Match;

class CreatePlayerSeeder extends Seeder
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
                'name' => 'Nguyen Van Giang',
            ],
            [
                'name' => 'Phung The Tai',
            ],
        ];

        Player::truncate();

        Player::insert($data);

        Match::truncate();
        Match::create([
            'type' => 1,
            'home' => 'SEC2',
            'guest' => 'SEC2',
            'time' => '2020-06-30 17:30:00',
            'stadium' => 'Me Tri',
        ]);
    }
}
