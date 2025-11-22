<?php 
$func = new App\Helpers\Func();  
?>
@extends('admin.layout.head') 
@section('title')
    <title>Tác Giả</title>
@endsection 
@section('content')
@section('css')
    <link href="{{ asset('vendors/bootstrap/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/admins/css/style.css') }}">
@endsection
@section('js')
    <script type="text/javascript">
        var PERMISSION = "true";
    </script>
    <script src="{{ asset('vendors/sweetarlert2/sweetarlert2.js') }}"></script>
    <script src="{{ asset('/admins/js/app.js') }}"></script>
@endsection
<div class="content-wrapper bg-white">
    <div class="content">
        <div class="container-fluid pt-3">
            <div class="w-100 card card-primary card-outline text-sm">
                <div class="col-md-6">
                    <a href="{{ route('author.create') }}" class="btn btn-success m-2">Thêm</a>
                </div>
            </div> 
            <div class="w-100 card card-primary card-outline text-sm px-3 py-3">
                <div class="card-title mb-2">Tìm kiếm Tác giả:</div>
                <form action="" class="form-inline" method="GET">
                    @csrf
                    <input class="search-keyword form-control border-end-0 border"
                        value="{{ request()->get('search_keyword') }}" type="search" name="search_keyword"
                        placeholder="Nhập từ khóa để tìm kiếm">
                    <input type="hidden" id="search_route" value="{{ route('author.index') }}">
                    <div class="input-group-append bg-primary rounded-right">
                        <button class="btn btn-navbar text-white" onclick="onSearch()" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Tên Tác Giả</th>
                            <th scope="col">Tuổi</th>
                            <th scope="col">Hình Ảnh</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!$authors->isEmpty())
                            @foreach ($authors as $author)
                                <tr>
                                    <td>{{ $author->name }}</td>
                                    <td>{{ $author->age ? $author->age : 'N/A' }}</td>
                                    <td>
                                        <img class="author-image-thumb" src="{{ !empty($author->photo_path) ? $author->photo_path : asset('assets/noimage.jpg') }}"
                                            alt="" width="80" height="80">
                                    </td>
                                    <td>
                                        <a href="{{ route('author.edit', ['id' => $author->id]) }}"
                                            class="btn btn-default">Sửa</a>
                                        <a href="" data-url="{{ route('author.delete', ['id' => $author->id]) }}"
                                            class="btn btn-danger action_delete">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4">Không tìm thấy kết quả!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                {{ $authors->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection

