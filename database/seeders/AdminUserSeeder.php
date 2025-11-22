<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo tài khoản Admin
        User::create([
            'full_name' => 'Admin',
            'phone' => '0123456789',
            'address' => 'Admin Address',
            'email' => '0306221301@caothang.edu.vn',
            'password' => Hash::make('123123An'), // Mật khẩu: admin123
            'type' => 1, // 1 = Admin
            'email_verified_at' => now(),
        ]);

        echo "✅ Admin account created successfully!\n";
        echo "📧 Email: 0306221301@caothang.edu.vn\n";
        echo "🔐 Password: 123123An\n";
    }
}
