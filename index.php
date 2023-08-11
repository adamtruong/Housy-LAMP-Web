<!DOCTYPE HTML>
<html>

<head>
	<title>HOUSY</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="inner">

				<!-- Logo -->
				<a href="index.html" class="logo">
					<span class="symbol"><img src="images/housy.svg" alt="" /></span><span class="title">Housy</span>
				</a>

				<!-- Nav -->
				<nav>
					<ul>
						<li><a href="#menu">Menu</a></li>
					</ul>
				</nav>

			</div>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<h2>Menu</h2>
			<ul>
				<li><a href="index.html">Projects</a></li>
				<li><a href="#footer">Contact Us</a></li>
			</ul>
		</nav>

		<!-- Main -->
		<div id="main">
			<div class="inner">
				<header>
					<h1>Welcome to Housy, <br />
						your trusted partner in the world of real estate! </h1>
					<p>With a passion for connecting individuals with their ideal homes, we bring a wealth of knowledge
						and experience to every transaction.
						Our team of seasoned professionals understands that buying or selling a property is more than
						just a transaction – it's a life-changing decision</p>
				</header>
				<section class="tiles">
					<?php
                include('databaseconnect.php');

                $sql = "SELECT * FROM properties";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<article class="' . $row['style'] . '">';
    echo '    <span class="image">';
    echo '        <img src="' . $row['image_path'] . '" alt="" />';
    echo '    </span>';
    echo '    <a href="property_details.php?id=' . $row['property_id'] . '">';
    echo '        <h2>' . $row['title'] . '</h2>';
    echo '    </a>';
    echo '</article>';
                    }
                } else {
                    echo "No properties available.";
                }

                $conn->close();
                ?>
				</section>
			</div>
		</div>

		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<section>
					<h2>Contact Us</h2>
					<form action="mailto:nadamtruong@gmail.com" method="post" enctype="text/plain">
						<div class="fields">
							<div class="field half">
								<input type="text" name="name" id="name" placeholder="Name" />
							</div>
							<div class="field half">
								<input type="email" name="email" id="email" placeholder="Email" />
							</div>
							<div class="field">
								<textarea name="message" id="message" placeholder="Message"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Send" class="primary" /></li>
						</ul>
					</form>
				</section>
				<section>
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0792624261207!2d105.80888811246152!3d21.029514287668654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab730d0a2249%3A0xc7bc781234943dcb!2sRMIT%20University%20Vietnam%2C%20Hanoi%20City%20Campus!5e0!3m2!1sen!2s!4v1691549276310!5m2!1sen!2s"
						width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
					<h2>Follow</h2>
					<ul class="icons">
						<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a>
						</li>
						<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a>
						</li>
						<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</section>
				<ul class="copyright">
					<li>Copyright © Housy 2023</li>
				</ul>
			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>