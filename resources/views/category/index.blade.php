@extends('layouts.front.layout')
@section('content')




<div class="container-fluid ml-1  d-flex flex-wrap p-3 justify-content-center ">
    <div class=" row d-flex flex-wrap p-3 justify-content-center ">

        @foreach($data as $category)

        <div class="card p-2 d-flex justify-content-center  col-12 col-sm-6  col-lg-4 col-xl-3 mt-3 mb-3 d-flex align-items-center  " style="width: 18rem;">
            <img src="https://cdn.shopify.com/s/files/1/0012/7818/1440/products/Lobo3D-min_1800x1800.jpg?v=1601746091" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{ $category->description }}</p>
            </div>
        </div>





        @endforeach
    </div>
</div>


@endsection