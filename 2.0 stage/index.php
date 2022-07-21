<link rel="icon" type="image/png" sizes="16x16" href="img/logoauximad.png">
<h1 class="ml1">
  <span class="text-wrapper">
    <!-- <span class="line line1"></span> -->
    <span class="letters" style=";margin-left:11cm;"><a href="acceuil.php">AUXIMAD</a></span>
 
    <!-- <span class="line line2"></span> -->
  </span>
</h1>
<br><br>
<p style="text-align:center; color:#fff; font-size:30px;">AUXILIAIRE MARITIME DE MADAGASCAR</p>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<style>
  
    body {
  background-image: url("img/index.png");
  filter: blur(8px);
  background-size:cover ;
  scroll-behavior: smooth;
  -webkit-filter: grayscale(100%); 
   filter: grayscale(100%); 
  overflow-y:hidden;
} 
h1 span{
    color:white;
    font-size:150px;
    margin-top:2.2cm;
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
<a href="acceuil2.php">
  <!-- HTML !-->
<div style="margin-left:650px; justify-content:center;">
<button class="button-86" style="    font-family:roboto; font-size:20px;"role="button">Entrer</button>
</div>
<style>

.button-86 {
  all: unset;
  width: 100px;
  height: 30px;
  font-size: 16px;
  background: transparent;
  border: none;
  position: relative;
  color: #f0f0f0;
  cursor: pointer;
  z-index: 1;
  padding: 10px 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  white-space: nowrap;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-86::after,
.button-86::before {
  content: '';
  position: absolute;
  bottom: 0;
  right: 0;
  z-index: -99999;
  transition: all .4s;
}

.button-86::before {
  transform: translate(0%, 0%);
  width: 100%;
  height: 100%;
  background: red;
  border-radius: 10px;
}

.button-86::after {
  transform: translate(10px, 10px);
  width: 35px;
  height: 35px;
  background: #ffffff15;
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  border-radius: 50px;
}

.button-86:hover::before {
  transform: translate(5%, 20%);
  width: 110%;
  height: 110%;
}

.button-86:hover::after {
  border-radius: 10px;
  transform: translate(0, 0);
  width: 100%;
  height: 100%;
}

.button-86:active::after {
  transition: 0s;
  transform: translate(0, 5%);
}
</style>