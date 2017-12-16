<section class="footer">
    <div class="line"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <nav>
                    <h4>HELP</h4>
                    <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                </nav>
                <nav>
                    <h4>HELP</h4>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </nav>
                <nav>
                    <h4>LANGUAGES</h4>
                    <ul>
                        <li><a href="">Nederlands</a></li>
                        <li><a href="">Français</a></li>
                        <li><a href="">English</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-3 col-md-3">
                <nav>
                    <h4>STYLE</h4>
                    <ul>
                        <li><a href="#">Abstract</a></li>
                        <li><a href="#">African American</a></li>
                        <li><a href="#">Asian Contemporary</a></li>
                        <li><a href="#">Conceptual</a></li>
                        <li><a href="#">Contemporary</a></li>
                        <li><a href="#">Emerging Artists</a></li>
                        <li><a href="#">Figurative</a></li>
                        <li><a href="#">Middle Eastern Contemporary</a></li>
                        <li><a href="#">Minimalism</a></li>
                        <li><a href="#">Modern</a></li>
                        <li><a href="#">Pop</a></li>
                        <li><a href="#">Urban</a></li>
                        <li><a href="#">Vintage Photographs</a></li>
                    </ul>
                </nav>
                <nav>
                    <h4>STYLE</h4>
                    <ul>
                        <li><a href="">Design</a></li>
                        <li><a href="">Paintings and Works on Paper</a></li>
                        <li><a href="">Photographs</a></li>
                        <li><a href="">Prints and Multiples</a></li>
                        <li><a href="">Sculpture</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-3 col-md-3">
                <nav>
                    <h4>PRICE</h4>
                    <ul>
                        <li><a href="">Up to 5,000</a></li>
                        <li><a href="">5,000–10,000</a></li>
                        <li><a href="">10,000–25,000</a></li>
                        <li><a href="">25,000–50,000</a></li>
                        <li><a href="">50,000–100,000</a></li>
                        <li><a href="">Above</a></li>
                    </ul>
                </nav>
                <nav>
                    <h4>ERA</h4>
                    <ul>
                        <li><a href="">Pre-War</a></li>
                        <li><a href="">1940s–1950s</a></li>
                        <li><a href="">1960s–1980s</a></li>
                        <li><a href="">1990s–Present</a></li>
                    </ul>
                </nav>
                <nav>
                    <h4>ENDINGS</h4>
                    <ul>
                        <li><a href="">Ending this Week</a></li>
                        <li><a href="">Newly Listed</a></li>
                        <li><a href="">Purchase Now</a></li>
                        <li><a href="">1990s–Present</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="search">
                    <h4>FIND WHAT YOU NEED.</h4>
                    <form action="#" method="GET" class="navbar-right">
						
						<input type="text" name="search" placeholder="Search">

						<input type="submit" value="search">

					</form>
                </div>
                <div class="contact">
                    <h4>CONTACT</h4>
                    <ul>
                        <li>Landoretti ART</li>
                        <li>Straatnaam xxx</li>
                        <li>xxxx, Oostende</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
     <div class="container">
        <div class="logo"></div>
        <nav>
			<ul class="nav navbar-nav">
                <?php foreach($arrNav as $value => $key) { ?>

					<li><a href="<?= $key ?>"><?= $value ?></a></li>

				<?php } ?>

			</ul>

			<ul class="nav navbar-nav navbar-right language">

				<?php foreach($arrLanguage as $value => $key) { ?>

					<li><a href="<?= $key ?>"><?= $value ?></a></li>

				<?php } ?>

			</ul>
        </nav>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>