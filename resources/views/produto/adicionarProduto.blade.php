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
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('postAdicionarProduto') }}">
                            {!! csrf_field() !!}
                            <div class="form-group padded-top">
                                <label for="nome">Nome do produto</label>
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                            </div>
                            <div class="form-group padded-top">
                                <label for="valor">Valor do Produto</label>
                                <input type="number" name="valor" class="form-control" id="valor" placeholder="10">
                            </div>
                            <div class="form-group padded-top">
                                <label for="descricao">Descricao do Produto</label>
                                <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Produto pouco utilizado, em ótimo estado">
                            </div>

                            <div class="form-group padded-top">
                                <div class="col-md-6 col-md-offset-3">
                                    <label for="tag">Condição do Produto </label>
                                    <select class="form-control" id="tag" name="condicao">
                                        @foreach($condicoes as $condicao)
                                            <option>{{ $condicao->descricao }}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group padded-top">
                                <div class="col-md-6 col-md-offset-3">
                                    <label for="tag">Categoria do Produto </label>
                                    <select class="form-control" id="tag" name="categoria">
                                        @foreach($categorias as $categoria)
                                            <option>{{ $categoria->descricao }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group padded-top">
                                <div class="col-md-6 col-md-offset-3">
                                    <label for="tag">Tag </label>
                                    <select class="form-control" id="tag" name="tag">
                                        @foreach($tags as $tag)
                                            <option>{{ $tag->descricao }}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group padded-top">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-success btn-group-justified padded">Adicionar Produto</button> <!--ORIGINAL btn btn-default-->
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
