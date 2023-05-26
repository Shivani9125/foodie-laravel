<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>Document</title>
</head>
<body>
    <div>
        <h1 style="text-align:center;">All Orders</h1>
    </div>
    <div class="container">
    
    <table class="table">
      <thead>
        <tr>
          <th>User Id</th>
          <th>Food Id</th>
          <th>Quantity</th>
          <th>Print PDF</th>
        </tr>

      </thead>
      <tbody>
       
       
        @foreach ($order as $order)
          @csrf
          <tr>
            <td>{{ $order->food_id }}</td>
            <td>{{ $order->user_id }}</td>
            <td>{{ $order->quantity }}</td>
            <td><a href ="{{url('print_pdf',$order->id)}}" class="btn btn-primary">Print</a></td>
           
        </tr>
        @endforeach
      </tbody>
    </table>
   
   
</div>

</body>
</html>