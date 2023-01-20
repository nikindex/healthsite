<?php

namespace App\Http\Controllers;

use App\Models\SiteItem;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function form(){


        $siteItem = SiteItem::all();
        return view('form', compact('siteItem'));
    }

    public function addurl(Request $request){

        $siteItem = new SiteItem();
        $siteItem->url = $request->url;
        $siteItem->save();


        return redirect()->route('home');
    }
}
