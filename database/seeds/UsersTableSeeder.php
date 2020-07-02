<?php

    use Illuminate\Database\Seeder;
    use App\Models\User;

    class UsersTableSeeder extends Seeder
    {

        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
                User::firstOrCreate(
                    [
                        'email' => 'khabarovsk74@gmail.com',
                        'name' =>'Tsimpilova',
                        'password' => bcrypt( 'QVX371ghm29'  ),
                        'type' => 'admin',
                    ]
                );
        }
    }
