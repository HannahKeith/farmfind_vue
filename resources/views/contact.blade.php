<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Vegetables</title>
  </head>
  <body>

    @include('nav')

<div class="container mt-5">

  <h1 class="ml-5">I'd love to hear from you!</h1>


<form>
  <div class="form-group ml-5 mr-5">
    <label>Name</label>
    <input type="text" class="form-control" name="name">
  </div>

  <div class="form-group ml-5 mr-5">
    <label>Email</label>
    <input type="text" class="form-control" name="email">
  </div>

  <div class="form-group ml-5 mr-5">
  <label>Your Message</label>
  <textarea name="message" class="form-control"  rows="10"></textarea>
</div>

  <button type="submit" class="btn btn-primary ml-5 mr-5">Submit</button>
</form>


</div>
    </div>








  </body>
</html>
