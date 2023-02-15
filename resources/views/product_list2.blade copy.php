<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>product order list</h2>
<div style="margin-right:10%;float: right;">
    <a href="{{url('addProduct2')}}">Add</a>
</div>
<table>
  <tr>
    <th>#</th>
    <th>name_of_sende</th>
    <th>location_address</th>
    <th>name</th>
    <th>qty</th>
    <th>unity_price</th>
    <th>order_id</th>
    <th>Action</th>
  </tr>
@foreach ($data as $i=> $product)
      
  
  <tr>
    <td>{{ $i+= 1}}</td>
    <td>{{ $product->name_of_sender }}</td>
    <td>{{ $product->location_address}}</td>
    <td>{{ $product->order_id }}</td>
    <td>{{ $product->name }}</td>
    <td>{{ $product->qty }}</td>
    <td>{{ $product->unity_price}}</td>
    
    <td> <a href="{{url('editProduct/'.$product->id)}}">edit</a> | <td> <a href="{{url('deleteProduct/'.$product->id)}}">delete</a> </td>
    
  </tr>
  
  @endforeach
</table>

</body>
</html>

