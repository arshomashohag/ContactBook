<?php

function foot($home, $education, $interest, $photo, $links, $conatact){

printf('<footer class="footer-distributed">

			<div class="footer-right">

				<a href="https://www.facebook.com/shohag.sarkar.184"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="%s">Home</a>
					·
					<a href="%s">Education</a>
					·
					<a href="%s">Interests</a>
					·
					<a href="%s">Album</a>
					.
					<a href="%s">Links</a>
					.
					<a href="%s">Contact</a>

				</p>

				<p>Company Name &copy; 2015</p>
			</div>

		</footer>', $home, $education, $interest, $photo, $links, $conatact);


}


?>