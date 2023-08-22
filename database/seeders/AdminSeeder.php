<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin=User::where('email','admin@admin.com')->first();
        if(!$admin){
        $user = new User();
        $user->name='Admin';
        $user->email='admin@admin.com';
        $user->password=Hash::make('admin@admin.com');
        $user->account_type='admin';
        $user->save();
    }
    }
}
