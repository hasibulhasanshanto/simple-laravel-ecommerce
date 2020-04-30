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
                    @include('backend.includes.messages')
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 140px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key=>$product)
                            <tr>
                                <td>{{ $key +1 }}</td>
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
                                <td>
                                    @if ($product->status == 1)
                                    <label class="badge badge-success">Publish</label>
                                    @else
                                    <label class="badge badge-warning">Pending</label>
                                    @endif

                                </td>
                                {{-- <td>{{  $product->status == 1 ? 'Publish' : 'Unpublish'}}</td> --}}
                                <td class="text-center">

                                    <a href="{{ route('product.edit', $product->id)}}" class="btn btn-info btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button class="btn btn-danger btn-sm" type="button" data-toggle="modal"
                                        data-target="#deleteModal{{ $product->id }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-danger" id="exampleModalLabel">Warning!!
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center">
                                                        <h1 class="text-danger"><i class="fas fa-trash-alt"></i></h1>

                                                        <h2>Are You sure ?</h2>
                                                        <h4 class="text-danger">
                                                            <strong>If you delete once! It cann't be Undone
                                                                ....!!!</strong>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                    <form action="{{ route('product.destroy', $product->id)}}"
                                                        method="POST">

                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
