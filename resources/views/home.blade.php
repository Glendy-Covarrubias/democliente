@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('democliente.index') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ver tabla de cliente demo</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
