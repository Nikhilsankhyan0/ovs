

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
      height: 75px;
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

  
      nav a.icon {
        float: right;
        display: block;
      }
    
      

    /* @media only screen and (max-width: 600px) {
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
    } */

    @media  screen and (min-width:375px) {
 nav a{
  font-size: 12px;
  margin-left: 1%;
 }
 nav a:hover {
            /* background-color: #ddd; */
        text-decoration: none;
            color: white;
            font-size: 11.5px;

          text-shadow: 0 0 10px white ;
        }

}
@media  screen and (min-width:450px) {

  nav a{
  font-size: 15px;
  margin-left: 1%;
 }
 nav a:hover {
            /* background-color: #ddd; */
        text-decoration: none;
            color: white;
            font-size: 14.5px;

          text-shadow: 0 0 10px white ;
        }

}
@media  screen and (min-width:900px) {

  nav a{
  font-size: 20px;
  margin-left: 1%;
 }
 nav a:hover {
            /* background-color: #ddd; */
        text-decoration: none;
            color: white;
            font-size: 19.5px;

          text-shadow: 0 0 10px white ;
        }

}
@media  screen and (min-width:765px) {

  nav a{
  font-size: 18px;
  margin-left: 1%;
 }
 nav a:hover {
            /* background-color: #ddd; */
        text-decoration: none;
            color: white;
            font-size: 17.5px;

          text-shadow: 0 0 10px white ;
        }

}
@media (min-width:1280px){



}
@media  screen and (max-width:375px) {

  nav a{
  font-size: 12px;

  /* margin-left: 1%; */
 }
 nav a:hover {
            /* background-color: #ddd; */
        text-decoration: none;
            color: white;
            font-size: 11.5px;

          text-shadow: 0 0 10px white ;
        }

}
@media  screen and (max-width:310px) {

nav a{
font-size: 10px;

}
nav a:hover {
            /* background-color: #ddd; */
        text-decoration: none;
            color: white;
            font-size: 9.5px;

          text-shadow: 0 0 10px white ;
        }
nav{
  height:90px;
}}
  </style>
</head>
<body>
<div class="sticky-top" >
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
