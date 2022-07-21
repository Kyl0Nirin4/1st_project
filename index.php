<link rel="icon" type="image/png" sizes="16x16" href="img/logoauximad.png">
<h1 class="ml1">
  <span class="text-wrapper">
    <!-- <span class="line line1"></span> -->
    <span class="letters" style=";margin-left:11cm;">AUXIMAD</span>
    <!-- <span class="line line2"></span> -->
  </span>
</h1>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<style>
    body {
  background-image: url("img/bateau.jpg");
  background-size:cover ;
  scroll-behavior: smooth;

}
h1 span{
    color:white;
    font-size:150px;
    margin-top:2.8cm;
    font-family: roboto;
}

</style>

<style>
    .ml1 {
  font-weight: 900;
  font-size: 4em;
}

.ml1 .letter {
  display: inline-block;
  line-height: 1em;
}

.ml1 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
}

.ml1 .line {
  opacity: 0;
  position: absolute;
  left: 0;
  height: 3px;
  width: 100%;
  background-color: red;
  transform-origin: 0 0;
}
.ml2 .line {
  opacity: 0;
  position: absolute;
  left: 0;
  height: 3px;
  width: 100%;
  background-color: #33cc33;
  transform-origin: 0 0;
}


.ml1 .line1 { top: 0; }
.ml1 .line2 { bottom: 0; 

}
</style>


<script src="aceuil.js"></script>



  <div class="container-2">
    <div class="btn btn-two">
      <span>ENTRER</span>
    </div>
  </div>





<style>


div[class*=container] {
  text-align: center;
  width: 100%;
  height: 33%;
  display: flex;
  justify-content: center;
  align-items: center;
}


/*
 BUTTON STYLING
*/

.btn {
  position: relative;
  color: white;
  width: 256px;
  height: 64px;
  line-height: 64px;
  transition: all 0.3s;
  span {
    transition: all 0.3s;
    tranform: scale(1, 1);
  }
}

.btn::before, .btn::after {
  content: '';
  position: absolute;
  transition: all 0.3s;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}


/* BTN TWO */
.btn-two::before, .btn-two::after {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  bottom: 0;
  left: 0;
  z-index: 1;
  transition: all 0.3s;
  border: 1px solid rgba(255, 255, 255, 0.5);
}

.btn-two:hover::after {
  animation-name: rotatecw;
  animation-duration: 2s;
}
.btn-two:hover::before {
  animation-name: rotateccw; 
  animation-duration: 3s;
}
.btn-two:hover::after, .btn-two:hover::before {
  left: 96px;
  width: 64px;
  
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

@keyframes rotatecw {
    from {transform: rotate(0deg);}
    to {transform: rotate(360deg);}
}

@keyframes rotateccw {
    from {transform: rotate(0deg);}
    to {transform: rotate(-360deg);}
}

</style>