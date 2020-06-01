<div class="container-fluid">
    <div class="row text-center mt-3">
        <div class="col">
            <h4>Preencha todos os campos abaixo:</h4>
        </div>
    </div>
    <div class="row justify-content-center pt-4">
        <div class="col-6 border p-4">
            <form action="/contatos/save" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" value="{{ old('nome') }}" id="nome" name="nome" aria-describedby="nomeHelp">
                </div>
                <div class="form-group">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" value="{{ old('sobrenome') }}" id="sobrenome" name="sobrenome" aria-describedby="sobrenomeHelp">
                </div>
                <div class="form-group">
                    <label for="sobrenome">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="email" value="{{ old('email') }}" class="form-control" name="email" id="inlineFormInputGroupUsername">
                    </div>
                </div>
                <div class="form-group">
                    <label for="nome">Empresa</label>
                    <input type="text" value="{{ old('empresa') }}" class="form-control" id="empresa" name="empresa" aria-describedby="empresaHelp">
                </div>
                <div class="form-group">
                    <label for="nome">Telefone</label>
                    <input type="text" value="{{ old('telefone') }}" class="form-control" id="telefone" name="telefone" aria-describedby="telefoneHelp">
                </div>
                <button type="submit" class="btn btn-primary float-right">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
