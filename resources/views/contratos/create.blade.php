@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <style type="text/css">
        #bg {
            background: rgb(241, 236, 239);
            padding: 1em;
            border: 2px solid rgb(255, 255, 255)
        }

        .lado {
            float: left;
        }

    </style>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="bg">
                    <form action="{{ route('contratos.store') }}" method="POST" enctype="multipart/form-data" name="add_contrato">
                        <div class="tabelaCadastroContrato">
                            <h2 style="border: 2em; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                                <center>DADOS DO CONTRATO</center>
                            </h2>
                            @csrf

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">CNPJ:</span>
                                    <span class="text-danger">{{ $errors->first('cnpj') }}</span>
                                </div>
                                <input type="text" name="cnpj" class="form-control" aria-label="Insira o CNPJ."
                                    aria-describedby="inputGroup-sizing-default">
                                    <button type="button" class="btn btn-outline-success col-mb-4">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Razão Social:</span>
                                    <span class="text-danger">{{ $errors->first('razao_social') }}</span>
                                </div>
                                <input type="text" class="form-control" name="razao_social" aria-label="Insira a razão social."
                                    aria-describedby="inputGroup-sizing-default">
                                    <button type="button" class="btn btn-outline-success col-mb-4">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Nome Fantasia:</span>
                                    <span class="text-danger">{{ $errors->first('nome_fantasia') }}</span>
                                </div>
                                <input type="text" class="form-control" name="nome_fantasia" aria-label="Insira o nome fantasia."
                                    aria-describedby="inputGroup-sizing-default">
                                    <button type="button" class="btn btn-outline-success col-mb-4">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">E-Mail:</span>
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                                <input type="text" class="form-control" name="email" aria-label="Insira o e-mail."
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div class="input-group mb-3 col-md-8 lado">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Logomarca:</span>
                                <span class="text-danger">{{ $errors->first('logomarca') }}</span>
                            </div>
                            <input type="file" class="form-control" name="logomarca" id="Imagem" aria-describedby="ajudaFoto">
                        </div>
                        <div class="input-group mb-3 col-md-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Status:</span>
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            </div>
                            <select class="form-control" name="status" id="selectStatus">
                                <option id="ativo">Ativo</option>
                                <option id="inativo">Inativo</option>
                            </select>
                        </div>

                        <center>
                            <div class="btn-group col-md-8">
                                <button type="submit" class="btn btn-primary" href="{{ route('contratos.create') }}">Adicionar</button>
                                <button type="button" class="btn btn-success">Alterar</button>
                                <button type="button" class="btn btn-danger">Excluir</button>
                                <button type="button" class="btn btn-light">Limpar</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid col-md-6">
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
