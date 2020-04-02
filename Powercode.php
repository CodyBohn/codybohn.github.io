<?php
require_once 'header.php';
?>

	<div id="workwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h1>Powercode</h1>
					<h4>ROLE: Software Developer</h4>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row centered mt mb">
			<div class="col-lg-8 col-lg-offset-2">
				<h4>ABOUT THE PROJECT</h4>

				<p class="text-left">
					Powercode is an industry leading internet service provider billing and management system.
					It incorporates a fully featured customer management system and direct network management.
					Powercode offers features such as automatic billing, ticket management, and service call scheduling.
				</p>
				<p class="text-left">
					My responsibilities at Powercode include research and development, customer support, and staff training.
				</p>
				<p class="text-left">
					While at Powercode I was responsible for implementing many different features including:
					<ul class="text-left">
						<li>A self-updating database of 14k+ OUI prefixes (MAC Address) sourced from IEEE, MIT, NTop, and WireShark.
							These prefixes were used to automatically identify hardware manufacturers for use in the network and equipment areas of Powercode</li>
						<li>Customer Improvement program involving reporting of metrics and usage from a customers system back to a central server for analysis.
							The data gathered from this program allowed the team to intelligently push updates and fixes based on our customers usage.</li>
						<li>Automatic email system with internationalization support based on a customers language preference.
							This allowed both Powercode and our customers to communicate with end users more effectively and increase brand image.</li>
						<li>Design and implementation of a management API allowing for customers to access and update their systems programmatically.
							The easy to use, RESTful API allowed our customers access to safely implement functionality unique to their use of Powercode.</li>
					</ul>
				</p>
			</div>
			<div class="col-lg-8 col-lg-offset-2 mt">
				<img class="img-responsive" src="assets/img/portfolio/powercode/api.png" alt="Billing">
			</div>
		</div>
	</div>

<?php
require_once 'footer.php';
?>