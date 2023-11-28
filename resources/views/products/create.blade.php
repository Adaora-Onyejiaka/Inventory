<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Document</title>
   
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.css') }}">

</head>
<body>
    <h1>Create a Product</h1>
  <div>

    @if ($errors->any())
    <ul>
       @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
       @endforeach

    </ul>
    @endif
  </div>



    <form action="{{route('products.store')}}" method="POST">
        @csrf
        @method('post')
    <div>
        <label for="">Name</label>
        <input type="text" name="name" placeholder="name">

    </div>
    <div>
        <label for="">Quantity</label>
        <input type="text" name="qty" placeholder="qty">

    </div>
    <div>
        <label for="">Price</label>
        <input type="text" name="price" placeholder="price">

    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name="description" placeholder="description">

    </div>

      

    <input class="btn btn-success mt-4" type="submit" name="Create"  value="Save a New Product">

    </form>
   
    <script src="{{ asset('Bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>