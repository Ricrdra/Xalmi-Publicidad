@if ( session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<ul class="nav">
    @foreach($data as $product)

        <li class="nav-item">
            <a class="nav-link" href="{{route("productos.show",$product->id)}}">{{ $product->name }}</a>
            <form method="POST" action="{{route("productos.destroy",$product->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </li>
    @endforeach
</ul>