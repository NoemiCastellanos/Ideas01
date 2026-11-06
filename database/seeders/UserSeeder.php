<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
  {
    $usuarios = [
      [
        'name' => 'Coordinador',
        'email' => 'coordinador@ideas',
        'rol' => 'coordinador',
      ],
      [
        'name' => 'Asistente',
        'email' => 'asistente@ideas',
        'rol' => 'asistente',
      ],
      [
        'name' => 'Noemi',
        'email' => 'noemi@gmail.com',
        'rol' => 'Admin',
      ]
    ];


    foreach ($usuarios as $usuario) {
      User::updateOrCreate(
        ['email' => $usuario['email']],
        [
          'name' => $usuario['name'],
          'password' => bcrypt('12345'),
          'rol' => $usuario['rol'],
        ]
      );
    }
  }
}