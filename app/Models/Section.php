<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded = [];

    public function scopeGuests($query) {
        return $query->where('role', 'guest');
    }

    public function scopeSectionByRole($query, $role) {
        return $query->where('role', $role);
    }

    public function scopeSectionByName($query, $name) {
        return $query->where('name', $name);
    }

    public function getTemplateAttribute() {
        return $this->getAttributes()['template'];
    }

    public function getViewAttribute() {
        return $this->getAttribute('gen_view');
    }
}
