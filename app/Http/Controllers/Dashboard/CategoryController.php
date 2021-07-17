<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('dashboard.pages.categories.index', compact('categories'));
    }
    public function create(){
        return view('dashboard.pages.categories.create');
    }
    public function store(Request $request){
        //dd($request->all());
        $request->validate([
            'name'=>'required|unique:categories,name',
        ]);
        $category = Category::create($request->all());
        return redirect()->route('category.index')->with(['success' => trans('category.your_category_creating_successfully')]);
    }
    public function edit($id){
        $category = Category::find($id);
        if (!$category)
            return redirect()->route('category.index')->with(['error'=>trans('general.not_found_record')]);
        return view('dashboard.pages.categories.edit', compact('category'));
    }
    public function update(Request $request, $id){
        $category = Category::find($id);
        $request->validate([
            'name'=>'required|unique:categories,name,' . $category->id,
        ]);
        $category->update($request->all());
        return redirect()->route('category.index')->with(['success' => trans('category.your_category_updating_successfully')]);
        //$user->syncPermissions($request->permissions);
    }

    public function destroy($id){
        try {
            //get specific categories and its translations
            $category = Category::find($id);
            if (!$category)
                return redirect()->route('category.index')->with(['error'=>trans('general.not_found_record')]);
            $category->delete();
            return redirect()->route('category.index')->with(['success' => trans('category.your_category_deleting_successfully')]);
        } catch (\Exception $ex) {
            return redirect()->route('category.index')->with(['error' => trans('general.some_error_happining')]);
        }
    }
}
