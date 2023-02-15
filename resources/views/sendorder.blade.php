<html>
<body>
<h2>Make an order</h2>
  {{-- @if(session::('success')):
 <div class="alert alert-success" role="alert"> 
    {{ session::get('success') }}
</div>
@endif   --}}
<form action="{{ url('saveProduct2') }}" method="post">
    @csrf
    {{-- <input type="hidden" name="DiseaseDiagnosed[]" value="{!! jsond_encode($DiseaseDiagnosed) !!}"> --}}
Names of sender: <input type="text" name="names_of_sender"><br>
location: <input type="text" name="location_address"><br>
email: <input type="email" name="email"><br>
{{-- Quantity: <input type="numbers" name="qty"><br> --}}
{{-- Unity price: <input type="numbers" name="unity_price"><br> --}}
order id: <input type="numbers" name="order_id"><br>

<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('productList2')}}" class="btn btn-dange">Back</a>

</form>

</body>
</html>