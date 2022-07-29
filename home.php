<!DOCTYPE html>
<html>

<head>
	<?php include "components/header.php" ?>
</head>

<body>

	<!--header-->
	<header class="main-header clearfix" role="header">
		<?php include "components/navbar.php" ?>
	</header>


	<?php

	if (isset($_GET['page'])) {
		if ($_GET['page'] == "GuideBook") {
			include 'pages/guide_book.php';
		} elseif ($_GET['page'] == "PressRelease") {
			include 'pages/press_release.php';
		} elseif ($_GET['page'] == "AboutUs") {
			include 'pages/about.php';
		} elseif ($_GET['page'] == "TimeSchedule") {
			include 'pages/time_schedule.php';
		} elseif ($_GET['page'] == "Assessment") {
			include 'pages/assessment.php';
		} elseif ($_GET['page'] == "Poster") {
			include 'pages/poster.php';
		}


		// Gallery
		elseif ($_GET['page'] == "Gallery") {
			include 'pages/gallery.php';
		} elseif ($_GET['page'] == "Photo") {
			include 'pages/photo.php';
		} elseif ($_GET['page'] == "Video") {
			include 'pages/video.php';
		}

		// Photo
		elseif ($_GET['page'] == "Photo") {
			include 'pages/Photo.php';
		} elseif ($_GET['page'] == "G_2022") {
			include 'pages/foto/g_2022.php';
		} elseif ($_GET['page'] == "G_2021") {
			include 'pages/foto/g_2021.php';
		}

		// End Gallery

		elseif ($_GET['page'] == "Contact") {
			include 'pages/contact.php';
		}
	}

	?>


</body>

</html>