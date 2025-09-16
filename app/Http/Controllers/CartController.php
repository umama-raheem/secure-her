<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    //
    public function addTocart(Request $request,Book $book)
    {
        $cartItem = Cart::where('user_id',Auth::id())
        ->where('book_id',$book->id)
        ->first();

        if ($cartItem) {
            # Increase cart quanity if item already exists
            $cartItem->increment('quantity');
        }else{
            //add new item
            Cart::create([
                'user_id' => Auth::id(),
                'book_id' => $book->id,
                'quantity' => 1,
            ]);
        }
        return redirect()->back()->with('success','Item Added to cart successfully');
    }

    //View Cart data
    function viewCart(){
        $cartItems = \App\Models\Cart::with('book')->where('user_id',auth()->id())->get();
        return view('cart',compact('cartItems'));
    }

    //update Quantity
    function updateQuantity(Request $request,$id){
        $cartItem = Cart::where('id',$id)
        ->where('user_id',auth()->id())
        ->firstOrFail();

        if ($request->action == 'increase') {
            $cartItem->quantity += 1;
        }elseif($request->action == 'decrease' && $cartItem->quantity > 1){
            $cartItem->quantity -= 1;
        }

        $cartItem->save();

        return redirect()->back()->with('success','cart updated successfully..');
    }

    //Remove item from cart
    function removeFormCart($id){
        $cartItem = Cart::where('id',$id)
        ->where('user_id',auth()->id())
        ->first();

        if ($cartItem) {
            $cartItem->delete();
        return redirect()->back()->with('success','Item Remove from cart successfully..');
        }
        return redirect()->back()->with('error','Item Not found..');

    }
}
