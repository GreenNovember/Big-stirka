<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!doctype html>
<html lang="<?= Yii::$app->language ?>">
    <html>

        <head>
		
			<meta charset="<?= Yii::$app->charset ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<?= Html::csrfMetaTags() ?>
			<title><?= Html::encode($this->title) ?></title>
			<?php $this->head() ?>
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <link rel="stylesheet" href="css/example.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
			
			
            <link href="reset.css" rel="stylesheet">
            <link href="style.css" rel="stylesheet">
            <meta name="viewport" content="width=device-width">
            <title>Большая стирка</title>
        </head>

        <body>
		<?php $this->beginBody() ?>
            <section class="header">
                <div class="center">
                    <ul class="side-menu left-side-menu">
                        <li><a href="">ГЛАВНАЯ</a></li>
                        <li><a href="">КАТАЛОГ</a></li>
                        <li data-toggle="modal" data-target="#myWorkDay"><a >ГРАФИК РАБОТЫ</a></li>
						<li data-toggle="modal" data-target="#myAbout"><a>О НАС</a></li>
                    </ul>
                    <div class="logo">
                        <img src="img/logo.png">
                    </div>
                    <div class="basket" data-toggle="modal" data-target="#myWallet">
                        <img src="img/basket.png">
                        <p>
                            В корзине:<br>
                            Сумма:<b id="sum">10000p</b>	
                        </p>
                    </div>
                    <ul class="side-menu right-side-menu">
                        <li><a href="#contact">КОНТАКТЫ</a></li>
                        <li data-toggle="modal" data-target="#myShares"><a>АКЦИИ</a></li>
                        <li data-toggle="modal" data-target="#myBrand"><a>БРЕНДЫ</a></li>
                    </ul>
                </div>
            </section>

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
            <section class="footer">
				<a name="contact"></a>
                <form>
                    <div class="input-group-2">
                        <label for="input-email">ВАШ E-MAIL</label><input id="input-email" type="email" required>
                    </div>
                    <div class="input-group-2">
                        <label for="input-name">ВАШЕ ИМЯ</label><input id="input-name" type="text" pattern="[a-zA-Z0-9]+">
                    </div>
                    <div class="input-group-2">
                        <label for="input-message">СООБЩЕНИЕ</label><textarea id="input-message"></textarea>
                    </div>
                    <div class="input-group-2">
                        <input id="send" type="submit" value="Отправить">
                    </div>
                </form>
                <div class="general-items">
                    <div class="footer-item">
                        <img src="img/footer-c.png">
                        <h1>
                            БЫТОВАЯ ХИМИЯ
                        </h1>
                        <p>
                            095-477-45-84 Юлия<br>
                            093-851-92-83 Жанна<br>
                            095-687-91-44 Юрий
                        </p>
                    </div>
                    <div class="footer-item">
                        <img src="img/tsh.png">
                        <h1>
                            КОСМЕТИКА
                        </h1>
                        <p>	
                            095-606-35-28 Любовь<br>         
                            050-902-71-31 Марина
                        </p>
                    </div>
                    <div class="footer-item">
                        <img src="img/manager.png">
                        <h1>
                            СТ. МЕНЕДЖЕР
                        </h1>
                        <p>	
                            050-69-56-725 Наталья
                        </p>
                    </div>
                </div>
            </section>

            <section class="last-footer">
                <p>
                    2016 © big-stirka.ru. Все права защищены
                </p>
            </section>

        </body>
		
