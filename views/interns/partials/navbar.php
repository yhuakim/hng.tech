
<!--Navigation ends-->

<nav class="navbar navbar-light">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" onclick="openNav()" data-toggle="collapse" data-target="" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span style="font-size: 30px">&#9776;</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><img src="<?php echo $logo ?>"></a>
		</div>
		<div id="mySidenav" class="sidenav" style="padding-top: 100px">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a class="navbar-link nav-text" href="<?php echo $about ?>">WHAT IS THE INTERNSHIP?</a>
			<a class="navbar-link nav-text" href="<?php echo $interns ?>">THE INTERNS (SO FAR)</a>
			<a class="navbar-link nav-text" href="<?php echo $support ?>">SUPPORT THE MISSION</a>
			<a class="navbar-link nav-text" href="<?php echo $becomeIntern ?>">BECOME AN INTERN</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="">
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item <?php if($url == 'about'){echo 'active';}?> ">
					<a class="navbar-link nav-text" href="<?php echo $about ?>">WHAT IS THE INTERNSHIP?</a>
				</li>
				<li class="nav-item <?php if($url == 'interns'){echo 'active';}?> ">
					<a class="navbar-link nav-text" href="<?php echo $interns ?>">THE INTERNS (SO FAR)</a>
				</li>
				<li class="nav-item <?php if($url == 'support'){echo 'active';}?>">
					<a class=" navbar-link nav-text" href="<?php echo $support ?>">SUPPORT THE MISSION</a>
				</li>
				<li class="nav-item <?php if($url == 'become-intern'){echo 'active';}?>">
					<a class=" navbar-link nav-text" href="<?php echo $becomeIntern ?>">BECOME AN INTERN</a>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
</script>