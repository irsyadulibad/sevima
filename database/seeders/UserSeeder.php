<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        
        $admin = $this->createAdmin();
        $student = $this->createStudent();

        $admin->assignRole('admin');
        $student->assignRole('student');
    }

    private function createAdmin(): User
    {
        return User::create([
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123')
            ]);
    }

    private function createStudent(): User
    {
        return User::create([
            'name' => 'Student',
            'email' => 'student@gmail.com',
            'password' => Hash::make('student123')
        ]);
    }
}
