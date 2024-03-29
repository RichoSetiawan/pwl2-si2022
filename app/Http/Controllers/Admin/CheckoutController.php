<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Mail;
use App\Mail\Checkout\Paid;


class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout){
        $checkout->is_paid = true;
        $checkout->save();
        //send mail to user
        Mail::to($checkout->user->email)->send(new Paid($checkout));
        //return to admin dashboard with alert success
        $request->session()->flash('success', "Checkout with ID {$checkout->id} has been updated!");
        return redirect (route('admin.dashboard'));
    }
}