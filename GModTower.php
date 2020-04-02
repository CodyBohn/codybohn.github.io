<?php
require_once 'header.php';
require_once 'navbar.php';
?>

	<div id="workwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h1>GMod Tower</h1>
					<h4>ROLE: System Administrator</h4>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row centered mt mb">
			<div class="col-lg-8 col-lg-offset-2">
				<h4>ABOUT THE PROJECT</h4>

				<p class="text-left">
					GMod Tower is a community driven game based on Valve's Source Engine. It centers around am interactive
					in-game lobby where players can play single and multi-player games such as mini golf and capture the flag.
					Players can customize their in-game appearance and their living spaces.
				</p>
				<p class="text-left">
					My role was focused around developing and supporting the teams infrastructure. The system relied on
					a multi-server system for redundancy and performance. We implemented file storage servers
					to allow the addition of in-game audio/video playback and database servers for player data saving
					and cross-server synchronization.
				</p>
				<p class="text-left">
					Special care was taken to make the system as automated and redundant as possible because of the small team.
					All servers were able to be controlled remotely and all code updates were distributed automatically.
					A special Skype (chat) based control system was built to allow quick and easy access to commands and alerts.
				</p>
			</div>
			<div class="col-lg-8 col-lg-offset-2 mt">
				<img class="img-responsive" src="assets/img/portfolio/gmod-tower/control-panel.png" alt="Control Panel">
			</div>
		</div>
	</div>

<?php
require_once 'footer.php';
?>