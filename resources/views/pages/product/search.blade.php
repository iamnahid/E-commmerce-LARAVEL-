
@extends('layouts.master')


@section('content')

    <!-- SIDEBAR + BODY DETAILS -->
    
    <div class="container-fluid margin-20">
    
    <div class="row">

        <!-- SIDEBAR -->
        @include('partials.sidebar')

        <!-- Products Body -->
        <div class="col-md-9" id="product-body">
            <h3>Searched Items</h3>
            <div class="row">

                @foreach($products as $product)
                    <div class="col-md-3"> 
                        <div class="card">
                            @php $i = 1; @endphp
                            @foreach ($product->images as $image)
                                @if($i>0)
                                    <a href=" {!! route('Product.show', $product->slug) !!} ">
                                        <img class="card-img-top feature-img" src="{{ asset('assets/imgs/products/'. $image->image) }}" alt="{{$product->title}}">
                                    </a>
                                @endif

                                @php $i--; @endphp
                            @endforeach
                            <div class="card-body">
                            <h4 class="card-title"><a href=" {{route('Product.show', $product->slug)}} ">{{$product->title}}</a></h4>
                                <p class="card-text">BDT {{$product->price}}</p>
                                <a href="#" class="btn btn-outline-success">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                
            </div>
        </div>
    
    </div>

</div>

<!-- END  SIDEBAR + BODY DETAILS -->

@endsection
