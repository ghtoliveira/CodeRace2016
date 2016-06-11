@extends('layouts.app')

@section('content')

    <style type="text/css">

        .centered{
            text-align: center;
        }

        .padded{
            padding: 10px;
        }

        .padded-top{
            padding-top: 20px;
        }

        .bigger-text{
            font-size: 125%;
        }

        textarea{
            max-width: 100%;
        }

    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2"> <!--<div class="col-md-10 col-md-offset-1">-->
                <div class="jumbotron panel-default centered">
                    <h3>Adicionar Produto</h3>

                    <div class="padded">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('postAdicionarOferta') }}">
                            {!! csrf_field() !!}
                            <div class="form-group padded-top">
                                <label for="titulo">Titulo da sua Oferta</label>
                                <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo">
                            </div>
                            <div class="form-group padded-top">
                                <label for="valorMinimo">Valor minimo de interesse</label>
                                <input type="number" name="valorMinimo" class="form-control" id="valorMinimo" placeholder="200">
                            </div>
                            <div class="form-group padded-top">
                                <label for="valorMaximo">Valor maximo de interesse</label>
                                <input type="number" name="valorMaximo" class="form-control" id="valorMaximo" placeholder="300">
                            </div>

                            <div class="form-group padded-top">
                                <input type="number" name="produtoId" class="form-control" id="produtoId" placeholder="300">
                            </div>


                            <div class="form-group padded-top">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-success btn-group-justified padded">Adicionar Oferta</button> <!--ORIGINAL btn btn-default-->
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
