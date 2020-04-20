<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    public function scopeValid($query) {
        return $query->where('off', 0)->where('status', 'verified')->where('valid_till', '>', now());
    }

    public function getUserByCheckPhrase($userset, $params)
    {
        $user = [];

        $_user_ = $userset->filter(function($value, $key) use ($params) {
            $token = $params['_token'];
            $hash = $value['checkhash'];
            return md5($token . $hash) == $params['cd'];
        });

        if(count($_user_)) {
            foreach ($_user_ as $user) { }
        }

        unset($_user_);
        return $user;
    }
}
