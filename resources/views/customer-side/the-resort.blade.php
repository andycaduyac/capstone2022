<div id="resort">
    <h4 class="display-5 mt-4 d-flex justify-content-center">The Resort</h4>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{url('/resort-images/resort-img.png')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{url('/resort-images/resort2.jpg')}}" alt="Second slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<style>

#resort {
    -webkit-animation: fadeInUp 1.5s both;
    -moz-animation: fadeInUp 1.5s both;
    -o-animation: fadeInUp 1.5s both;
    animation: fadeInUp 1.5s both;
}
@keyframes fadeInUp {
    0%{
        opacity: 0;
        transform: translateY(30px);

    }
    100%{
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
