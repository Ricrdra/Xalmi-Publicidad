<ul class="nav">
    @foreach($data as $product)
        <li class="nav-item">
            <a class="nav-link" href="{{route("productos.show",$product->id)}}">{{ $product->name }}</a>
        </li>
    @endforeach
</ul>