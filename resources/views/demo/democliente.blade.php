@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card col-md-12">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
                @include("demo.partials.tabledemo", compact("respuesta"))
            </div>
        </div>
    </div>
</div>
@endsection
