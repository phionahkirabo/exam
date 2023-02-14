<html>
<body>
<h2>Edit student</h2>
  {{-- @if(session::('success')):
 <div class="alert alert-success" role="alert"> 
    {{ session::get('success') }}
</div>
@endif   --}}
<form action="{{ url('updateProduct',$data->id) }}" method="post">
    @csrf
   
    <input type="hidden" name ='id' value="{{ $data->id }}">
name: <input type="text" name="name" value={{$data->name}}><br>
quantity: <input type="number" name="qty" value={{$data->qty}}><br>
unity price: <input type="number" name="unity_price" value={{$data->unity_price}}><br>

<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('productList')}}" class="btn btn-dange">Back</a>

</form>

</body>
</html>