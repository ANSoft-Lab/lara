@extends('base')

@section('css-includes')

	<link rel="stylesheet" href="css/Insurance-mortgage/main.min.css">
	<link rel="stylesheet" href="css/Insurance-mortgage/media.css">

@endsection

@section('content')
	<div id="app">
			<div class="slogan">
				<div class="container">
					<h4 class="additional__title">Мы сотрудничаем только с аккредитованными компаниями</h4>
					<div class="mt-4 d-flex justify-content-center">
						<img src="img/Insurance-mortgage/logo1.png" alt="Партнер">
						<img src="img/Insurance-mortgage/logo3.png" alt="Партнер">
						<img src="img/Insurance-mortgage/logo5.png" alt="Партнер">
						<img src="img/Insurance-mortgage/logo6.png" alt="Партнер">
						<img src="img/Insurance-mortgage/logo10.png" alt="Партнер">
						<img src="img/Insurance-mortgage/logo_vsk.png" alt="Партнер">
					</div>
				</div>
			</div>
			
			<div class="why block">
				<div class="container">
					<div class="text-center mb-5">
						<h3 class="mb-3">Наши услуги бесплатны!</h3>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-5">
							<h3>Мы сотрудничаем с основными банками&nbsp;— ипотечными кредиторами</h3>
							<p>Знаем специфику их работы, требования и правила оформления документации. Благодаря этому опыту, мы заранее можем предостеречь наших клиентов и предложить им выгодные и правильные решения.</p>
						</div>
						<div class="col-md-6 col-lg-5 logo-container">
							<div class="card"><img src="img/Insurance-mortgage/bank1.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/bank2.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/bank3.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/bank7.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/bank6.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/bank5.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/bank4.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/bank8.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/logo_zhilfinance.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/bank10.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/bank11.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/bank12.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/logo_bankmkb.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/logo_openbank.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/logo_sovcombank.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/logo_uralsib.png" alt=""></div>
							<div class="card"><img src="img/Insurance-mortgage/logo_vbank.png" alt=""></div>
						</div>
					</div>
			</div>

			<br/><br/><br/>

			<div class="home">
				<div class="home__bg">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-xl-7 col-lg-6">
								<div class="home__title">
									<h1>Страхование ипотеки</h1>
									<p>Комплексная помощь по оформлению<br> полиса ипотечного страхования</p>
									<a href="#popupp" class="js-open-modal modal__btn modal__btn__small fancybox">Хочу страховку</a>
									<p class="additional__subtitle white" style="margin-top:100px;">Партнёрские условия для&nbsp;риэлторов и&nbsp;агентств недвижимости по&nbsp;телефону <span style="white-space:nowrap;">+7 (910) 644-16-27</span></p>
								</div>
							</div>
							<div class="col-lg-auto w-xs-100">
								<div class="home__form">
									<div id="calculator">
										<form class="calc" action="">
											@csrf
											<h2>Калькулятор <br>страхования ипотеки</h2>
											<p class="text-muted">Рассчитайте стоимость страхования ипотечного кредита</p>
											<div class="credit-sum">
												<label for="formPhone">Сумма долга</label>
												<input type="number" pattern="\d*" class="form-control readable mb-2 mr-sm-2 mb-sm-0 js__calcSum dolg_sum" name="credit_sum" placeholder="2 500 000" value="2500000">
											</div>
											<div class="age-select">
												<label for="formPhone">Возраст заемщика</label>
												<select id="calc-age" class="form-control custom-select js__calcAge" name="user_age">
													<option value="" disabled="" selected="">Возраст</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
													<option value="31">31</option>
													<option value="32">32</option>
													<option value="33">33</option>
													<option value="34">34</option>
													<option value="35" selected>35</option>
													<option value="36">36</option>
													<option value="37">37</option>
													<option value="38">38</option>
													<option value="39">39</option>
													<option value="40">40</option>
													<option value="41">41</option>
													<option value="42">42</option>
													<option value="43">43</option>
													<option value="44">44</option>
													<option value="45">45</option>
													<option value="46">46</option>
													<option value="47">47</option>
													<option value="48">48</option>
													<option value="49">49</option>
													<option value="50">50</option>
													<option value="51">51</option>
													<option value="52">52</option>
													<option value="53">53</option>
													<option value="54">54</option>
													<option value="55">55</option>
													<option value="56">56</option>
													<option value="57">57</option>
													<option value="58">58</option>
													<option value="59">59</option>
													<option value="60">60</option>
													<option value="61">61</option>
													<option value="62">62</option>
													<option value="63">63</option>
													<option value="64">64</option>
													<option value="65">65</option>
												</select>
											</div>
											<div class="gender-radio">
												<label for="">Пол заемщика</label>
												<div class="radioContainer">
													<input class="js__calcGender" type="radio" name="user_gender" id="male" value="male" checked>
													<label for="male"><span class="male radio"></span></label>
												</div>
												<div class="radioContainer">
													<input class="js__calcGender" type="radio" name="user_gender" id="female" value="female">
													<label for="female"><span class="female radio"></span></label>
												</div>
											</div>
											<div class="clearfix"></div>
												
											<p class="risk calc-total">
												<button class="js-open-modal modal__btn modal__btn__small" type="button">Рассчитать</button>
											</p>
											<div class="row make-order hidden">
												<div class="col-sm-6 col-auto"><a href="#leadModal" class="js-open-modal modal__btn modal__btn__small fancybox">Оставить заявку</a></div>
												<div class="col-sm-6 col-auto"><a href="#popupp" class="js-open-modal modal__btn modal__btn__small fancybox">Заказать звонок</a></div>
											</div>
											<div class="clearfix"></div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="service block">
				<div class="container">
					<h2 class="additional__title">Страхование ипотеки</h2>

					<p class="additional__subtitle">Если Вы решили воспользоваться ипотечным кредитом для приобретения недвижимости, то одним из обязательных условий получения кредита в банке является заключение договора страхования.</p>
					<p class="additional__subtitle">Мы готовы помочь Вам подобрать оптимальные страховые программы комплексного ипотечного страхования от ведущих страховых компаний, учитывающие стандартные требования большинства банков-кредиторов.</p>
					<p class="additional__subtitle"><b>Внимание!</b> Если вы уже застрахованы по ипотеке, но ищете надежную страховую компанию с более низкими тарифами на очередной год страхования - сравните тарифы действующего полиса с тарифами других страховых компаний, наш сервис вам в помощь!</p>

					<blockquote>Страховой полис ипотечного страхования - гарантия выполнения 
					обязательств заемщика по возврату полученного кредита!</blockquote>
				</div>
			</div>

			<!-- <div class="what block">
				<div class="container">
					<h2>Страхование ипотечного кредита включает</h2>
					<div class="row">
						<div class="col-md-4">
							<div class="what__item">
								<img src="img/Insurance-mortgage/icon1.png" alt="">
								<p>СТРАХОВАНИЕ ИМУЩЕСТВА <span>Риски гибели, утраты или повреждения объекта залога (только конструктивные элементы)</span></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="what__item">
								<img src="img/Insurance-mortgage/icon2.png" alt="">
								<p>СТРАХОВАНИЕ ЖИЗНИ/ЗДОРОВЬЯ <span>Риски смерти, утраты трудоспособности заемщика/созаемщика</span></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="what__item">
								<img src="img/Insurance-mortgage/icon3.png" alt="">
								<p>СТРАХОВАНИЕ ТИТУЛА <span>Риск потери права собственности на объект залога</span></p>
							</div>
						</div>
					</div>
				</div>
			</div> -->

			<div id="land1" class="why block">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h2 class="additional__title">Где застраховать ипотеку</h2>
							<p class="additional__subtitle">Более 8 лет мы консультируем клиентов о ценах и порядке оформления договоров ипотечного страхования, представляем их интересы в выбранной страховой компании. Мы экономим не только ваши деньги, но и время!</p>
							<hr>
						</div>
					</div>
					
					<div class="row justify-content-center">
						<div class="col-md-5">
							<h3>Мы работаем с самыми надежными страховыми компаниями России</h3>
							<p>Выбирая партнеров, мы очень внимательно относимся к их репутации. Сотрудничаем только с аккредитованными страховыми компаниями, которые имеют высокие рейтинги надежности и финансовой стабильности.</p>
						</div>
						<div class="col-md-5">
							<div class="card">
								<img src="img/Insurance-mortgage/logo_vsk.png" alt="">
							</div>
							<div class="card">
								<img src="img/Insurance-mortgage/reso_logo.png" alt="">
							</div>
							<div class="card">
								<img src="img/Insurance-mortgage/ergo_logo.png" alt="">
							</div>
							<div class="card">
								<img src="img/Insurance-mortgage/ingos_logo.png" alt="">
							</div>
							<div class="card">
								<img src="img/Insurance-mortgage/liberty_logo.png" alt="">
							</div>
							<div class="card">
								<img src="img/Insurance-mortgage/alfa_logo.png" alt="">
							</div>
						</div>
					</div>

					<h3 class="text-center mb-4 additional__title">Шесть причин обратиться к нам:</h3>

					<div class="contrast">
						<div class="row">
							<div class="col-12 col-md-6 contrast__left">
								<h4>Оформление полиса ипотечного страхования нашими специалистами:</h4>
								<ul>
									<li>Подберем оптимальные предложения от <strong>ТОП-10</strong> страховых компаний в течение 1 рабочего дня;</li>
									<li>Поможем разобраться в условиях кредитного договора и требованиях банка-кредитора;</li>
									<li>Оформим пакет документов для страховой компании;</li>
									<li>Бесплатно доставим договор страхования в пределах МКАД или КАД;</li>
									<li>Окажем содействие в урегулировании вопросов со страховой компанией при наступлении страхового случая;</li>
									<li>Получаете персонального специалиста, который будет помогать Вам по всем вопросам страхования;</li>
								</ul>
								<div class="text-center">
									<a href="#leadModal" class="js-open-modal modal__btn modal__btn__small fancybox">Оставить заявку</a>
								</div>
							</div>
							<div class="col-12 col-md-6 contrast__right">
								<h4>Самостоятельное оформление полиса ипотечного страхования это:</h4>
								<ul>
									<li>Потеря времени и сил на поиск подходящей страховой компании;</li>
									<li>Неправильное оформление документов для страховой компании;</li>
									<li>Переплата страхового взноса по договору страхования;</li>
									<li>Необходимость приезжать в офис страховой компании для заключения договора;</li>
									<li>Самостоятельное решение вопросов со страховой компанией при наступлении страхового случая;</li>
								</ul>
								<div class="text-center">
									<a href="#popupp" class="js-open-modal modal__btn modal__btn__small fancybox">Бесплатная консультация</a>
								</div>
							</div>
						</div>
					</div>

					<div class="mt-5 row justify-content-center">
						<div class="col-lg-10">
							<h3 class="additional__title">Мы гарантируем лучшую цену на полис ипотечного страхования!</h3>
							<p>Мы подбираем самый надежный и выгодный вариант страхования, а не продаем услуги конкретной страховой компании, ведь главная наша цель, чтобы вы были довольны и оставались нашим клиентом на долгие годы!</p>
						</div>
					</div>

				</div>
			</div>

			<div id="land2"></div>

			<div class="how block">
				<div class="container">
					<h2 class="additional__title">Стоимость страхования при ипотеке</h2>
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<p>Размер страхового взноса по полису ипотечного страхования зависит от страховой суммы и страхового тарифа, рассчитываемого на основании сведений, содержащихся в заявлении и документах.</p>

							<div class="equation d-none d-sm-block">
								<em><span>Страховая сумма</span>
									=
									<span>Сумма долга перед банком</span>
								</em>
							</div>

							<p>Ориентировочная тарифная ставка по договору комплексного ипотечного страхования (по трем видам риска) в возрасте от 25 до 45 лет составит 0,4% - 1,4% от страховой суммы.</p>

							<blockquote class="red">По требованиям некоторых банков страховая сумма может быть увеличена на 10-15% к сумме кредита или остатку задолженности по кредиту.</blockquote>

							<hr>

						</div>
					</div>
				</div>
			</div>

			<div class="what block">
				<div class="container">
					<h2 class="additional__title">Cтоимость полиса ипотечного страхования зависит от:</h2>
					<div class="row">
						<div class="col-md-4">
							<div class="what__item">
								<img src="img/Insurance-mortgage/age.png" alt="">
								<p>Возраста и здоровья <span>возраста и состояния здоровья
								(при страховании жизни и здоровья)</span></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="what__item">
								<img src="img/Insurance-mortgage/brick.png" alt="">
								<p>Состояния недвижимости <span>технического состояния недвижимости
								(при страховании имущества)</span></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="what__item">
								<img src="img/Insurance-mortgage/numbers.png" alt="">
								<p>Количества сделок <span>количества предыдущих сделок
								(при страховании титула)</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="how-contract block">
				<div class="container">
					<h2 class="additional__title">Как застраховать ипотеку?</h2>
					<div class="row">
						<div class="col-md-4">
							<div class="circle">
								<span>1</span>
							</div>
							<p class="item-text">
								<a href="#popupp" class="fancybox goal__callback_form_open">Оставьте заявку</a><br>
								или<br>
								<a href="tel:+74954249978">+7 (495) 424-99-78</a>
							</p>
						</div>
						<div class="col-md-4">
							<div class="circle middle">
								<span>2</span>
							</div>
							<p class="item-text">
								Подбираем предложения от ТОП-10 страховых компаний в течение 1 рабочего дня и сопровождаем заключение договора страхования
							</p>
						</div>
						<div class="col-md-4">
							<div class="circle">
								<span>3</span>
							</div>
							<p class="item-text">
								Вы получаете договор страхования удобным для вас способом: в офисе, курьерской доставкой или в банке перед получением кредита
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="what block">
				<div class="container">
					<h2 class="additional__title">Оплатите страховку по ипотеке</h2>
					<div class="row">
						<div class="col-md-4">
							<div class="what__item">
								<img src="img/Insurance-mortgage/credit-card.png" alt="">
								<p>Банковской картой <span>Онлайн оплата банковскими картами без комиссии</span></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="what__item">
								<img src="img/Insurance-mortgage/cash.png" alt="">
								<p>Наличными <span>С доставкой в рабочее время с понедельника по пятницу</span></p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="what__item">
								<img src="img/Insurance-mortgage/pay-online.png" alt="">
								<p>Денежным переводом <span>Оплата счета выставленного страховой компанией</span></p>
							</div>
						</div>
						{{--
						<div class="col-md-3">
							<div class="what__item">
								<img src="img/Insurance-mortgage/halva.png" alt="">
								<p>Картой Халва/совесть <span>Оплата картой рассрочки 
								халва или совесть</span></p>
							</div>
						</div>
						--}}
					</div>

					<p class="text-center"><em>По Вашему желанию договор может быть доставлен в любое удобное место в пределах МКАД. Доставка осуществляется бесплатно в рабочее время с понедельника по пятницу. Также Вы можете подъехать к нам в офис и забрать полис в нашей компании.</em></p>

				</div>
			</div>

			<div id="land3" class="faq block">
				<div class="container">
					<h2 class="additional__title">Ответы на частые вопросы</h2>
					<ul class="faq__list">
						<li class="q">Где можно узнать перечень аккредитованных страховых компаний?</li>
						<li class="a">Перечень страховых компаний, которые соответствуют требованиям банка-кредитора, можно узнать на сайте банка или уточнить по телефону в самом отделении банка.</li>

						<li class="q">Каков перечень необходимых документов для заключения договора страхования?</li>
						<li class="a">Перечень необходимых документов зависит от требований страховой компании и рисков, принимаемых на страхование. Наш специалист высылает весь список необходимых документов вместе с расчетом стоимости полиса страхования.</li>

						<li class="q">В каких случаях требуется прохождение медицинского обследования при страховании жизни и здоровья заемщика?</li>
						<li class="a" style="">Необходимость проведения медицинского обследования устанавливается по каждому клиенту индивидуально, и зависит от размера страховой суммы и возраста заемщика, а также от информации о состоянии здоровья, указанной в заявлении-анкете. Лица, достигшие 65 лет и выше, на момент заключения договора страхования, не могут заключить договор страхования, вне зависимости от вышеперечисленных факторов.</li>

						<li class="q">Какой срок действия договора ипотечного страхования?</li>
						<li class="a">Договор ипотечного страхования заключается на один год либо на весь срок действия кредитного договора с ежегодной пролонгацией. Срок действия полиса определяется требованиями кредитора. Срок действия договора страхования ипотеки для клиентов ПАО «Сбербанк» составляет 12 месяцев.</li>

						<li class="q">Как уплачивается страховая премия?</li>
						<li class="a">При заключении договора страхования сроком на 1 год страховой взнос уплачивается единовременно или в рассрочку (по согласованию с банком). Если договор заключается на срок более одного года, то страховой взнос уплачивается ежегодно в течение срока действия договора страхования.</li>

						<li class="q">При наступлении страхового случая кто получит страховое возмещение?</li>
						<li class="a" style="">Банк в размере непогашенной части задолженности по кредитному договору. Собственники застрахованного имущества или их наследники – в оставшейся части страховой выплаты. Поэтому мы рекомендуем дополнительно застраховать ваше имущество на случай утраты или повреждения, в т.ч. внутреннюю отделку квартиры или дома, движимое имущество. Также можно обезопасить себя на случай причинения вреда соседям и заключить договор страхования гражданской ответственности.</li>
					</ul>
				</div>
			</div>

			<div id="land4"></div>

			<div class="contacty block">
				<h2 class="additional__title">Наши контакты</h2>
				<div class="select-container">
					<div class="container">
						<div class="row">
							<div class="city-item col-6"><span class="active" data-city="moscow">Москва</span></div>
							<div class="city-item col-6"><span>Санкт-петербург</span></div>
						</div>
					</div>
				</div>
				<div class="map-container">
					<div class="map active">
						<div class="mapp" id="moscow_map">
							<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0b75fc5d80c44e1955ed9540feb13208dee817641b958fc862006325c2cc8644&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false;baloon=true;"></script>
						</div>
						<div class="place">
							<address>
								<h5 class="text-center"><strong>Москва</strong></h5>
								<div class="address-line">
									<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
									<div class="desc">3-й Монетчиковский переулок, д.11, стр.1</div>
								</div>
								<div class="address-line">
									<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
									<div class="desc">+7 (495) 424-99-78</div>
								</div>
{{--
								<div class="address-line">
									<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
									<div class="desc">
										<a href="mailto:spb@finist.ru">spb@finist.ru</a>
									</div>
								</div>
--}}
								<div class="address-line">
									<div class="icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
									<div class="desc">Пн-Пт с 09 до 19</div>
								</div>
								<div class="address-line">
									<div class="icon"><i class="fa fa-subway metro2" aria-hidden="true"></i></div>
									<div class="desc"><span class="metroMsc">м.Третьяковская</span><br><span class="metroPolyanka">м.Полянка</span></div>
								</div>
							</address>
						</div>
					</div>

					<div class="map">
						<div class="mapp" id="spb_map">
							<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A09ab86334b5e3c36db00a6d05d9189497442bedf26165e447362f8bfbbf0e8c5&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
						</div>
						<div class="place">
							<address>
								<h5 class="text-center"><strong>Санкт-петербург</strong></h5>
								<div class="address-line">
									<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
									<div class="desc">Боровая улица дом 32, БЦ "Стелс", 7 этаж, 728 кабинет</div>
								</div>
								<div class="address-line">
									<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
									<div class="desc">+7 812 449-43-25</div>
								</div>
{{--
								<div class="address-line">
									<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
									<div class="desc">
										<a href="mailto:spb@finist.ru">spb@finist.ru</a>
									</div>
								</div>
--}}
								<div class="address-line">
									<div class="icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
									<div class="desc">Пн-Пт с 10 до 19</div>
								</div>
								<div class="address-line">
									<div class="icon"><i class="fa fa-subway metro2" aria-hidden="true"></i></div>
									<div class="desc"><span class="metroSpb">Горьковская</span></div>
								</div>
							</address>
						</div>
					</div>
				</div>
			</div>

			<div class="questions">
				<p>Остались вопросы? <a href="#popupp" class="fancybox goal__callback_form_open">Задайте их менеджеру</a></p>
			</div>

		</div>

		<div id="popupp" class="fancybox-content">
			<h5>Закажите звонок</h5>
			<small>и наш менеджер свяжется с вами в ближайшее время</small>
				<form class="callback_form">
					@csrf
					<input class="form-control" type="text" name="user_name" placeholder="Имя*" required>
					<input class="phone-validate form-control" type="tel" name="user_phone" placeholder="Телефон*" required>
					<select name="user_city" class="form-control custom-select">
						<option value="St-P">Санкт-Петербург</option>
						<option selected value="Msk">Москва</option>
					</select>
					<button class="callback_button">Перезвоните мне</button>
					<p class="privacyPolicy">Нажимая «Перезвоните мне», вы даёте согласие на обработку своих персональных данных в соответствии с Федеральным законом №152-ФЗ «О персональных данных» и принимаете
					<a href="#privacyPolicy" class="fancybox">условия</a></p>
				</form>
			</div>

			<div id="leadModal" class="fancybox-content">
				<h5>Оставьте заявку</h5>
				<small>и наш менеджер свяжется с вами в ближайшее время</small>
				<form action="" method="POST" id="lead_form">
					<input type="hidden" name="calc_id" value="0">
					<div>
						<input type="text" name="user_name" placeholder="*Имя" class="form-control" data-validation-error-msg="Как к вам обращаться?" data-validation="length" data-validation-length="min3">
					</div>
					<div>
						<input type="tel" id="leadPhone" name="user_phone" placeholder="*Контактный телефон" class="form-control phone-validate" data-validation-error-msg="Укажите телефон" data-validation="custom" data-validation-regexp="^((8|7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{10}$">
					</div>
					<div>
						<input type="email" id="leadEmail" name="user_email" placeholder="*Email" class="form-control" data-validation-error-msg="Укажите email" data-validation="email">
					</div>
					<div>
						<input type="text" id="leadBankName" name="user_bank" placeholder="*Наименование банка кредитора" class="form-control" data-validation-error-msg="Укажите наименование банка" data-validation="length" data-validation-length="min3">
					</div>
					<select name="user_city" class="form-control custom-select">
						<option value="St-P">Санкт-Петербург</option>
						<option selected value="Msk">Москва</option>
					</select>
					<button id="callBack-send-button" type="submit" class="btn btn-success" role="button" data-type="Заявка на страхование ипотечного кредита">Оставить заявку</button>
					<p class="privacyPolicy">Нажимая «Перезвоните мне», вы даёте согласие на обработку своих персональных данных в соответствии с Федеральным законом №152-ФЗ «О персональных данных» и принимаете
						<a href="#privacyPolicy" class="fancybox">условия</a></p>
					</form>
				</div>

			<script src="js/Insurance-mortgage/scripts.min.js"></script>

@endsection
