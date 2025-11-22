<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorAddRequest;
use App\Http\Requests\AuthorEditRequest;
use App\Models\AuthorModel;
use App\Traits\StorageImageTrait;
use App\Traits\DeleteModelTrait;
use Illuminate\Support\Facades\Log;

class AuthorController extends Controller
{
    use StorageImageTrait, DeleteModelTrait;
    
    private $author;
    
    public function __construct(AuthorModel $author)
    {
        $this->author = $author;
    }
    
    public function index(Request $request)
    {
        $search = $request->input('search_keyword');
        $authors = null;
        
        if ($search) {
            $searchUnicode = '%' . $search . '%';
            $authors = $this->author::select('id', 'name', 'age', 'photo_path')
                ->where('name', 'LIKE', $searchUnicode)
                ->latest()
                ->paginate(10);
            $authors->setPath('author?search_keyword=' . $search);
        } else {
            $authors = $this->author->latest()->paginate(10);
        }
       
        return view('admin.author.index', compact('authors'));
    }
    
    public function create()
    {
        return view('admin.author.add');
    }
    
    public function store(AuthorAddRequest $request)
    {
        try {
            $dataCreate = [
                'name' => $request->name,
                'age' => $request->age ?? null,
                'information' => $request->information ?? '',
            ];

            $dataPhotoAuthor = $this->storagetrait($request, 'photo_path', 'author');
            
            if (!empty($dataPhotoAuthor)) {
                $dataCreate['photo_name'] = $dataPhotoAuthor['file_name'];
                $dataCreate['photo_path'] = $dataPhotoAuthor['file_path'];
            } else {
                $dataCreate['photo_name'] = '';
                $dataCreate['photo_path'] = '';
            }
            
            $this->author->create($dataCreate);
            
            return redirect()->route('author.index');
        } catch (\Exception $exception) {
            Log::error('Lỗi:' . $exception->getMessage() . 'Line:' . $exception->getLine());
            return redirect()->back()->withErrors(['error' => 'Có lỗi xảy ra khi thêm tác giả!']);
        }
    }
    
    public function edit($id)
    {
        $author = $this->author->find($id);
        return view('admin.author.edit', compact('author'));
    }
    
    public function update(AuthorEditRequest $request, $id)
    {
        try {
            $dataUpdate = [
                'name' => $request->name,
                'age' => $request->age ?? null,
                'information' => $request->information ?? '',
            ];
            
            $dataPhotoAuthor = $this->storagetrait($request, 'photo_path', 'author');
            
            if (!empty($dataPhotoAuthor)) {
                $dataUpdate['photo_name'] = $dataPhotoAuthor['file_name'];
                $dataUpdate['photo_path'] = $dataPhotoAuthor['file_path'];
            }
            
            $this->author->find($id)->update($dataUpdate);
            
            return redirect()->route('author.index');
        } catch (\Exception $exception) {
            Log::error('Lỗi:' . $exception->getMessage() . 'Line:' . $exception->getLine());
            return redirect()->back()->withErrors(['error' => 'Có lỗi xảy ra khi cập nhật tác giả!']);
        }
    }
    
    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->author);
    }
}

