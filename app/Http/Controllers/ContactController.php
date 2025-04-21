<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use Inertia\Inertia;
use Inertia\response;

class ContactController extends Controller
{

    public function index(Request $request){

    $search = $request->input('search');
    $campo = $request->input('campo', 'nome');

    $contacts = Contact::when($search, function ($query) use ($search, $campo) {
        return $query->where($campo, 'like', "%$search%");
    })->orderBy('nome')
      ->paginate(2)
      ->appends(['search' => $search, 'campo' => $campo]);

    return Inertia::render('Welcome', [
        'contacts' => $contacts,
        'search' => $search,
        'campo' => $campo,
    ]);
}


    public function create(){
        return Inertia::render('Cadastro');
    }

    public function edit(Request $request){
        return Inertia::render('Edicao', [
            'id' => $request->query('id'),
            'nome' => $request->query('nome'),
            'idade' => $request->query('idade'),
            'telefone' => $request->query('telefone'),
            'cep' => $request->query('cep'),
            'rua' => $request->query('rua'),
            'numero' => $request->query('numero'),
            'complemento' => $request->query('complemento'),
            'estado' => $request->query('estado'),
            'cidade' => $request->query('cidade'),
        ]);
    }

    public function store(Request $request){
        
        $contact = new Contact;
        $contact->nome = $request->nome; 
        $contact->telefone = $request->telefone;
        $contact->idade = $request->idade;
        $contact->cep = $request->cep;
        $contact->rua = $request->rua;
        $contact->numero = $request->numero;
        $contact->complemento = $request->complemento;
        $contact->cidade = $request->cidade;
        $contact->estado = $request->estado;

        $contact->save();

        return redirect()->route('contacts.index');
    }

    

    public function update(Request $request, $id){

    $contact = Contact::findOrFail($id);

    $contact->update($request->except('_token', '_method'));

    return redirect()->back()->with('info', 'Contato atualizado com sucesso!');
    }



    public function destroy($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contacts.index');
    }
}
