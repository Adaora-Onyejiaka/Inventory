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
   <h1 class="p-3">Pharmaceutical Product</h1> 
   <div>
    @if(session()->has('success'))
    <div>
        {{session('success')}}
    </div>
    @endif
   </div>
   <div>
    <a  class="btn btn-secondary m-3" href="{{route('products.create')}}">Create A Product</a>
   </div>
<div>
    <table class="table table-success table-striped m-3">
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
         </tr>
         @foreach($products as $product)
         <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->qty}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('products.edit',['product'=>$product])}}">Edit</a>
            </td>
            <td> 
                <form action="{{route('products.destroy',['product'=>$product])}}" method="post">
                    @csrf
                    @method('delete')
                <input class="btn btn-danger" type="submit"  value="Delete">
            </form>
            </td>
         </tr>
         @endforeach 
    </table>
</div>
</body>
</html>