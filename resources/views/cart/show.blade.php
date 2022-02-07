@extends('layouts.app')

@section('template_title')
    {{ $cart->name ?? 'Show Cart' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cart</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Images Id:</strong>
                            {{ $cart->images_id }}
                        </div>
                        <div class="form-group">
                            <strong>Comentario:</strong>
                            {{ $cart->comentario }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $cart->valor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
