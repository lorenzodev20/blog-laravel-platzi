@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Nuevo Articulo</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Titulo *</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="file">Imagen</label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                            <div class="form-group">
                                <label for="body">Contenido *</label>
                                <textarea name="body" id="body" rows="6" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="iframe">Contenido Embebido </label>
                                <textarea name="iframe" id="iframe" class="form-control"></textarea>
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
