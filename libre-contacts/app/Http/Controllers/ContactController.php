<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $contatos = Contact::when($search, function ($query, $search) {
            return $query->where('Nome', 'like', "%$search%")
                         ->orWhere('Telefone', 'like', "%$search%")
                         ->orWhere('Cidade', 'like', "%$search%");
        })->orderBy('id')
        ->paginate(5);

        return view('index', compact('contatos', 'search'));
    }


    public function cadastro()
    {
        return view('cadastro');
    }

    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->all());
        return redirect()->route('index');
    }

    public function update(Request $request, $id)
    {  
        $contact = Contact::findOrFail($id);

        $updatedFields = [];
        foreach ($request->except('_token', '_method') as $key => $value) {
            if ($contact->$key != $value) {
                $updatedFields[$key] = $value;
            }
        }

        if (!empty($updatedFields)) {
            $contact->update($updatedFields);
        }

        return redirect()->back()->with('success', 'Contato atualizado com sucesso!');
    }   

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        
        return redirect()->back()->with('success', 'Contato excluído com sucesso!');
    }

}
