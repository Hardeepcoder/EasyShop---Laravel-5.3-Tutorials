<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model {

    protected $table = 'products';

    public function categories() {

        return $this->belongsToMany('Category', 'pro_cat');
    }


}
