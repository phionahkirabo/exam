<html>
<body>
<h2>Add student</h2>
  {{-- @if(session::('success')):
 <div class="alert alert-success" role="alert"> 
    {{ session::get('success') }}
</div>
@endif   --}}
<form action="{{ url('saveProduct') }}" method="post">
    @csrf
    {{-- <input type="hidden" name="DiseaseDiagnosed[]" value="{!! jsond_encode($DiseaseDiagnosed) !!}"> --}}
Name: <input type="text" name="name"><br>
Quantity: <input type="numbers" name="qty"><br>
Unity price: <input type="numbers" name="unity_price"><br>

<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('productList')}}" class="btn btn-dange">Back</a>

</form>

</body>
</html>