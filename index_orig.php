<?php include 'core/dc.php';
$revs = $dc->GetReviews(1);
$images = $dc->GetImages();
$iCount = count($images);
$iDivs = (int)(count($images) - 1)/9 + 1;
?>
<!DOCTYPE html>
<html class="html" lang="ru-RU">
	<head>
		<title><?= $dc->GetSetting('title') ?></title>
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="<?= $dc->GetSetting('keys') ?>">
		<meta name="description" content="<?= $dc->GetSetting('desc') ?>">
		<link rel="stylesheet" type="text/css" href="css/gotham.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body>
		<div class="wrap">
			<header>
				<div class="page">
					<div class="headPhone">
						<div>+7 (3522) 250 009</div>
						<div>+7 (3522) 250 014</div>
						<div>+7 900 381 8888</div>
						<div class="btnCall" id="bnCall">Вам перезвонить?</div>
					</div>
					<div class="menu">
						<a href="#hit">Хиты продаж</a><a href="#goodwin">Комплектующие</a><a href="#now">Оплата</a><a href="#why">Преимущества</a><a href="#gallery">Галерея</a><a href="#reviews">Отзывы</a><a href="#ask">Вопросы</a><a href="#contacts">Контакты</a>
					</div>
				</div>
			</header>
			<div id="main">
				<div class="page">
					<div>
						<div class="log"><img src="img/logo.png" alt="" /></div>
						<div class="discount">
							<h1>Пластиковые окна от производителя</h1>
							<div>со скидкой 25%</div>
						</div>
						<div class="wind"><img src="img/window.png" alt="" /></div>
						<div><span class="day5">5 дней от замера до монтажа</span></div>
					</div><div>
						<div>
							<div class="diSend">
								<div>
									<div class="box">
										<div class="desc">
											<div>Отправьте заявку</div>
											<div class="high">и получите</div>
											<div class="high">скидку 25%</div>
											<div>и москитную сетку</div>
											<div>в подарок</div>
										</div>
										<div id="aOut" class="form">
											<div class="inp"><input type="text" placeholder="Ваше имя" id="aName" /><i class="name"></i></div>
											<div class="inp"><input type="text" placeholder="Ваш номер" id="aPhone" /><i class="phone"></i></div>
											<div class="saleBtn" onclick="main.SendSale(this, 1,'a')"><div class="high">Отправить</div><div>и получить скидку</div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="yearX"><span class="year5">5 лет гарантии</span></div>
					</div>
				</div>
			</div>
			<div id="hit">
				<div class="page">
					<h2>Хиты продаж</h2>
					<div class="rows">
						<div>
							<div class="item">
								<div class="img"><img src="img/hit_1.png" alt="" /></div>
								<h3>Двухстворчатое окно</h3>
								<div class="pric">
									<div class="price">от 5 000 руб.</div>
									<div>без монтажа</div>
								</div>
								<div class="pric">
									<div class="price priceB">от 10 000 руб.</div>
									<div>с монтажом</div>
								</div>
							</div>
						</div><div>
							<div class="item">
								<div class="img"><img src="img/hit_2.png" alt="" /></div>
								<h3>Трехстворчатое окно</h3>
								<div class="pric">
									<div class="price">от 7 500 руб.</div>
									<div>без монтажа</div>
								</div>
								<div class="pric">
									<div class="price priceB">от 12 000 руб.</div>
									<div>с монтажом</div>
								</div>
							</div>
						</div><div>
							<div class="item">
								<div class="img"><img src="img/hit_3.png" alt="" /></div>
								<h3>Балконный блок</h3>
								<div class="pric">
									<div class="price">от 9 000 руб.</div>
									<div>без монтажа</div>
								</div>
								<div class="pric">
									<div class="price priceB">от 13 000 руб.</div>
									<div>с монтажом</div>
								</div>
							</div>
						</div><div>
							<div class="item">
								<div class="img"><img src="img/hit_4.png" alt="" /></div>
								<h3>Остекление лоджии</h3>
								<div class="pric">
									<div class="price">от 10 000 руб.</div>
									<div>без монтажа</div>
								</div>
								<div class="pric">
									<div class="price priceB">от 13 000 руб.</div>
									<div>с монтажом</div>
								</div>
							</div>
						</div>
					</div>
					<div class="order">
						<div class="rows">
							<div>
								<img src="img/order_logo.png" alt="" />
							</div><div>
								<div>Закажите расчет стоимости Вашего окна</div>
								<div id="bOut" class="rows rowsI">
									<div>
										<div class="inp"><i class="name"></i><input type="text" placeholder="Ваше имя" id="bName" /></div>
									</div><div>
										<div class="inp"><i class="phone"></i><input type="text" placeholder="Ваш номер" id="bPhone" /></div>
									</div><div>
										<div class="saleBtn" onclick="main.SendSale(this, 2, 'b')">Заказать расчет</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="goodwin">
				<div class="page">
					<div class="rows">
						<div>
							<img src="img/goodwin_circle.png" alt="" />
						</div><div>
							<h3>Профиль <img src="img/goodwin.png" alt="Goodwin" /></h3>
							<div class="desc">
								Профиль <b>Goodwin</b> разработан на российском заводе «Монблан». Благодаря специальному
								составу смеси и передовому экструзионному инструменту, обеспечивается низкая
								стоимость профиля с сохранением всех его технических параметров. Классическая
								конфигурация идеально подходит для средней полосы и юга России и обеспечивает
								очень высокий уровень тепло- и шумоизоляции. При установке металлопластиковых окон
								значительно сокращаются затраты на отопление помещения, а хорошая шумоизоляция
								актуальная для любых зданий в черте города. По результатам лабораторных испытаний
								долговечность профиля составляет более 40 лет.
								<br><br>
								Пластиковые окна Goodwin впишутся в любой интерьер как дома, так и офиса. Они могут
								быть выполнены в любом дизайне и стиле, различных цветов, размеров и форм
								(прямоугольные, арочные, стрельчатые, круглые и т.д.). При этом окна и фурнитура не
								требуют специального ухода. Их можно мыть обыкновенными моющими средствами. Окна
								Goodwin отвечают всем стандартам пожарной безопасности, как национальным, так и
								международным. Они успешно прошли лабораторные испытания и рекомендованы в строительстве, в
								частности в детских и лечебно-профилактических учреждениях.
								<br><br><br>
								<a href="https://www.montblanc.ru/katalog/okonnye-sistemy-goodwin/" target="_blank">Подробнее</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="furniture">
				<div class="page">
					<h2>Фурнитура</h2>
					<div class="rows">
						<div>
							<div class="item">
								<h3>Roto NT</h3>
								<div class="cont"><img src="img/fur_1.png" alt="" /><i></i>Надежность, огромный выбор различных механизмов и элементов, постоянные улучшения конструкций позволяют немецкой фурнитуре <b>Roto</b> оставатся самой продоваемой фурнитурой для окон в мире. Даже базавая комплектация обладает высокими противовзломными характеристиками. Кроме того фурнитура <b>Roto</b> подходит для большенства пластиковых окон. </div>
								<div><a href="http://ftt.roto-frank.com/ru/produkty/izobrazhenie-produkta/detail/roto-nt/-/" target="_blank">Подробнее</a></div>
							</div>
						</div><div>
							<div class="item">
								<h3>Maco</h3>
								<div class="cont"><img src="img/fur_2.png" alt="" /><i></i>Отличительная черта австрийской фурнитуры <b>Maco</b> — возможность регулировки в любом напрвлении, что полностью исключает любое продувание. Многоступенчатая система проветривания обеспечивает приток свежего воздуха без охлаждения комнаты. Оконная фурнитура <b>Масо</b> выдерживает до 20 000 циклов открывания/закрывания, а благодаря форме и покрытию цапф открывать и закрывать окна можно, практически не прилагая усилий.</div>
								<div><a href="http://www.maco.eu/ru-ru/%D0%BF%D1%80%D0%BE%D0%B4%D1%83%D0%BA%D1%82-%D0%B3%D1%80%D1%83%D0%BF%D0%BF%D1%8B/%D0%BE%D0%BA%D0%BD%D0%B0" target="_blank">Подробнее</a></div>
							</div>
						</div><div>
							<div class="item">
								<h3>Kale</h3>
								<div class="cont"><img src="img/fur_3.png" alt="" /><i></i>Турецкая фурнитура <b>Kale</b> — это изделия с качеством, вполне сопоставимым с продукцией широко известных производителей, но занимающие при этом более доступную ценовую нишу. Она универсальна и обладает высокой надежностью (до 10 лет безотказной эксплуатации). Это достигается благадаря современному оборудованию и трехслойному гальваническому покрытию всех деталей.</div>
								<div><a href="http://kale-ssk.ru/phone/index.html" target="_blank">Подробнее</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="color">
				<div class="page">
					<h2>Надоели белые окна?</h2>
					<div class="rows row2">
						<div>
						Мы можем изготовить окна любой цветовой гаммы и разных вариантов отделки. Мы предлагаем придать вашему окну любой оттенок или имитацию под дерево с помощью ламинации. Заламинировать окно можно как с обеих сторон, так и только с одной: внутренней или внешней.
						</div><div>
						Помимо различных вариантов расцветки профиля можно затонировать само стекло. Это не только защищает окна от ярких солнечных лучей и ультрафиолета и создает эффект невидимости с внешней стороны (что актуально для магазинов и кафе), позволяет создать индивидуальный дизайн, но самое главное — укрепляет сами стекла.
						</div>
					</div>
					<div class="rows row4">
						<div>
							<img src="img/color_1.png" alt="" />
						</div><div>
							<img src="img/color_2.png" alt="" />
						</div><div>
							<img src="img/color_3.png" alt="" />
						</div><div>
							<img src="img/color_4.png" alt="" />
						</div>
					</div>
				</div>
			</div>
			<div id="now">
				<div class="page">
					<div class="rows">
						<div>
							<img src="img/pig.png" alt="" />
						</div><div>
							<h2>Не откладывайте на потом,<br>закажите установку окон уже сейчас!</h2>
							<div class="info">Вам не нужно откладывать или копить деньги на окна,<br>с кредитом и рассрочкой наши окна становятся еще доступней</div>
							<div class="rows row3">
								<div>
									<img src="img/now_1.png" alt="" />
									<div>Наличный<br>и безналичный<br>расчет (Visa, MasterCard)</div>
								</div><div>
									<img src="img/now_2.png" alt="" />
									<div>50% при заключении<br>договора и 50% —<br>по факту установки окон</div>
								</div><div>
									<img src="img/now_3.png" alt="" />
									<div>Кредит или рассрочка<br>от 6 до 12 месяцев</div>
								</div>
							</div>
						</div>
					</div>
					<div class="phones">
						<div class="top">Получите бесплатную консультацию <b><span class="nowrap">+7 (3522) 250-009</span>, <span class="nowrap">+7 900-381 8888</span></b></div>
						<div class="little">или заполните форму ниже и мы сами перезвоним Вам</div>
					</div>
					<div id="cOut" class="form">
						<div class="rows">
							<div>
								<div class="inp"><i class="name"></i><input type="text" placeholder="Ваше имя" id="cName" /></div>
							</div><div>
								<div class="inp"><i class="phone"></i><input type="text" placeholder="Ваш номер" id="cPhone" /></div>
							</div><div>
								<div class="saleBtn" onclick="main.SendSale(this, 3, 'c')">Перезвоните мне</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="why">
				<div class="page">
					<h2>Почему выбирают <img src="img/order_logo.png" alt="Народные окна" /></h2>
					<div class="rowV">
						<div>
							<div>
								<img src="img/why_1.png" alt="" />
							</div><div>
								Окна напрямую с завода (мы производители)
							</div><div>
								<img src="img/why_arrow.png" alt="" />
							</div><div>
								<h3>∞</h3>
								<div>Богатый ассортимент продукции, аксессуаров и комплектующих</div>
							</div>
						</div>
						<div>
							<div>
								<img src="img/why_2.png" alt="" />
							</div><div>
								Богатый опыт
							</div><div>
								<img src="img/why_arrow.png" alt="" />
							</div><div>
								<h3>более 5 лет</h3>
								<div>на рынке</div>
							</div>
						</div>
						<div>
							<div>
								<img src="img/why_3.png" alt="" />
							</div><div>
								Многоуровневый контроль качества продукции
							</div><div>
								<img src="img/why_arrow.png" alt="" />
							</div><div>
								<h3>60 месяцев</h3>
								<div>гарантии на конструкции с монтажем</div>
							</div>
						</div>
						<div>
							<div>
								<img src="img/why_4.png" alt="" />
							</div><div>
								Индивидуальный подход к каждому клиенту. Рассрочка в кредит
							</div><div>
								<img src="img/why_arrow.png" alt="" />
							</div><div>
								<h3>5000</h3>
								<div>довольных клиентов</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="gallery">
				<div class="page">
					<h2>Выполненные работы</h2>
					<div class="images">
						<div><i class="left"></i></div><div class="gals">
						<?php for($d = 0; $d < $iDivs; ++$d): ?>
							<div class="rows" data-num="<?= ($d + 1) ?>" <?= $d ? 'display:none' : 'display:block' ?>>
								<?php for($i = $d*9; $i < ($d + 1)*9 && $i < $iCount; ++$i): ?><div class="galI"><img src="upload/preview/<?= $images[$i]->name ?>" alt="" /></div><?php endfor ?>
							</div>
						<?php endfor ?>
						</div><div><i class="right"></i></div>
					</div>
				</div>
			</div>
			<div id="calc">
				<div class="page">
					<div class="order">
						<div class="rows">
							<div>
								<img src="img/order_logo.png" alt="" />
							</div><div>
								<div>Закажите расчет стоимости Вашего окна</div>
								<div id="dOut" class="rows rowsI">
									<div>
										<div class="inp"><i class="name"></i><input type="text" placeholder="Ваше имя" id="dName" /></div>
									</div><div>
										<div class="inp"><i class="phone"></i><input type="text" placeholder="Ваш номер" id="dPhone" /></div>
									</div><div>
										<div class="saleBtn" onclick="main.SendSale(this, 4, 'd')">Заказать расчет</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php if(count($revs)): ?>
			<div id="reviews">
				<div class="page">
					<div class="rows">
						<div class="fam"><img src="img/family.png" alt="" /></div><div>
							<h2>Отзывы</h2>
							<div class="reviews">
								<div><i class="left"></i></div><div class="cont">
								<?php $i = 0; foreach($revs as $rev):
									$dateD = date('d', strtotime($rev->date));
									$dateM = date('m', strtotime($rev->date));
									$dateY = date('Y', strtotime($rev->date));
									$desc = $rev->post;
								?><div <?= $i ? 'style="display:none;"' : '' ?> data-num="<?= ++$i ?>">
										<div class="name"><?= $rev->name ?>, <?= $dateD ?>.<?= $dateM ?>.<?= $dateY ?></div>
										<div class="desc"><?= $desc ?></div>
									</div><?php endforeach ?>
								</div><div><i class="right"></i></div>
							</div>
							<div class="revB"><span class="saleBtn" id="bnReview">Оставить отзыв</span></div>
						</div>
					</div>
				</div>
			</div>
			<?php endif ?>
			<div id="ask">
				<div class="page">
					<div class="rows">
						<div><img src="img/girl.png" alt="" /></div><div>
							<h2>Остались вопросы?</h2>
							<div class="glad">С радостью ответим на них</div>
							<div class="call">Просто позвоните по телефону <b><span>+7 (3522) 250-009</span> или <span>+7 900 381-8888</span></b></div>
							<div class="or">или заполните форму ниже и мы сами перезвоним Вам</div>
							<div id="eOut" class="form">
								<div class="rows">
									<div>
										<div class="inp"><i class="name"></i><input type="text" placeholder="Ваше имя" id="eName" /></div>
									</div><div>
										<div class="inp"><i class="phone"></i><input type="text" placeholder="Ваш номер" id="ePhone" /></div>
									</div><div>
										<div class="saleBtn" onclick="main.SendSale(this, 5, 'e')">Перезвоните мне</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="contacts">
				<div class="page">
					<h2>Контакты</h2>
					<div class="rows">
						<div>
							<a class="dg-widget-link" href="http://2gis.ru/kurgan/firm/70000001007112788/center/65.3988003730774,55.45566914347101/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Кургана</a><div class="dg-widget-link"><a href="http://2gis.ru/kurgan/center/65.398803,55.455528/zoom/16/routeTab/rsType/bus/to/65.398803,55.455528╎Народные окна, завод ПВХ конструкций?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Народные окна, завод ПВХ конструкций</a></div><script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":640,"height":600,"borderColor":"#a3a3a3","pos":{"lat":55.45566914347101,"lon":65.3988003730774,"zoom":16},"opt":{"city":"kurgan"},"org":[{"id":"70000001007112788"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
						</div><div>
							<div class="logo"><img src="img/logo_contact.png" alt="" /></div>
							<div class="conts">
								<div class="address">
									<div>Г. Курган</div>
									<div>бульвар Мира, д. 3</div>
									<div>(Восточный район города)</div>
								</div>
								<div class="phones">
									<div>+7 (3522) 250 009</div>
									<div>+7 (3522) 250 014</div>
									<div>+7 900 381 8888</div>
								</div>
								<div class="email">
									<div>narodokna45@mail.ru</div>
								</div>
								<div class="time">
									<div>пн-пт 9-18</div>
									<div>сб 9-15</div>
									<div>вс выходной</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer>
				<div class="page">
					<div class="copy">
						<div>&copy; <?= date('Y') ?>, Народные окна </div>
						<div>Разработка РА «Артист»</div>
					</div><div class="warn">
						<div>Обращаем ваше внимание на то, что данный сайт носит исключительно информационный характер и ни при каких условиях информационные материалы и цены, размещенные на сайте, не являются публичной офертой. Оставляя свои данные в формах обратной связи, вы даете согласие на обработку персональных данных согласно ст.6 Федерального закона №152-Ф3 «О персональных данных». Полученные персональные данные используются только в целях связи с покупателем и не передаются третьим лицам.</div>
					</div>
				</div>
			</footer>
		</div>
		<div id="hover">
			<div class="popup" id="recall">
				<div class="close" id="closeC"><i>x</i></div>
				<div class="out">
					<div id="fOut" class="form">
						<div class="inp"><i class="name"></i><input type="text" placeholder="Ваше имя" id="fName" /></div>
						<div class="inp"><i class="phone"></i><input type="text" placeholder="Ваш номер" id="fPhone" /></div>
						<div class="saleBtn" onclick="main.SendSale(this, 6, 'f')">Перезвоните мне</div>
					</div>
				</div>
			</div>
			<div class="popup" id="addReview">
				<div class="close" id="closeR"><i>x</i></div>
				<div class="out">
					<div id="rOut" class="form">
						<div class="inp"><i class="name"></i><input type="text" placeholder="Ваше имя" id="rName" /></div>
						<div class="inp"><textarea placeholder="Отзыв" id="rCom"></textarea></div>
						<div class="saleBtn" onclick="main.SendReview(this)">Оставить отзыв</div>
					</div>
				</div>
			</div>
		</div>
		
			<!-- Yandex.Metrika counter -->
			<script type="text/javascript">
					(function (d, w, c) {
							(w[c] = w[c] || []).push(function() {
									try {
											w.yaCounter44139499 = new Ya.Metrika({
													id:44139499,
													clickmap:true,
													trackLinks:true,
													accurateTrackBounce:true,
													webvisor:true
											});
									} catch(e) { }
							});

							var n = d.getElementsByTagName("script")[0],
									s = d.createElement("script"),
									f = function () { n.parentNode.insertBefore(s, n); };
							s.type = "text/javascript";
							s.async = true;
							s.src = "https://mc.yandex.ru/metrika/watch.js";

							if (w.opera == "[object Opera]") {
									d.addEventListener("DOMContentLoaded", f, false);
							} else { f(); }
					})(document, window, "yandex_metrika_callbacks");
			</script>
			<noscript><div><img src="https://mc.yandex.ru/watch/44139499" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
			<!-- /Yandex.Metrika counter -->
	</body>
</html>
