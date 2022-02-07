@extends('layouts.main')

@section('title', 'Criar Depoimento')

@section('content')


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container mt-5">
    <div class="panel panel-default mt-5">
        <div class="panel-heading"><strong>Upload de images</strong> </div>
        <div class="panel-body">
            <form action="/testimonials" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Standar Form -->
                <div class="form-inline mb-5">
                    <div class="form-group">
                        <label class="m-2" for="name">Nome</label>
                        <input type="text" name="name" class="form-control" spellcheck="true"
                            placeholder="Nome">
                    </div>


                    <div class="form-group">
                        <label class="m-2" for="category">foto perfil</label>
                        <input type="file" name="image_testimonial" class="form-control" required class="from-control-file"
                            placeholder="foto perfil">
                    </div>
                </div>
                <div class="form-inline mb-5">
                    <div class="form-group">
                        <label class="m-2" for="name">Profissão</label>
                        <input type="text" name="profissao" class="form-control" spellcheck="true"
                            placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label class="m-2" for="name">istagram</label>
                        <input type="text" name="instagram" class="form-control" spellcheck="true"
                        placeholder="instagram">
                    </div>
                    <div class="form-group">
                        <label for="m-2">Gostou do site?</label>
                        <select name="private" id="private" class="form-control">
                            <option value="0">Não</option>
                            <option value="1">Sim</option>
                        </select>
                    </div>

                </div>
                <div class="form-group">
                    <label for="depoimento">Seu feedback</label>
                    <input type="text" name="depoimento" class="form-control" spellcheck="true"
                        placeholder="Seu feedback">
                </div>

                <div class="form-inline">
                    <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit" value="Criar Depoimento">Enviar</button>
                </div>
            </form>

            <!-- Upload Finished -->

        </div>
    </div>
</div> <!-- /container -->


@endsection
