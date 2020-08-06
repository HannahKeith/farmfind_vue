<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="../css/app.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color:##B1B3B3FF;
                color: #00203FFF;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 200vh;
                margin: 0;
            }


            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #343a40;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 300;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #picture {
              background-image:url("https://i.postimg.cc/cCfmb7C9/healthy-vegetables-hand-gardening-9301.jpg");
              background-repeat: no-repeat;
              background-size: cover;
              height: 500px;
              width: 800px;
              border-radius: 5%;
              margin: 0 auto;
              opacity: 0.9;
              margin-top: 40px;
              box-shadow: 10px 10px 5px #ccc;
            }

            #profile {
              border-radius: 10%;
              height: 400px;
              width: 300px;
            }
        </style>
    </head>
    <body>
      <div id="picture">

      </div>
        <div class="flex-center position-ref mt-4" >


            <div class="content mt-1">
                <div class="title m-b-md">
                    Welcome to FarmFind
                </div>

                <div class="links">

                  <a href="/veg">I'm Looking for Vegetables/Fruit</a>



                    <a  href="/meat">I'm looking for Meat/Eggs.</a>

                </div>
            </div>
        </div>



  <div class="media mt-5 ml-4 mr-4 pt-5">
  <img id="profile" src="https://i.postimg.cc/T2rtqg8N/BW-H.jpg" class="align-self-center " alt="Hannah Keith Software Engineer">
  <div class="media-body pt-5 ml-4 mr-4">

    <h5 class="mt-5">Hi, I'm Hannah</h5>
    <p>I'm a software engineer based in the Atlanta metro area. I'm passionate about supporting local farmers, and in building communities that are cooperative and self-sustaining. In 2018 I moved to the South Atlanta area from Asheville, NC. While I was sure that there were farmers in the area, I had no idea how to find them. While FarmFind is certainly a work in progress, I hope it can at the least provide a resource for families struggling with the new realities of post-covid life.</p>
    <p class="mb-4">May we all be nourished inside and out.</p>


 <a class="btn btn-primary" href="/contact"> Send me an Email</a>

 <a class="btn btn-primary" href="https://www.linkedin.com/in/hannahkeith/">Visit me on LinkedIN</a>

 <a class="btn btn-primary" href="https://hannahkeith.github.io/portfolio.github.io/">My Portfolio</a>


  </div>
</div>





    </body>
</html>
