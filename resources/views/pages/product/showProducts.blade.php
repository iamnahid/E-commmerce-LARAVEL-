
@extends('layouts.master')

@section('title')
    {{$product->title}} || E-commerce
@endsection

@section('content')

    <!-- SIDEBAR + BODY DETAILS -->
    
<div class="container-fluid margin-20">
    
    <div class="row">
        <!-- Products Body -->
        <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @php $i = 0; @endphp
                    @foreach ($product->images as $image)
                        
                        <div class="carousel-item {{$i == 0 ? 'active':'' }}">
                            <img class="d-block w-100" src="{{ asset('assets/imgs/products/'. $image->image) }}" alt="First slide">
                        </div>                   

                        @php $i++; @endphp
                    @endforeach
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
        <div class="col-md-6">
            <h1> {{$product->title}} </h1>
            <ul>
                <li>Regular Price: {{$product->price}} /=</li>
                <li>Status: {{$product->quantity < 1 ? 'Not in Stock' : 'In Stock'}}</li>
                <li>Brand: {{$product->brand_id}}</li>
                <li>Category: {{$product->category_id}}</li>
            </ul>
            <div>
                <h3>Desciption: </h3>
                <p>{{$product->description}}</p>
            </div>
            <h3 style="color:orange"> {{$product->price}} /= </h3>
            
        </div>
    </div>
    
</div>

@endsection
