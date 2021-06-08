<?php

namespace Database\Seeders\Articles;

use DB;
use Illuminate\Database\Seeder;
use Schema;

class ArticleBlocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Schema::hasTable('block_items')) {
            $date = date('Y-m-d H:i:s');

            $blocks = [
                [   
                    'name' => 'Добровольное страхование имущества граждан',
                    'slug' => 'insurance-voluntary',
                    'type' => 'html',
                    'content' => '
                        <section class="about-company">
                            <h1 class="about__title about__title_underline">Добровольное страхование имущества граждан</h1>
                            <div class="about__info">
                                <p>Услуги страхования постепенно становятся одними из самых востребованных на финансовом рынке, поскольку предоставляют шанс как юридическим, так и физическим лицам избежать множества проблем с покрытием материальных затрат в случае непредвиденных расходов. Спектр услуг страхования весьма разнообразен — от страхования части тела до страхования целых производственных комплексов.</p>
                                <p>Одной из самых необходимых услуг, по мнению экспертов, является добровольное страхование имущества граждан, которое гарантирует в случае наступления страхового случая предоставление от лица страховщика денежного возмещения страхователю в размере, оговоренном в договоре. При этом застраховать можно различные объекты. Мы предлагаем страхование квартиры от пожара, кражи, стихийного бедствия, противоправных действий сторонних лиц; страхование домашнего имущества от различного рода повреждений; страхование загородного дома и прочей недвижимости. Страхование имущества от огня, кражи и других факторов влияния может вас обезопасить в будущем от многих проблем. Вы можете застраховать у нас как один объект, так и все сразу, получив определенную скидку и выгодные условия страхования, несмотря даже на то, что стоимость страхования у нас одна из самых низких на рынке.</p>
                                <p>Кроме того рады сообщить нашим клиентам, что мы можем предложить одну из самых новых финансовых услуг — страхование ипотечного кредита. Мы вас застрахуем от вероятности лишения собственности, взятой в кредит, в случае невозможности оплаты ежемесячных выплат по кредиту. Это отличный шанс всегда быть уверенным в стабильности и защите своей собственности даже в трудные и безденежные времена.</p>
                                <p>К каждому клиенту у нас индивидуальный подход, помогающий предоставить ему и его семье максимальную защиту на самых выгодных условиях.</p>
                            </div>
                        </section>
                    ',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   
                    'name' => 'Стоимость страхования',
                    'slug' => 'insurance-price',
                    'type' => 'html',
                    'content' => '
                        <section class="about-company">
                            <h1 class="about__title about__title_underline">Стоимость страхования</h1>
                            <div class="about__info">
                                <p>Ни один человек не может уберечься от непредвиденных обстоятельств, сопряженных с материальным ущербом. Имущественное страхование дает возможность уберечь себя от неожиданных финансовых потерь.</p>
                                <p>Стоимость страхования имущества определяется величиной страховой суммы и условиями страхования. По условиям договора страховая компания может возместить в полном объеме стоимость утраченного, а также каким-то образом поврежденного имущества или же денежную сумму, которая может уйти на его восстановление и ремонт. Кроме этого, размер страховых выплат может рассчитываться, исходя из предполагаемых доходов, которых лишится владелец застрахованного объекта из-за его утраты. Иногда договор предусматривает выплату определенной заранее суммы, если наступает страховой случай.</p>
                                <p>Вне зависимости от условий страховой компании выплата не должна превосходить ценность застрахованного имущества в денежном эквиваленте, определяющейся разными способами. Под восстановительной стоимостью понимают денежную сумму, которая потребуется для покупки нового имущественного объекта, аналогичного застрахованному. Фактической стоимостью называют примерную цену имущества с учетом его износа. Рыночная стоимость — это розничная цена объекта.</p>
                                <p>Когда наступает страховой случай, клиент получает денежную компенсацию из страхового фонда компании. Она может быть эквивалентна страховой сумме или равняться лишь некоторой ее части в связи с некоторыми нюансами страхового случая и особыми условиями, указанными в договоре.</p>
                                <p>Условия имущественного страхования и сумма страховых выплат определяется страховой компанией. На нашем сайте вы можете ознакомиться с самыми выгодными предложениями по страхованию имущества. Мы находим индивидуальный подход к каждому клиенту, учитывая все требования и пожелания.</p>
                            </div>
                        </section>
                        ',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   
                    'name' => 'Страхование домашнего имущества',
                    'slug' => 'insurance-home-property',
                    'type' => 'html',
                    'content' => '
                        <section class="about-company">
                            <h1 class="about__title about__title_underline">Страхование домашнего имущества</h1>
                            <div class="about__info">
                                <p>Имея дома компьютер, телевизор или дорогую мебель, каждый владелец переживает о том, чтобы все было на месте. Но что делать если, например, вас затопили соседи, которых не было дома, или произошло элементарное замыкание проводки, что привело к пожару? Над этим стоит задуматься до того, как произошло непоправимое. Ведь далеко не у каждого есть возможность приобрести новую бытовую технику или испорченные предметы интерьера.</p>
                                <p>Страхование домашнего имущества издавна является одним из наиболее распространенных видов, который способен защитить владельца от финансовых потерь в случае возникновения непредвиденных ситуаций.</p>
                                <p>Мы страхуем движимое и недвижимое имущество и делаем это качественно, быстро и самое главное — с заботой о вас. Вы можете защитить все, начиная от предметов домашнего интерьера и заканчивая материалами для внутренних или отделочных работ, которые используются лично собственником или всеми его членами семьи в домашнем хозяйстве.</p>
                                <br>
                                <p><strong>Почему стоит работать именно с нами:</strong></p>
                                <ul class="plus_minus__list">
                                    <li>Доступные цены на страховки</li>
                                    <li>Широкий выбор страховых услуг</li>
                                    <li>Расширение для занятия спортом</li>
                                    <li>Консультативная помощь в сложных ситуациях</li>
                                    <li>Мы можем застраховать Вашу квартиру или дом на время поездки</li>
                                </ul>
                                <p>Для россиян пока еще не привычно страховать недвижимое имущество. Однако если представить возможный ущерб от затопления соседями и узнать о том, что цены на данную услугу совсем невелики, можно изменить свои привычки и стать более защищенными.</p>
                                <p>Это совсем недорого и не обременительно для любой семьи. И что приятно, Вам не потребуется тратить много времени. Вам только нужно будет предъявить паспорт, указать адрес жилья и выбрать размер страховой суммы. При этом совершенно не важно, принадлежит ли вам квартира, или вы ее снимаете.</p>
                                <p>Страхование домашнего имущества — это надежно, быстро и не дорого. Позвоните нам или приходите в наш ближайший офис — мы будем рады видеть вас и ответим на любые вопросы.</p>
                            </div>
                        </section>
                    ',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   
                    'name' => 'Страхование имущества от огня',
                    'slug' => 'insurance-property-fire',
                    'type' => 'html',
                    'content' => '
                        <section class="about-company">
                            <h1 class="about__title about__title_underline">Страхование имущества от огня</h1>
                            <div class="about__info">
                                <p>Сложно себе представить, что имущество, которое накапливалось на протяжении многих лет, может в один день исчезнуть или испортиться. Каждый из нас прекрасно понимает, что покупка новой бытовой техники или мебели для многих на сегодняшний день считается проблематичным вопросом, особенно если по какой-то причине в вашей квартире произошел пожар или потоп, который уничтожил не только ваше имущество, но и деньги, которые, возможно, вы хранили дома. Тогда возникает вопрос: а что же делать? Конечно же, идти страховаться!</p>
                                <p>Страхование имущества сегодня актуально как никогда. А все объясняется тем, что эта услуга стала доступной для каждого, и поэтому люди спешат получить хоть какую-то защиту и гарантию возмещения материального ущерба.</p>
                                <br>
                                <p><strong>При расчете рисков выделяются следующие этапы:</strong></p>
                                <ul class="plus_minus__list">
                                    <li>определение вида строения (по материалу и морфологическим особенностям здания);</li>
                                    <li>определение вида деятельности (гражданские, коммерческие, промышленные, сельскохозяйственные риски);</li>
                                    <li>классификация имущества, находящегося в здании (оборудование, машины, незавершенное производство, запасы сырья, полуфабрикатов, готовой продукции и т. д., виды домашнего имущества);</li>
                                    <li>определение внутренних и внешних факторов, отягощающих или снижающих риск (служит основанием для применения надбавок и скидок).</li>
                                </ul>
                                <br>
                                <p>Да да, ведь застраховать от огня можно не только недвижимое имущество, но и другие его виды!</p>
                                <p>Наша компания занимается данными услугами на протяжении многих лет, и поэтому вы можете с легкостью доверить нам самое дорогое, что у вас есть — это ваше имущество. Мы предлагаем вам выгодные условия. Если вы еще не знаете, кому доверить этот ответственный процесс, тогда лучше доверьте его нам!</p>
                            </div>
                        </section>
                    ',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   
                    'name' => 'Страхование квартиры',
                    'slug' => 'insurance-flat',
                    'type' => 'html',
                    'content' => '
                        <section class="about-company">
                            <h1 class="about__title about__title_underline">Страхование квартиры</h1>
                            <div class="about__info">
                                <p>Сегодня, чтобы уберечь квартиру от всякого рода повреждений или нанесения какого-либо ущерба, многие предпочитают защитить свою собственность с помощью страховки на квартиру.</p>
                                <br>
                                <p><strong>Принимаем на страхование как квартиры целиком, так и отдельные элементы:</strong></p>
                                <ul class="plus_minus__list">
                                    <li>инженерное оборудование в квартире (сантехника, системы водоснабжения, отопления  и т. п.);</li>
                                    <li>внутреннюю отделку (отделка стен, полов, потолков, дверные конструкции, оконные блоки с остеклением и т. п.);</li>
                                    <li>различное домашнее имущество (мебель, электроника, одежда и т. п.);</li>
                                    <li>гражданскую ответственность жильцов, проживающих в квартире.</li>
                                </ul>
                                <br>
                                <p><strong>Почему стоит работать именно с нами:</strong></p>
                                <ul class="plus_minus__list">
                                    <li>Доступные цены на страховки</li>
                                    <li>Широкий выбор страховых услуг</li>
                                    <li>Расширение для занятия спортом</li>
                                    <li>Консультативная помощь в сложных ситуациях</li>
                                    <li>Мы можем застраховать Вашу квартиру или дом на время поездки</li>
                                </ul>	
                                <br>
                                <p>Самые выгодные предложения по страхованию квартир можно найти именно у нас. Мы предоставляем доступные и самые удобные программы от ведущих компаний, которые предлагают облегченный порядок оформления.</p>
                                <p>Стоимость страхования Вы сможет узнать в день обращения.</p>
                                <p>При заключении договора осмотр квартиры не понадобится, а из документов достаточно предоставить лишь паспорт.</p>
                            </div>
                        </section>
                    ',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   
                    'name' => 'Страхование загородного дома',
                    'slug' => 'insurance-house',
                    'type' => 'html',
                    'content' => '
                        <section class="about-company">
                            <h1 class="about__title about__title_underline">Страхование загородного дома</h1>
                            <div class="about__info">
                                <p>Загородные дома подвержены множеству опасностей, включая пожары и различные стихийные бедствия. При этом стоимость ремонта и восстановления может достигать сотен тысяч рублей. В связи с этим каждому владельцу загородной недвижимости стоит задуматься о страховании.</p> 
                                <p>При составлении договора стоит учитывать, каким именно опасностям подвержено ваше имущество. Так, дом вблизи крупного водоема вероятнее всего может пострадать от наводнения. А загородный коттедж, построенный в зоне высокой сейсмической активности, лучше всего застраховать от землетрясений.</p>
                                <p>Можно застраховать как дачный дом целиком, так и отдельные его части.</p>
                                <br>
                                <p><strong>Конструктивные элементы:</strong></p>
                                <ul class="plus_minus__list">
                                    <li>Стены и перегородки (включая их наполнение)</li>
                                    <li>Фундамент с цоколем</li>
                                    <li>Подвальные, межэтажные и чердачные перекрытия</li>
                                    <li>Крыша (включая кровлю)</li>
                                    <li>Внешняя отделка дома/строения</li>
                                </ul>
                                <br>
                                <p><strong>Внутренняя отделка дома:</strong></p>
                                <ul class="plus_minus__list">
                                    <li>Напольные, настенные, потолочные покрытия</li>
                                    <li>Встроенные шкафы</li>
                                    <li>Кухня со встроенной техникой</li>
                                    <li>Антресоли</li>
                                    <li>Оборудование гардеробных</li>
                                    <li>Двери, окна</li>
                                </ul>
                                <br>
                                <p><strong>Инженерное оборудование:</strong></p>
                                <ul class="plus_minus__list">
                                    <li>Наружные и внутренние системы электроснабжения</li>
                                    <li>Системы водоснабжения и канализации (включая сантехнику)</li>
                                    <li>Системы отопления и газоснабжения (включая агрегаты и приборы)</li>
                                    <li>Системы вентиляции и кондиционирования</li>
                                    <li>Системы мусоропровода</li>
                                    <li>Предметы для обеспечения безопасности (домофоны, сейфы, замки)</li>
                                    <li>Камины</li>
                                    <li>Печи</li>
                                </ul>
                                <br>
                                <p><strong>Бытовая техника:</strong></p>
                                <ul class="plus_minus__list">
                                    <li>Холодильники</li>
                                    <li>Стиральные машины</li>
                                    <li>Пылесосы</li>
                                    <li>Обогревательные приборы</li>
                                    <li>Электроплиты</li>
                                    <li>Микроволновки</li>
                                    <li>Кухонные комбайны</li>
                                    <li>Посудомойки</li>
                                    <li>Осветительные приборы</li>
                                    <li>Швейные и вязальные машины</li>
                                    <li>Телефоны и факсы</li>
                                    <li>Компьютеры и компьютерная периферия</li>
                                </ul>
                                <br>
                                <p><strong>Электронная техника:</strong></p>
                                <ul class="plus_minus__list">
                                    <li>Телевизоры</li>
                                    <li>Аудио- и видеоаппаратура</li>
                                    <li>Видеокамеры</li>
                                    <li>Игровые приставки</li>
                                    <li>Магнитофоны, электропроигрыватели, акустические системы</li>
                                    <li>Фотоаппаратура</li>
                                    <li>Электронные музыкальные инструменты</li>
                                </ul>	
                                <br>
                                <p><strong>Другое движимое имущество:</strong></p>
                                <ul class="plus_minus__list">
                                    <li>Аквариумы без подключения к водопроводным сетям</li>
                                    <li>Оружие (помповое, газовое, охотничьи ружья)</li>
                                    <li>Акустические музыкальные инструменты</li>
                                    <li>Цифровые носители (аудио- и видеодиски, грампластинки)</li>
                                    <li>Оптические приборы (бинокли, подзорные трубы, лупы)</li>
                                    <li>Часы</li>
                                    <li>Посуда</li>
                                    <li>Книжная библиотека (если не антиквариат)</li>
                                    <li>Одежда (за исключением шуб и прочих меховых изделий) и обувь</li>
                                    <li>Постельное бельё и принадлежности, занавески, шторы, карнизы, жалюзи, гладильные доски, корзины для белья</li>
                                    <li>Сумки, портфели, чемоданы, дипломаты и пр.</li>
                                    <li>Спортивные тренажеры</li>
                                    <li>Прочее имущество</li>
                                </ul>	
                                <br>
                                <p><strong>Элементы ландшафтного дизайна</strong></p>
                                <ul class="plus_minus__list">
                                    <li>Газоны</li>
                                    <li>Дорожки</li>
                                    <li>Патиo</li>
                                    <li>Цветники</li>
                                    <li>Альпинарии</li>
                                    <li>Водоемы</li>
                                    <li>Подспорные стенки и системы террас</li>
                                    <li>Системы полива</li>
                                    <li>Фонари</li>
                                    <li>Садовая архитектура</li>
                                    <li>Дренажные системы</li>
                                </ul>	
                                <br>
                                <p>Как Вы можете убедиться сами. У нас весьма гибкие условия.</p>
                                <p>Мы специально не указываем цены, т.к. они могут отличаться от объекта к объекту, но тем не менее не нагрузят излишне Ваш бюджет.</p>
                                <p>Свяжитесь с нашими менеджерами для более детального расчета стоимости услуги.</p>
                            </div>
                        </section>
                        ',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   
                    'name' => 'Страхование ипотечного кредита',
                    'slug' => 'insurance-mortgage',
                    'type' => 'html',
                    'content' => '
                        <section class="about-company">
                            <h1 class="about__title about__title_underline">Страхование ипотечного кредита</h1>
                            <div class="about__info">
                                <p>Одним из условий выдачи ипотечного кредита является его страховка. Закон обязывает заемщика страховать приобретаемую недвижимость, а так же жизнь и здоровье. Это может быть выгодно для обеих сторон. Никто не знает, как изменится его жизнь через несколько лет. Это убережет вас и ваших близких от любых происшествий, которые могут повлиять на возможность выплаты кредита.</p>
                                <p>В среднем, стоимость равняется 1,5% от суммы долга. Выплачивать страховой взнос придется каждый год. Соответственно, при постепенном погашении кредита ставка будет постоянно снижаться. Сотрудничая с нашей компанией, вы оградите себя от всех возможных рисков, не потратив заоблачные суммы.</p>
                                <br>
                                <p><strong>Почему стоит работать именно с нами:</strong></p>
                                <ul class="plus_minus__list">
                                    <li>Доступные цены на страховки</li>
                                    <li>Широкий выбор страховых услуг</li>
                                    <li>Расширение для занятия спортом</li>
                                    <li>Консультативная помощь в сложных ситуациях</li>
                                    <li>Мы можем застраховать Вашу квартиру или дом на время поездки</li>
                                </ul>
                                <br>
                                <p>Ипотечное страхование оформляется на весь срок действия кредита и банк не может отказать Вам в выборе страховщика. Подходите к выбору внимательно и вдумчиво, за 15-25 лет можно как сэкономить так и потерять большие деньги на разнице в тарифах.</p>
                                <p>Наши специалисты помогут Вам сделать верный выбор!</p>
                            </div>
                        </section>
                    ',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
                [   
                    'name' => 'Страхование в поездке',
                    'slug' => 'insurance-travel',
                    'type' => 'html',
                    'content' => '
                        <section class="about-company">
                            <h1 class="about__title about__title_underline">Страхование в поездке</h1>
                            <div class="about__info">
                                <p>В летнюю пору многие из нас предпочитают отдыхать не на родине, а где-нибудь за границей. Но выезжая за рубеж, всегда необходимо заботиться не только о комфорте и отдыхе, но и о безопасности.</p>
                                <p>Поэтому мы спешим вам предложить по самым выгодным ценам такую финансовую услугу, как страхование в поездке, которая предоставляет возможность в случае наступления страхового случая получить денежную компенсацию на покрытие материальных затрат. При этом застраховать себя можно как на период одной поездки, так и на целый год — страховой полис будет оплачиваться только за день пребывания за рубежом, а не за период действия страховки. Наша компания предлагает вам обезопасить себя от финансовых рисков в случаях потери багажа, кражи кошелька и т.д., расходов в случае болезни, травмы и другого обращения в медицинские учреждения, а также застраховать свое здоровье и свою жизнь.</p>
                                <p>Выбирая страховку на время путешествия, вы можете отдать предпочтение как комплексному полису, который учтет большинство страховых случаев, так и частичному, охватывающему определенные направления: финансовое, медицинское и страхование жизни. Следует отметить также, что данный страховой продукт очень доступный: его стоимость зависит от многих факторов, но средняя стоимость составляет около 1 доллара в день. Для каждого государства определены свои лимиты и минимальные суммы страхования, поэтому размер страховки зависит от места и страны, в которую вы выезжаете. Стоимость возмещения по страховому полису составляет в пределах 10 тыс. долларов, в некоторых государствах (Израиль) — 20 тыс. долларов, что является огромной суммой для покрытия всех ваших расходов.</p>
                                <p>Лучше подумать о безопасности сейчас — ведь в жизни случается многое, чем потом в чужой стране, не имея ни определенных знаний закона, ни необходимой денежной суммы, искать пути по решению возникшей проблемы. И мы с радостью готовы вам помочь!</p>
                            </div>
                        </section>
                    ',
                    'created_at' => $date,
                    'updated_at' => $date,
                ],
            ];

            foreach($blocks as $block) {
                if(! DB::table('block_items')->where('slug', $block['slug'])->first()) {
                    DB::table('block_items')->insert($block);
                }
            }

        } else {
            echo "\n\rТаблица блоков не найдена\n\r";
        }
    }
}
