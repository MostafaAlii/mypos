<?php
use App\Models\User;
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name'    =>  'super',
            'last_name'    =>  'admin',
            'email'    =>  'super_admin@pos.com',
            'password'    =>  bcrypt('123456'),
        ]);
        $user->attachRole('super_admin');
    }
}
