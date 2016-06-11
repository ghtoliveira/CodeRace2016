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
                    <h3>Ofertas Relacionadas</h3>

                    <div class="padded">
                        <table class="table table-bordered">
                            <tr>
                                <th>Titulo</th>
                                <th>Detalhes</th>
                                <th>Preço</th>
                            </tr>
                            @foreach($ofertas as $oferta)
                                <tr>
                                    <td>{{ $oferta->titulo }}</td>
                                    <td><a href="{{ url('/oferta/detalhe', $oferta->id) }}">Detalhes</a> </td>
                                    <td>${{ $oferta->valor }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
