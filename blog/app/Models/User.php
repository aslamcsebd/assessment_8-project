<?php

namespace App\Models;

// use Attribute;
use App\Models\UserInfo;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable;

	protected $fillable = [
		'name',
        'username',
		'email',
		'password',
		'type'
	];

	protected $hidden = [
		'password',
		'remember_token',
	];

	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	protected function type():Attribute
	{
		return new Attribute(
			get: fn ($value) => ["admin", "vendor", "customer"][$value],
		);
	}

    public function userInfo(){
        return $this->hasOne(UserInfo::class)->withDefault();
    }

    public function userImg(){
        return $this->hasOne(UserInfo::class)->withDefault();
    }
}