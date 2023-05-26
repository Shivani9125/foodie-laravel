<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
<div>
    @if(session()->has('message'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
        {{ session('message') }}
      </div>
    @endif
<div class="container">
      <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Remove</th>
              <th>Order Now</th> 
            </tr>
  </thead>
  <tbody>
        <?php $totalprice = 0; ?>
        @foreach ($food as $item)
          @csrf
          <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->price * $item->quantity }}</td>
            <td>{{ $item->quantity }}</td>
            <td><a href="{{ url('removeorder', [$item->direct_orders_id]) }}" class="btn btn-primary">Delete</a></td>
            <?php $totalprice = $totalprice + $item->price * $item->quantity ?>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div>
      <h2 style="text-align:center;">Total Price : {{ $totalprice }}</h2>
    </div>
    <div>
      <h2 style="font-size:25px; padding-bottom:15px;">Proceed to Order</h2>
      <a href="{{ url('cash_on_delivery')}}" class="btn btn-danger">Cash on Delivery</a>
      <a href="{{ url('checkout')}}" class="btn btn-danger">Pay Using Card</a>
    </div>
  </div>
</body>
</html>