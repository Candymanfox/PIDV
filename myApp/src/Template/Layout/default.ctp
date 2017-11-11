<!DOCTYPE html>
<html>
    <head>
    <?= $this->Html->charset() ?>
    <title>HitConnects - Main Page</title>
    <?= $this->Html->meta('icon')?>
        <?= $this->Html->css(['bootstrap.min.css', 'font-awesome.css', 'bootstrap-theme.css', 'main.css']) ?>
    <?= $this->Html->script(['html5shiv', 'respond.min.js', 'template', 'jquery.min.js', 'google-map', 'headroom', 'jQuery.headroom']) ?>
</head>
<body class="">
<header class="row">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<?= $this->Html->link($this->Html->image("logo.png",['class' => 'navbar-brand'], ["alt" => "HitConnects"]),
                    "Accueil",
                    ['escape' => false]

                );?>
			</div>
			<?php $this->start('navbar'); ?>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="<?php if($thisPage=="home")echo 'active' ?>"><a href="">Accueil</a></li>
					<li class="<?php if($thisPage=="profile")echo 'active'?>"><a href="">Profile</a></li>
					<li class="<?php if($thisPage=="mesConnexions")echo 'active'?>"><a href="">Mes Connexions</a></li>
					<li class="<?php if($thisPage=="connexions")echo 'active'?>"><a href="">Connexions proposées</a></li>
					<li class="<?php if($thisPage=="login")echo 'active'?>"><a class="btn" href="">Login</a></li>
				</ul>
			</div>
			<?php $this->end('navbar'); ?>
			<!--/.nav-collapse -->
		</div>
	</div>
</header>

<?= $this->fetch('content') ?>

<!-- Social links. @TODO: replace by link/instructions in template -->
<section id="social">
    <div class="container">
        <div class="wrapper clearfix">
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style">
                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                <a class="addthis_button_tweet"></a>
                <a class="addthis_button_linkedin_counter"></a>
                <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
            </div>
            <!-- AddThis Button END -->
        </div>
    </div>
</section>
<!-- /social links -->


<footer id="footer" class="top-space">

    <div class="footer1">
        <div class="container">
            <div class="row">

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Contact</h3>
                    <div class="widget-body">
                        <p>+234 23 9873237<br>
                            <a href="mailto:#">some.email@somewhere.com</a><br>
                            <br>
                            234 Hidden Pond Road, Ashland City, TN 37015
                        </p>
                    </div>
                </div>

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Follow me</h3>
                    <div class="widget-body">
                        <p class="follow-me-icons">
                            <a href=""><i class="fa fa-twitter fa-2"></i></a>
                            <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                            <a href=""><i class="fa fa-github fa-2"></i></a>
                            <a href=""><i class="fa fa-facebook fa-2"></i></a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <h3 class="widget-title">Text widget</h3>
                    <div class="widget-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                        <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="simplenav">
                            <span class="<?php if($thisPage=="home")echo 'active' ?>"><a href="#"> Accueil</a></span>
                            <span class="<?php if($thisPage=="profile")echo 'active' ?>"><a href="#"> Profile</a></span>
                            <span class="<?php if($thisPage=="mesConnexions")echo 'active' ?>"><a href="#"> Mes Connexions</a></span>
                            <span class="<?php if($thisPage=="connexions")echo 'active' ?>"><a href="#"> Connexions proposées</a></span>
                            <span class="<?php if($thisPage=="login")echo 'active' ?>"><a href="#"> Login</a></span>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">
                            Copyright &copy; 2014, NameName. Design: <a href="http://www.gettemplate.com" rel="designer">GetTemplate</a>
                        </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

</footer>

<div class="fpro" style="display: none;">
    <a class="fpro-close" href="#"><i class="fa fa-times"></i></a>
    <div class="fpro-intro">See also:</div>
    <h4 class="fpro-caption"><a target="_blank" href="/pro/progressus.html">Progressus PRO <span>Multipurpose Premium Bootstrap Template</span></a> </h4>
    <div class="fpro-media">
        <a target="_blank" href="/pro/progressus.html"><img src="/images/pp-shots.png" alt="Progressus PRO"></a>
        <div class="fpro-desc">
            <p>
                Progressus PRO is a clean and feature-rich Bootstrap theme which will save you a lot of time &amp; effort.
                <a target="_blank" href="/pro/progressus.html"><b>View Details &rarr;</b></a></p>
        </div>
    </div>
</div>


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48366846-1', 'gettemplate.com');
    ga('send', 'pageview');
</script>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->

<!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52d8f8d75dfc85f4"></script> -->
</body>
</html>
