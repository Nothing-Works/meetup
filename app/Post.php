<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    protected $appends = ['can'];

    public function getCanAttribute()
    {
        return ['delete' => auth()->user()->can('delete', $this)];
    }
}
