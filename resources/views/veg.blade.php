<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>


    <title>Vegetables</title>
  </head>
  <body>

    <div id="root">

      <ul>
        <li v-for="farmer in farmers">{{name}}</li>
      </ul>

    </div>

<script>

new Vue({
  el: "#root",
  data: {
      farmers: [
      {
        name: Joe,
        phone: 404-876-2992,
        address: "123 farming way, fayetteville, GA",
        inventory: "squash"
      },
      {
        name: Lynn,
        phone: 404-976-2332,
        address: "456 farming dr, Newnan, GA",
        inventory: "squash"
      },

    ]

  }
})

</script>






  </body>
</html>
