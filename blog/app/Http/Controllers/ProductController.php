<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function profile(){
        return view('profile');
    }

    public function imageUpload(Request $request){
        $count = UserInfo::where('user_id', auth()->id())->get()->count();
        
        $filename = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $filename);
        
        if($count > 0){
            UserInfo::where('user_id', auth()->id())->update([  
                'image' => $filename,
            ]);
        }else{
            UserInfo::create([
                'user_id' => auth()->id(),
                'image' => $filename
            ]);
        }
        return back()->with('success', 'Image upload successfully');       
    }

    
    // Create vendor
    public function addVendor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        }

        $user_id = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => 1
        ]);
        return back()->with('success', 'Vendor create successfully');
    }

    // Vendor list
    public function vendorList(){        
        $data['users'] = User::where('id', '!=', auth()->id())->with('userInfo')->orderBy('id', 'Desc')->get();
        return view('vendorList', $data);
    }

    // Category
    public function addCategory(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        }

        Category::create([
            'user_id' => auth()->id(),
            'name' => $request->name
        ]);
        return back()->with('success', 'Category create successfully');
    }

    public function categoryList(){
        $data['category'] = Category::where('user_id', auth()->id())->with('categoryToProduct')->orderBy('id', 'Desc')->get();
        return view('categoryList', $data);
    }

    // Product
    public function addProduct(Request $request){
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name' => 'required',
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg,webp'
        ]);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        }

        $path = "images/";
        $default = "default.jpg";
        if ($request->hasFile('photo')) {
            if ($files = $request->file('photo')) {
                $photo = $request->photo;
                $fullName = time() . "." . $photo->getClientOriginalExtension();
                $files->move(public_path($path), $fullName);
                $photoLink = $path . $fullName;
            }
        } else {
            $photoLink = $path . $default;
        }

        Product::create([
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'name' => $request->name,
            'photo' => $photoLink            
        ]);
        return back()->with('success', 'Product create successfully');
    }

    public function productList(){
        $data['category'] = Category::all();
        $data['product'] = Product::where('user_id', auth()->id())->with('productToCategory')->orderBy('id', 'Desc')->get();
        return view('productList', $data);
    }   
    
    public function allCategory(){
        $data['category'] = Category::with('categoryToProduct')->get();
        return view('productView', $data);
    }
}
