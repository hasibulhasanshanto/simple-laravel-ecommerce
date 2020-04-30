@extends('backend.master')

@section('title')
Create Category
@endsection

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 stretch-card">
            <div class="card">
                <div class="card-header">
                    Category
                </div>
                <div class="card-body">
                    <h4 class="card-title">Create Category</h4>

                    <form class="forms-sample" action="{{ route('category.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="cat_name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea name="cat_description" class="form-control" cols="30" rows="6"
                                    placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-3 col-form-label">Product Images</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="cat_image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-sm-3 col-form-label">Parent Category</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="parent_id">
                                    <option value="">---- Select one ----</option>
                                    @foreach ($main_categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-2">
                                <div class="form-radio">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="status" value="1"
                                            checked>Publish
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="form-radio">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="status" value="0">
                                        Unpublish
                                        <i class="input-helper"></i>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="submitBtn pt-4">
                            <button type="submit" class="btn btn-success mr-2">Create</button>
                            <a class="btn btn-light" href="{{ route('category.index') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
