@extends('backend.master')

@section('title')
Admin Dashboard
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 stretch-card">
            <div class="card">
                <div class="card-header">
                    Products
                </div>
                <div class="card-body">
                    <h4 class="card-title">Create Product</h4>

                    <form class="forms-sample" action="{{ route('product.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        @include('backend.includes.messages')

                        <div class="form-group row">
                            <label for="title" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" placeholder="Enter title">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-sm-3 col-form-label">Select Category</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-sm-3 col-form-label">Select Barnd</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="brand_id">
                                    <option value="1">Abc</option>
                                    <option value="2">Def</option>
                                    <option value="3">Xyz</option>
                                    <option value="4">XXX</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="price" placeholder="Price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="offer_price" class="col-sm-3 col-form-label">Offer Price</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="offer_price" placeholder="Offer Price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="qty" class="col-sm-3 col-form-label">Quantity</label>
                            <div class="col-sm-9">
                                <input type="number" min="1" class="form-control" name="qty" placeholder="Quantity">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-3 col-form-label">Product Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control" cols="30" rows="6"
                                    placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-2">
                                <div class="form-radio">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="status" value="1">Publish
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-radio">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="status" value="0" checked>
                                        Unpublish
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="submitBtn pt-4">
                            <button type="submit" class="btn btn-success mr-2">Create</button>
                            <a class="btn btn-light" href="{{ route('product.all') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
