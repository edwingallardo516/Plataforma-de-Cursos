@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Crear Artículo </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form
                        action=" {{ route('posts.store') }} " 
                        method="POST"
                        enctype="multipart/form-data"> <!-- // protocolo de encriptación -->
                    
                        <div class="form-group">
                            <label> Título* </label> <!-- // para campo obligatorio -->
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label> Imagen </label> <!-- // para campo obligatorio -->
                            <input type="file" name="file">
                        </div>

                        <div class="form-group">
                            <label> Contenido* </label> <!-- // para campo obligatorio -->
                            <textarea name="body" rows="6" class="form-control" required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label> Contenido embebido </label> <!-- // para campo obligatorio -->
                            <textarea name="iframe" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Enviar" class="btn btn-sm btn-primary">
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
