<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"><strong>Upload de images</strong> </div>
        <div class="panel-body">
            <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
                @csrf
                <!-- Standar Form -->
                <div class="form-inline mb-5">
                    <div class="form-group">
                        <label class="m-2" for="name">Nome</label>
                        <input type="text" name="name" class="form-control" spellcheck="true"
                            placeholder="Nome do album">
                    </div>
                    <div class="form-group">
                        <label class="m-2" for="category">Categoria</label>
                        <input type="text" name="category" class="form-control" spellcheck="true"
                            placeholder="Categoria">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Descrição</label>
                    <input type="description" name="description" class="form-control" spellcheck="true"
                        placeholder="Descrição">
                </div>
                <div class="form-inline">
                    <div class="form-group">
                        <input type="file" name="img[]" id="js-upload-files" multiple>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">upload</button>
                </div>
            </form>

            <!-- Drop Zone -->
            <h4></h4>
            <div class="upload-drop-zone" id="drop-zone">
                carregando...
            </div>

            <!-- Progress Bar -->
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                    style="width: 45%;">
                    <span class="sr-only">45% Complete</span>
                </div>
            </div>



            <!-- Upload Finished -->
            <div class="js-upload-finished">
                <h3>images carregadas</h3>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-success"><span
                            class="badge alert-success pull-right">Success</span>image-01.jpg</a>
                    <a href="#" class="list-group-item list-group-item-success"><span
                            class="badge alert-success pull-right">Success</span>image-02.jpg</a>
                    <a href="#" class="list-group-item list-group-item-success"><span
                            class="badge alert-success pull-right">Success</span>image-03.jpg</a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /container -->
