<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Newsandevent extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function scopeNewsById($query, $_id = 0)
    {
        $expr = ($_id) ? $query->whereId($_id) : $query->whereId($query->max('id'));

        return $expr;
    }

    public function scopeNewerNews($query, $since = null)
    {
        $expr = $query->orderBy('created_at', 'desc');

        return (isset($since)) ? $expr->where('created_at', '>', $since) : $expr;
    }
}
