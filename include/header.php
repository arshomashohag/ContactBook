<?php

function head($home, $login){


printf('<header>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">

	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>

	      <i class="fa fa-address-book fa-3x" aria-hidden="true"></i>


	    </div>
	    
	    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li id="home"><a href="%s">Home</a></li>
	        <li id="blog"><a href="%s">Log In</a></li>
	         
	      </ul>
	       
	    </div>
	  </div>
	</nav>

</header>' , $home, $login);


}


?>