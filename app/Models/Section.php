<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded = [];

    public function menuItems()
    {
        return $this->hasMany(Menuitem::class);
    }

    public function validMenuItems($show_hidden = false)
    {
        $conditions = [['off', '=', 0]];

        if (!$show_hidden) {
            array_unshift($conditions, ['hidden', '=', 0]);
        }

        return $this->menuItems()->where($conditions);
    }

    public function scopeGuests($query)
    {
        return $query->where('role', 'guest');
    }

    public function retrieveAccessGroup($use_hidden = false)
    {
        if ($this->validMenuItems($use_hidden)->count())
            return $this->validMenuItems($use_hidden)->groupBy('access_group_id')->value('access_group_id');

        return -1;
    }

    public function scopeSectionByRole($query, $role)
    {
        return $query->where('role', $role);
    }

    public function scopeSectionByName($query, $name)
    {
        return $query->where('name', $name);
    }

    public function getTemplateAttribute()
    {
        return $this->getAttributes()['template'];
    }

    public function getViewAttribute()
    {
        return $this->getAttribute('gen_view');
    }
}
