<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index (){

        $contatos = Contato::paginate(5);

        return view('principal', compact('contatos'));
        }
    
    public function cadastrar(){
        return view('cadastro');
    }

    

    public function store(Request $request){
        

        $contato = new Contato;
        $contato->nome = $request->nome; 
        $contato->telefone = $request->telefone;
        $contato->idade = $request->idade;
        $contato->cep = $request->cep;
        $contato->rua = $request->rua;
        $contato->numero = $request->numero;
        $contato->complemento = $request->complemento;
        $contato->cidade = $request->cidade;
        $contato->estado = $request->estado;

        $contato->save();

        return redirect('/');
    }

    public function destroy($id){

        Contato::findOrFail($id)->delete();

        return redirect('/');
    }

    public function edit( Request $request, $id){
        
        
        $contato = Contato::findOrFail($id);

        $contato->update($request->only([
            'nome', 'telefone', 'idade', 'cep', 'rua', 'numero', 'complemento', 'cidade', 'estado'
        ]));

        return redirect('/');

    }

    public function filtrar(Request $request){
    
        $busca = $request->input('busca');
        $filtro = $request->input('filtro');

       
        $query = Contato::query();

        
        if ($busca) {
            
            if ($filtro == 'id') {
                $query->where('id', 'like', '%' . $busca . '%');
            } elseif ($filtro == 'nome') {
                $query->where('nome', 'like', '%' . $busca . '%');
            } elseif ($filtro == 'telefone') {
                $query->where('telefone', 'like', '%' . $busca . '%');
            } elseif ($filtro == 'idade') {
                $query->where('idade', 'like', '%' . $busca . '%');
            }elseif ($filtro == 'cep') {
                $query->where('cep', 'like', '%' . $busca . '%');
            }elseif ($filtro == 'rua') {
                $query->where('rua', 'like', '%' . $busca . '%');
            }elseif ($filtro == 'numero') {
                $query->where('numero', 'like', '%' . $busca . '%');
            }elseif ($filtro == 'complemento') {
                $query->where('complemento', 'like', '%' . $busca . '%');
            }elseif ($filtro == 'cidade') {
                $query->where('cidade', 'like', '%' . $busca . '%');
            }elseif ($filtro == 'estado') {
                $query->where('estado', 'like', '%' . $busca . '%');
            }
        }

      
        $contatos = $query->paginate(5);

      
        return view('principal', compact('contatos'));
    }
}