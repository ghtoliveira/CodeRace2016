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
                    <h3>Adicionar Tag</h3>

                    <div class="padded">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('postAdicionarTag') }}">
                            {!! csrf_field() !!}
                            <div class="form-group padded-top">
                                <input type="text" name="descTag" class="form-control" id="descTag" placeholder="descTag">
                           </div>

                            <div class="form-group padded-top">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-success btn-group-justified padded">Adicionar Tag</button> <!--ORIGINAL btn btn-default-->
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
