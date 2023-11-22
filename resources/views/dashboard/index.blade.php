@extends('layouts.layout')
@section('content')
<div class="row">

            <div class="col-md-4 col-sm-12">
              <div class="card box-shadow-0" data-appear="appear" data-animation="slideInDown">
              <div class="card-header bg-primary white">
                  <h4 class="card-title white">Blog Posts</h4>
                </div>
              <div class="card-content">
                  <img class="card-img-top img-fluid" src="../../../app-assets/images/carousel/cvrr-01.png"
                  alt="Card image cap">
                <div class="card-content collapse show">
                  <div class="card-body border-bottom-primary">
                    <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
                  <a href="{{route('blogs.index')}}" class="btn btn-outline-primary">Go To Blogs</a>
                </div>
              </div>
            </div>
            </div>
            </div>

            <div class="col-md-4 col-sm-12">
              <div class="card box-shadow-0" data-appear="appear" data-animation="zoomIn">
                <div class="card-header white bg-success">
                  <h4 class="card-title white">Bespoke Tours</h4>
                </div>
              <div class="card-content">
                  <img class="card-img-top img-fluid" src="../../../app-assets/images/carousel/2.png"
                  alt="Card image cap">
                <div class="card-content collapse show">
                  <div class="card-body border-bottom-primary">
                    <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
                  <a href="{{route('tours.index')}}" class="btn btn-outline-success">Go To Tours</a>
                </div>
              </div>
            </div>
            </div>
            </div>

            <div class="col-md-4 col-sm-12">
              <div class="card box-shadow-0" data-appear="appear" data-animation="fadeInDown">
                <div class="card-header white bg-danger">
                  <h4 class="card-title white">Destinations</h4>
                  </div>
              <div class="card-content">
                  <img class="card-img-top img-fluid" src="../../../app-assets/images/carousel/test.png"
                  alt="Card image cap">
                <div class="card-content collapse show">
                  <div class="card-body border-bottom-primary">
                    <p class="card-text">Sweet roll marzipan pastry halvah. Cake bear claw sweet. Tootsie
                      roll pie marshmallow lollipop chupa chups donut fruitcake cake.</p>
                  <a href="{{route('destinations.index')}}" class="btn btn-outline-danger">Go To Destinations</a>
                </div>
              </div>
            </div>
            </div>
            </div>
            </div>



@endsection
