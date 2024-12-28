<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
    <nav>
        <div>
            <p class='libre'>Libre</p><p class='solucoes'>Soluções</p> 
        </div>
        <button class='navBtn'><a href="/cadastro">Novo contato</a></button>
    </nav>
    <header>
        <form class="pesquisaContainer" method="GET" action="{{ route('index') }}">
            <div class="fundoPesquisa">
                <input type="text" name="search" placeholder="Nome, Telefone ou Cidade" value="{{ $search ?? '' }}">
            </div>
        <button type="submit">Buscar</button>
        </form>
    </header>
    <main>
        <section id="contatosContainer">
        @forelse($contatos as $contato)
        
            <form class='contato' method="POST">
                @csrf
                <input type="hidden" name="_method" value="POST">
                <div class="info">
                    <div class='infoAparente'>
                        <div class='campo'>
                            <label for="">Sequencial:</label>
                            <div class="fundoCampo"><input required readonly name="id" type="number" value='{{$contato->id}}' ></div>
                        </div>
                        <div class='campo'>
                            <label for="">Nome:</label>
                            <div class="fundoCampo"><input required readonly name="Nome" type="text" value='{{$contato->Nome}}'></div>
                        </div>
                        <div class='campo'>
                            <label for="">Telefone:</label>
                            <div class="fundoCampo"><input required readonly name="Telefone" type="text" value='{{$contato->Telefone}}'></div>
                        </div>
                        <div class='campo'>
                            <label for="">Idade:</label>
                            <div class="fundoCampo"><input required readonly name="Idade" type="number" value='{{$contato->Idade}}'></div>
                        </div>
                    </div>
                    <div class="endereco">
                        <h1>Endereço</h1>
                        <div class="addressInfo">
                            <div class='campo'>
                                <label for="">CEP:</label>
                                <div class="fundoCampo"><input required readonly name="CEP" type="number" value='{{$contato->CEP}}'></div>
                            </div>
                            <div class='campo'>
                                <label for="">Rua:</label>
                                <div class="fundoCampo"><input required readonly name="Rua" type="text" value='{{$contato->Rua}}'></div>
                            </div>
                            <div class='campo'>
                                <label for="">Número:</label>
                                <div class="fundoCampo"><input required readonly name="Numero" type="number" value='{{$contato->Numero}}'></div>                </div>
                            <div class='campo'>
                                <label for="">complemento:</label>
                                <div class="fundoCampo"><input required readonly name="Complemento" type="text" value='{{$contato->Complemento}}'></div>                       </div>
                            <div class='campo'>
                                <label for="">Cidade:</label>
                                <div class="fundoCampo"><input required readonly name="Cidade" type="text" value='{{$contato->Cidade}}'></div>
                            </div>
                            <div class='campo'>
                                <label for="">Estado:</label>
                                <div class="fundoCampo"><input required readonly name="Estado" type="text" value='{{$contato->Estado}}'></div>                  </div>
                        </div>
                    </div>
                </div>
                <div class="botoes">
                    <button class='Exibir'>Exibir endereço</button>
                  
                    <button  type="submit" formaction="/cadastro/delete/{{$contato->id}}" class="Deletar">Deletar contato</button>
                    <button class='Editar'>Editar informações</button>
                  
                    <button  type="submit" formaction="/cadastro/update/{{$contato->id}}" class="save hidden ">Salvar</button>
                </div>
            </form>
        @empty
            <p>Nenhum cadastro encontrado</p>
        @endforelse
        </section>
    </main>
    {{$contatos->links()}}
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
