@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>Houve alguns problemas com sua entrada.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('usuarios.store')}}" method="POST">
    @csrf
    <div class="tabelaCadastroUsuario">
        <h2 style="border: 2em; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
            <center>DADOS DO USUÁRIO</center>
        </h2>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default" > Nome Fantasia:</span>
            </div>
            <input type="text" class="form-control" aria-label="Nome da Empresa"
                aria-describedby="inputGroup-sizing-default" name="id_contrato">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">CPF:</span>
            </div>
            <input type="text" class="form-control lado col-6" aria-label="CPF do Usuario"
                aria-describedby="inputGroup-sizing-default" name="cpf">
            <button type="button" class="btn btn-outline-success col-mb-4">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Nome:</span>
            </div>
            <input type="text" class="form-control" aria-label="Nome do Usuario"
                aria-describedby="inputGroup-sizing-default" name="nome">
            <button type="button" class="btn btn-outline-success">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </div>


        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td scope="col">{{ $usuario->nome }}</td>
                        <td scope="col">{{ $usuario->cpf }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>



        <center>
            <div class="btn-group col-md-12">
                <button type="submit" class="btn btn-primary">Incluir</button>
                <button type="button" class="btn btn-danger">Excluir</button>
                <button type="button" class="btn btn-light">Limpar</button>
            </div>
        </center>
    </div>
</form>