<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\core\Categories;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <title>Блог разработка программирование</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />-->
        <!-- Custom Theme files -->
        <!-- <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>-->
        <!--  <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>-->
        <!--<link href="css/style.css" rel='stylesheet' type='text/css' />	-->
        <!--<script src="js/jquery-1.11.1.min.js"></script>-->
        <!--<script src="js/bootstrap.min.js"></script>-->

        <?php $this->head() //Стили assets ?> 
    </head>
    <body>
        <?php $this->beginBody() ?>
        <!--start-main-->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="logo">
                        <a href="/"><h1>БЛОГ ПРОГРАММИСТА</h1></a>
                    </div>
                    <div class="search">
                        <form>
                            <input type="text" value="Поиск" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Search';
                                    }">
                            <input type="submit" value="">
                        </form>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="#" class="facebook"> </a></li>
                            <li><a href="#" class="facebook twitter"> </a></li>
                            <li><a href="#" class="facebook chrome"> </a></li>
                            <li><a href="#" class="facebook in"> </a></li>
                            <li><a href="#" class="facebook beh"> </a></li>
                            <li><a href="#" class="facebook vem"> </a></li>
                            <li><a href="#" class="facebook yout"> </a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <!--head-bottom-->
            <div class="head-bottom">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html">Блог</a></li>

                            <li><a href="reviews.html">Портфолио</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Тэги <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="singlepage.html">PHP</a></li>
                                    <li><a href="singlepage.html">Yii2</a></li>
                                    <li><a href="singlepage.html">Css</a></li>
                                </ul>
                            </li>
                            <li><a href="videos.html">Услуги</a></li>
                            <li><a href="business.html">Сотрудничество</a></li>
                            <li><a href="world.html">Проекты</a></li>
                            <li><a href="forum.html">Форум</a></li>
                            <li><a href="contact.html">Контакты</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
                </nav>
            </div>
            <!--head-bottom-->
        </div>	
        <!-- banner -->
        <div class="banner1"> <!-- class="banner" -->
            <div class="container">
                <!--<h2>Contrary to popular belief, Lorem Ipsum simply</h2>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <a href="#">READ ARTICLE</a>
                -->
            </div>
        </div>
        <!-- technology -->
        <div class="technology">
            <div class="container">
                <div class="col-md-9 technology-left">
                    <div class="tech-no">
                        <!-- technology-top -->
                        <?= $content ?>
                        <!-- technology-top -->
                    </div>
                </div>
                <!-- technology-right -->
                <div class="col-md-3 technology-right">
                    <div class="blo-top">
                        <div class="tech-btm">
                            <img src="images/banner1.jpg" class="img-responsive" alt=""/>
                        </div>
                    </div>
                    <div class="blo-top">
                        <div class="tech-btm">
                            <h4>Подписаться на нашу рассылку</h4>
                            <div class="name">
                                <form>
                                    <input type="text" placeholder="Email" required="">
                                </form>
                            </div>	
                            <div class="button">
                                <form>
                                    <input type="submit" value="Подписаться">
                                </form>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                  
                    <div class="blo-top1">
                        <!-- Категория -->
                        <div class="tech-btm">
                            <?= $this->render('_categories') ?>
                        </div>
                    </div>

                    <div class="blo-top1">
                        <!-- Тэги -->
                        <div class="tech-btm">
                            <?= $this->render('_tags') ?>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
                <!-- technology-right -->
            </div>
        </div>
        <!-- technology -->
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="col-md-4 footer-left">
                    <h6>SitEngines.ru</h6>
                    <p>Сайт SitEngines посвящен заметкам программированию, как для новичков, так и для продвинутых программистов.</p>
                    <p>Блог содержит разделы PHP, JS, Jquery, Css, Mysql, Git, Yii, Java.</p>
                </div>
                <div class="col-md-4 footer-middle">
                    <h4>Сотрудничество</h4>
                    <div class="mid-btm">
                        <p>Я буду рад работать вместе с вами в целях укоренения всеобщих принципов</p>
                        <a href="http://sitengines.ru/">http://sitengines.ru/</a>
                    </div>

                    <p>Если Вы  с опытом в IT сфере, и хотите расширить свою деятельность, буду рад работать с Вами.</p>
                    <a href="http://sitengines.ru/">http://sitengines.ru/</a>

                </div>
                <div class="col-md-4 footer-right">
                    <h4>Популярные теги</h4>
                    <li><a href="#">php</a></li>
                    <li><a href="#">Yii</a></li>
                    <li><a href="#">Yii2</a></li>
                    <li><a href="#">css</a></li>
                    <li><a href="#">js</a></li>
                    <li><a href="#">java</a></li>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- footer -->
        <!-- footer-bottom -->
        <div class="foot-nav">
            <div class="container">
                <ul>
                    <li><a href="index.html">Блог</a></li>
                    <li><a href="videos.html">Портфолио</a></li>
                    <li><a href="reviews.html">Услуги</a></li>
                    <li><a href="tech.html">Сотрудничество</a></li>
                    <li><a href="singlepage.html">Проекты</a></li>
                    <li><a href="singlepage.html">Форум</a></li>
                    <li><a href="design.html">Наука</a></li>
                    <li><a href="business.html">Бизнес</a></li>
                    <li><a href="world.html">В мире</a></li>
                    <li><a href="forum.html">Контакты</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
        </div>
        <!-- footer-bottom -->
        <div class="copyright">
            <div class="container">
                <p>© 2017 Blog. All rights reserved <a href="http://sitengines.ru/">Sitengines.ru</a></p>
            </div>
        </div>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>