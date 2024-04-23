<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample users
        User::create([
            'name' => 'Juan',
            'surname' => 'Pérez',
            'email' => 'juan.perez@mail.com',
            'password' => Hash::make('passjuanperez'),
        ]);

        User::create([
            'name' => 'María',
            'surname' => 'García',
            'email' => 'maria.garcia@mail.com',
            'password' => Hash::make('passmariagarcia'),
        ]);

        User::create([
            'name' => 'Luis',
            'surname' => 'Rodríguez',
            'email' => 'luis.rodriguez@mail.com',    
            'password' => Hash::make('passluisrodriguez'),
        ]);

        User::create([
            'name' => 'Ana',
            'surname' => 'Martínez',
            'email' => 'anamartinez@mail.com',
            'password' => Hash::make('passanamartinez'),
        ]);

        User::create([
            'name' => 'Pedro',
            'surname' => 'López',
            'email' => 'pedro.lopez@mail.com',
            'password' => Hash::make('passpedrolopez'),
        ]);

        User::create([
            'name' => 'Laura',
            'surname' => 'Fernández',
            'email' => 'laura.fernandez@mail.com',
            'password' => Hash::make('passlaurafernandez'),
        ]);

        User::create([
            'name' => 'Carlos',
            'surname' => 'Gómez',
            'email' => 'carlos.gomez@mail.com',
            'password' => Hash::make('passcarlosgomez'),
        ]);

        User::create([
            'name' => 'Sara',
            'surname' => 'Ruiz',
            'email' => 'sara.ruiz@mail.com',
            'password' => Hash::make('passsararuiz'),
        ]);

        User::create([
            'name' => 'Roberto',
            'surname' => 'Sánchez',
            'email' => 'roberto.sanchez@mail.com',
            'password' => Hash::make('passrobertosanchez'),
        ]);

        User::create([
            'name' => 'Elena',
            'surname' => 'Morales',
            'email' => 'elena.morales@mail.com',
            'password' => Hash::make('passelenamorales'),
        ]);

        User::create([
            'name' => 'Javier',
            'surname' => 'Díaz',
            'email' => 'javier.diaz@mail.com',
            'password' => Hash::make('passjavierdiaz'),
        ]);

        User::create([
            'name' => 'Rosa',
            'surname' => 'Ortega',
            'email' => 'rosa.ortega@mail.com',
            'password' => Hash::make('passrosaortega'),
        ]);

        User::create([
            'name' => 'David',
            'surname' => 'Hernández',
            'email' => 'david.hernandez@mail.com',
            'password' => Hash::make('passdavidhernandez'),
        ]);

        User::create([
            'name' => 'Isabel',
            'surname' => 'López',
            'email' => 'isabel.lopez@mail.com',
            'password' => Hash::make('passisabellopez'),
        ]);

        User::create([
            'name' => 'Pablo',
            'surname' => 'Martínez',
            'email' => 'pablo.martinez@mail.com',
            'password' => Hash::make('passpablomartinez'),
        ]);

        User::create([
            'name' => 'Carmen',
            'surname' => 'Gutiérrez',
            'email' => 'carmen.gutierrez@mail.com',
            'password' => Hash::make('passcarmengutierrez'),
        ]);

        User::create([
            'name' => 'Daniel',
            'surname' => 'García',
            'email' => 'daniel.garcia@mail.com',
            'password' => Hash::make('passdanielgarcia'),
        ]);

        User::create([
            'name' => 'Marta',
            'surname' => 'Vargas',
            'email' => 'marta.vargas@mail.com',
            'password' => Hash::make('passmartavargas'),
        ]);

        User::create([
            'name' => 'Antonio',
            'surname' => 'Fernández',
            'email' => 'antonio.fernandez@mail.com',
            'password' => Hash::make('passantoniofernandez'),
        ]);

        User::create([
            'name' => 'Eva',
            'surname' => 'López',
            'email' => 'eva.lopez@mail.com',
            'password' => Hash::make('passevalopez'),
        ]);

        User::create([
            'name' => 'José',
            'surname' => 'Sánchez',
            'email' => 'jose.sanchez@mail.com',
            'password' => Hash::make('passjosesanchez'),
        ]);

        User::create([
            'name' => 'Sandra',
            'surname' => 'Martínez',
            'email' => 'sandra.martinez@mail.com',
            'password' => Hash::make('passsandramartinez'),
        ]);
    }
}
