<!DOCTYPE html>
<html>
	<head>
		<title><?php echo CHtml::encode(Yii::app()->name); ?></title>
			<?php Yii::app()->clientScript
			->registerMetaTag('text/html; charset=UTF-8',
			'Content-Type')
			->registerCssFile( '//netdna.bootstrapcdn.com/
			bootstrap/3.0.3/css/bootstrap.min.css' )
			->registerScriptFile( 'https://code.jquery.com/
			jquery.js' )
			->registerScriptFile( '//netdna.bootstrapcdn.com/
			bootstrap/3.0.3/js/bootstrap.min.js')
			->registerScriptFile( 'https://maps.googleapis.
			com/maps/api/js?sensor=false&key=' . Yii::app()->params['PlacesApi']
			['apiKey'])
			->registerScriptFile(Yii::app()->baseUrl .'/js/Main.js');
			?>
	</head>

<body>

<div class="row">

<div class="container">

<nav class="navbar navbar-default navbar-fixed-top

navbar-inverse" role="navigation">

<div class="navbar-header">

<a class="navbar-brand" href="/"><?php echo CHtml::encode(Yii::app()->name); ?></a>

</div>

</nav>

</div>

</div>

<div class="row" style="margin-top: 100px;">

<div class="container">

<?php echo $content; ?>

</div>

</div>

</body>

</html>