<?php include 'core/dc.php';
$revs = $dc->GetReviews(1);
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
	<title><?= $dc->GetSetting('title') ?></title>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="<?= $dc->GetSetting('keys') ?>">
	<meta name="description" content="<?= $dc->GetSetting('desc') ?>">
    
    <!--Favicons-->   
    <!--<link rel="icon" href="img/favicon.png">-->

    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css"  href="/css/font-awesome.css" media="screen">
    <link rel="stylesheet" type="text/css"  href="/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/css/owl.theme.default.css" media="screen">
    <link rel="stylesheet" type="text/css"  href="/css/style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" media="screen">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file: -->
    <!--[if lt IE 9]>
      <script src="/js/html5shiv.min.js"></script>
      <script src="/js/html5shiv-printshiv.min.js"></script>
      <script src="/js/respond.min.js"></script>
    <![endif]-->
  </head>

	<body>
    <div class="header-wrapper">
        <header class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                    <a class="logo" href="#">
                        <img src="/img/logo.png" alt="логотип ЧОП 'Дозор'">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <span class="logo-description">СОЗДАЙ СВОЮ БЕЗОПАСНОСТЬ</span>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-3 col-xs-2">
                    <div class="header-contacts">
                        <span class="header-phone-address">
                        <span class="phone-code"><?= $dc->GetSetting('phonecode') ?></span> <?= $dc->GetSetting('phone1') ?></br>
                            <span class="address"><?= $dc->GetSetting('address') ?></span>
                        </span>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div id="top-nav" class="menu-wrapper">
        <nav class="nav-container">
            <a href="#" class="btn-mobile-menu"><i class="fa fa-bars"></i></a>
            <ul class="nav-header">
                <li><a href="#why" class="page-scroll">Преимущества</a></li>
                <li><a href="#dev" class="page-scroll">Оборудование</a></li>
                <li><a href="#econom" class="page-scroll">Экономия</a></li>
                <li><a href="#disc" class="page-scroll">Акции</a></li>
                <li><a href="#cts" class="page-scroll">Контакты</a></li>
            </ul>
        </nav>
    </div>
    <div class="slider-wrapper">
        <div class="container">
            <div class="row">
                <div class="slider">
                    <div class="col-xs-12">
                        <h1 class="slider-title">
                            <span class="text-string">ХОТИТЕ БЫТЬ УВЕРЕННЫМИ</span>
                            <span class="text-string">В <span class="red-text">БЕЗОПАСНОСТИ</span> СВОЕГО ЖИЛИЩА?</span>
                        </h1>
                        <h2 class="slider-description"><span class="text-string">Закажите установку</span>  <span class="text-string">охранной сигнализации</span> <span class="text-string red-text">ПРЯМО Сейчас!</span></h2>
                        <form class="contact-form-top contact-form">
                            <input type="text"  name="name-input" class="top-contact-input-name" placeholder="Имя">
                            <input type="tel" name="phone-input" class="top-contact-input-phone tel-input" placeholder="Телефон">
                            <a href="#" class="btn-form top-contact-btn">ЗАКАЗАТЬ!</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-wrapper">
        <div class="divider-line"></div>
        <div class="container">
            <div class="row bg-text-white">
                <div class="col-xs-12">
                    <span class="intro-text1 text-string">В среднем в России</span>
                    <span class="intro-text2 text-string">обкрадывают</span>
                    <span class="intro-text3 text-string"><span class="text-orange">657</span> квартир в день,</span>
                    <span class="intro-text4 text-string">или <span class="big-red-text">27</span> квартир в час!</span>
                    <span class="intro-text5 text-string">Домушников становится больше,</span>
                    <span class="intro-text6 text-string">а в летний сезон отпусков</span>
                    <span class="intro-text7 text-string">они особенно активны</span>
                    <div class="intro-attention">
                        <div class="intro-big-attention-text">!</div>
                        <div class="intro-attention-text">
                            <span class="intro-text8 text-string red-text">НЕ МЕДЛИТЕ!</span>
                            <span class="intro-text9 text-string">БЕЗОПАСНОСТЬ</span>
                            <span class="intro-text10 text-string">ВАШЕЙ КВАРТИРЫ</span>
                            <span class="intro-text11 text-string">В ВАШИХ РУКАХ!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="why" class="why-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="why-title">ПОЧЕМУ МЫ?</h2>
                </div>
            </div>
            <div class="row why-cart-marg">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="why-cart">
                        <span class="why-cart-title">Профессиональная</br> команда</span>
                        <div class="why-border">
                            <img class="why-icon1" src="/img/why_icon1.png" alt="">
                        </div>
                        <span class="why-cart-description">Наши специалисты установят охранное оборудование в кратчайшие сроки</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="why-cart">
                        <span class="why-cart-title">Низкие</br> цены</span>
                        <div class="why-border">
                            <img class="why-icon2" src="/img/why_icon2.png" alt="">
                        </div>
                        <span class="why-cart-description">Абонентская плата за комплект системы охранной сигнализации по цене интернета</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="why-cart">
                        <span class="why-cart-title">Круглосуточный</br> контроль</span>
                        <div class="why-border">
                            <img class="why-icon3" src="/img/why_icon3.png" alt="">
                        </div>
                        <span class="why-cart-description">Следите за своим жилищем из любой точки мира с помощью мобильного приложения</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="why-cart">
                        <span class="why-cart-title">Экономия</br> бюджета</span>
                        <div class="why-border">
                            <img class="why-icon4" src="/img/why_icon4.png" alt="">
                        </div>
                        <span class="why-cart-description">Мы не берем деньги за выезд специалиста и монтаж оборудования</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="dev" class="devices-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="devices-title">КОМПЛЕКТ ОБОРУДОВАНИЯ</h2>
                </div>
            </div>
            <div class="row devices-row-marg">
                <div class="col-xs-12">
                    <img class="devices-shema" src="/img/devices.svg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="devices-title-description">
                        <span class="text-string">Мы используем высококачественное оборудование</span>
                        <span class="text-string">одной из ведущих компаний-производителя охранных систем.</span>
                    </h2>
                </div>
            </div>
            <div class="row devices-icon-row-marg">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 devices-icon-cart">
                    <span class="devices-icon-wrapper">
                        <img src="/img/ic01.png" alt="" class="devices-icon">
                    </span>
                    <span class="devices-icon-description">
                        <span class="text-string">Современный</span>
                        <span class="text-string">и универсальный</span>
                        <span class="text-string">дизайн</span>
                    </span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 devices-icon-cart">
                    <span class="devices-icon-wrapper">
                        <img src="/img/ic02.png" alt="" class="devices-icon">
                    </span>
                    <span class="devices-icon-description">
                        <span class="text-string">Простота</span>
                        <span class="text-string">и удобство</span>
                        <span class="text-string">обращения</span>
                    </span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 devices-icon-cart">
                    <span class="devices-icon-wrapper">
                        <img src="/img/ic03.png" alt="" class="devices-icon">
                    </span>
                    <span class="devices-icon-description">
                        <span class="text-string">Установка</span>
                        <span class="text-string">в нестандартных</span>
                        <span class="text-string">помещениях</span>
                    </span>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 devices-icon-cart">
                    <span class="devices-icon-wrapper">
                        <img src="/img/ic04.png" alt="" class="devices-icon">
                    </span>
                    <span class="devices-icon-description">
                        <span class="text-string">Управляется</span>
                        <span class="text-string">с мобильного</span>
                        <span class="text-string">приложения</span>
                    </span>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-6 dev-icon-left devices-icon-cart">
                    <span class="devices-icon-wrapper">
                        <img src="/img/ic05.png" alt="" class="devices-icon">
                    </span>
                    <span class="devices-icon-description">
                        <span class="text-string">Беспроводной монтаж</span>
                        <span class="text-string">без нарушения</span>
                        <span class="text-string">целостности интерьера</span>
                    </span>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 devices-icon-cart">
                    <span class="devices-icon-wrapper">
                        <img src="/img/ic06.png" alt="" class="devices-icon">
                    </span>
                    <span class="devices-icon-description">
                        <span class="text-string">Сервисное</span>
                        <span class="text-string">техническое</span>
                        <span class="text-string">обслуживание</span>
                    </span>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 dev-icon-right devices-icon-cart">
                    <span class="devices-icon-wrapper">
                        <img src="/img/ic07.png" alt="" class="devices-icon-headphone">
                    </span>
                    <span class="devices-icon-description">
                        <span class="text-string">Техническая</span>
                        <span class="text-string">поддержка</span>
                        <span class="text-string">оператора</span>
                    </span>
                </div>
            </div>

        </div>
    </div>
    <div class="middle-contact-form-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="middle-contact-form-title">Все еще сомневаетесь?</h2>
                </div>
                <div class="col-xs-12">
                    <span class="middle-contact-form-description">Оставьте свои данные, и наш специалист свяжется с вами</span>
                </div>
                <form class="contact-form-middle contact-form">
                    <input type="text"  name="name-input" class="middle-contact-input-name" placeholder="Имя">
                    <input type="tel" name="phone-input" class="middle-contact-input-phone tel-input" placeholder="Телефон">
                    <a href="#" class="btn-form middle-contact-btn">СВЯЗАТЬСЯ СО МНОЙ!</a>
                </form>
            </div>
        </div>
    </div>
    <div class="mobile-soft-wrapper">
        <div class="container">
            <div class="row bg-mobile-soft">
                <div class="col-xs-12">
                    <h2 class="mobile-soft-title red-text">
                        <div class="mobile-soft-title-text-wrapper">
                            <span class="text-string">МОБИЛЬНОЕ</span>
                            <span class="text-string">ПРИЛОЖЕНИЕ</span>
                        </div>
                    </h2>
                    <span class="mobile-soft-text">
                        <span class="mobile-soft-text-item1">
                            <span class="text-string">- Следите за своим жилищем</span>
                            <span class="text-string">со смартфона в режиме 24/7</span>
                        </span>
                    </span>
                    <span class="mobile-soft-text">
                         <span class="mobile-soft-text-item2">
                             <span class="text-string">- Не нужно постоянно смотреть</span>
                             <span class="text-string">на экран, датчики зафиксируют</span>
                             <span class="text-string">активность, отправят уведомление</span>
                         </span>
                    </span>
                    <span class="mobile-soft-text">
                        <span class="mobile-soft-text-item3">
                            <span class="text-string">- Смотрите трансляцию с камеры</span>
                            <span class="text-string">наблюдения на экране смартфона</span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div id="econom" class="budget-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="budget-title">МЫ ЭКОНОМИМ ВАШ БЮДЖЕТ</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    <span class="budget-text-wrapper">
                        <span class="text-string">Выезд специалиста на объект</span>
                        <span class="text-string">Монтаж оборудования</span>
                        <span class="text-string">Раздельная постановка на охрану по зонам</span>
                        <span class="text-string">Сервисное обслуживание (гарантия 3 года)</span>
                        <span class="text-string">Уведомления на мобильный телефон</span>
                        <span class="text-string">Онлайн контроль и управление со смартфона</span>
                        <span class="text-string">Круглосуточный мониторинг</span>
                    </span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <span class="budget-icon-wrapper">
                        <img src="/img/triangle.png" alt="">
                        <span class="budget-icon-text red-text">БЕСПЛАТНО!</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div id="disc" class="discount-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="discount-title red-text">АКЦИИ и бонусы</h2>
                </div>
            </div>
            <?php if($dc->GetSetting("disconttext1") && $dc->GetSetting("discontval1")): ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="discount-image-left">
                            <img src="/img/rumb.png" alt="">
                            <span class="discount-image-text-left">скидка</br> <?=$dc->GetSetting("discontval1")?></span>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                        <span class="discount-description-right">
                            <?=$dc->GetSetting("disconttext1") ?></span>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($dc->GetSetting("disconttext2") && $dc->GetSetting("discontval2")): ?>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                    <span class="discount-description-left">
                        <span class="discount-description-left-inner">
                            <?=$dc->GetSetting("disconttext2") ?>
                        </span>
                    </span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="discount-image-right">
                            <img src="/img/rumb.png" alt="">
                            <span class="discount-image-text-right">
                                скидка</br>
                                <?=$dc->GetSetting("discontval2")?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($dc->GetSetting("disconttext3") && $dc->GetSetting("discontval3")): ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="discount-image-left">
                            <img src="/img/rumb.png" alt="">
                            <span class="discount-image-text-left">
                                скидка</br>
                                <?=$dc->GetSetting("discontval3")?>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                        <span class="discount-description-right">
                            <?=$dc->GetSetting("disconttext3") ?>
                        </span>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($dc->GetSetting("disconttext4") && $dc->GetSetting("discontval4")): ?>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                        <span class="discount-description-left">
                            <span class="discount-description-left-inner">
                                <?=$dc->GetSetting("disconttext4") ?>
                            </span>
                        </span>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="discount-image-right">
                            <img src="/img/rumb.png" alt="">
                            <span class="discount-image-text-right">
                                скидка</br>
                                <?=$dc->GetSetting("discontval4")?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($dc->GetSetting("disconttext5") && $dc->GetSetting("discontval5")): ?>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="discount-image-left">
                            <img src="/img/rumb_orange.png" alt="">
                            <span class="discount-image-text-orange-left">
                                <span class="discount-image-text-orange-left-procent">
                                     <?=$dc->GetSetting("discontval5")?>
                                </span>
                                </br> абонентской</br> платы
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                        <span class="discount-description-right">
                            <?=$dc->GetSetting("disconttext5") ?>
                        </span>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="feedback-wrapper">
		<?php if(count($revs)): ?>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="feedback-title">ОТЗЫВЫ КЛИЕНТОВ</h2>
					</div>
					<div class="col-xs-12 feedback-slider">
						<span class="slider-prev"> < </span>
						<div class="feedback-slider-wrapper">
							<div class="owl-carousel">
								<?php foreach($revs as $rev): ?>
									<div class="slide">
										<span class="feedback-autor"><?= $rev->name; ?></span>
									<span class="feedback-text">
										<?= $rev->post;?>
									</span>
									</div>
								<?php endforeach;?>
							</div>
						</div>
						<span class="slider-next"> > </span>
					</div>
				</div>
			</div>
		<?php endif ?>
    </div>
    <div class="partners-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <span class="partners-title">НАШИ ПАРТНЕРЫ</span>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 partners-icon1"></div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 partners-icon2"></div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 partners-icon3"></div>
                <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12 partners-icon4"></div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 partners-icon5"></div>

                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 partners-icon6"></div>
                <div class="col-lg-4 col-md-8 col-sm-8 col-xs-12 partners-icon7"></div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 partners-icon8"></div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 partners-icon9"></div>

                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 partners-icon10"></div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 partners-icon11"></div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 partners-icon12"></div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 partners-icon13"></div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 partners-icon14"></div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 partners-icon15"></div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 partners-icon16"></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 partners-icon17"></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 partners-icon18"></div>
            </div>
        </div>
    </div>
    <div class="contact-form-bottom-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <span class="contact-form-bottom-title">ОСТАЛИСЬ ВОПРОСЫ?</span>
                    <form class="contact-form-bottom contact-form">
                        <input type="text"  name="name-input" class="bottom-contact-input-name" placeholder="Имя">
                        <input type="tel" name="phone-input" class="bottom-contact-input-phone tel-input" placeholder="Телефон">
                        <a href="#" class="btn-form bottom-contact-btn">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="cts" class="container-fluid contacts-section">
        <div class="row row-no-margin">
            <div class="col-sm-6 col-xs-12">
                <div class="map-wrapper">
                    <div id="map"></div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="contacts-wrapper">
                    <span class="contacts-address-text text-string"><?= $dc->GetSetting('address') ?></span>
