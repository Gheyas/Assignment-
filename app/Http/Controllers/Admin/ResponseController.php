<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OptionRequest;
use App\Http\Requests\Admin\OptionItemRequest;
use App\Models\Option;
use App\Models\OptionItem;

class ResponseController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        $options = Option::all();
        return view('back.response.index', compact(['options']));
    }
}
