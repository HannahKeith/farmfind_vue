<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Meat/Eggs</title>
  </head>
  <body>

    @include('nav')

    <div id="root">

      <ul>
        <li v-for="meat in meats" v-text="meat"></li>
      </ul>

    </div>

<script>

new Vue({
  el: "#root",
  data: {
      meats:['beef', 'chicken', 'eggs', 'cheese']

  }
})

</script>






  </body>
</html>
