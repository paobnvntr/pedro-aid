<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('level');
            $table->string('transaction_level')->nullable();
            $table->string('profile_picture')->nullable();
            $table->timestamps();
        });

        // Create a default super admin account
        $defaultSuperAdmin = [
            'name' => 'Super Admin',
            'username' => 'Super Admin',
            'email' => 'sanpedroaid@gmail.com',
            'password' => Hash::make('@PedroAID_2024'), // Hash the password
            'level' => 'Super Admin',
            'transaction_level' => null,
            'profile_picture' => 'uploads/profile/superadmin/default_superadmin.jpg',
            'created_at' => now('Asia/Manila'),
            'updated_at' => now('Asia/Manila'),
        ];

        DB::table('users')->insert($defaultSuperAdmin);
    }
 
    public function down()
    {
        Schema::dropIfExists('users');
    }
};