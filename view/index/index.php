<h1><?=$title?></h1>
<div id="leftside">
	<img id="mainpic" src="images/katie.png" width="80%" alt="Katie Verbeck" />
	<div id="navigation">
		<p class="sidenav">
			<a href="assets/resume.pdf" class="sidenav" target="_blank">Resume</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<a href="http://www.linkedin.com/profile/view?id=166312313" target="_blank" class="sidenav">LinkedIn</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
			<a href="http://blog.katieverbeck.com" target="_blank" class="sidenav">Blog</a><br/>
			<a href="mailto:verbination@gmail.com" class="sidenav" style="margin-right:15%;font-weight:normal;font-variant:normal;font-size:15px">verbination@gmail.com</a>
		</p>
		<p id="stylePicker"><span id="styleTitle">Style:</span><br />
			<a href="javascript: document.cookie='style=main'; window.location.reload();">Default</a><br />
			<a href="javascript: document.cookie='style=largeProjectTheme'; window.location.reload();">Large Projects</a><br />
			<a href="javascript: document.cookie='style=colorful'; window.location.reload();">Joined by Descriptions</a>
		</p>
	</div>
</div>
<div id="rightside">
	<?php
		include "projects.php";
	?>
</div>
</div>
