@extends('frontend.master')

@section('title')
Product Page
@endsection

@section('content')
<div class="container-fluid mt-25">
    <div class="row">
        <div class="col-md-3">
            @include('frontend.includes.sidebar')
        </div>
        <div class="col-md-9">
            <div class="widget">
                <nav aria-label="breadcrumb bg-primary">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><strong>all Products</strong></li>
                    </ol>
                </nav>

                <div class="row">
                    <!-- Single Product Area-->
                    @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="card text-center mb-3">
                            {{-- <img src="{{ asset('frontend/images/mi.jpg') }}" class="card-img-top product-image"
                            alt="Product Image"> --}}
                            @php $i= 1; @endphp
                            @foreach ($product->images as $image)
                            @if ($i>0)
                            <img src="{{ asset('frontend/images/'.$image->image) }}" class="card-img-top product-image"
                                alt="Product Image">
                            @endif

                            @php $i--; @endphp
                            @endforeach

                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p>Tk: {{ $product->price }}</p>
                                <a href="#" class="btn  btn-outline-primary">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- ./End Single Product Area-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
