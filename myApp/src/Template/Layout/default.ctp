<!DOCTYPE html>
<html>
    <head>
    <?= $this->Html->charset() ?>
    <title>HitConnects - Main Page</title>
    <?= $this->Html->meta('icon')?>
        <?= $this->Html->css(['bootstrap.min.css', 'font-awesome.min.css', 'bootstrap-theme.css', 'main.css']) ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <?= $this->Html->script(['html5shiv.js', 'respond.min.js']) ?>
        <![endif]-->
</head>
<body style="background-color: lightgrey">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<?= $this->Html->link($this->Html->image("logo.png",['class' => 'navbar-brand'], ["alt" => "HitConnects"]),
                    "/accueil",
                    ['escape' => false]

                );?>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="<?php if($thisPage=="home")echo 'active' ?>"><?= $this->Html->link('Accueil','/home'); ?></li>
					<li class="<?php if($thisPage=="profile")echo 'active'?>"><a href="">Profile</a></li>
					<li class="<?php if($thisPage=="mesConnexions")echo 'active'?>"><a href="">Mes Connexions</a></li>
					<li class="<?php if($thisPage=="connexions")echo 'active'?>"><a href="">Connexions proposées</a></li>
                    <!-- Check si login pour récupérer le nom et permettre le logout (dropdown) -->
                    <?php if ($name!='Login') :?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle <?php if($thisPage=="login")echo 'active'?>" data-toggle="dropdown"><?php echo $name?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="active"><?= $this->Html->link('Profile','/users/edit'); ?></li>
                            <li class="active"><?= $this->Html->link('Logout','/users/logout'); ?></li>
                        </ul>
                    </li>
                    <?php elseif($name=='Login'): ?>
                    <li class="<?php if($thisPage=="login")echo 'active'?>"><a class="btn" href="">
                            <?php echo $name?></a></li>
                    <?php endif; ?>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
    <header id="head" class="secondary">
    </header>
<?= $this->fetch('content') ?>

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<?= $this->Html->script(['headroom.min.js', 'jQuery.headroom.min.js', 'template.js' ]) ?>

</body>
</html>
