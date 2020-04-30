@extends('backend.master')

@section('title')
Admin Brand
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    Brand
                </div>
                <div class="card-body">
                    <h4 class="card-title">All Brand</h4>
                    @include('backend.includes.messages')
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th class="text-center" style="width: 140px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $key=>$brand)
                            <tr>
                                <td>{{ $key +1 }}</td>
                                <td>{{ $brand->br_name }}</td>
                                <td>
                                    <img src="{{ asset('backend/images/brand/'.$brand->br_image) }}" width="70"
                                        height="70" alt="Product Image">
                                </td>
                                <td>{{  $brand->br_description }}</td>
                                <td class="text-center">

                                    <a href="{{ route('brand.edit', $brand->id)}}" class="btn btn-info btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button class="btn btn-danger btn-sm" type="button" data-toggle="modal"
                                        data-target="#deleteModal{{ $brand->id }}">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal{{ $brand->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <form action="{{ route('brand.destroy', $brand->id)}}"
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
                    {{-- {{ $brands->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
