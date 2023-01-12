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
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2>Edit Product </h2>
                   
                    <form method="post">
                        @csrf
             
                        <input type="hidden" name="id" value="{{ $product['id'] }}"/>
                        <input class="form-control" type="text" name="title" value="{{ $product['title'] }}"/>
                        <input class="form-control" type="number" name="price" value="{{ $product['price'] }}"/>
                        <input class="form-control" type="text" name="category"  value="{{ $product['category'] }}"/>
                        <input class="form-control" type="text" name="description"  value="{{ $product['description'] }}"/>
                  
                        <p><button class="btn btn-primary" type="submit"> Update Product</button></p>
                    </form>
                    <p>
                        <a class="btn btn-success" href="./add-product "type="button"> Add New Product</a>
                        <a class="btn btn-warning" href="../ "type="button"> Go Back</a>
                    </p>
                </div>
            </div>
        </div>
    </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>