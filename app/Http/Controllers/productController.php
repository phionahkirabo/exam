<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
class productController extends Controller
{

    public function index(){
        //return view('student-list');
        $data = order::all();
        //return $data;
        return view('product_list',compact('data'));
    }
    public function addproduct(){
  return view('add_product');
    }
    public function saveproduct(Request $request){
        // $request->validate([
        //     'name'=> 'required',
        //     'email'=> 'required',
        //     'phone'=> 'required',
        //     'addres'=> 'required',

        // ]);
$name =$request->name;
$qty =$request->qty;
$unity_price =$request->unity_price;


$product = new order();
$product->name = $name;
$product->qty = $qty;
$product->unity_price = $unity_price;
$product->save();
return redirect()->back()->with('success','product Added successfully');
    }
public function editproduct($id){
    $data = order::where('id','=',$id)->first();
    // return $data;
    return view('product_list',compact('data'));
}
public function updatestudent(Request $request,$id){
    // $request->validate([
    //     'name'=> 'required',
    //     'email'=> 'required',
    //     'phone'=> 'required',
    //     'addres'=> 'required',

    // ]);
    //return ('update here');
$name =$request->name;
$email =$request->email;
$phone =$request->phone;
$address =$request->address;
order::where('id','=',$id)->update([
    'name'=> $name,
    'email'=> $email,
    'phone'=> $phone,
    'addres'=> $address,
]);
return redirect('/studentlist')->with('success',' product successfully');
}
public function deleteproduct($id){
    order::where('id','=',$id)->delete();
return redirect('/studentlist')->with('success','product deleted successfully');
}
}
