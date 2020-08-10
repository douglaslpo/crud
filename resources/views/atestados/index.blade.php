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


        <div class="col" id="bg">

            <form action="{{route('atestados.store')}}" method="POST">
                <div class="tabelaCadastroAtestado">
                    <h2 style="border: 2em; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                        <center>DADOS DO ATESTADO</center>
                    </h2>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nome fantasia:</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Nome da unidade."
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Paciente:</span>
                        </div>
                        <input type="text" class="form-control" aria-label="ID do Paciente."
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Acompanhante:</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Insira o acompanhante."
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Óbito:</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Insira a data."
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="btn-group col-md-8">
                        <button type="button" class="btn btn-primary">Adicionar</button>
                        <button type="button" class="btn btn-success">Alterar</button>
                        <button type="button" class="btn btn-danger">Excluir</button>
                        <button type="button" class="btn btn-light">Limpar</button>
                    </div>

                </div>
            </form>

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
