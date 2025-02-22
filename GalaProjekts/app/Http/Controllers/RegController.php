<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegItem;

class RegController extends Controller
{
    public function RegsaveItem(Request $request)
    {
        \Log::info(json_encode($request->all()));

        $regItem = new RegItem();
        $regItem->name = $request->name;
        $regItem->surname = $request->surname;
        $regItem->email = $request->email;
        $regItem->save();
        
        return view('welcome');
    }
}