<!--                    <span class="contacts-tel1 text-string">-->
<!--						--><?//=$dc->GetSetting('phonecode') ? '(' . $dc->GetSetting("phonecode").')' : '' ?><!-- -->
<!--						--><?//= $dc->GetSetting('phone1') ?>
<!--					</span>-->
					 <span class="contacts-tel1 text-string">
						<?=$dc->GetSetting('phonecode') ? $dc->GetSetting("phonecode") : '' ?>
						<?= $dc->GetSetting('phone1') ?>
					</span>
                    <!--<span class="contacts-tel2 text-string">55-90-02</span>-->
					<?php if($dc->GetSetting('phone2')): ?>
						<span class="contacts-tel2 text-string"><?= $dc->GetSetting('phone2') ?></span>
					<?php endif; ?>
					<?php if($dc->GetSetting('phone3')): ?>
						<span class="contacts-tel3 text-string"><?= $dc->GetSetting('phone3') ?></span>
					<?php endif; ?>
                    <span class="contacts-email text-string"><?= $dc->GetSetting('mail') ?></span>
                    <span class="contacts-vk text-string"><?= $dc->GetSetting('vk') ?></span>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p class="footer-copiright">&copy; 2017 Частное охранное предприятие “Дозор”</p>
                </div>
            </div>
        </div>
    </footer>

    <!--ответ после отправки формы обратной связи-->
    <div class="container-fluid overlay">
        <div class="row">
            <div class="result-box-wrapper">
                <div class="result-box">
                    <span class="close-btn">X</span>
                    <span class="result-text">Спасибо! </br> Ваша заявка принята.</span>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/custom.js"></script>
	</body>
</html>