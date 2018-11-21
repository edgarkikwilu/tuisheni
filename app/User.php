<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function notes(){
        return $this->hasMany('App\Note');
    }
    public function attendances(){
        return $this->hasMany('App\Attendance');
    }
    public function quizes(){
        return $this->hasMany('App\Quiz');
    }
    public function markingScheme(){
        return $this->hasMany('App\MarkingScheme');
    }
    public function awards(){
        return $this->hasMany('App\Award');
    }
    public function reports(){
        return $this->hasMany('App\Report');
    }
    public function payments(){
        return $this->hasMany('App\Payment');
    }
    public function messages(){
        return $this->belongsTo('App\Message');
    }
    public function feedbacks(){
        return $this->hasMany('App\Feedback');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function likes(){
        return $this->hasMany('App\Like');
    }
    public function images(){
        return $this->hasMany('App\Image');
    }
    public function tutorials(){
        return $this->hasMany('App\Tutorial');
    }
    public function usages(){
        return $this->hasMany('App\Usage');
    }
    public function chats(){
        return $this->hasMany('App\Chat');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function violations(){
        return $this->hasMany('App\Violation');
    }
    public function recommendations(){
        return $this->belongsTo('App\Recommendation');
    }
    public function topStudents(){
        return $this->hasMany('App\TopStudent');
    }
}
