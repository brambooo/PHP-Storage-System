<?php

namespace App;

use App\Location;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Specify table name for model
    public $table = "customers";

    // Methods

    /**
     * location()
     * Get the location record that is associated with the customer.
     * belongsTo: define an inverse one-to-one or many relationship. Important to define the table above, if i did not do that i got a query error...
     * @return location record
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
