<link rel="icon" type="image/png" sizes="16x16" href="img/logoauximad.png">


<div id="container" style="justify-content:end;">
    <nav>
        <ul>
            <li><a href="acceuill.php">Acceuil</a></li>
            <li><a href="#">A propos</a>
            <!-- First Tier Drop Down -->
            <ul>
                <li><a href="contexte.php">Contexte </a></li>
                <li><a href="administration.php">Administration</a></li>
                <li><a href="partenaires.php">Partenaires</a></li>
            </ul>        
            </li>
            <li><a href="service.php">Nos services</a>
            <!-- First Tier Drop Down -->
            </li>
            <li><a href="">Assurance</a>              
                  </li>

                    <li><a href="contact.php">Contact</a>
                  <ul>
                    <li><a href="contact.php">Agence</a></li>
                  </ul>
                  </li>

           
            <li><a href="#">Vos operations</a></li>
        </ul>
    </nav>
</div>

<style>

.sticky {
  position: fixed;
  top: 0;
  width: 100%;

}
	
div{
	z-index:;
}
a {
	color: #FFF;
}

h1 {
	margin-top: 100px;
	text-align:center;
	font-size:60px;
	font-family: 'Bree Serif', 'serif';
	}

#container {
	margin: 0 auto;
}

p {
	text-align: center;
}

nav {
	margin: 50px 0;
	background-color: red;
}

nav ul {
	padding: 0;
  margin: 0;
	list-style: none;
	position: relative;
	}
	
nav ul li {
	display:inline-block;
	background-color: red;
	}

nav a {
	display:block;
	padding:0 10px;	
	color:#FFF;
	font-size:20px;
	line-height: 60px;
	text-decoration:none;
}

nav a:hover { 
	background-color: gray; 
}


nav ul ul {
	display: none;
	position: absolute; 
	top: 60px;
}
	

nav ul li:hover > ul {
	display:inherit;
}

nav ul ul li {
	width:200px;
	float:none;
	display:list-item;
	position: relative;
}

nav ul ul ul li {
	position: relative;
	top:-60px; 
	left:200px;
}


li > a:after { content:  ' >'; }
li > a:only-child:after { content: ''; }
</style>

<script src="nav.js"></script>