<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(15);
        return view('admin/category/index')->with(compact('categories'));
    }

    public function create()
    {
        return view('admin/category/create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required'
        ]);
        Category::create([
            'title' => request()->get('title'),
            'slug' => request()->get('slug'),
            'description' => request()->get('description'),
            'status' => 'DEACTIVE' 
        ]);
        return redirect()->to('admin/category');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit')
            ->with(compact('category'));
    }

    public function update($id)
    {
        $category = Category::find($id);
        $category->update([
            'title' => request()->get('title'),
            'slug' => request()->get('slug'),
            'description' => request()->get('description'),
        ]);
        return redirect()->to('admin/category');

    }

    public function status($id)
    {
        $category = Category::find($id);
        $newStatus = ($category->status == 'DEACTIVE') ? 'ACTIVE' : 'DEACTIVE';
        $category->update([
            'status' => $newStatus
        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}
