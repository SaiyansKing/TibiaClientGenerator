<?php
echo '<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Create your Tibia Client Executable">

		<title>MyTibiaClient</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
		<link rel="icon" href="/icon.png">

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

		<style>.container { max-width: 960px; } .border-top { border-top: 1px solid #e5e5e5; } .border-bottom { border-bottom: 1px solid #e5e5e5; } .border-top-gray { border-top-color: #adb5bd; } .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); } .lh-condensed { line-height: 1.25; } .center { display: block; margin-left: auto; margin-right: auto; }
		</style>
	</head>
	<body class="bg-light">
		<div class="container">
			<div class="py-5 text-center">
				<img class="d-block mx-auto mb-4" src="/logo.png" alt="">
			</div>
			<div class="row">
				<div class="col-md-4 order-md-2 mb-4">
					<h4 class="d-flex justify-content-between align-items-center mb-3">
						<span class="glyphicon glyphicon-gift"><i class="fas fa-gift"></i> DONATE</span>
					</h4>
					<ul class="list-group mb-3">
						<li class="list-group-item d-flex justify-content-between lh-condensed">
							<div>
								<h6 class="my-0">MyTibiaClient is <a href="https://github.com/SaiyansKing/TibiaClientGenerator">open-source</a> custom Tibia Client generator website made in spare time by Mad Mage. If you like what I\'m doing you can donate me.</h6>
							</div>
						</li>
					</ul>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_donations"/>
						<input type="hidden" name="business" value="jakubkubina@hotmail.com"/>
						<input type="hidden" name="rm" value="0"/>
						<select class="custom-select" name="currency_code">
							<option>USD</option>
							<option>EUR</option>
							<option>PLN</option>
						</select>
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" class="center"/>
						<img alt="" border="0" src="https://www.paypal.com/en_BG/i/scr/pixel.gif" width="1" height="1" class="center"/>
					</form>
				</div>
				<div class="col-md-8 order-md-1">
					<p class="alert alert-primary">All empty fields will be ignored and the default client value will be used instead</p>
					<form action="/generate.php" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="client version">Client Version</label>
								<select class="custom-select" name="version">
									<option>7.40</option>
									<option>7.60</option>
									<option>7.72</option>
									<option>7.92</option>
									<option>8.00</option>
									<option>8.10</option>
									<option>8.40</option>
									<option>8.54</option>
									<option>8.60</option>
									<option>8.70</option>
									<option>9.80</option>
									<option>10.96</option>
									<option>10.97</option>
									<option>10.98</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="sprfile">Tibia SPR</label>
								<input type="text" class="form-control" name="file-spr" maxlength="100" placeholder="SPR file name">
							</div>
							<div class="col-md-4 mb-3">
								<label for="datfile">Tibia DAT</label>
								<input type="text" class="form-control" name="file-dat" maxlength="100" placeholder="DAT file name">
							</div>
							<div class="col-md-4 mb-3">
								<label for="picfile">Tibia PIC</label>
								<input type="text" class="form-control" name="file-pic" maxlength="100" placeholder="PIC file name">
							</div>
						</div>
						<div class="mb-3">
							<label for="rsa">RSA</label>
							<input type="text" class="form-control" maxlength="310" name="rsa" id="rsa" placeholder="Custom RSA key">
						</div>
						<p class="alert alert-warning">
							<i class="fas fa-exclamation-circle"></i>You can genera your own <a href="/generatersa.php">RSA Key</a>
						</p>
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="ipaddress">Server Address</label>
								<input type="text" class="form-control" maxlength="99" placeholder="Server address" name="address">
							</div>
							<div class="col-md-6 mb-3">
								<label for="port">Server Port</label>
								<input type="number" class="form-control" placeholder="Server port" name="port">
							</div>
						</div>
						<div class="mb-3">
							<label for="clienttitle">Client Title</label>
							<input type="text" class="form-control" maxlength="95" placeholder="Client title" name="title">
						</div>
						<div class="mb-3">
							<label for="createaccurl">Create account URL</label>
							<input type="text" class="form-control" maxlength="43" name="create-url" placeholder="Create account URL">
						</div>
						<div class="mb-3">
							<label for="manageaccurl">Manage account URL</label>
							<input type="text" class="form-control" maxlength="43" name="manage-url" placeholder="Manage account URL">
						</div>
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="clientsiteurl">Client site URL</label>
								<input type="text" class="form-control" maxlength="21" name="site-url" placeholder="Client site URL">
							</div>
							<div class="col-md-4 mb-3">
								<label for="clientsitebutton">Client site button</label>
								<input type="text" class="form-control" maxlength="13" name="site-button" placeholder="Client site button">
							</div>
							<div class="col-md-4 mb-3">  
								<label for="defchannel">Default channel</label>
								<input type="text" class="form-control" maxlength="7" name="default-channel" placeholder="Default channel name">
							</div>
						</div>
						<div class="mb-3">
							<label for="serverlogchannel">Server log channel</label>
							<input type="text" class="form-control" maxlength="10" name="server-channel" placeholder="Server log channel">
						</div>
						<div class="mb-3">
							<label for="copyrighttext">Copyright text(\ = newline)</label>
							<input type="text" class="form-control" maxlength="90" name="copyright" placeholder="Client information copyright text">
						</div>
						<div class="mb-3">
							<label for="injectdlltext">Inject DLL</label>
							<input type="text" class="form-control" maxlength="100" name="injectdll" placeholder="Inject DLL name">
						</div>
						<p class="alert alert-warning">
							<i class="fas fa-exclamation-circle"></i>9.80+ not work for now.</a>
						</p>
						<hr class="mb-4">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" name="light-hack" id="light-hack">
							<label class="custom-control-label" for="light-hack">Light hack</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" name="mc-hack" id="mc-hack">
							<label class="custom-control-label" for="mc-hack">Multiclient</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" name="x-ray" id="x-ray">
							<label class="custom-control-label" for="x-ray">X-Ray</label>
						</div>
						<hr class="mb-4">
						<div class="mb-3">
							<label for="injectdlltext">Extends:</label>
							<p class="alert alert-warning">
								<i class="fas fa-exclamation-circle"></i>Most of these require server-side protocol update.<br>Currently only 8.54 and 8.60 works.</a>
							</p>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="ext-files" id="ext-files">
								<label class="custom-control-label" for="ext-files">Extended Files</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="ext-effects" id="ext-effects">
								<label class="custom-control-label" for="ext-effects">Extended Effects(uint16_t)</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="ext-skills" id="ext-skills">
								<label class="custom-control-label" for="ext-skills">Extended Skills(uint16_t)</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="ext-hp" id="ext-hp">
								<label class="custom-control-label" for="ext-hp">Extended Health(int32_t)</label>
							</div>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="ext-mp" id="ext-mp">
								<label class="custom-control-label" for="ext-mp">Extended Mana(int32_t)</label>
							</div>
						</div>
						<hr class="mb-4">
						<button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Create">Create my Tibia Client</button>
					</form>
				</div>
			</div>
		</div>
		<footer class="my-5 pt-5 text-muted text-center text-small">
			<p class="mb-1">(Copyright) 2019-2019 MyTibiaClient by Mad Mage</p>
		</footer>
	</body>
</html>';