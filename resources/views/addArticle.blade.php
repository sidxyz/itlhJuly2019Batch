
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/images/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Add Student</h2>
    <p class="lead">Add Courses below.</p>
  </div>

  <div class="row">
    
    <div class="col-md-12 order-md-1">
     
      <form class="needs-validation" novalidate method="POST" action="/addArticle" enctype="multipart/form-data">
        @csrf

        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="firstName">Title</label>
            <input type="text" class="form-control" name="title" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Description</label>
          <div class="input-group">
            <div class="input-group-prepend">
              
            </div>
            <input type="text" class="form-control" name="description" id="username" placeholder="description" required>
            <div class="invalid-feedback" style="width: 100%;">
              Description is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Author</label>
          <input type="text" name="author" class="form-control" id="author" >
        </div>

        <div class="mb-3">
          <label for="address2">Image</label>
          <input type="file" name="imageUrl" class="form-control" id="imageUrl" >
        </div>
        

        
        
        
        <button class="btn btn-primary btn-lg btn-block" type="submit">Click to Add</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2019 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="/js/bootstrap.bundle.min.js" ></script>
        <script src="/js/form-validation.js"></script></body>
</html>
