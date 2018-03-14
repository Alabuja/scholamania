<?php

use Illuminate\Database\Seeder;

class MainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            0 => [
                'id'             => 1,
                'name'           => 'Adeyemo College',
                'username'       => 'admin',
                'email'          => 'admin@admin.com',
                'address'        => 'Lagos',
                'phone_number'   => '08163423036',
                'password'       => '$2y$10$5DsaXdSha3gE2Eb/SjlH.e7P10iy5Z83TqrSXPr4eRGhTkd.mvvBK',
                'student_number' => 0,
                'remember_token' => 'em8XpGWuONpafgj6QQE63zYkm1KVB9hkMZnL14uBSFXlKSheGGRFoUu1VvVr',
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            1 =>[
            	'id'             => 2,
                'name'           => 'Kembos College',
                'username'       => 'admin',
                'email'          => 'admin@admin2.com',
                'address'        => 'Lagos',
                'phone_number'   => '08163423235',
                'password'       => '$2y$10$5DsaXdSha3gE2Eb/SjlH.e7P10iy5Z83TqrSXPr4eRGhTkd.mvvBK',
                'student_number' => 0,
                'remember_token' => 'KoH2d22s7N2UAC95xxFrefWQ10grCoM60xGhP0hGm9inm8J3jcT7Q5uo4XG4',
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            2 =>[
            	'id'             => 3,
                'name'           => 'AFSS Ikeja',
                'username'       => 'afss_ikeja',
                'email'          => 'afss_ikeja@gmail.com',
                'address'        => 'Ikeja Air ForceBase',
                'phone_number'   => '08163423246',
                'password'       => '$2y$10$5DsaXdSha3gE2Eb/SjlH.e7P10iy5Z83TqrSXPr4eRGhTkd.mvvBK',
                'student_number' => 0,
                'remember_token' => null,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            3 =>[
            	'id'             => 4,
                'name'           => 'CDSS Ikeja',
                'username'       => 'cdss_ikeja',
                'email'          => 'cdss_ikeja@gmail.com',
                'address'        => 'Ikeja Cantonment',
                'phone_number'   => '0816342322',
                'password'       => '$2y$10$5DsaXdSha3gE2Eb/SjlH.e7P10iy5Z83TqrSXPr4eRGhTkd.mvvBK',
                'student_number' => 0,
                'remember_token' => null,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
        ]);

        \DB::table('guests')->insert([
            0 => [
                'id'             => 1,
                'name'           => 'Ben Tosin',
                'username'       => 'thedadaben',
                'email'          => 'thedadaben@gmail.com',
                'address'        => 'Lagos',
                'phone_number'   => '08163423036',
                'password'       => '$2y$10$5DsaXdSha3gE2Eb/SjlH.e7P10iy5Z83TqrSXPr4eRGhTkd.mvvBK',
                'remember_token' => 'em8XpGWuONpafgj6QQE63zYkm1KVB9hkMZnL14uBSFXlKSheGGRFoUu1VvVr',
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            1 =>[
            	'id'             => 2,
                'name'           => 'Ebuka Joshua',
                'username'       => 'joshua_ebuka',
                'email'          => 'joshua_ebuka@ymail.com',
                'address'        => 'Lagos',
                'phone_number'   => '08163423235',
                'password'       => '$2y$10$5DsaXdSha3gE2Eb/SjlH.e7P10iy5Z83TqrSXPr4eRGhTkd.mvvBK',
                'remember_token' => 'KoH2d22s7N2UAC95xxFrefWQ10grCoM60xGhP0hGm9inm8J3jcT7Q5uo4XG4',
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            2 =>[
            	'id'             => 3,
                'name'           => 'Victor Peter',
                'username'       => 'Sir_Victor',
                'email'          => 'Sir_Victor@gmail.com',
                'address'        => 'Ikeja Air ForceBase',
                'phone_number'   => '08163423246',
                'password'       => '$2y$10$5DsaXdSha3gE2Eb/SjlH.e7P10iy5Z83TqrSXPr4eRGhTkd.mvvBK',
                'remember_token' => null,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            3 =>[
            	'id'             => 4,
                'name'           => 'Daniel Timi',
                'username'       => 'paulino',
                'email'          => 'paulino@gmail.com',
                'address'        => 'Ikeja Cantonment',
                'phone_number'   => '0816342322',
                'password'       => '$2y$10$5DsaXdSha3gE2Eb/SjlH.e7P10iy5Z83TqrSXPr4eRGhTkd.mvvBK',
                'remember_token' => null,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
        ]);

        // CREATE THE ADMINS

        \DB::table('admins')->delete();

        \DB::table('admins')->insert([
            0 => [
                'id'         => 1,
                'username'  => 'admin',
                'email'      => 'admin@admin.com',
                'password'       => '$2y$10$5DsaXdSha3gE2Eb/SjlH.e7P10iy5Z83TqrSXPr4eRGhTkd.mvvBK',
                'remember_token' => null,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
        ]);

        \DB::table('scores')->delete();

        \DB::table('scores')->insert([
            0 => [
                'id'         => 1,
                'user_id'  => 2,
                'score_number'      => 85,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            1 => [
                'id'         => 2,
                'user_id'  => 2,
                'score_number'      => 86,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            2 => [
                'id'         => 3,
                'user_id'  => 1,
                'score_number'      => 55,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            3 => [
                'id'         => 4,
                'user_id'  => 1,
                'score_number'      => 75,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            4 => [
                'id'         => 5,
                'user_id'  => 3,
                'score_number'      => 44,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            5 => [
                'id'         => 6,
                'user_id'  => 1,
                'score_number'      => 66,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            6 => [
                'id'         => 7,
                'user_id'  => 3,
                'score_number'      => 34,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            7 => [
                'id'         => 8,
                'user_id'  => 4,
                'score_number'      => 34,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
        ]);


        \DB::table('individualScores')->delete();

        \DB::table('individualScores')->insert([
            0 => [
                'id'         => 1,
                'guest_id'  => 2,
                'score_number'      => 85,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            1 => [
                'id'         => 2,
                'guest_id'  => 2,
                'score_number'      => 86,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            2 => [
                'id'         => 3,
                'guest_id'  => 1,
                'score_number'      => 55,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            3 => [
                'id'         => 4,
                'guest_id'  => 1,
                'score_number'      => 75,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            4 => [
                'id'         => 5,
                'guest_id'  => 3,
                'score_number'      => 44,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            5 => [
                'id'         => 6,
                'guest_id'  => 1,
                'score_number'      => 66,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            6 => [
                'id'         => 7,
                'guest_id'  => 3,
                'score_number'      => 34,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
            7 => [
                'id'         => 8,
                'guest_id'  => 4,
                'score_number'      => 34,
                'created_at'     => '2017-05-18 21:11:43',
                'updated_at'     => '2017-05-18 21:11:43',
            ],
        ]);
    }
}
