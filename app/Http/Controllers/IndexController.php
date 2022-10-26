<?php

namespace App\Http\Controllers;

use App\Models\crud_app;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function display() {
        return view('/display')
            ->with('crud_app', crud_app::all());
    }

    public function submit(Request $_request) {
        $name = $_request->input('name');
        $comment = $_request->input('comment');

        $crud = new crud_app();

        $crud->name = $name;
        $crud->comment = $comment;

        $crud->save();

        return redirect('/display');
    }
}
