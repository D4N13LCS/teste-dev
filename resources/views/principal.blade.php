<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/CSS/main.css">

    <!-- Icons and Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=expand_circle_down" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=person_add" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&display=swap" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom mb-4">
    <a class="navbar-brand ml-3" href="/contatos/cadastro">
        <span class="material-symbols-outlined">person_add</span>
    </a>
    <form class="form-inline ml-auto" action="{{ url('contatos/search') }}" method="GET">
        @csrf
        <label for="busca" class="sr-only">Buscar contato:</label>
        <input type="search" name="busca" id="busca" class="form-control mr-2" placeholder="Buscar contato" value="{{ request()->input('busca') }}">
        <label for="filtro" class="sr-only">Filtrar por:</label>
        <select name="filtro" id="filtro" class="custom-select mr-2">
            <option value="id" {{ request()->input('filtro') == 'id' ? 'selected' : '' }}>Id</option>
            <option value="nome" {{ request()->input('filtro') == 'nome' ? 'selected' : '' }}>Nome</option>
            <option value="telefone" {{ request()->input('filtro') == 'telefone' ? 'selected' : '' }}>Telefone</option>
            <option value="idade" {{ request()->input('filtro') == 'idade' ? 'selected' : '' }}>Idade</option>
            <option value="cep" {{ request()->input('filtro') == 'cep' ? 'selected' : '' }}>cep</option>
            <option value="rua" {{ request()->input('filtro') == 'rua' ? 'selected' : '' }}>rua</option>
            <option value="numero" {{ request()->input('filtro') == 'numero' ? 'selected' : '' }}>numero</option>
            <option value="complemento" {{ request()->input('filtro') == 'complemento' ? 'selected' : '' }}>complemento</option>
            <option value="cidade" {{ request()->input('filtro') == 'cidade' ? 'selected' : '' }}>cidade</option>
            <option value="estado" {{ request()->input('filtro') == 'estado' ? 'selected' : '' }}>estado</option>
        </select>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
</nav>

<main class="container">
    <h1 class="text-center mb-4">Sua lista de contatos</h1>

    <section id="contatos">
        @foreach( $contatos as $contato)
            <div class="contato card p-4 mb-4 shadow-sm rounded">
                <form action="/contatos/update/{{$contato->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="info row">
                        <div class="col-md-6 mb-3">
                            <label for="seq" class="font-weight-bold">Sequencial:</label>
                            <input type="number" id="seq" class="form-control campo" readonly value="{{$contato->id}}" name="id">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name" class="font-weight-bold">Nome:</label>
                            <input type="text" id="nome" class="form-control campo" readonly value="{{$contato->nome}}" name="nome">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Tel" class="font-weight-bold">Telefone:</label>
                            <input type="text" id="telefone" class="form-control campo" readonly value="{{$contato->telefone}}" name="telefone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age" class="font-weight-bold">Idade:</label>
                            <input type="number" id="age" class="form-control campo" readonly value="{{$contato->idade}}" name="idade">
                        </div>
                        
                    </div>
                    
                    <div class="modal col-12">
                            <div class="address-fields">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="cep" class="font-weight-bold">CEP:</label>
                                        <input type="text" id="cep" class="form-control campo" readonly value="{{$contato->cep}}" name="cep">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="rua" class="font-weight-bold">Rua:</label>
                                        <input type="text" id="rua" class="form-control campo" readonly value="{{$contato->rua}}" name="rua">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="numero" class="font-weight-bold">Número:</label>
                                        <input type="text" id="numero" class="form-control campo" readonly value="{{$contato->numero}}" name="numero">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="complemento" class="font-weight-bold">Complemento:</label>
                                        <input type="text" id="complemento" class="form-control campo" readonly value="{{$contato->complemento}}" name="complemento">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="cidade" class="font-weight-bold">Cidade:</label>
                                        <input type="text" id="cidade" class="form-control campo" readonly value="{{$contato->cidade}}" name="cidade">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="estado" class="font-weight-bold">Estado:</label>
                                        <input type="text" id="estado" class="form-control campo" readonly value="{{$contato->estado}}" name="estado">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                        <button type="submit" class="btn btn-success save" >Salvar</button>
                    </div>
                    <div class="botoes mt-3 d-flex flex-column align-items-end">
                    <button class="btn btn-outline-info address_btn mb-2">Mostrar endereço</button>
                    <button class="btn btn-outline-primary edit mb-2">Editar</button>
                   
                </div>
                    
                    
                </form>
                
                <form method="POST" action="contatos/delete/{{ $contato->id}}" id="form_del">
                        @csrf
                        @method('DELETE')
                        <button  type="submit" class="btn btn-outline-danger">Deletar contato</button>
                    </form>
                
            </div>
        @endforeach

        <div class="pagination mt-4">
            {{ $contatos->links('pagination::bootstrap-4') }}
        </div>
    </section>
</main>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="/JS/scriptMain.js"></script>
</body>
</html>
