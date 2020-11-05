<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user = User::where('email', 'admin@admin.com')->first();

        if (!$user) {
            User::create([
                'name' => 'Leandro ramos',
                'email' => 'admin@admin.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin'
            ]);
        } else {
            if ($user->role != 'admin') {
                $user->role = 'admin';
                $user->save();
            }
        }
    }
}
