@extends('backend.master')

@section('title')
Edit Category
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
                    <h4 class="card-title">Edit Category</h4>

                    <form class="forms-sample" action="{{ route('category.update', $category->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="title" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="cat_name"
                                    value="{{ $category->cat_name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea name="cat_description" class="form-control" cols="30"
                                    rows="6">{{ $category->cat_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-3 col-form-label">Old Image</label>
                            <div class="col-sm-9">
                                <img src="{{ asset('backend/images/category/'.$category->cat_image) }}" width="120"
                                    height="120" alt="Product Image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-3 col-form-label">New Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="cat_image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-sm-3 col-form-label">Parent Category</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="parent_id">
                                    <option value="">Primary</option>
                                    @foreach ($main_categories as $cat)
                                    <option value="{{ $cat->id }}"
                                        {{ $cat->id == $category->parent_id ? 'selected' : '' }}>{{ $cat->cat_name }}
                                    </option>
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
                            <button type="submit" class="btn btn-success mr-2">Update</button>
                            <a class="btn btn-light" href="{{ route('category.index') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
