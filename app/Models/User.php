<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'image'
    ];
    protected $appends = ['image_path'];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getImagePathAttribute(){
        return asset('uploads/users_images/' . $this->image);
    }
    public function products(){
        return $this->hasMany('App\Models\Product');
    }
}
