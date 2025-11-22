@extends('client.layouts.index')

@section('title')
    <title>{{ $pageName }}</title>
@endsection

@section('content')
    <div class="wrap-content">
        <div class="author-list-content">
            <div class="title-main mb-4">
                <span>{{ $pageName }}</span>
            </div>
            
            <!-- Search and Sort -->
            <div class="author-filters mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <form method="GET" action="{{ route('author.index') }}" class="d-flex">
                            <input type="text" name="search" class="form-control me-2" 
                                   placeholder="Tìm kiếm tác giả..." 
                                   value="{{ $search }}">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search"></i> Tìm kiếm
                            </button>
                            @if($search)
                                <a href="{{ route('author.index') }}" class="btn btn-secondary ms-2">
                                    <i class="fas fa-times"></i> Xóa
                                </a>
                            @endif
                        </form>
                    </div>
                    <div class="col-md-6 text-end">
                        <form method="GET" action="{{ route('author.index') }}" id="sort-form" class="d-inline">
                            @if($search)
                                <input type="hidden" name="search" value="{{ $search }}">
                            @endif
                            <select name="sort" class="form-control d-inline-block" style="width: auto;" onchange="document.getElementById('sort-form').submit();">
                                <option value="name_asc" {{ $sort == 'name_asc' ? 'selected' : '' }}>Sắp xếp A-Z</option>
                                <option value="name_desc" {{ $sort == 'name_desc' ? 'selected' : '' }}>Sắp xếp Z-A</option>
                                <option value="books_desc" {{ $sort == 'books_desc' ? 'selected' : '' }}>Nhiều sách nhất</option>
                                <option value="books_asc" {{ $sort == 'books_asc' ? 'selected' : '' }}>Ít sách nhất</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Author List -->
            @if($authors->count() > 0)
                <div class="author-grid">
                    <div class="row">
                        @foreach ($authors as $author)
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="author-card text-center" data-aos="fade-up" data-aos-duration="1000">
                                    <a href="{{ route('author.detail', ['id' => $author->id]) }}" class="text-decoration-none">
                                        <div class="author-card-image mb-3">
                                            <img src="{{ !empty($author->photo_path) ? $author->photo_path : asset('assets/noimage.jpg') }}" 
                                                 alt="{{ $author->name }}" 
                                                 class="img-fluid rounded-circle"
                                                 style="width: 150px; height: 150px; object-fit: cover;">
                                        </div>
                                        <div class="author-card-info">
                                            <h4 class="author-card-name mb-2">{{ $author->name }}</h4>
                                            @if($author->age)
                                                <p class="text-muted mb-1"><small>Tuổi: {{ $author->age }}</small></p>
                                            @endif
                                            <p class="text-primary mb-0">
                                                <small>{{ $author->books_count ?? 0 }} cuốn sách</small>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <!-- Pagination -->
                    <div class="col-md-12 mt-4 text-center">
                        {{ $authors->appends(request()->query())->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            @else
                <div class="alert alert-info text-center">
                    <strong>Không tìm thấy tác giả nào!</strong>
                    @if($search)
                        <p>Thử tìm kiếm với từ khóa khác.</p>
                    @endif
                </div>
            @endif
        </div>
    </div>
@endsection

