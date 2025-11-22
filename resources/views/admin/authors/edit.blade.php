@extends('admin.layouts.app')

@section('title', 'Chỉnh Sửa Tác Giả')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-12">
            <h2>Chỉnh Sửa Tác Giả: {{ $author->name }}</h2>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Lỗi!</strong> Vui lòng kiểm tra lại dữ liệu.
        <ul class="mb-0 mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('author.update', $author->id) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="name"><strong>Tên Tác Giả *</strong></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $author->name) }}" required>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="birth_year"><strong>Năm Sinh</strong></label>
                        <input type="number" class="form-control @error('birth_year') is-invalid @enderror" id="birth_year" name="birth_year" value="{{ old('birth_year', $author->birth_year) }}">
                        @error('birth_year')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="subtitle"><strong>Tiêu Đề Phụ</strong></label>
                        <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" value="{{ old('subtitle', $author->subtitle) }}" placeholder="Ví dụ: Nhà thơ trẽ tài năng">
                        @error('subtitle')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="bio"><strong>Tiểu Sử</strong></label>
                    <textarea class="form-control @error('bio') is-invalid @enderror" id="bio" name="bio" rows="5" placeholder="Nhập tiểu sử tác giả...">{{ old('bio', $author->bio) }}</textarea>
                    @error('bio')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tag1"><strong>Tag 1</strong></label>
                        <input type="text" class="form-control @error('tag1') is-invalid @enderror" id="tag1" name="tag1" value="{{ old('tag1', $author->tag1) }}" placeholder="Ví dụ: Lãng mạn">
                        @error('tag1')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="tag2"><strong>Tag 2</strong></label>
                        <input type="text" class="form-control @error('tag2') is-invalid @enderror" id="tag2" name="tag2" value="{{ old('tag2', $author->tag2) }}" placeholder="Ví dụ: Tình yêu">
                        @error('tag2')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="color"><strong>Màu Sắc</strong></label>
                        <input type="color" class="form-control @error('color') is-invalid @enderror" id="color" name="color" value="{{ old('color', $author->color) }}">
                        @error('color')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="status"><strong>Trạng Thái *</strong></label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                            <option value="1" {{ old('status', $author->status) == 1 ? 'selected' : '' }}>Hoạt Động</option>
                            <option value="0" {{ old('status', $author->status) == 0 ? 'selected' : '' }}>Vô Hiệu</option>
                        </select>
                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Cập Nhật
                    </button>
                    <a href="{{ route('author.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Hủy
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
