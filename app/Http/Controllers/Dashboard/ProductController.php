<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;
class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('dashboard.pages.products.index', compact('products'));
    }
    public function create(){
        $categories = Category::all();
        return view('dashboard.pages.products.create', compact('categories'));
    }
    public function store(Request $request){
        $rules = [
            'category_id'   =>  'required',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => 'required|unique:product_translations,name'];
            $rules += [$locale . '.description' => 'required'];
        }
        $rules += [
            'purchase_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'stock' => 'nullable|numeric',
        ];
        $request->validate($rules);
        
        $request_data = $request->all();
        if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);
        if($request->image) {
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save(public_path('uploads/products_images/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        $product = Product::create($request_data);
        return redirect()->route('product.index')->with(['success' => trans('product.your_product_creating_successfully')]);
    }
    public function edit($id){
        $categories = Category::all();
        $product = Product::find($id);
        if (!$product)
            return redirect()->route('product.index')->with(['error'=>trans('general.not_found_record')]);
        return view('dashboard.pages.products.edit', compact(['categories', 'product']));
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        $rules = [
            'category_id'   =>  'required',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.name' => ['required', Rule::unique('product_translations','name')->ignore($product->id,'product_id')]];
            $rules += [$locale . '.description' => 'required'];
        }
        $rules += [
            'purchase_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'stock' => 'nullable|numeric',
        ];
        $request->validate($rules);
        
        $request_data = $request->all();
        if (!$request->has('status'))
                $request->request->add(['status' => 0]);
            else
                $request->request->add(['status' => 1]);
        if($request->image) {
            if($product->image != 'default_product.png'){
                Storage::disk('public_uploads')->delete('/products_images/' . $product->image);
            }
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save(public_path('uploads/products_images/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        $product->update($request_data);
        return redirect()->route('product.index')->with(['success' => trans('product.your_product_updating_successfully')]);
        //$user->syncPermissions($request->permissions);
    }
    public function destroy($id){
        try {
            //get specific product and its translations
            $product = Product::find($id);
            if(!$product){
                return redirect()->route('product.index')->with(['error'=>trans('general.not_found_record')]);
            }
            if($product->image != 'default_product.png'){
                Storage::disk('public_uploads')->delete('/products_images/' . $product->image);
            }
            $product->delete();
            return redirect()->route('product.index')->with(['success' => trans('product.your_product_deleting_successfully')]);
        } catch (\Exception $ex) {
            return redirect()->route('product.index')->with(['error' => trans('general.some_error_happining')]);
        }
    }
}
