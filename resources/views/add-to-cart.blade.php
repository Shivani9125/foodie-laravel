<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
     <script type="text/javascript"></script>
</head>
<body>
  <div>
  
@if(session()->has('message'))
<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
  {{session()->get('message')}}
  </div>
@endif 
</div>
       <div class="container">
    <table class="table">
        <thead>
            <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Remove</th>
            
            

</tr>
</thead>
<tbody>
    <tr>
  <?php $totalprice=0; ?>
        @foreach ($food as $item)
          @csrf
            <td>{{$item->name}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->price*$item->quantity}}</td>
            <td>{{$item->quantity}}</td>
              <!-- <td><div class="input-group text-center mb-2" style="width:120px;">
             <button type="button" wire:loading.attr="disabled" wire:click="decrementQuantity{{$item->Id}}" class="btn btn1"><i class="fa fa-minus"></i></button>  
           <input type="text" name="quantity[{{$item->Id}}]" class="form-control qty-input text-center" value= "1">
           <button type="button" wire:click="incrementQuantity{{$item->Id}}" class="btn btn1"><i class="fa fa-plus"></i></button>   -->
            <td><a href="removecart/{{$item->cart_id}}" class="btn btn-primary">Delete</a></td>    
            
           <?php $totalprice= $totalprice + $item->price*$item->quantity ?>

</tr>
</tbody>

@endforeach
</table>
<div>       
     <h2 style="text-align:center;">Total Price : {{$totalprice}}</h2>
</div>
<div>
     <h2 style="font-size:25px; padding-bottom:15px;">Proceed to Order</h2>
     <a href="cash_order" class="btn btn-danger">Cash on Delivery</a>
     <a href="" class="btn btn-danger">Pay Using Card</a>
</div>
</div>

  
  
   

</body>
</html>