<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    //
    function career(Request $req)
    {
        $career = new Career;
        $career->title=$req->input('title');
        $career->time=$req->input('time');
        $career->description=$req->input('description');
        $career->save();
        return $career;
    }
}
