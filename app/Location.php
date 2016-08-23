<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    // Specify table name for model
    public $table = "locations";

    // Methods
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

}
