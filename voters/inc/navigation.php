


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
            font-size: 20px;
            margin-top: 12px;
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            width: 10%;
            /* Equal width for buttons */
        }

        nav a:hover {
            text-decoration: none;
            color: white;
            font-size: 21px;

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


        @media  screen and (min-width:375px) {
 nav a{
  font-size: 12px;
  margin-left: 1%;
 }
 #log{
    margin-left: 25px;
 }

}
@media  screen and (max-width:375px) {
 nav a{
  font-size: 12px;
  margin-left: 1%;
 }
 #log{
    margin-left: 25px;
 }

}
@media  screen and (min-width:450px) {

  nav a{
  font-size: 15px;
  margin-left: 1%;
 }
 #log{
    margin-left: 20px;
 }


}
@media  screen and (min-width:900px) {

  nav a{
  font-size: 20px;
  margin-left: 1%;
 }


}
@media  screen and (min-width:765px) {

  nav a{
  font-size: 18px;
  margin-left: 1%;

 }
 nav{
    height: 80px;
 }


}
@media (min-width:1280px){



}
@media  screen and (max-width:375px) {

  nav a{
  font-size: 12px;

  /* margin-left: 1%; */
 }


}
@media  screen and (max-width:310px) {

nav a{
font-size: 10px;

}

nav{
  height:90px;
}}
    </style>
</head>

<body>
    <div class="sticky-top">
        <nav>
            <a href="index.php"> Home</a>
            <a href="about.php"> About</a>
            <a href="votingpanel.php">Elections</a>
            <a  id="log" href="logout.php">Logout</a>
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