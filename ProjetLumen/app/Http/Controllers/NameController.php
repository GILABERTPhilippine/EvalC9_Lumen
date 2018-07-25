<?php

namespace App\Http\Controllers;

use App\Name;

class NameController extends Controller
{
    var $name = 'Michel';

    public function show(Request $request)
    {
        $name;
    }
}
