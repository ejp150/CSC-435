<?php
//Just simple funcitons to fill in the top and bottom of all pages. Sorry about using echo.
function topofpage() { 
echo('
		<div id="bannerarea">
			<img src="nerdxing.jpg" alt="banner logo" /> <br />
			where meek geeks meet
		</div>'
);
}

function footer() { 
	echo('
		<div>
			<p>
				This page is for single nerds to meet and date each other!  Type in your personal information and wait for the nerdly luv to begin!  Thank you for using our site.
			</p>
			
			<p>
				Results and page (C) Copyright Geekluv Inc.
			</p>
			<ul>
				<li>
					<a href="Geekluv.php">
						<img src="back.gif" alt="icon" />
						Back to front page
					</a>
				</li>
			</ul>'
);
 } ?>