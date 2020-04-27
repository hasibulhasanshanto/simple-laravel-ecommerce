@extends('backend.master')

@section('title')
Admin Dashboard
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    Products
                </div>
                <div class="card-body">
                    <h4 class="card-title">All Products</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>1</td>
                                <td>{{  $product->title }}</td>
                                <td>
                                    @php $i= 1; @endphp
                                    @foreach ($product->images as $image)
                                    @if ($i>0)
                                    <img src="{{ asset('backend/images/products/'.$image->image) }}" width="70"
                                        height="70" alt="Product Image">
                                    @endif

                                    @php $i--; @endphp
                                    @endforeach
                                </td>
                                <td>{{  $product->category_id }}</td>
                                <td>{{  $product->brand_id }}</td>
                                <td>{{  $product->price }}</td>
                                <td>{{  $product->status }}</td>
                                <td>{{  $product->qty }}</td>
                                <td class="text-center">
                                    <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <br>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
