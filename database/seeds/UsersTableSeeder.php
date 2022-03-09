<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Student;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin
        $admin = Factory(User::class)->create([
            'name' => 'Andhika1',
            'email' => 'dikong11@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('dika123'),
        ]);

        $admin->assignRole('admin');

        $this->command->info('>_ Here is your admin details to login:');
        $this->command->warn($admin->email);
        $this->command->info('password is "dika123"');
        
         // bendahara
         $bendahara = factory(User::class)->create([
            'name'     => 'Andhika2',
            'email'    => 'dikong12@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('dika123'),
        ]);

        $bendahara->assignRole('bendahara');

        $this->command->info('>_ Here is your bendahara details to login:');
        $this->command->warn($bendahara->email);
        $this->command->info('Password is "dika123"');

        // siswa
        $student = factory(User::class)->create([
            'name'     => 'Andhika3',
            'email'    => 'dikong13@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('dika123'),
        ]);

        if($student->save()){
            $anggota = Student::create([
                'user_id'   => $student->id,
            ]);
        };

        $student->assignRole('student');

        $this->command->info('>_ Here is your student details to login:');
        $this->command->warn($student->email);
        $this->command->info('Password is "dika123"');

        // bersihkan cache
        $this->command->call('cache:clear');
    }
}
