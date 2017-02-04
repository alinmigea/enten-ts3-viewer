<?php

/**
 * @author desentyer
 *
 * You can call your modules easy via include 'modules/YOURMODULE.php'.
 *
 * Possible standard module calls:
 * - Header.php
 * The head module of the script, which has to be called before other modules.
 *
 * - MessageBox.php
 * The message box for errors, warnings, information or other messages you want to display.
 *
 * - TsOverview.php
 * A Teamspeak 3 viewer with channel list and online users.
 *
 * - TsGroups.php
 * A Teamspeak 3 group explanation which displays also the icons of the groups.
 *
 * - TsGlobalMessage.php
 * A message box to display the login popup message of a Teamspeak 3 server.
 */

include_once 'modules/Header.php';



// enter your HTML after this line =)
?>

<html>
	<head>

	</head>
	<body>
		<!-- @Zut mit diesem Aufruf könntest du Errors darstellen. Die CSS Klassen sind error und info-->
		<?php include 'modules/MessageBox.php' ?>
	</body>
</html>
