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
                    <h2>Add Product</h2>
                   
                    <form method="post">
                        @csrf
                      
                        
                        <input class="form-control" type="text" name="title" placeholder="Product title" required/>
                        <input class="form-control" type="number" name="price" placeholder="Product price" required/>
                        <input class="form-control" type="text" name="category" placeholder="Product category" required/>
                        <input class="form-control" type="text" name="description" placeholder="Product description" required/>
                        <p><button class="btn btn-success" type="submit"> Add Product</button></p>
                    </form>
                    <a class="btn btn-warning" href="./ "type="button"> Go Back</a>

                </div>
            </div>
        </div>
    </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>