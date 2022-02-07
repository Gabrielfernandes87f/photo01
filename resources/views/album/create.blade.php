@extends('layouts.main')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div>
                        <form method="POST" action="{{ route('albums.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('album.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
