<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pro_cat extends Model
{
     protected $fillable = ['name'];
    protected $table = 'pro_cat';

    public function products() {
        return $this->belongsToMany('Product', 'pro_cat');
    }
}
