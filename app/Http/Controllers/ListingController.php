<?php

namespace App\Http\Controllers;


use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Listing;

class ListingController extends Controller
{
    public function listingForm(Account $user){

        
        return view('home.listing-form', ['user'=> $user]);
    }

    public function postListing(Request $request){
        $data = $request->validate([
            'item'=>'required',
            'qty' => 'required',
            'price' => 'required',
            'description' => 'required',
            'account_id' => 'required'
            
        ]);

        

        $postAdoption = Listing::create($data);
        
        return redirect(route('user.home',['user'=>$data['account_id']]));
    }
}
