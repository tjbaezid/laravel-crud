<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1> Dashboard </h1>
        <a class="btn btn-success" href="./profile/add-product">Add Product</a>
        <!-- View Products -->
      
            <table  class="table">
           <thead>
               <tr>
                    <th>Product ID</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Desctiption</th>
                </tr>
            </thead>
           <tbody>
               @if ($products->count())
                          
              
                @foreach( $products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['title'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>{{ $product['category'] }}</td>
                    <td>{{ $product['description'] }}</td>
                    <td>
                        <span><a class="btn btn-warning "href="./profile/edit-product/{{ $product['id'] }}"> Update </a></span>
                         <span><a class="btn btn-danger" href="./profile/delete-product/{{ $product['id'] }}"> Delete </a></span>
    
                    </td>
                </tr>
                @endforeach
                  @else
                 <tr><td>Nothing Found!!</td></tr>
                 @endif
                
           </tbody>
        </table>
        
        
        <!-- Logout -->
        <form method="post" action="logout">
            @csrf
            <button class="btn btn-dark" type="submit">Logout</a>
        </form>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>