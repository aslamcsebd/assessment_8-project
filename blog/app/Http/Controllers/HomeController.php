<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home(Request $request){
		if(auth()->user() && $type = auth()->user()->type) {
			if($type == 'admin'){
				return redirect()->route('admin.home');
			}
			else if($type == 'vendor'){
				return redirect()->route('vendor.home');
			}
            else if($type == 'customer'){
				return redirect()->route('customer.home');
			}
		}else{
			return redirect()->route('login')->with('error', 'Email-address and password are wrong.');
		}
    }

    public function adminHome()
    {
        $data['vendor'] = User::where('type', 1)->get()->count();
        $data['customer'] = User::where('type', 2)->get()->count();
        $data['category'] = Category::all()->count();
        $data['product'] = Product::all()->count();
        return view('adminHome', $data);
    }

	public function vendorHome(){
        return redirect()->route('vendor.categoryList');
    }

    public function customerHome()
    {
        return redirect()->route('customer.categoryList')->with('success', 'Customer login successfully');
    }

	public function userSetting(){        
        $data['user'] = User::where('id', auth()->id())->with('userInfo')->first();
        return view('userSetting', $data);
    }

    public function userEdit(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'blood'=>'required',
            'dob'=>'required',
        ]);

        if($validator->fails()){
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        }

        if($request->hasFile('photo')){
            $path="images/";
            $default="default.jpg";
            if ($request->hasFile('photo')){
                if($files=$request->file('photo')){
                    $photo = $request->photo;
                    $fullName=time().".".$photo->getClientOriginalExtension();
                    $files->move(public_path($path), $fullName);
                    $photoLink = $path. $fullName;
                }
            }else{
                $photoLink = 'images/'. $default;
            }

            UserInfo::where('user_id', auth()->id())->update([
                'photo' => $photoLink,
            ]);
        }

        if($request['password'] != null){
            User::where('id', auth()->id())->update([
                'password' => Hash::make($request['password']),
            ]);
        }
    

        User::where('id', auth()->id())->update([
            'name' => $request['name'],
            'username' => $request['username'],
            'password' => Hash::make($request['password']),
            'created_at' => Carbon::now()
        ]);

        UserInfo::where('user_id', auth()->id())->update([
            'phone' => $request['phone'],
            'gender' => $request['gender'],
            'blood' => $request['blood'],
            'dob' => date('Y-m-d', strtotime($request->dob)),
        ]);

        return back()->with('success','Account edit successfully');
    }

    public function userDelete(){        
        User::find(auth()->id())->delete();
        return redirect()->route('login')->with('success','Account delete successfully');
    }    

    public function userId($id){        
        User::find($id)->delete();
        return back()->with('success','Vendor delete successfully');
    }    

    public function categoryId($id){        
        Category::find($id)->delete();
        return back()->with('success','Category delete successfully');
    } 
    
    public function productId($id){        
        Product::find($id)->delete();
        return back()->with('success','Product delete successfully');
    } 
}