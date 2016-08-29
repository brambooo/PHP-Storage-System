<?php

namespace App;

use App\Location;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Specify table name for model
    public $table = "customers";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstName', 'lastName', 'zipcode', 'street', 'streetNr', 'city', 'yearlyPrice', 'location_id'];

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

    public function addLocation(Location $location)
    {
        return $this->location()->save($location);
    }

}
