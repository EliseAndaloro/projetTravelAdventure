@extends('layout')



@section('content')
<div class="container" style="margin-top:100px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Créer un article</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('product.store') }}">
                        {{ csrf_field() }}
<!--                         securisation -->
                        <div class="form-group">
                            <label for="product_name" class="col-md-4 control-label">Nom</label>
                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control" name="product_name" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Catégorie</label>
                            <div class="col-md-6">
                                <input id="cat" type="text" class="form-control" name="categorie" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Prix</label>
                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" required>
                            </div>
                        </div>
                        <div class="form-group">
                        	<label for="file">image</label>
  							<input type="file" id="file" name="img" multiple>
                           
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
