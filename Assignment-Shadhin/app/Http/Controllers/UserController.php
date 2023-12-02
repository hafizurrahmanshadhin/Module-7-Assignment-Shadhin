<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function addUser(Request $request) {
        $request->validate([
            'name'  => 'required',
            'email' => 'required | email',
            'age'   => 'required | numeric | min:18',
            'city'  => 'required',
        ]);

        return $request->all();
    }
}
