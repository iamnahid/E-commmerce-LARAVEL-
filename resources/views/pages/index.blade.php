
@extends('layouts.master')


@section('content')

    <!-- SIDEBAR + BODY DETAILS -->
    
    <div class="container-fluid margin-20">
    
    <div class="row">

        <!-- SIDEBAR -->
        @include('partials.sidebar')

        <!-- Products Body -->
        <div class="col-md-9" id="product-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width:auto">
                        <img class="card-img-top" src="{{asset('assets/imgs/product.png')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Samsung</h4>
                            <p class="card-text">BDT 59999/=</p>
                            <a href="#" class="btn btn-outline-success">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width:auto">
                        <img class="card-img-top" src="{{asset('assets/imgs/product.png')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Samsung</h4>
                            <p class="card-text">BDT 59999/=</p>
                            <a href="#" class="btn btn-outline-success">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width:auto">
                        <img class="card-img-top" src="{{asset('assets/imgs/product.png')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Samsung</h4>
                            <p class="card-text">BDT 59999/=</p>
                            <a href="#" class="btn btn-outline-success">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width:auto">
                        <img class="card-img-top" src="{{asset('assets/imgs/product.png')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Samsung</h4>
                            <p class="card-text">BDT 59999/=</p>
                            <a href="#" class="btn btn-outline-success">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width:auto">
                        <img class="card-img-top" src="{{asset('assets/imgs/product.png')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Samsung</h4>
                            <p class="card-text">BDT 59999/=</p>
                            <a href="#" class="btn btn-outline-success">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width:auto">
                        <img class="card-img-top" src="{{asset('assets/imgs/product.png')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Samsung</h4>
                            <p class="card-text">BDT 59999/=</p>
                            <a href="#" class="btn btn-outline-success">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width:auto">
                        <img class="card-img-top" src="{{asset('assets/imgs/product.png')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Samsung</h4>
                            <p class="card-text">BDT 59999/=</p>
                            <a href="#" class="btn btn-outline-success">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width:auto">
                        <img class="card-img-top" src="{{asset('assets/imgs/product.png')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Samsung</h4>
                            <p class="card-text">BDT 59999/=</p>
                            <a href="#" class="btn btn-outline-success">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

</div>

<!-- END  SIDEBAR + BODY DETAILS -->

@endsection