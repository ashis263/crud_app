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


    public function update($id) {
        $data = crud_app::find($id);
        return view('update', ['crud_app'=>$data]);
    }

    public function new(Request $_request) {

        $data = crud_app::find($_request->id);
        
        $name = $_request->input('name');
        $comment = $_request->input('comment');

        $data->name = $name;
        $data->comment = $comment;

        $data->save();

        return redirect('/display');
    }


    public function delete($id) {
        $data = crud_app::find($id);
        $data->delete();
        return redirect('/display');
    }


}
