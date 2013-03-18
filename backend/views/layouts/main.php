<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="language" content="en"/>

	<link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon"/>
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
	      media="screen, projection"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
	      media="print"/>
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
	      media="screen, projection"/>
	<![endif]-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'type' => 'inverse', // null or 'inverse'
	'brand' => 'RightWay Leasing',
	'brandUrl' => '#',
	'collapse' => true, // requires bootstrap-responsive.css
	'items' => array(
		array(
			'class' => 'bootstrap.widgets.TbMenu',
			'items' => array(
				array('label' => 'Cotizaciones', 'url' => array('/prospecto')),
                                array('label' => 'Seguros', 'url' => array('/seguro')),
                                array('label' => 'Tasas', 'url' => array('/tasa')),
                                array('label' => 'costos', 'url' => array('/costo')),
                                array('label' => 'Organizaciones', 'url' => array('/organizacion')),
                                array('label' => 'Usuarios', 'url' => array('/user')),
				/*array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
				array('label' => 'Contact', 'url' => array('/site/contact')),*/
				array('label' => 'Login', 'url' => array('/user/auth/login'), 'visible' => Yii::app()->user->isGuest),
				array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
			),
		),
		/*'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',*/
		(!Yii::app()->user->isGuest) ? ''
                                                      .'<div class="pull-right">'
                                                            .'<p class="navbar-text pull-right">Logged in as <a href="#">'.Yii::app()->user->name.'</a></p>'

                                                                                            .'<ul class="nav ">'
                                                                                                    .'<li class="divider-vertical"></li>'
                                                                                                    .'<li class="dropdown">'
                                                                                                            .'<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-envelope"></i></a>'
                                                                                                            .'<ul class="dropdown-menu">'
                                                                                                                    .'<li>'
                                                                                                                            .'<div class="dropdown-content dropdown-content-wide">'
                                                                                                                                     .$this->widget('application.modules.user.components.YumUserMenu',array(),true)
                                                                                                                            .'</div>'
                                                                                                                    .'</li>'
                                                                                                            .'</ul>'
                                                                                                    .'</li>'

                                                                                            .'</ul>'
                                                                                        .'</div>'
                 : '',
            
            
                /*array(
			'class' => 'bootstrap.widgets.TbMenu',
			'htmlOptions' => array('class' => 'pull-right'),
			'items' => array(
				array('label' => 'Link', 'url' => '#'),
				'---',
				array('label' => 'Dropdown', 'url' => '#', 'items' => array(
					array('label' => 'Action', 'url' => '#'),
					array('label' => 'Another action', 'url' => '#'),
					array('label' => 'Something else here', 'url' => '#'),
					'---',
					array('label' => 'Separated link', 'url' => '#'),
				)),
			),
		),*/
	),
)); ?>
	<!-- mainmenu -->
	<div class="container" style="margin-top:80px">
		<?php if (isset($this->breadcrumbs)): ?>
			<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links' => $this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
		<?php endif?>

		<?php echo $content; ?>
		<hr/>
		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> RightWay.<br/>
			Todos los derechos resevados.<br/>
			
		</div>
		<!-- footer -->
	</div>
</div>
<!-- page -->
</body>
</html>