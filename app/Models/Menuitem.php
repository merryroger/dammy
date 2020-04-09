<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menuitem extends Model
{

    public function sections()
    {
        return $this->belongsTo(Section::class);
    }

    public function scopeValidItems($query, $show_hidden = false)
    {
        $conditions = [['off', '=', 0]];

        if (!$show_hidden) {
            array_unshift($conditions, ['hidden', '=', 0]);
        }

        return $query->where($conditions);
    }

    public function scopeAccess_Group($query, $access_group)
    {
        return $query->where('access_group_id', $access_group)->orderBy('order');
    }

    public function scopeItemById($query, $_id)
    {
        return $query->whereId($_id);
    }

    public function scopeItemBySection($query, $section_id)
    {
        return $query->where('section_id', $section_id);
    }

    public function buildMenu($menuset)
    {
        $ms = $menuset->where('hidden', 0);

        return $ms->reduce(function ($carry, $item) {
            if (!$carry)
                $carry = [];

            $carry[$item->purpose][] = [
                'id' => $item->id,
                'node' => $item->node,
                'mode' => $item->mode,
                'level' => $item->level,
                'parent' => $item->parent,
                'mnemo' => $item->mnemo,
                'url' => $item->url,
                'hidden' => $item->hidden,
                'section_id' => $item->section_id
            ];

            return $carry;
        });
    }

    public function buildHierarchy($menuset, $section_id)
    {
        $items = [];
        $except = ['access_group_id', 'order', 'off', 'created_at', 'updated_at'];
        $item = $menuset->where('section_id', $section_id)->first();

        while ($item) {
            $items[$item->level] = collect($item->getAttributes())->except($except)->toArray();
            $item = $menuset->where('id', $item->parent)->first();
        }

        ksort($items);

        return $items;
    }

}
