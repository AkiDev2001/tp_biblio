<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index() {
        $documents = Document::all();
        return view('biblio')->with('documents', $documents);
    }

    public function download(Request $request) {
//        $path = 'public/' . $request->get('file');
//        return Storage::download($path);
        return response($request->all());
    }

    public function destroy(Request $request) {
        $path = $request->get('to_delete');
        $document = Document::find($path);
        DB::table('documents')->where('path', $path)->delete();
        $storagePath = $document->path;
//        if (!Storage::exists($storagePath)) {
//            return back()->with(['deletion_success', 'La suppression du document a été bien faite.']);
//        } else {
//            return back()->withErrors(['deletion_echec', 'Échec de suppression.'.$document->get()]);
//        }
        Session::flash('deletion_success', 'La suppression du document a été bien faite.');
        return redirect()->back();
    }
}
