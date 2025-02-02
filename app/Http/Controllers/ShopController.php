<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'shop_name' => 'required|unique:shops,name',
        ]);

        // Créer le sous-domaine
        $domain_name = Str::slug($request->shop_name) . '.app.local';

        // Créer la boutique
        $shop = new Shop();
        $shop->user_id = auth()->id(); // Lier à l'utilisateur connecté
        $shop->name = $request->shop_name;
        $shop->domain_name = $domain_name;
        $shop->save();
        //$user=$shop->user;
     
       //return  redirect() ->route('shop.show', compact('shop','user')); 


         return redirect()->route('shopsuccess',['domain' => $domain_name]);
    
    
    }





    public function success($domain)
    {
        return view('successpage', compact('domain'));
    }
public function myDomains()
    {
        $shops = auth()->user()->shops;

        return view('userDomains', compact('shops'));
    }
    public function show(Shop $shop)
    {
        $user = $shop->user;
        return view('showShop', compact('shop', 'user'));
    }

  
}
