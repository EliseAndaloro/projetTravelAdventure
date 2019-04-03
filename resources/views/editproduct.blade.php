@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier un article</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('product.update', $product->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $product->name }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ $product->description }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cat" class="col-md-4 control-label">Catégorie</label>
                            <div class="col-md-6">
                                <input id="cat" type="text" class="form-control" name="categorie" value="{{ $product->categorie }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-md-4 control-label">Prix</label>
                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ $product->price }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection