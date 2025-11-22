@extends('admin.layouts.app')

@section('title', 'Quản Lý Tác Giả')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">📚 Quản Lý Tác Giả</h2>
                <a href="{{ route('author.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Thêm Tác Giả
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thành công!</strong> {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Tên Tác Giả</th>
                            <th>Năm Sinh</th>
                            <th>Tiêu Đề</th>
                            <th>Tags</th>
                            <th>Trạng Thái</th>
                            <th>Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($authors as $author)
                        <tr>
                            <td>{{ $author->id }}</td>
                            <td>
                                <strong>{{ $author->name }}</strong>
                            </td>
                            <td>{{ $author->birth_year ?? 'N/A' }}</td>
                            <td>{{ $author->subtitle ?? 'N/A' }}</td>
                            <td>
                                <span class="badge badge-info">{{ $author->tag1 ?? 'N/A' }}</span>
                                <span class="badge badge-info">{{ $author->tag2 ?? 'N/A' }}</span>
                            </td>
                            <td>
                                @if($author->trashed())
                                <span class="badge badge-danger">Đã Xóa</span>
                                @else
                                <span class="badge badge-success">{{ $author->status ? 'Hoạt Động' : 'Vô Hiệu' }}</span>
                                @endif
                            </td>
                            <td>
                                @if(!$author->trashed())
                                <a href="{{ route('author.edit', $author->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> Sửa
                                </a>
                                <a href="{{ route('author.delete', $author->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Xóa tác giả này?');">
                                    <i class="fas fa-trash"></i> Xóa
                                </a>
                                @else
                                <a href="{{ route('author.restore', $author->id) }}" class="btn btn-sm btn-info">
                                    <i class="fas fa-undo"></i> Khôi Phục
                                </a>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">
                                <i class="fas fa-inbox"></i> Không có tác giả nào
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-3">
                {{ $authors->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection
