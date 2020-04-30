@extends('frontend.master')

@section('title')
{{ $product->title }} | Product Show
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @php $i = 1; @endphp
                    @foreach ($product->images as $image)
                    <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                        <img src="{{ asset('backend/images/products/'.$image->image) }}" class="d-block w-100"
                            alt="{{ $image->slug }}">
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
        <div class="col-md-9">
            <div class="widget px-5">
                <!-- Single Product Area-->
                <h3>{{ $product->title }}</h3>
                <h6>Price: {{ $product->price }} Tk</h6>
                <h6>SKU:
                    {{ $product->qty < 0 ? 'No item is Avaiable' : $product->qty.' item in Stock'}}
                </h6>
                <br>
                <p>Quantity:
                    <span class="pl-2">
                        <input class="item_num" type="number" value="1" min="1">
                    </span>
                </p>
                <br>
                <p>Short Description</p>
                <hr>
                <p>{{ $product->description }}</p>
                <!-- ./End Single Product Area-->
                <br>
                <button class="btn btn-success">Checkout</button>

            </div>
        </div>
    </div>
</div>
@endsection
