<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('cssfiles/cart.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
    <header class="bg-dark text-white py-3 nav">
      <div class="container d-flex justify-content-between align-items-center">
        <h1 class="m-0">Food Items</h1>
        <form class="form-inline">
            <input id="inp" class="form-control mr-sm-2" type="search" placeholder="Search..." name="search" value="{{$search}}">
            <button class="btn btn-primary btn-sm my-2 my-sm-0" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
      </div>
    </header>
    <!-- The rest of your webpage content here -->
    <main class="card-container">
        <div class="container">
            <div class="row m-2 row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                @foreach ($foods as $item)
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <img src="images/{{$item->image}}" class="card-img-top" alt="Fissure in Sandstone"/>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><b>{{$item->name}}</b></h5>
                            <p class="card-text flex-grow-1">{{$item->description}}</p>
                            <div class="text-center">
                                <button class="btn btn-primary">Add to cart</button>
                                <button class="btn btn-success">Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

    <!-- Add Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>
