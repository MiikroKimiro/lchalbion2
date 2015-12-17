<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Profile;
use App\Item;
use App\useSkill;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserProfile()
    {
        $user = Auth::user();
        $items = Item::all();
        
        $profileList = Profile::where('user_id', '=', 1)->lists('characterName', 'id');
        // $request = /* where (useSkills = profile_id)
        //               return [item_id => [tier_id], item_id => [tier_id]] */
        
        $itemList = useSkill::where('profile_id', '=', 1)
            ->join('items', 'items.id', '=', 'item_id')
            ->join('tiers', 'tiers.id', '=', 'tier_id')
            ->groupBy('items.name')
            ->get(['items.name', 'tiers.tier']);
        
        
        return view('profile.profile', compact('items', 'profileList', 'itemList'));
    }

    public function getCharacterUse(Request $request)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
