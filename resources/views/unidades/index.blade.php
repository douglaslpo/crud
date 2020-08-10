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

            <form action="{{route('unidades.store')}}" method="POST" enctype="multipart/form-data">
                <div class="tabelaCadastroUnidade">
                    <h2 style="border: 2em; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                        <center>DADOS DA UNIDADE</center>
                    </h2>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default" name="nomeFantasia">Nome fantasia:</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Insira o CNPJ."
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">E-Mail:</span>
                        </div>
                        <input type="text" class="form-control" name="email" aria-label="Insira o email da Unidade."
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Estado:</span>
                        </div>
                        <select class="form-control" id="selectStatus" name="estado">
                            <option value="">Selecione</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Cidade:</span>
                        </div>
                        <input type="text" class="form-control"  name="cidade" aria-label="Insira a Cidade da Unidade."
                            aria-describedby="inputGroup-sizing-default">
                    </div>


                    <div class="input-group mb-2 ">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Logomarca:</span>
                        </div>
                        <input type="file" class="form-control" name="logotipo" aria-describedby="Logo da Unidade">
                    </div>
                    <div class="input-group col-sm-6 lado mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Tipo:</span>
                        </div>
                        <select class="form-control" id="selectStatus">
                            <option value="">Json</option>
                            <option value="">Webview</option>
                            <option value="">XML</option>
                            <option value="">HL7</option>
                        </select>
                    </div>
                    <div class="input-group col-sm-6 lado mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Status:</span>
                        </div>
                        <select class="form-control" name="status">
                            <option class="fisica">Ativo</option>
                            <option class="juridica">Inativo</option>
                        </select>
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
