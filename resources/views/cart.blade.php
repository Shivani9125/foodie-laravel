<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('cssfiles/cart.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
<div class="input-group mb-3">
    <form action="">
        <input class="form-control" type="search" placeholder="Search" name="search" value="{{$search}}">
        <button type="submit" class="btn btn-primary">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form>
</div>
<div class="flex">   
@foreach ($foods as $item)
<div class="card">
<img src="images/{{$item->image}}" class="card-img" alt="">
<h2>{{$item->name}}</h2>
<h3>{{$item->price}}</h3>
<p>{{$item->description}}</p>
<div>
    <form action="add-to-cart" method="post">
    @csrf
      <input type="hidden" name="item_id" value = "{{$item['Id']}}"> 
      @csrf
      <div class="input-group text-center mb-2" style="width:120px;">
             <!-- <button type="button" wire:loading.attr="disabled" wire:click="decrementQuantity{{$item->Id}}" class="btn btn1"><i class="fa fa-minus"></i></button>   -->
            <label class="form-label" for="quantity">Quantity: </label>
            <input type="number" name="quantity" class="form-control qty-input text-center"  min="1" value= "1">

           <!-- <button type="button" wire:click="incrementQuantity{{$item->Id}}" class="btn btn1"><i class="fa fa-plus"></i></button>  -->
</div>
    <button class="btn btn-primary">Add To Cart</button>
    </form>
</div>
        <a href=""><button class="btn btn-success">Order</button></a>
</div>
@endforeach

</div>

      
</body>
</html>