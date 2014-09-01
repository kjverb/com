<!DOCTYPE html>
<html>
<head>
    <title>Katie Verbeck's Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/png">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<script>
$(window).load(function(){
    $('a.modalButton').on('click', function(e) {
        var src = $(this).attr('data-src');
        var height = $(this).attr('data-height') || 400;
        var width = $(this).attr('data-width') || 700;

        $("#blogModal iframe").attr({
            'src':src,
            'height': height,
            'width': width
        });
        $("#oldPortfolioModal iframe").attr({
            'src':src,
            'height': height,
            'width': width
        });
    });
});

</script>
<div class="container">
    <?php
    //Blog iFrame
    ?>
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
    <?php
    //Old Portfolio iFrame
    ?>
    <div class="modal fade" id="oldPortfolioModal" tabindex="-1" role="dialog"  aria-labelledby="oldPortfolioModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width:750px;">
             <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="oldPortfolioModalLabel">Old Portfolio</h4>
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
</div>

<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <span class="navbar-brand">Katie Verbeck's Portfolio</span>
  </div>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a style="cursor:pointer;" class="modalButton" data-toggle="modal" data-src="docs/resume.pdf" data-height=550 data-width=700 data-target="#resumeModal">Resume</a></li>
      <li><a target="_blank" href="http://www.linkedin.com/in/katieverbeck">LinkedIn</a></li> <?php //TODO ?>
      <li><a style="cursor:pointer;" class="modalButton" data-toggle="modal" data-src="http://www.ragebaker.blogspot.com" data-height=550 data-width=700 data-target="#blogModal">Blog</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Group Recipe Collection</a></li>
          <li><a href="#">Etsy Meetup</a></li>
          <li><a href="#">Table Stitch</a></li>
          <li><a href="#">Cornell FDRL</a></li>
          <li><a style="cursor:pointer;" class="modalButton" data-toggle="modal" data-src="http://katie.theverbecks.com/" data-height=550 data-width=700 data-target="#oldPorfolioModal">Old Portfolio</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
