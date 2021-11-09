@extends('layouts.front.layout')

@section('content')

<div class="container-fluid">
   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
         <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img
               src="https://lh3.googleusercontent.com/proxy/VMURPEqo4SWYWMPmQBPFsSu2cq8yGKnptjNeEQN_Ra_hhD7Q-Uz4QbLX1YQNIowTVZhYMW3ZvS-liBHRh1edNeKzaWB_XhXwUK61PTjt5mROVy7HV4KlOKf4ubTl7c5cmOWYtA"
               class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
               <h5>First slide label</h5>
               <p>Some representative placeholder content for the first slide.</p>
            </div>
         </div>
         <div class="carousel-item">
            <img
               src="https://lh3.googleusercontent.com/proxy/VMURPEqo4SWYWMPmQBPFsSu2cq8yGKnptjNeEQN_Ra_hhD7Q-Uz4QbLX1YQNIowTVZhYMW3ZvS-liBHRh1edNeKzaWB_XhXwUK61PTjt5mROVy7HV4KlOKf4ubTl7c5cmOWYtA"
               class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
               <h5>Second slide label</h5>
               <p>Some representative placeholder content for the second slide.</p>
            </div>
         </div>
         <div class="carousel-item">
            <img
               src="https://lh3.googleusercontent.com/proxy/VMURPEqo4SWYWMPmQBPFsSu2cq8yGKnptjNeEQN_Ra_hhD7Q-Uz4QbLX1YQNIowTVZhYMW3ZvS-liBHRh1edNeKzaWB_XhXwUK61PTjt5mROVy7HV4KlOKf4ubTl7c5cmOWYtA"
               class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
               <h5>Third slide label</h5>
               <p>Some representative placeholder content for the third slide.</p>
            </div>
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </button>
   </div>
</div>



<div class="container ">
   <div class=" row d-flex flex-wrap p-3 justify-content-center">
      <div class="card p-2 col-12  col-sm-3  mr-3 mb-3  " style="width: 18rem;">
         <img src="https://cdn.shopify.com/s/files/1/0012/7818/1440/products/Lobo3D-min_1800x1800.jpg?v=1601746091" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         </div>
       </div>
       <div class="card p-2 col-12  col-sm-3  mr-3 mb-3 " style="width: 18rem;">
         <img src="https://cdn.shopify.com/s/files/1/0012/7818/1440/products/Lobo3D-min_1800x1800.jpg?v=1601746091" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         </div>
       </div>
       <div class="card p-2 col-12  col-sm-3  mr-3 mb-3  " style="width: 18rem;">
         <img src="https://cdn.shopify.com/s/files/1/0012/7818/1440/products/Lobo3D-min_1800x1800.jpg?v=1601746091" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         </div>
       </div>
       <div class="card p-2 col-12  col-sm-3 mr-3 mb-3  " style="width: 18rem;">
         <img src="https://cdn.shopify.com/s/files/1/0012/7818/1440/products/Lobo3D-min_1800x1800.jpg?v=1601746091" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         </div>
       </div>


   </div>

</div>



@endsection