<?php $this->endBody() ?>
		<!-- Modal wallet-->
		<div id="myWallet" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header blue-bg">
				<button type="button" class="close" data-dismiss="modal"><img src="img/cross.png"></button>
				<h4 class="modal-title">КОРЗИНА</h4>
			  </div>
			  <div class="modal-body">				
				<div class="item-wallet row">
					<div class="col-lg-3 wallet-element">
						<img class="img-responsive img-thumbnail center-block" src="http://www.w3schools.com/bootstrap/cinqueterre.jpg" alt="Chania">
					</div>
					<div class="col-lg-4 wallet-element">
						<a href="">Шампунь Pantene Pro-V Интенсивное восстановление 400мл</a>
						<p><b>307</b> р</p>
						
					</div>
					<div class="col-lg-5 wallet-element">
						dasda
					</div>
				</div>		

				<div class="item-wallet row">
					<div class="col-lg-3 wallet-element">
						<img class="img-responsive img-thumbnail center-block" src="http://www.w3schools.com/bootstrap/cinqueterre.jpg" alt="Chania">
					</div>
					<div class="col-lg-4 wallet-element">
						<a href="">Шампунь Pantene Pro-V Интенсивное восстановление 400мл</a>
						<p><b>307</b> р</p>
					
					</div>
					<div class="col-lg-5 wallet-element">
						dasda
					</div>
				</div>		
				<div class="item-wallet row">
					<div class="col-lg-3 wallet-element">
						<img class="img-responsive img-thumbnail center-block" src="http://www.w3schools.com/bootstrap/cinqueterre.jpg" alt="Chania">
					</div>
					<div class="col-lg-4 wallet-element">
						<a href="">Шампунь Pantene Pro-V Интенсивное восстановление 400мл</a>
						<p><b>307</b> р</p>
						
					</div>
					<div class="col-lg-5 wallet-element">
						dasda
					</div>
				</div>		
				
				
				<div class="item-wallet row">
					<div class="col-lg-3 wallet-element">
						<img class="img-responsive img-thumbnail center-block" src="http://www.w3schools.com/bootstrap/cinqueterre.jpg" alt="Chania">
					</div>
					<div class="col-lg-4 wallet-element">
						<a href="">Шампунь Pantene Pro-V Интенсивное восстановление 400мл</a>
						<p><b>307</b> р</p>
					
					</div>
					<div class="col-lg-5 wallet-element">
						<form  class="form-horizontal" role="form">
							<div class="col-sm-1">
													<button type="button" class="btn btn-default">-</button>
								</div>							
						<div class="col-sm-2">
						  <input type="number" class="form-control" id="inputSuccess" min="0">
						  
						</div>						
						<div class="col-sm-1">						
							<button type="button" class="btn btn-default">+</button>
						</div>		 
						</form>
					</div>
				</div>		
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			  </div>
			</div>

		  </div>
		</div>
		
		<!-- Modal myWorkDay-->
		<div id="myWorkDay" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header blue-bg">
				<button type="button" class="close" data-dismiss="modal"><img src="img/cross.png"></button>
				<h4 class="modal-title">ГРАФИК РАБОТЫ</h4>
			  </div>
			  <div class="modal-body">
				<p>Some text in the modal.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			  </div>
			</div>

		  </div>
		</div>
		
		<!-- Modal myAbout-->
		<div id="myAbout" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header blue-bg">
				<button type="button" class="close" data-dismiss="modal"><img src="img/cross.png"></button>
				<h4 class="modal-title">О НАС</h4>
			  </div>
			  <div class="modal-body">
				<p>Some text in the modal.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			  </div>
			</div>

		  </div>
		</div>
		
		<!-- Modal myShares-->
		<div id="myShares" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header blue-bg">
				<button type="button" class="close" data-dismiss="modal"><img src="img/cross.png"></button>
				<h4 class="modal-title">АКЦИИ</h4>
			  </div>
			  <div class="modal-body">
				<p>Some text in the modal.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			  </div>
			</div>

		  </div>
		</div>
		
		<!-- Modal myBrand-->
		<div id="myBrand" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header blue-bg">
				<button type="button" class="close" data-dismiss="modal"><img src="img/cross.png"></button>
				<h4 class="modal-title">БРЕНДЫ</h4>
			  </div>
			  <div class="modal-body">
				<p>Some text in the modal.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
			  </div>
			</div>

		  </div>
		</div>
		
		
        <!-- SlidesJS Required: Link to jQuery -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery-ui.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- SlidesJS Required: Link to jquery.slides.js -->
        <script src="js/jquery.slides.js"></script>
        <!-- End SlidesJS Required -->
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		
        <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
        <script>
            $(function() {
                $('#slides').slidesjs({
                    width: 940,
                    height: 528,
                    navigation: false
                });
            });
			
			var myCenter = new google.maps.LatLng(48.0217793, 37.8595665);
            var marker;

            function initialize()
            {
                var mapProp = {
                    center: {lat: 48.0223893, lng: 37.8595665},
                    zoom: 17,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                var marker = new google.maps.Marker({
                    position: myCenter,
                    icon: 'img/maptable.png'
                });

                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
		<script src="js/main.js"></script>
    </html>

</html>
<?php $this->endPage() ?>
