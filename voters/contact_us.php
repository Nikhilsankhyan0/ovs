<?php 
    require_once("inc/header.php");
    require_once("inc/navigation.php");
?>

<style>
         body {
            font-family: Arial, sans-serif;
            margin: 0px;
            padding: 0;
            background-color: #f4f4f4;
            text-align: justify;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        }

        main {
            padding: 1em;
            margin: 0 20px;
        }

        section {
            margin-top: 50px;
            margin-bottom: 20px;
        }

        h1 {
            color: orange;
            text-align: center;
            text-shadow:  0 0 1px orangered;
            /* text-shadow: 0 0px 2px red; */
            font-size: 30px;
            /* font-style: italic; */
        }

        .img-fluid {
            width: 250px;
            margin-left: 65px;
            /* height: auto; */

        }

        

        section li {
            color: red;
        }

        .foot {
            background-color: #f39c12;
            color: white;
            padding: 1em;
            height: 95px;
            text-align: center;
        }

    
         @media  screen and (min-width:375px) {
 
        h1{
            font-size: 22px ;
        }

}
 @media  screen and (min-width:450px) {
    
        h1{
            font-size: 27px ;
        }

}
@media  screen and (min-width:900px) {
   
        h1{
            font-size: 30px ;
        }

}
@media  screen and (min-width:765px) {
   
   h1{
       font-size: 29px ;
   }
  

}
@media (min-width:1280px){
  
        h1{
            font-size: 35px ;
        }

}
@media  screen and (max-width:412px) {
   
        h1{
            font-size: 28px ;
        }

}
.ns{
    height: 300px;
    width: 300px;
    border-radius: 100%;
    border: 2px solid orange;
    box-shadow:  0 0   10px red;
}
    </style>
<section style="margin-bottom:20px;" >
        <div class="container-fluid mt-5">
            <!-- banner -->
            <div class="row justify-content-center " id="banner">
                <div class="col-md-6 col-11" id="bannertext">
                <h1>Ayush Kaushal</h1>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit doloribus voluptates assumenda alias ad consequuntur?</p>
                    

                </div>
                <div class="col-md-4 d-none d-md-block" id="bannerimg">
                <img src="../assets/images/logo/ayush.jpg" class="img-fluid ns"alt="">

                </div>

            </div>
        </div>
        </section>    
<section style="margin-bottom:20px;" >
        <div class="container-fluid mt-5">
            <!-- banner -->
            <div class="row justify-content-center " id="banner">
                <div class="col-md-4 d-none d-md-block" id="bannertext">
               
            <img src="../assets/images/logo/nikhil.jpg" class="img-fluid ns"alt="">

                </div>
                <div class="col-md-6 col-11 " id="bannerimg">
                <h1>Nikhil Kumar</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia natus ex eveniet praesentium, accusamus velit voluptatem cumque dolorum, ipsam omnis cum accusantium quod ut labore?</p>

                </div>

            </div>
        </div>
        </section>    
<section style="margin-bottom:20px;" >
        <div class="container-fluid mt-5">
            <!-- banner -->
            <div class="row justify-content-center " id="banner">
                <div class="col-md-6 col-11" id="bannertext">
                <h1>Nikhil Sankhyan</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga facere optio ullam.</p>
                    

                </div>
                <div class="col-md-4 d-none d-md-block" id="bannerimg">
                <img src="../assets/images/logo/Untitled.jpg" class="img-fluid ns"alt="">

                </div>

            </div>
        </div>
        </section>