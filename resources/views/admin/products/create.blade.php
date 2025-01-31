@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12 ">
        @if (session('message'))
        <div class="alert alert-success">{{session('message')}}</div>

        @endif
        <div class="card">
            <div class="card-header">
                <h3> Add Product
                    <a href="{{ url('admin/products') }}"
                        class="btn btn-danger btn-sm text-white float-end">
                        BACK
                    </a>
                </h3>
            </div>
            <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error )
            <div>{{$error}}</div>
                @endforeach
            </div>
            @endif

                <form action="{{url('admin/products')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                        Home
                    </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="seotag-tab" data-bs-toggle="tab" data-bs-target="#seotag-tab-pane" type="button" role="tab" aria-controls="seotag-tab-pane" aria-selected="false">
                        SEO Tags
                    </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane" aria-selected="false">
                        Details
                    </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="false">
                          Product Image
                      </button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="flavours-tab" data-bs-toggle="tab" data-bs-target="#flavours-tab-pane" type="button" role="tab">
                          Product Flavour
                      </button>
                      </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                     <div class="mb-3">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                    </div>

                    <div class="mb-3">
                        <label>Product Name</label>
                        <input type="text" name="name" class="form-control"/>
                    </div>

                    <div class="mb-3">
                        <label>Product Slug</label>
                        <input type="text" name="slug" class="form-control"/>
                    </div>

                    <div class="mb-3">
                        <label>Description</label>
                       <textarea name="small_description" class="form-control" rows="4"></textarea>
                    </div>

                </div>



                <div class="tab-pane fade border p-3" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">

                    <div class="mb-3">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title"  class="form-control"/>
                    </div>

                    <div class="mb-3">
                        <label>Meta Keyword</label>
                       <textarea name="meta_keyword" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Meta Description</label>
                       <textarea name="meta_description" class="form-control" rows="4"></textarea>
                    </div>

                </div>

                <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">

                            <div class="mb3">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>

                        <div class="col -md-4">
                            <div class="mb3">
                                <label>Quantity</label>
                                <input type="text" name="quantity" class="form-control">
                            </div>
                        </div>

                        <div class="col -md-4">
                            <div class="mb3">
                                <label>Status</label>
                                <input type="checkbox" name="status" style="width: 50px; height: 50px;" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3">
                                <label>Ingredients</label>
                                <textarea name="ingredients" class="form-control" rows="4"></textarea>
                            </div>
            </div>
            <div class="tab-pane fade border p-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                <div class="mb3">
                    <label>Upload Product Images</label>
                    <input type="file" name="image[]"multiple class="form-control">
                </div>
            </div>

                <!--flavour-->
                <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

                  </div>

            </div>
        </div>
    </div>
</div>


@endsection
