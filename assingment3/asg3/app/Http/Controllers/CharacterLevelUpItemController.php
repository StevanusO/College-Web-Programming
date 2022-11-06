<?php

namespace App\Http\Controllers;

use App\Models\CharacterLevelUpItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CharacterLevelUpItemController extends Controller
{
    public function index()
    {
        $character_level_up_items = DB::table('character_level_up_items')->get();

        return view('character_level_up_item_index', compact('character_level_up_items'));
    }

    public function insertView()
    {
        return view('character_level_up_item_insert');
    }

    public function insertHandler(Request $req)
    {
        $req->validate([
            "name" => "required|min:5",
            "description" => "required",
            "materialType" => "required",
            "rarity" => "required",
            "obtainedFrom" => "required",
            "imgUrl" => "required"
        ]);

        DB::table('character_level_up_items')->insert([
            "name" => $req->name,
            "description" => $req->description,
            "materialType" => $req->materialType,
            "rarity" => $req->rarity,
            "obtainedFrom" => $req->obtainedFrom,
            "imgUrl" => $req->imgUrl
        ]);

        return redirect()->route('Material_Character_Index');
    }

    public function deleteHandler(Request $req)
    {
        DB::table('character_level_up_items')->where('name', '=', $req->name)->delete();
        return redirect()->route('Material_Character_Index');
    }
}
