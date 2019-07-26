<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guraded = [];
    public function user() {
        return $this->belogsTo('App\User');
    }
}
