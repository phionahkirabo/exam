<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order_sender;
class productController extends Controller
{


    public function index(){
        //return view('student-list');
        $data = order_sender::get();
        //return $data;
        return view('product_list2',compact('data'));
    }
    public function addproduct(){
  return view('add_product2');
    }
    public function saveproduct(Request $request){
        // $request->validate([
        //     'name'=> 'required',
        //     'email'=> 'required',
        //     'phone'=> 'required',
        //     'addres'=> 'required',

        // ]);
$name =$request->name;
$name_of_sender =$request->name_of_sender;
$location_address =$request->location_address;
$qty =$request->qty;
$unity_price =$request->unity_price;
$order_id =$request->order_id;

       

$product = new order_sender();
$product->name = $name;
$product->name_of_sender = $name_of_sender;
$product->qty = $qty;
$product->unity_price = $unity_price;
$product->unity_price = $unity_price; 
$product->save();
return redirect()->back()->with('success','product Added successfully');
    }
public function editStudent($id){
    $data =order_sender::where('id','=',$id)->first();
    // return $data;
    return view('editProduct',compact('data'));
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
public function deletestudent($id){
    order_sender::where('id','=',$id)->delete();
return redirect('/studentlist')->with('success','product deleted successfully');
}
}
