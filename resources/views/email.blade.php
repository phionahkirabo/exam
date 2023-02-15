@component('mail::message')
    This is your order.
    @component('mail::panel')
     name:{{$name1 }}<br> 
     qty:{{$qty1}}<br>
    unity price:{{$unity_price1 }}<br>

    @endcomponent

    Thank you

@endcomponent