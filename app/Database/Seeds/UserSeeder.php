<?php

namespace App\Database\Seeds;

use App\Models\User;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'name' => 'Merchant ' . ($i + 1),
                'email' => 'merchant' . ($i + 1) . '@gmail.com',
                'password' => password_hash('merchant' . ($i + 1), PASSWORD_BCRYPT),
                'role' => 'merchant',
            ];
        }
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'name' => 'Customer ' . ($i + 1),
                'email' => 'customer' . ($i + 1) . '@gmail.com',
                'password' => password_hash('customer' . ($i + 1), PASSWORD_BCRYPT),
                'role' => 'customer',
            ];
        }

        $user = new User();
        $user->insertBatch($data);
    }
}
