<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
    ];

    public function users(){
        return $this->hasMany('App\User');
    }

    public static function  getUserRoleName($id) {
        return Role::find($id)->name;
    }

    public static function  getUserRoleId($name) {
        return Role::where('name', $name)->first()->id;
    }
}
