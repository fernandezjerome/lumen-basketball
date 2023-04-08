<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plan;

class PlanController extends Controller
{
    public function showAllStatement() {
        return response()->json(Plan::all());


    }

    public function showOneStatement($id) {
        return response()->json(Plan::find($id));
    }

}


