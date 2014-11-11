<?php require_once('variables.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Movember love for all the boys!">
    <meta name="author" content="Chris Jacobs, Rocky Bradey, Matt Rasmussen, Jesus Christ our Lord & Savior">

    <title>&#8499;ovember</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/featherlight.css" rel="stylesheet"><!-- MATT Added This-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script>
      (function(d) {
        var config = {
          kitId: 'rdm0uhz',
          scriptTimeout: 3000
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>

</head>

<body>

    <!-- Page Content -->
    <div class="container container-full">
    
    
<div class="row">
    <div class="col-lg-12">
		<div class="gold tk-lust-didone"><span>Movember 2014</span></div>	
</div>

<div class="row">
    <div class="col-lg-12">
		<div class=""><img class="img-responsive center-block" src="img/banner.png" /></div>
</div>
   
</div>

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
				<div class="bordertop"><img class="img-responsive center-block" src="img/top.png"></div>
				<div class="divider"><img src="img/divider.png" class="img-responsive center-block"></div>
				
            </div>
        </div>
<p></p>



<div class="row">
<ul class="masonry"> <!-- MATT START -->
<?php 
	$l = count($name)-1;
	for ($x=1; $x<=$l; $x++) : 
?>
        <li class="col-md-3 mo-item">
          <!--  <span data-featherlight="img/large/50.jpg"><img class="img-responsive center-block round" src="img/50.jpg" onError="this.src='img/alt.jpg';" ></span> -->
            <span data-featherlight="img/large/<?= $x ?>.jpg" onError="this.src='img/alt.jpg';"><img class="img-responsive center-block round" src="img/thumbs/<?= $x ?>.jpg" onError="this.src='img/alt.jpg';" ></span> 
            <h2 class="tk-lust-didone"><?= $name[$x]; ?></h2>
        </li>
<?php endfor; ?>
        </ul>
</div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
					<div class="divider"><img src="img/divider.png" class="img-responsive center-block"></div>
					<div class="bordertop" style="margin: 50px 0;"><img src="img/bottom.png" class="img-responsive center-block"></div>
					<div style="margin-bottom: 30px;"><img src="img/depg_logo.png" width="193" height="193" class="center-block" class="round"/></div>
					
					<div style="margin-bottom: 30px;"><img src="img/logo_alt.png" width="151" height="52" class="center-block" class="round"/></div>
										 
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- MATT ADDED THIS -->
    <script src="js/featherlight.js"></script>
    <script src="js/masonry.js"></script>
    <script>
	// you are welcome 
	// clean up the boxes
	$(function(){
   	 //$('.masonry').masonry();
	 // light box
	 $('.round').featherlight($content, configuration);
	});
		
    </script>

</body>

</html>
