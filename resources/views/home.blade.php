@extends("layouts.app")

@section('title', 'Home')

@section('content')
    @include("layouts.slider")
    <div id="mostrar">
        <div class="container">
            <div id="relleno"></div>
        </div>
    </div>
@endsection
