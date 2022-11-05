<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationsController extends Controller
{
    public function phaleristics_publications(){
        $publications = Publication::all();
        return view('database.phaleristics_publications', compact('publications'));
    }

    public function addpublication(){

        return view('database.addpublication');
    }

    public function addpublicationdb(Request $req){
        ob_end_clean();
        $imgname = $req->file('cover_page')->getClientOriginalName();
        $req->file('cover_page')->storeAs('public/storage/', $imgname);

        $publication = new Publication;
        $publication->cover_page=$imgname;
        $publication->isbn=$req->isbn;
        $publication->save();


        return redirect("phaleristics_publications");
    }

    public function deletePublication(Request $request, $id){
        $publication1 = Publication::query()->findOrFail($id);
        $publication1->delete();

        return redirect("phaleristics_publications");
    }
}
