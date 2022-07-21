<?php include ("nav.php") ?>
<? require("loader.php")?>
<link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
<br>
<style>
    *{
        font-family:roboto;
    }
    body {
  background-image: url("img/monde1.jpg");
  background-size:cover ;
  scroll-behavior: smooth;
  /* overflow-y: hidden; */
  overflow-x: hidden; 
}
 .box{
    width: 9.5cm;
    height: 15cm;
    padding: 50px;
    margin: 30px;
    margin-top:80px;
    background: rgba( 100, 100, 100, 0.25 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 7.5px );
    -webkit-backdrop-filter: blur( 7.5px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
 }
 .box2{
    width: 9.5cm;
    height: 15cm;
    padding: 50px;
    margin: 30px;
    margin-top:80px;
    background: rgba( 100, 100, 100, 0.25 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 7.5px );
    -webkit-backdrop-filter: blur( 7.5px );
    border-radius: 10px;
    border: 1px solid rgba( 255, 255, 255, 0.18 );
 }

h2{
    font-family: Arial, Helvetica, sans-serif;
    background-color: green;
    border-radius: 5px;

}
h2 :hover{
            color:rgb(30, 107, 62);
}
div p{
    font-family: monospace;
    
}
 .para{
    margin-left: 40px;
}
h1{
  background: linear-gradient(0deg, green, green) no-repeat right bottom / 0 var(--bg-h);
  transition: background-size 350ms;
  --bg-h: 100%;
}
h1:where(:hover, :focus-visible) {
  background-size: 100% var(--bg-h);
  background-position-x: left;
}

.underline {
  padding-bottom: 2px;
  --bg-h: 2px;
}

body {
  font-size: 2em;
  text-align: center;
}

h1{
  text-decoration: none;
  color: inherit;
  line-height: 1;

}
h3{
  background: linear-gradient(0deg, red, red) no-repeat right bottom / 0 var(--bg-h);
  transition: background-size 350ms;
  --bg-h: 100%;
}
h3:where(:hover, :focus-visible) {
  background-size: 100% var(--bg-h);
  background-position-x: right;
}

.underline {
  padding-bottom: 2px;
  --bg-h: 2px;
}

body {
  font-size: 2em;
  text-align: center;
}

h3{
  text-decoration: none;
  color: inherit;
  line-height: 1;
}
</style>
<br><br>
    <h1 style="text-align: center;   font-size: 150px; color: #fff;"> Nos agences partout </h1>
                <h3  style="text-align: center;   font-size: 150px; color: #fff;">dans notre île</h3>
<!-- ----------------------------------------------------------------ARO-------------------------------------------- -->
<div class=" row">
<div class="col-lg-4">
    <div class="box2">
    <h2 style="text-align:center;   color: #fff;     text-align:center;     " >AGENCE GENERALE ARO</h2>
<br><br>
                <div style="background-color:#fff; margin-bottom:20px; float:left; border-radius:5px; padding:1rem; height: 7.5cm; width: 255px;"  >
                        <p  style=" color:black;  "><img src="img/map.png" width="16px" alt="">    18, RUE J.J. <br> Rabearivelo-Antsahavola</p><i class="fas fa-map-marker-alt"></i>
                    <hr>
                        <p  style="color:black;"><img src="img/phone1.png" width="16px"alt="">(+261)20 22 225 02</p> <hr>
                        <p  style="color:black;"><img src="img/phone.png" width="16px"alt="">   (+261)20 22 310 98</p > <hr>
                        <p  style="color:black;"><img src="img/mail.png" width="16px"alt="">   auxiassur@auximad.mg</p> <br><br>
              <a href="Aro.php">       
                    <p class="para"style="color:#fff; background-color:red ; border-radius: 5px; padding:1rem;   
                       font-family: Arial, Helvetica, sans-serif; justify-content: center;  font-size: 20px; width: 2.3cm; margin-left: 1.8cm; ">Detail</p>
      
                    </a>   
    </div>
       
        </div>
</div>

<!-- -------------------------------------------------------------TANA-------------------------------------------------------------- -->

<div class="col-lg-4">
    <div class="box2">
    <h2 style="text-align:center;   color: #fff;     text-align:center;     " >AGENCE ANTANANARIVO</h2>
<br><br>
                <div style="background-color:#fff; margin-bottom:20px; float:left; border-radius:5px; padding:1rem; height: 7.5cm; width: 255px;"  >
                        <p  style=" color:black;  "><img src="img/map.png" width="16px" alt="">    18, RUE J.J. <br> Rabearivelo-Antsahavola</p><i class="fas fa-map-marker-alt"></i>
                    <hr>
                        <p  style="color:black;"><img src="img/phone1.png" width="16px"alt="">+(261) 20 22 211 34</p> <hr>
                        <p  style="color:black;"><img src="img/phone.png" width="16px"alt="">   (+261)20 22 310 98</p > <hr>
                        <p  style="color:black;"><img src="img/mail.png" width="16px"alt="">   auxiant.dir@auximad.mg</p> <br><br>
              <a href="tana.php">       
                    <p class="para"style="color:#fff; background-color:red ; border-radius: 5px; padding:1rem;   
                       font-family: Arial, Helvetica, sans-serif; justify-content: center;  font-size: 20px; width: 2.3cm; margin-left: 1.8cm; ">Detail</p>
      
                    </a>   
    </div>
       
        </div>
</div>



<!-- --------------------------------------------------------------TOAMASINA-------------------------------------------------------------- -->



<div class="col-lg-4">
    <div class="box2">
    <h2 style="text-align:center;   color: #fff;     text-align:center;     " >AGENCE TOAMASINA</h2>
<br><br>
                <div style="background-color:#fff; margin-bottom:20px; float:left; border-radius:5px; padding:1rem; height: 7.5cm; width: 255px;"  >
                        <p  style=" color:black;  "><img src="img/map.png" width="16px" alt="">  21, Bd Ratsimilaho Po <br>  Box 93- 501</p><i class="fas fa-map-marker-alt"></i>
                    <hr>
                        <p  style="color:black;"><img src="img/phone1.png" width="16px"alt="">+(261) 20 22 211 34</p> <hr>
                        <p  style="color:black;"><img src="img/phone.png" width="16px"alt="">   (+261)20 22 310 98</p > <hr>
                        <p  style="color:black;"><img src="img/mail.png" width="16px"alt="">   auxiant.dir@auximad.mg</p> <br> <br>
              <a href="toamasina.php">       
                    <p class="para"style="color:#fff; background-color:red ; border-radius: 5px; padding:1rem;     
                       font-family: Arial, Helvetica, sans-serif; justify-content: center;  font-size: 20px; width: 2.3cm; margin-left: 1.8cm; ">Detail</p>
                    </a>   
    </div>
       
        </div>
</div>



<!-- ----------------------------------------------------------------ANTSIRABE------------------------------------------------------------ -->



<div class="col-lg-4">
    <div class="box2">
    <h2 style="text-align:center;   color: #fff;     text-align:center;     " >AGENCE ANTSIRABE</h2>
<br><br>
                <div style="background-color:#fff; margin-bottom:20px; float:left; border-radius:5px; padding:1rem; height: 7.5cm; width: 255px;"  >
                        <p  style=" color:black;  "><img src="img/map.png" width="16px" alt="">   Villa Francois Lot 02-B-177</p><i class="fas fa-map-marker-alt"></i>
                    <hr>
                        <p  style="color:black;"><img src="img/phone1.png" width="16px"alt="">+(261) 20 44 485 03</p> <hr>
                        <p  style="color:black;"><img src="img/phone.png" width="16px"alt="">   +(261) 20 44 494 58</p > <hr>
                        <p  style="color:black;"><img src="img/mail.png" width="16px"alt="">  auxirabe@moov.mg</p> <br> <br>

    </div>
       
        </div>
</div>



<!-- ----------------------------------------------------------------MAHAJANGA------------------------------------------------------------ -->



<div class="col-lg-4">
    <div class="box2">
    <h2 style="text-align:center;   color: #fff;     text-align:center;     " >AGENCE MAHAJANGA</h2>
<br><br>
                <div style="background-color:#fff; margin-bottom:20px; float:left; border-radius:5px; padding:1rem; height: 7.5cm; width: 255px;"  >
                        <p  style=" color:black;  "><img src="img/map.png" width="16px" alt="">   Avenue de France, Majunga</p><i class="fas fa-map-marker-alt"></i>
                    <hr>
                        <p  style="color:black;"><img src="img/phone1.png" width="16px"alt="">6242260</p> <hr>
                        <p  style="color:black;"><img src="img/phone.png" width="16px"alt=""> 6229334</p > <hr>
                        <p  style="color:black;"><img src="img/mail.png" width="16px"alt="">auximga.dir@auximad.mg</p> <br> <br> <br>
              <a href="toamasina.php">       
                    <p class="para"style="color:#fff; background-color:red ; border-radius: 5px; padding:1rem;     
                       font-family: Arial, Helvetica, sans-serif; justify-content: center;  font-size: 20px; width: 2.3cm; margin-left: 1.8cm; ">Detail</p>
                    </a>   
    </div>
       
        </div>
</div>
<!-- ----------------------------------------------------------------TOLIARA------------------------------------------------------------ -->

<div class="col-lg-4">
    <div class="box2">
    <h2 style="text-align:center;   color: #fff;     text-align:center;     " >AGENCE TOLIARA</h2>
<br><br>
                <div style="background-color:#fff; margin-bottom:20px; float:left; border-radius:5px; padding:1rem; height: 7.5cm; width: 255px;"  >
                        <p  style=" color:black;  "><img src="img/map.png" width="16px" alt="">   Amorondriaka,Face Zaza club centre ville</p><i class="fas fa-map-marker-alt"></i>
                    <hr>
                        <p  style="color:black;"><img src="img/phone1.png" width="16px"alt="">6442260</p> <hr>
                        <p  style="color:black;"><img src="img/phone.png" width="16px"alt=""> 9441524</p > <hr>
                        <p  style="color:black;"><img src="img/mail.png" width="16px"alt="">auxitul.dir@auximad.mg </p> <br> <br>
              <a href="toamasina.php">       
                    <p class="para"style="color:#fff; background-color:red ; border-radius: 5px; padding:1rem;     
                       font-family: Arial, Helvetica, sans-serif; justify-content: center;  font-size: 20px; width: 2.3cm; margin-left: 1.8cm; ">Detail</p>
                    </a>   
    </div>
       
        </div>
</div>

<!-- ----------------------------------------------------------------ANTSIRANANA------------------------------------------------------------ -->




<div class="col-lg-4">
    <div class="box2">
    <h2 style="text-align:center;   color: #fff;     text-align:center;     " >AGENCE ANTSIRANANA</h2>
<br><br>
                <div style="background-color:#fff; margin-bottom:20px; float:left; border-radius:5px; padding:1rem; height: 7.5cm; width: 255px;"  >
                        <p  style=" color:black;  "><img src="img/map.png" width="16px" alt="">   Amorondriaka,Face Zaza club centre ville</p><i class="fas fa-map-marker-alt"></i>
                    <hr>
                        <p  style="color:black;"><img src="img/phone1.png" width="16px"alt="">8221906</p> <hr>
                        <p  style="color:black;"><img src="img/phone.png" width="16px"alt=""> 8229331</p > <hr>
                        <p  style="color:black;"><img src="img/mail.png" width="16px"alt="">auxidie.dir@auximad.mg</p> <br> <br>
              <a href="toamasina.php">       
                    <p class="para"style="color:#fff; background-color:red ; border-radius: 5px; padding:1rem;     
                       font-family: Arial, Helvetica, sans-serif; justify-content: center;  font-size: 20px; width: 2.3cm; margin-left: 1.8cm; ">Detail</p>
                    </a>   
    </div>
       
        </div>
</div>


<!-- ----------------------------------------------------------------NOSY BE------------------------------------------------------------ -->




<div class="col-lg-4">
    <div class="box2">
    <h2 style="text-align:center;   color: #fff;     text-align:center;     " >AGENCE <br> NOSY BE</h2>
<br><br>
                <div style="background-color:#fff; margin-bottom:20px; float:left; border-radius:5px; padding:1rem; height: 7.5cm; width: 255px;"  >
                        <p  style=" color:black;  "><img src="img/map.png" width="16px" alt="">  Rue de Passot, Hell-Ville BP:1</p><i class="fas fa-map-marker-alt"></i>
                    <hr>
                        <p  style="color:black;"><img src="img/phone1.png" width="16px"alt="">8661127</p> <hr>
                        <p  style="color:black;"><img src="img/phone.png" width="16px"alt=""> 8661596</p > <hr>
                        <p  style="color:black;"><img src="img/mail.png" width="16px"alt="">auxinos.dir@auximad.mg</p> <br> <br>
              <a href="toamasina.php">       
                    <p class="para"style="color:#fff; background-color:red ; border-radius: 5px; padding:1rem;     
                       font-family: Arial, Helvetica, sans-serif; justify-content: center;  font-size: 20px; width: 2.3cm; margin-left: 1.8cm; ">Detail</p>
                    </a>   
    </div>
       
        </div>
</div>



<!-- ----------------------------------------------------------------FORT DAUPHIN------------------------------------------------------------ -->


<div class="col-lg-4">
    <div class="box2">
    <h2 style="text-align:center;   color: #fff;     text-align:center;     " >AGENCE FORT DAUPHIN</h2>
<br><br>
                <div style="background-color:#fff; margin-bottom:20px; float:left; border-radius:5px; padding:1rem; height: 7.5cm; width: 255px;"  >
                        <p  style=" color:black;  "><img src="img/map.png" width="16px" alt="">   Rue Maréchal Foch</p><i class="fas fa-map-marker-alt"></i>
                    <hr>
                        <p  style="color:black;"><img src="img/phone1.png" width="16px"alt="">92 213 60</p> <hr>
                        <p  style="color:black;"><img src="img/phone.png" width="16px"alt=""> 92 215 02</p > <hr>
                        <p  style="color:black;"><img src="img/mail.png" width="16px"alt="">auxiftu1@moov.mg  <br>auxiftu.dir@gmail.com</p> <br> <br>
              <a href="toamasina.php">       
                    <p class="para"style="color:#fff; background-color:red ; border-radius: 5px; padding:1rem;     
                       font-family: Arial, Helvetica, sans-serif; justify-content: center;  font-size: 20px; width: 2.3cm; margin-left: 1.8cm; ">Detail</p>
                    </a>   
    </div>
       
        </div>
</div>












</div>

<?php require("footer.php")?>

