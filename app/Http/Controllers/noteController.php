<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;


class noteController extends Controller
{
    public function index(){

        $data = Note::all();
        // dd($data);
        return view('kode', compact('data'));
    }

    public function show($id){

        $data = Note::find($id);
        // dd($data);
        return view('detail', compact('data'));




        // $page  = 'Ini halaman ke '.$id;
        // $array = ['berenang','melompat','memanjat','kayang'];

        // return view('kode', compact('page','array'));
        // return 'Ini halaman ke '.$id;
        // return ['Halaman'=>$id];
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $request->validate([
            "title" => "required|min:5",
            "description" => "required|min:10"
        ]);

        $note = new Note;
        $note->title = $request->title;
        $note->description = $request->description;

        $note->save();
        return redirect('note');
    }

    public function edit($id){
        $data = Note::find($id);

        return view('edit', compact('data'));
    }

    public function update(Request $request, $id){
        $data = Note::find($id);

        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();

        return redirect('note');
    }

    public function destroy($id){
        $data = Note::find($id);

        $data->delete();

        return redirect('note');
    }
}
