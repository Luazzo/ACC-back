<?php

    use App\Models\Admin;
    use Illuminate\Database\Seeder;
    use TCG\Voyager\Models\Role;

    class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Admin::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            Admin::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);
        }
    }
}
