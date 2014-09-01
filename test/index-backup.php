<!DOCTYPE html>
<html>
<head>
<title>Katie Verbeck's Portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Katie Verbeck's Portfolio</a>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a style="cursor:pointer;" class="modalButton" data-toggle="modal" data-src="docs/resume.pdf" data-height=550 data-width=700 data-target="#resumeModal">Resume</a></li>
      <li><a target="_blank" href="http://www.linkedin.com/in/katieverbeck">LinkedIn</a></li> <?php //TODO ?>
      <li><a style="cursor:pointer;" class="modalButton" data-toggle="modal" data-src="http://www.ragebaker.blogspot.com" data-height=550 data-width=700 data-target="#blogModal">Blog</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>


<script>
$(window).load(function(){
    $('a.modalButton').on('click', function(e) {
        var src = $(this).attr('data-src');
        var height = $(this).attr('data-height') || 400;
        var width = $(this).attr('data-width') || 700;

        $("#blogModal iframe").attr({'src':src,
                            'height': height,
                            'width': width});
    });
});

</script>
<?php
//Blog iFrame
?>
<div class="container">
   <div class="modal fade" id="blogModal" tabindex="-1" role="dialog"  aria-labelledby="blogModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width:750px;">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="blogModalLabel">Rage Bake</h4>
           </div>
         <div class="modal-body">
              <iframe frameborder="0"></iframe>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
        </div>
     </div>
  </div>
<?php
//Resume iFrame
?>
   <div class="modal fade" id="resumeModal" tabindex="-1" role="dialog"  aria-labelledby="resumeModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="width:750px;">
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="resumeModalLabel">Resume 2014</h4>
           </div>
         <div class="modal-body">
              <iframe frameborder="0" src="docs/resume.pdf" style="width:700px;height:550px;"></iframe>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
        </div>
     </div>
  </div>
</div>


<div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
<br/><br/>


<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" src="../IMG_0138.JPG" alt="...">
      <div class="caption">
        <h3>Great Image</h3>
        <p>Description</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>


<br/><br/>


  </body>
</html>
