<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\Http\Requests;
use DB;

class CustomersController extends Controller
{
    // Methods

    /**
     * index()
     * Shows all the customers
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // Use eloquent to get all customers from the model (See Customer model)
        $aCustomers = Customer::all();

        // Assign all customers to the view and return it
        return view('customers.index', compact('aCustomers'));
    }

    /**
     * show()
     * Shows one specific customer based on the given ID will be used for route model binding (see below)
     * @param Customer $customer
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    // Show a unique customer through route model binding
    // With the given ID as route param, Laravel will use that and convert it to a customer object (based on the given Customer model type)
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    // Long way
    public function add(Request $req)
    {
        // Initialize a new customer object
        $c = new Customer;

        // Assign values from the request to the new object
        $c->firstName   = $req->firstName;
        $c->lastName    = $req->lastName;
        $c->zipcode     = $req->zipcode;
        $c->street      = $req->street;
        $c->streetNr    = (int) $req->streetNr;     // convert input string to int
        $c->city        = $req->city;
        $c->yearlyPrice = (int) $req->yearlyPrice;  // convert input string to int
        $c->location_id = (int) $req->location_id;  // convert input string to int

        // Save into the database
        $c->save();

        return back();  // redirect back where we were.
    }

//    public function create(Customer $customer)
//    {
//        return view();
//    }

    /**
     * location()
     * get the location where this customer belongs to. A customer has none or 1 location.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

//    public function path()
//    {
//        return '/customers' . $this->id;
//    }
}
