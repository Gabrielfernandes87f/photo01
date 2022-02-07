@extends('layouts.main')


@section('content')

<div class="container-fluid  mt-5 mb-5">
    <p class="">dashboard</p>

</div>

<div class="container-fluid">
    <div class="row">
        <div class="items">
            <p>
                <span> CARRINHO</span>
                <span class="badge badge-pill badge-primary">
                    <p>Inicio For</p>
                    @foreach ($carts as $item)
                    <p class="btn btn-primary"> to aqui</p>
                        {{$item->img}}
                        {{$item->valor}}
                    @endforeach
                    <p>Fim For</p>
                </span>
            </p>
        </div>
    </div>
</div>

@endsection

