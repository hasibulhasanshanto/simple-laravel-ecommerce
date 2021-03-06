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
                        <li class="breadcrumb-item active" aria-current="page"><strong>Searched Products</strong></li>
                    </ol>
                </nav>
                @include('backend.includes.messages')

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
                            <img src="{{ asset('backend/images/products/'.$image->image) }}"
                                class="card-img-top product-image" alt="Product Image">
                            @endif

                            @php $i--; @endphp
                            @endforeach

                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ route('product.show', $product->slug) }}">
                                        {{ $product->title }}
                                    </a>
                                </h5>

                                <p>Tk: {{ $product->price }}</p>

                                <a href="{{ route('product.show', $product->slug) }}"
                                    class="btn  btn-outline-success"><i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="btn  btn-outline-primary">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @if ($products == 'empty')
                    <div class="col-md-12">
                        <div class="card text-center">
                            <div class="card-body">
                                <br>
                                <br>
                                <p class="card-text"><strong>Sorry! We couldn't found this !! Please Search
                                        Again.....</strong>
                                </p>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- ./End Single Product Area-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
