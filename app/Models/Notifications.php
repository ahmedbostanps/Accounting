<?php

namespace App\Models;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    public function get_notify() {
        if($this->notifiable_type == 1) {
            return $this->belongsTo(Product::class , 'notifiable_id' , 'id');

        }
    }

}
