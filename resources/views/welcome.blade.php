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
              border-radius: 100%;
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



  <div class="media mt-5 ml-4 mr-4">
  <img id="profile" src="https://i.postimg.cc/T2rtqg8N/BW-H.jpg" class="align-self-center mr-3" alt="Hannah Keith Software Engineer">
  <div class="media-body ">
    <h5 class="mt-0">Hi, I'm Hannah</h5>
    <p>I'm a software engineer based in the Atlanta metro area. I'm passionate about supporting local farmers, and in building communities with access to fresh, local food. FarmFind is a passion project for my community. In 2018 I moved to the South Atlanta area from Asheville, NC. While I was sure that there were farmers in the area, I had no idea how to find them.</p>
    <p class="mb-0">I hope to continue to grow this project as we navigate through the many changes our societies are demanding. May we all be nourished inside and out.</p>
  </div>
</div>





    </body>
</html>
