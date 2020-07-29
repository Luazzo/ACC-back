<?php

<<<<<<< HEAD
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);
        }
    }
}
=======
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
>>>>>>> old-state
