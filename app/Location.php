<?php

namespace App;

use App\Customer;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    // Specify table name for model
    public $table = "locations";

    // Methods

    /**
     * customers()
     * one-to-many association
     * A location can have one or more customers models stored.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

}
