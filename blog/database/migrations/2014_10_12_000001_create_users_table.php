<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('type')->default(false)->comment('0=>admin, 1=>vendor, 2=>customer');
            $table->rememberToken();
            $table->timestamps();
        });

		$roles = array('admin', 'vendor', 'customer');
        $loop = 0;
        foreach($roles as $role){
            DB::table('users')->insert([
                'name' => $role,
                'email' => $role.'@gmail.com',
                'password' => Hash::make('12345678'),
                'type' => $loop,
                'email_verified_at' => now(),
                'remember_token' => '',
            ]);

            DB::table('user_infos')->insert([
                'user_id' => $loop+1
            ]);
            $loop++;
		}
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
