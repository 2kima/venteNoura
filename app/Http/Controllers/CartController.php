<?php

namespace App\Http\Controllers;
use App\Produit;
use Illuminate\Http\Request;



class CartController extends Controller
{
    public function poissonnerie()
    {
        $produits = Produit::all();
        dd($produits);
        return view('poissonnerie')->withTitle('E-COMMERCE STORE | POISSONNERIE')->with(['produits' => $produits]);
    }
   

    public function Cart()  {
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
        return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;


    }

    public function add(Request$request){
        \Cart::add(array(
           'id' => $request->id,
            'name' => $request->name,
            'prix' => $request->prix,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('message_de_sucess', 'bien valider!');
    }


public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('message_de_sucess', 'bien supprimer!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('message_de_sucess', 'mise a joue valider!');
    }
    public function clear(){
        \Cart::clear();
        return redirect()->route('cart')->with('message_de_sucess', 'bien supprimer!');
    }
 }