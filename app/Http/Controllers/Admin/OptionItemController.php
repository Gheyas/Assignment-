<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OptionItem;
use App\Http\Requests\Admin\OptionItemRequest;
use App\Models\Option;

class OptionItemController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Option $option)
    {
        return view('back.response.option.item.create', compact('option'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OptionItemRequest $request)
    {
        $item_data = $request->validated();
        OptionItem::create($item_data);
        return redirect(route('admin.option.show', $item_data['option_id']));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OptionItem  $optionItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(OptionItem $optionItem)
    {
        $optionItem->delete();
        return redirect()->back();
    }
}
