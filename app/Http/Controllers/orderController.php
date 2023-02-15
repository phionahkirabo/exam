<?php

namespace App\Http\Controllers;
use DB;
use App\Mail\send_email;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use Illuminate\Http\Request;
use App\Models\order_sender;
use App\Models\order;
class orderController extends Controller
{


    public function index(){
        //return view('student-list');
        $data = order_sender::get();
        //return $data;
        return view('product_list2',compact('data'));
    }
    public function addproduct(){
  return view('sendorder');
    }
    public function saveproduct(Request $request){
        // $request->validate([
        //     'name'=> 'required',
        //     'email'=> 'required',
        //     'phone'=> 'required',
        //     'addres'=> 'required',

        // ]);
// $name =$request->name;
$name_of_sender =$request->names_of_sender;
$location_address =$request->location_address;
// $qty =$request->qty;
$email =$request->email;
$order_id =$request->order_id;

       

$product = new order_sender();
// $product->name = $name;
$product->names_of_sender = $name_of_sender;
// $product->qty = $qty;
$product->location_address = $location_address;
$product->email = $email; 
$product->order_id = $order_id; 
$product->save();
$order  = order::all()->where('id',$order_id);
// dd($order);
foreach ($order as $key => $value) {
    $name=$value->name;
    $qty=$value->qty;
    $unity_price=$value->unity_price;

}
$order_name =  DB::table('orders')->select('name')->where('id',$order_id)->first();
$order_qty =  DB::table('orders')->select('qty')->where('id',$order_id)->first();
$order_unityPrice =  DB::table('orders')->select('unity_price')->where('id',$order_id)->first();

// dd($order_name);
// dd($order_qty);
// dd($order_unityPrice);
// Mail::to('pkirabo221@daviscollege.com')->send(new send_email([
//     'name'=>$name,
//     'qty'=>$qty,
//     'unity_price'=>$unity_price,

// ]));

Mail::to('habumsantus@gmail.com')->send(new send_email($name, $qty,$unity_price));

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
