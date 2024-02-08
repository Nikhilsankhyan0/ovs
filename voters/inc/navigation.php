


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #333;
            overflow: hidden;
            height: 70px;
            width: 100%;
            position: sticky;
        }
        nav a {
            font-size: 15px;
            margin-top: 20px;
            float: left;
            display: block;
            color: white;
            text-align: center;
            margin-right: 20px;
           
            text-decoration:none;
            width: 10%;
          
            /* Equal width for buttons */
        }

        nav a:hover {
            /* background-color: #ddd; */
        text-decoration: none;
            color: white;
            font-size: 20px;

          text-shadow: 0 0 10px white ;
        }

        .navbar-toggle {
            display: none;
        }

        /* @media only screen and (min-width: 393px) {
      nav a {
        display: none;
        width: 100%;
      } */
        nav a.icon {
            float: right;
            display: block;
        }


        @media only screen and (max-width: 600px) {
            nav.responsive a.icon {
                position: absolute;
                right: 0;
                top: 0;
            }
        }

        @media only screen and (max-width: x) {
            nav.responsive a.icon {
                position: absolute;
                right: 0;
                top: 0;

            }

            nav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <div class="sticky-top">
        <nav>
            <a href="index.php"> Home</a>
            <a href="about.php"> About</a>

            <a href="votingpanel.php">Voters Pannel</a>


            <a href="logout.php">Logout</a>
        </nav>
    </div>

    <script>
        function myFunction() {
            var x = document.querySelector("nav");
            if (x.className === "") {
                x.className = "responsive";
            } else {
                x.className = "";
            }
        }
    </script>

</body>

</html>