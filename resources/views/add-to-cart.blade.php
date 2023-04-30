<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>
<body>
    
       <div class="container">
    <table class="table">
        <thead>
            <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Remove</th>
            <th>Order</th>
            

</tr>
</thead>
<tbody>
    <tr>

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
            <td><button type="order" class="btn btn-primary" name="order">Order</td>
           

</tr>
</tbody>
@endforeach
</table>
</div>
</body>
</html>