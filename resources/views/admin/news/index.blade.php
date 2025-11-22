@extends('admin.layouts.app')

@section('title', 'Quản Lý Bài Viết')

@section('content')
<?php
$func = new App\Helpers\Func();
?>

<div class="container-fluid pt-3">
            @if ($func->CheckPermissionAdmin(session()->get('user')['id'], 'add_news')) 
            <div class="w-100 card card-primary card-outline text-sm">
                <div class="col-md-6">
                    <a href="{{ route('news.create') }}" class="btn btn-success m-2">Thêm</a>
                </div>
            </div>
            @endif 
            <div class="w-100 card card-primary card-outline text-sm px-3 py-3">
                <form action="" class="form-inline" method="GET">
                    @csrf
                    <input class="search-keyword form-control border-end-0 border"
                        value="{{ request()->get('search_keyword') }}" type="search" name="search_keyword"
                        placeholder="Nhập từ khóa để tìm kiếm">
                    <input type="hidden" id="search_route" value="{{ route('news.index') }}">
                    <div class="input-group-append bg-primary rounded-right">
                        <button class="btn btn-navbar text-white" onclick="onSearch()" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="row"> 
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Tên Bài viết</th>
                                <th scope="col">Hình Ảnh</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!$newspost->isEmpty())
                                @foreach ($newspost as $news)
                                    <tr>
                                        <td>{{ $news->name }}</td>
                                        <td>
                                            <img class="news-image-thumb" src="{{ $news->photo_path }}" alt="">
                                        </td>
                                        <td>
                                            @if ($func->CheckPermissionAdmin(session()->get('user')['id'], 'add_news'))
                                                <a href="{{ route('news.edit', ['id' => $news->id]) }}"
                                                    class="btn btn-default">Sửa</a>
                                            @endif
                                            @if ($func->CheckPermissionAdmin(session()->get('user')['id'], 'delete_news'))
                                                <a href=" "data-url="{{ route('news.delete', ['id' => $news->id]) }}"
                                                    class="btn btn-danger action_delete">Xóa</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <td colspan="2">Không tìm thấy kết quả!</td>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    {{ $newspost->links('pagination::bootstrap-5') }}
                </div>

            </div>
        </div>
    </div>

@endsection
