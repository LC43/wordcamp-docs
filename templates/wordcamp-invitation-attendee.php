<?php

/**
 * This is a list of local assets that need to be copied
 * into the same folder as the generated HTML file in order
 * to be used when rendering the page for PDF creation.
 *
 * Paths are relative to this file.
 */
$template_assets = array(
	'assets/logo.png',
);

?>
<html>
<head>
<meta charset="UTF-8">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	margin: 0;
	padding: 0;
	font-family: 'Open Sans', sans-serif;
	font-size: 16px;
	line-height: 1.5;
	font-weight: 300;
	color: #444;
}

p {
	margin: 0 0 1.5em;
}

h1, h2, h3, h4, div, p, span {
	font-family: 'Open Sans', sans-serif;
}

.wrap {
	clear: both;
	margin: 40px 40px;
}

.main {
	float: left;
	width: 100%;
	margin-top: 40px;
}

.logo {
	width: 300px;
	height: 150px;
	margin-bottom: 40px;
}

#footer {
	position: absolute;
	bottom: 0px;
	left: 40px;
	right: 40px;
}
</style>
</head>

<body>

<div class="wrap">
	<div class="main">
		<img class="logo" src="logo.png" alt="WordPress Foundation">

		<p>September 2, 2015</p>
		<p>To whom it may concern:</p>

		<p>This letter is to confirm that Jane Doe has been invited to speak at an international WordCamp conference in Moscow, Russia. Her participation in this conference will require her to be in Moscow from December 9 &mdash; 12, 2015.<p>

		<p>The conference will be held at Digital October, Bersenevskaya Naberezhnaya 6 bld 3, Moscow, Russia.</p>

		<p>Please don't hesitate to contact me for any additional information regarding this invitation.</p>

		<p>Sincerely,</p>
		<p>John Doe<br />
			Lead Organizer,<br />
			WordCamp Russia 2015<br />
			Phone: +79251141940<br />
			E-mail: john@doe.co
		</p>

	</div>

	<div id="footer">
		<p>WordPress Foundation, 200 Brannan Street Apt 239, San Francisco, CA 94107-6008, USA</p>
	</div>
</div>
</body>
</html>