@extends('admin.layout.head') 
@section('title')
    <title>Thêm Tác Giả</title>
@endsection 
@section('content')
@section('css')
    <link href="{{ asset('vendors/bootstrap/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/summernote/summernote.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/admins/css/style.css') }}">
@endsection
@section('js')
    <script src="{{ asset('vendors/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('/admins/js/app.js') }}"></script>
@endsection
<div class="content-wrapper bg-white">  
    <div class="content">
        <div class="container-fluid pt-3"> 
            <form action="{{ route('author.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card card-primary card-outline text-sm">
                    <div class="d-flex px-3 py-1 my-2 ">
                        <button type="submit" class="btn btn-primary submit-check mr-2">Lưu</button>
                        <button type="reset" class="btn btn-secondary mr-2">Làm lại</button>
                        <a href="{{ route('author.index') }}" class="btn btn-danger">Thoát</a>
                    </div>
                </div>
                @csrf
                <div class="row">
                    <div class="form-author-left col-xl-8">
                        <div class="card card-primary card-outline text-sm">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Thông tin tác giả
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tên Tác Giả</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" placeholder="Nhập tên tác giả" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tuổi</label>
                                    <input type="number" class="form-control @error('age') is-invalid @enderror"
                                        name="age" placeholder="Nhập tuổi" value="{{ old('age') }}" min="1" max="150">
                                    @error('age')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Thông tin về tác giả</label>
                                    <textarea name="information" class="form-control summernote" rows="6">{{ old('information') }}</textarea>
                                    @error('information')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-author-right col-xl-4">
                        <div class="card card-primary card-outline text-sm">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Hình ảnh tác giả
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <div class="photoUpload-zone">
                                        <div class="photoUpload-detail" id="photoUpload-preview">
                                            <img class="rounded" src="{{ asset('assets/noimage.jpg') }}"
                                                alt="Alt Photo">
                                        </div>
                                        <label class="photoUpload-file" id="photo-zone" for="file-zone">
                                            <input type="file" class=" form-control-file" name="photo_path"
                                                id="file-zone">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
                                            <p class="photoUpload-or">hoặc</p>
                                            <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn
                                                hình
                                            </p>
                                        </label>
                                        <div class="photoUpload-dimension">Width: 220 px - Height: 325 px
                                            (.jpg|.png|.jpeg|.webp)</div>
                                    </div>
                                    @error('photo_path')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
@endsection

