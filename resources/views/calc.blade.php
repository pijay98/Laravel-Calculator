<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-3">
    <h1 class="text-center">Calculator</h1>
    <form action="{{url('op')}}" method="post">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Number 1</label>
    <input type="number" name="first" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Number 2</label>
    <input type="number" name="second" class="form-control" id="exampleInputPassword1">
  </div>
  <select name="operand" class="form-select" aria-label="Default select example">
  <option selected>Select Operator</option>
  <option value="+">Add</option>
  <option value="-">Sub</option>
  <option value="*">Mul</option>
  <option value="/">Div</option>

</select>
<div class="container my-3">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>