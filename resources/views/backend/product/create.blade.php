@extends('backend.layouts.app')

@section('title','Post')

@push('css')
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               ADD NEW Product
                            </h2>
                        </div>
                        <div class="body">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="title" class="form-control" name="title">
                                        <label class="form-label">Post Title</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="short_description" class="form-control" name="short_description">
                                        <label class="form-label">Short Description</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="image">Front Image</label>
                                    <input type="file" name="front_image">
                                </div>

                                <div class="form-group">
                                    <label for="image1">Gallery Image1</label>
                                    <input type="file" name="images[]">
                                </div>
                                <div class="form-group">
                                    <label for="image2">Gallery Image2</label>
                                    <input type="file" name="images[]">
                                </div>
                                <div class="form-group">
                                    <label for="image3">Gallery Image3</label>
                                    <input type="file" name="images[]">
                                </div>
                                <div class="form-group">
                                    <label for="image4">Gallery Image4</label>
                                    <input type="file" name="images[]">
                                </div>
                   

                            <div class="form-group">
                                <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                                        <label for="basic_checkbox_2">Discount</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="basic_checkbox_3" class="filled-in" checked="">
                                        <label for="basic_checkbox_3">Featured </label>
                            </div>
                            <div class="form-group">
                                <label for="old_password">Discount Type : </label>
                                        <input name="discount_type" type="radio" class="with-gap" id="radio_3" value="1">
                                        <label for="radio_3">Yes</label>
                                        <input name="discount_type" type="radio" class="with-gap" id="radio_4" value="0">
                                        <label for="radio_4">No</label>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="subcategory_id">
                                        <option>Select a Subcategory</option>
                                        @foreach ($subcategories as $subcategory)
                                        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('tags') ? 'focused error' : '' }}">
                                    <label for="tag">Select Tags</label>
                                    <select name="tags[]" id="tag" class="form-control show-tick" data-live-search="true" multiple>
                                        @foreach($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('sizes') ? 'focused error' : '' }}">
                                    <label for="tag">Select Sizes</label>
                                    <select name="sizes[]" id="size" class="form-control show-tick" data-live-search="true" multiple>
                                        @foreach($sizes as $size)
                                            <option value="{{ $size->id }}">{{ $size->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('colors') ? 'focused error' : '' }}">
                                    <label for="tag">Select colors</label>
                                    <select name="colors[]" id="color" class="form-control show-tick" data-live-search="true" multiple>
                                        @foreach($colors as $color)
                                            <option value="{{ $color->id }}">{{ $color->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                                <div class="header">
                                    <h2>
                                       Description
                                    </h2>
                                </div>
                                <div class="body">
                                    <textarea id="tinymce" name="description"></textarea>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="stock" class="form-control" name="stock">
                                        <label class="form-label"> stock</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="purchase_price" class="form-control" name="purchase_price">
                                        <label class="form-label"> purchase_price</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="sale_price" class="form-control" name="sale_price">
                                        <label class="form-label"> sale_price</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="brand_id">
                                            <option>Select a Brand</option>
                                            @foreach ($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick" name="unit_id">
                                            <option>Select a Unit</option>
                                            @foreach ($units as $unit)
                                            <option value="{{$unit->id}}">{{$unit->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            
                            
                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.category.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('js')
    <!-- Select Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <!-- TinyMCE -->
    <script src="{{ asset('assets/backend/plugins/tinymce/tinymce.js') }}"></script>
    <script>
        $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('assets/backend/plugins/tinymce') }}';
        });
    </script>

@endpush