<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <nav class="navbar main-menu navbar-default">
        <div class="container">
            <div class="menu-content">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/public/images/logo.jpg" width="200px" height="38px" alt=""></a>
                </div>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav text-uppercase">

                    </ul>
                    <div class="i_con">
                        <ul class="nav navbar-nav text-uppercase">
                            <?php if(Yii::$app->user->isGuest):?>
                                <li><a href="<?= Url::toRoute(['auth/login'])?>">Вхід</a></li>
                                <li><a href="<?= Url::toRoute(['auth/signup'])?>">Реєстрація</a></li>
                            <?php else: ?>
                                <?= Html::beginForm(['/auth/logout'], 'post')
                                . Html::submitButton(
                                    'Вихід (' . Yii::$app->user->identity->name . ')',
                                    ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                                )
                                . Html::endForm() ?>
                            <?php endif;?>
                        </ul>
                    </div>

                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>


    <?= $content ?>


    <footer class="footer-widget-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <aside class="footer-widget">
                        <div class="about-img"><img src="/public/images/logo.png" height="40px" width="160px" alt=""></div>
                        <div class="about-content">Блог про подорожі по Україні та країнам Европи
                        </div>
                        <div class="address">
                            <h4 class="text-uppercase">Контактна інформація</h4>

                            <p> Sumy, UA</p>

                            <p> Телефон: +380993211228</p>

                        </div>
                    </aside>
                </div>

                <div class="col-md-4">
                    <aside class="footer-widget">
                        <h3 class="widget-title text-uppercase">Відгуки</h3>

                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!--Indicator-->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="single-review">
                                        <div class="review-text">
                                            <p>Дуже докладний опис історичних місць для подорожі, а також проблеми з отримання візи або доступу до цих місць.</p>
                                        </div>
                                        <div class="author-id">
                                            <img src="/public/images/author.png" alt="">

                                            <div class="author-text">
                                                <h4>Daria</h4>

                                                <h4>Traveller</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single-review">
                                        <div class="review-text">
                                            <p>Докладний огдяд цікавих місць, де можливо зробити якісні фото. Види на цих фото відпадні. Всім рекомендую.</p>
                                        </div>
                                        <div class="author-id">
                                            <img src="/public/images/author.png" alt="">

                                            <div class="author-text">
                                                <h4>Sophia</h4>

                                                <h4>Photographer</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single-review">
                                        <div class="review-text">
                                            <p>Проживаючи в Польщі більше 5 років, захотіла навідатись до України і цей блог допоміг мені з'ясувати, які місця найкраще відвідати</p>
                                        </div>
                                        <div class="author-id">
                                            <img src="/public/images/author.png" alt="">

                                            <div class="author-text">
                                                <h4>Kate</h4>

                                                <h4>Traveller</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>
                <div class="col-md-4">
                    <aside class="footer-widget">
                        <h3 class="widget-title text-uppercase">Пости про подорожі та проблеми, які з ними пов'язані</h3>


                        <div class="custom-post">
                            <div>
                                <a href="#"><img src="/public/images/footer-img.jpg" alt=""></a>
                            </div>
                            <div>
                                <span class="p-date">January 24, 2023</span>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">&copy; 2023 <a href="#">Bloomee`s Travel Blog, </a> Developer: <i
                                    class="fa fa-heart"></i> <a href="#">Білан Владислав ІТ.м-22</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>