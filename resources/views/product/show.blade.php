<ul>
    <li>
        <b>Name:</b> {{$data->name}}
    </li>
    <li>
        <b> Category:</b> {{$data->category->description}}
    </li>
    <li>
        <b> Price:</b> ${{$data->price}}
    </li>
    <li>
        <b>Images:</b>
        <ul>
            @foreach ($data->productImg as $item)

                <li>
                    <img src="{{$item->image}}" width="100">
                </li>
            @endforeach

        </ul>
    </li>

</ul>
