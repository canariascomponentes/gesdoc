<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumentRequest;
use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function index(){
        $documents = Document::orderBy('id', 'desc')->paginate();
        return view('documents.index', compact('documents'));
    }

    public function create(){
        return view('documents.create');
    }

    public function store(StoreDocumentRequest $request){

        // $document = new Document();
        // $document->name = $request->name;
        // $document->description = $request->description;
        // $document->category = $request->category;
        // $document->save();
        // return redirect()->route('documents.show', $document->id);

        // $document = Document::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'category' => $request->category
        // ]); // Crea el documento y lo guarda directamente en la bbdd
        $document = Document::create($request->all()); //LA FORMA MAS SENCILLA DE CREAR DOCUMENTO. ASIGNACIÓN MASIVA EN EL MODELO DEBE TENER ACTIVADA LA PROPIEDAD FILLABLE

        return redirect()->route('documents.show', $document);
    }

    public function show(Document $document){
        // $document = Document::find($id);
        return view('documents.show', compact('document'));
    }

    public function edit(Document $document){
        // $document = Document::find($id);
        return view('documents.edit', compact('document'));
    }

    public function update(Request $request, Document $document){

        $request->validate([
            'name' =>'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        // $document->name = $request->name;
        // $document->description = $request->description;
        // $document->category = $request->category;
        // $document->save();

        $document->update($request->all()); //Asignación masiva
        return redirect()->route('documents.show', $document);
    }

    public function destroy(Document $document){
        $document->delete();
        return redirect()->route('documents.index');
    }
}
