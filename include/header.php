<?php

function head($home, $education, $interest, $photo, $links, $conatact){


printf('<header>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">

	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>

	      <i class="fa fa-comments fa-3x" aria-hidden="true"></i>


	    </div>
	    
	    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li id="home"><a href="%s">Home</a></li>
	        <li id="blog"><a href="%s">Education</a></li>
	        <li id="about"><a href="%s">Interests</a></li>
	        <li id="about"><a href="%s">Album</a></li>
	        <li id="about"><a href="%s">Links</a></li>
	        <li id="contact"><a href="%s">Contact</a></li>
	      </ul>
	       
	    </div>
	  </div>
	</nav>

</header>' , $home, $education, $interest, $photo, $links, $conatact);


}


?>