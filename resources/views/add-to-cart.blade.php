<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
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
        <?php $totalprice = 0; ?>
        @foreach ($food as $item)
          @csrf
          <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->price * $item->quantity }}</td>
            <td>{{ $item->quantity }}</td>
            <td><a href="{{ url('removecart', [$item->cart_id]) }}" class="btn btn-primary">Delete</a></td>    
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
      <a href="{{ url('cash_order') }}" class="btn btn-danger">Cash on Delivery</a>
      <a href="" class="btn btn-danger">Pay Using Card</a>
    </div>
  </div>
</body>
</html>
