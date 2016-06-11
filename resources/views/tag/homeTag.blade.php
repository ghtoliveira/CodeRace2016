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
                <h3>Tags</h3>
                <div class="pull-right"><a class="btn btn-success" href="/adicionar/novaTag">Adicionar Tag</a></div>              
                
                <table class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Descricao</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $tag)
                      <tr>

                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->descricao }}</td>
                        <td>Excluir</td>
                        <td>Alterar</td>
                      </tr>
                      
                    @endforeach

                    </tbody>
                  </table>



                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
