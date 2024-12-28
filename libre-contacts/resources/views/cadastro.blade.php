<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <nav>
        <div>
            <p class='libre'>Libre</p><p class='solucoes'>Soluções</p> 
        </div>
        <button class='navBtn'><a href="/">Voltar para home</a></button>
    </nav>
    <main id="mainCad">
        <form id="formCad" action="{{ route('novo')}}" method="POST">
            @csrf()
            <div id="containerCad">
                <div class="CampoCad">
                    <label for="">Nome:</label>
                    <input required name="Nome" type="text" placeholder='Insira um nome' value="{{ old('Nome')}}">
                </div>
                <div class="CampoCad">
                    <label for="">Telefone:</label>
                    <input required name="Telefone" type="num" placeholder='Insira o telefone' value="{{ old('Telefone')}}">
                </div>
                <div class="CampoCad">
                    <label for="">Idade:</label>
                    <input required Name="Idade" type="number" placeholder='Insira a idade' value="{{ old('Idade')}}">
                </div>
                <div class="CampoCad">
                    <label for="">Cep:</label>
                    <input required name="CEP" type="number" placeholder='Insira o cep' value="{{ old('CEP')}}">
                </div>
                <div class="CampoCad">
                    <label for="">Rua:</label>
                    <input required name="Rua" type="text" placeholder='Insira a rua ' value="{{ old('Rua')}}">
                </div>
                <div class="CampoCad">
                    <label for="">Número:</label>
                    <input required name="Numero" type="number" placeholder='Insira o número' value="{{ old('Numero')}}">
                </div>
                <div class="CampoCad">
                    <label for="">Complemento:</label>
                    <input required name="Complemento" type="text" placeholder='Insira o complemento' value="{{ old('Complemento')}}">
                </div>
                <div class="CampoCad">
                    <label for="">Cidade:</label>
                    <input required name="Cidade" type="text" placeholder='Insira a cidade' value="{{ old('Cidade')}}">
                </div>
                <div class="CampoCad">
                    <label for="">Estado:</label>
                    <input required name="Estado" type="text" placeholder='Insira o Estado' value="{{ old('Estado')}}">
                </div>
            </div>
            <button id="cadastrar" type="submit">Cadastrar</button>
        </form>
    </main>
    <script src="{{ asset('js/scriptCad.js') }}"></script>
</body>
</html>
