@extends('frontend.master')

@section('title')
Home Page
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
                        <li class="breadcrumb-item active" aria-current="page"><strong>Featured Products</strong></li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card text-center mb-3">
                            <img src="{{ asset('frontend/images/mi.jpg') }}" class="card-img-top product-image"
                                alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Tk: 23500</h5>
                                <a href="#" class="btn  btn-outline-primary">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center mb-3">
                            <img src="{{ asset('frontend/images/nokia.jpg') }}" class="card-img-top product-image"
                                alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Tk. 23500</h5>
                                <a href="#" class="btn  btn-outline-primary">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center mb-3">
                            <img src="{{ asset('frontend/images/nokia2.jpg') }}" class="card-img-top product-image"
                                alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Tk. 23500</h5>
                                <a href="#" class="btn  btn-outline-primary">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center mb-3">
                            <img src="{{ asset('frontend/images/nokia3.jpg') }}" class="card-img-top product-image"
                                alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Tk. 23500</h5>
                                <a href="#" class="btn  btn-outline-primary">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center mb-3">
                            <img src="{{ asset('frontend/images/nokia3.jpg') }}" class="card-img-top product-image"
                                alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Tk. 23500</h5>
                                <a href="#" class="btn  btn-outline-primary">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-center mb-3">
                            <img src="{{ asset('frontend/images/nokia3.jpg') }}" class="card-img-top product-image"
                                alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Tk. 23500</h5>
                                <a href="#" class="btn  btn-outline-primary">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
