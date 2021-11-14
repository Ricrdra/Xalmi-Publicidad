@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-12 offset-md-2 col-md-8">

            <form action="{{route("productos.store")}}">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="name" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="description"
                           placeholder="Descripcion">
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" id="precio" name="price" placeholder="Precio">
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio">
                </div>
                <div class="form-group">
                    <label for="categoria">Subcategory</label>
                    <select class="form-control" id="categoria" name="category_id">
                        @foreach($categories as $category)

                            <option value="{{$category->id}}">{{$category->description}}
                                : {{$category->subcategory->description}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="image">Imagenes</label>
                    <input type="file" name="image" class="form-control-file" id="image">
                </div>
                <a id="addImage" class="btn btn-primary">Agregar otra</a>
                <button type="submit" class="btn btn-primary">Guardar</button>

            </form>
        </div>

    </div>
    <script>
        $(document).ready(function () {
            $("#addImage").click(function () {
                $("#addImage").before(`
            <div class="form-group">
                        <label for="image">Imagenes</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                    </div>`)
            });
        });


    </script>
@endsection