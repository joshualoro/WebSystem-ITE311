<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $students = [
            [
                'username' => 'joshualoro',
                'email' => 'joshualoro@gmail.com',
                'password' => 'user',
                'role' => 'user'
            ]
        ];
        $this->db->table('users')->insertBatch($students);
    }
}
