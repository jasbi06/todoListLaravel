@extends('layouts.master')

@section('content')

    <div class="row">

        @foreach( $arrayEventos as $evento )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">

                <a href="{{ url('/eventos/show/' . $evento->id ) }}">
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$evento->title}}
                    </h4>
                    <h5 style="min-height:45px;margin:5px 0 10px 0">
                        {{$evento->description}}
                    </h5>
                    <h5 style="min-height:45px;margin:5px 0 10px 0">
                        {{$evento->date}}
                    </h5>
                </a>

            </div>
        @endforeach

    </div>

@stop
