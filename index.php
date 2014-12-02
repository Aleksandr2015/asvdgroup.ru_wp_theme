<?php get_header(); ?>

    <!-- / start -->
    <header class="header">
        <!-- Navigation / start -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="nb-wrapper">
                        <a class="navbar-brand page-scroll" href="#page-top">ASVD Group</a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#1">Наши решения</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#2">Преимущества</a>
                        </li>                        
                        <li>
                            <a class="page-scroll" href="#4">Контакты</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- Navigation / end -->
        <img class="header_logo" src="<?php the_field('asvd_header_logo'); ?>" alt="ASVD Group">
    </header>
    <!-- / end -->
    
    <!-- ---------------------------------------------------- -->
    
    <!-- about-us / start -->
    <section class="abou_us">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <blockquote>
                        <?php the_field('asvd_about_us'); ?>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <!-- about-us / end -->
    
    <!-- section-2 / start -->
    <section class="section-2" id="1">
        
        <div class="container">
        
            <div class="row">
               
                <div class="col-xs-12">
                   
                    <div class="section-2_title">
                        Наши решения
                    </div>
                    
                </div>
                
                <!-- item 1 -->
                <div class="col-xs-6">
                    
                   <div class="section-2_item">
                       
<!--
                        <div class="section-2_item__title _right">
                            Заголовок
                        </div>
-->
                        
                        <div class="section-2_item__img">
                           <img src="img/section-2_item-1-videostena.png" alt="Видеостена">
                        </div>
                        
                       <div class="section-2_item__text">
                           <b>Видеостена</b> – это демонстрирующий единое видеоизображение полиэкран, состоящий из нескольких видеокубов (отдельных LCD панелей), управляемых специальным контроллером и программным обеспечением. Видеостена позволяет отображать видео информацию на большом экране для значительного количества зрителей. Модульный принцип позволяет создавать видеостены сколь угодно больших размеров, при этом общее изображение отличается однородностью.
                       </div>
                       
                   </div>
                    
                </div><!-- .col-xs- / end -->
                
                <!-- item 2 -->
                <div class="col-xs-6">
                   
                   <div class="section-2_item">
                       
<!--
                        <div class="section-2_item__title">
                            Видеостойка
                        </div>
-->
                        
                        <div class="section-2_item__img _right">
                           <img src="img/section-2_item-2-videostoyka.png" alt="Видеостойка">
                        </div>
                        
                       <div class="section-2_item__text">
                           <b>Видеостойка</b> - рекламный носитель нового поколения. Представляет собой LED-дисплей высокого разрешения (Full HD/4К), заключенный в прочный алюминиевый корпус. Имеет широкий выбор цветов и отлично впишется в любой интерьер. Благодаря возможности удаленного управления, загрузка контентапроисходит моментально. Так же у нас представлены специальные модели для уличного размещения  в любое время года.
                       </div>
                       
                   </div> 
                    
                </div><!-- .col-xs- / end -->
                
                <!-- item 3 -->
                <div class="col-xs-6">
                   
                    <div class="section-2_item">
                       
<!--
                        <div class="section-2_item__title _right">
                            Заголовок
                        </div>
-->
                        
                        <div class="section-2_item__img">
                           <img src="img/section-2_item-3-videovitrina.png" alt="Видеовитрина">
                        </div>
                        
                       <div class="section-2_item__text">
                           <b>Видеовитрина</b> - представляет собой LCD-панель большого размера от 42 до 60 дюймов. Предназначена для настенного монтажа в местах с ограниченной площадью. Это современная замена широко известных Лайт-Боксов (Lightbox).
                       </div>
                       
                   </div> 
                    
                </div><!-- .col-xs- / end -->
                
                <!-- item 4 -->
                <div class="col-xs-6">
                    
                    <div class="section-2_item">
                       
<!--
                        <div class="section-2_item__title">
                            Заголовок
                        </div>
-->
                        
                        <div class="section-2_item__img _right">
                           <img src="img/section-2_item-4-svetodiodniy-ekran.png" alt="Светодиодный экран">
                        </div>
                        
                       <div class="section-2_item__text">
                           <b>Светодиодный экран</b> – это рекламный носитель, представляющий собой электронный экран, в котором в качестве источника света используются полупроводниковые светодиоды. Светодиодные экраны обладают широкими возможностями вывода информации, позволяют демонстрировать динамическую рекламу, черно-белые и цветные видеоролики, а также отображать температуру, дату, текущее время. Контент загружается удаленно с помощью сетевого контроллера. Варианты исполнения внутренние и наружные.
                       </div>
                       
                   </div>
                    
                </div><!-- .col-xs- / end -->
                
            </div><!-- .row / end -->
    
        </div><!-- .container / end -->
        
    </section>
    <!-- section-2 / end -->    
    
    <!-- section-3 / start -->
    <section class="section-3" id="2">
        
        <div class="container">
            
            <div class="row">
               
                <div class="col-xs-12">
                   
                    <div class="section-2_title">
                        Преимущества
                    </div>
                    
                </div>
                
                <!-- item 1 -->
                <div class="col-xs-4">
                    
                    <div class="section-3_item">
                        
                        <div class="section-3_item__img">
                            <img class="img-circle" alt="" src="img/advantages-01.png" width="250" height="250">
                        </div>
                        
                        <div class="section-3_item__text">
                            Наши рекламные конструкции располагаются в местах с высокой проходимостью и находятся всегда на уровне глаз потенциального покупателя.
                        </div>
                        
                    </div>
                    
                </div>
                
                <!-- item 2 -->
                <div class="col-xs-4">
                    
                    <div class="section-3_item">
                        
                        <div class="section-3_item__img">
                            <img class="img-circle" alt="" src="img/advantages-02.png" width="250" height="250">
                        </div>
                        
                        <div class="section-3_item__text">
                            Динамичный, яркий рекламный контент на видео носителях привлекает к себе больше внимания чем на стандартных рекламных баннерах и растяжках.
                        </div>
                        
                    </div>
                    
                </div>
                
                <!-- item 3 -->
                <div class="col-xs-4">
                    
                    <div class="section-3_item">
                        
                        <div class="section-3_item__img">
                            <img class="img-circle" alt="" src="img/advantages-03.png" width="250" height="250">
                        </div>
                        
                        <div class="section-3_item__text">
                            Рекламные видео носители более выигрышные в условиях высокого рекламного шума и воспринимаются людьми как способ развлечения во время ожидания, не вызывая лишнего раздражения.
                        </div>
                        
                    </div>
                    
                </div>
                
                <!-- item 4 -->
                <div class="col-xs-4">
                    
                    <div class="section-3_item">
                        
                        <div class="section-3_item__img">
                            <img class="img-circle" alt="" src="img/advantages-04.png" width="250" height="250">
                        </div>
                        
                        <div class="section-3_item__text">
                            Высокая потребительская активность  людей посещающих торговые и бизнес центры. Следовательно более высокий шанс получить обратную связь от просмотренной рекламы.
                        </div>
                        
                    </div>
                    
                </div>
                
                <!-- item 5 -->
                <div class="col-xs-4">
                    
                    <div class="section-3_item">
                        
                        <div class="section-3_item__img">
                            <img class="img-circle" alt="" src="img/advantages-05.png" width="250" height="250">
                        </div>
                        
                        <div class="section-3_item__text">
                            Проведение как глобальных так и локальных рекламных акций, нацеленных на аудиторию в определенной геолокации.
                        </div>
                        
                    </div>
                    
                </div>
                
                <!-- item 6 -->
                <div class="col-xs-4">
                    
                    <div class="section-3_item">
                        
                        <div class="section-3_item__img">
                            <img class="img-circle" alt="" src="img/advantages-06.png" width="250" height="250">
                        </div>
                        
                        <div class="section-3_item__text">
                            Мгновенное обновление рекламного контента, создание гибких графиков показа, благодаря современной системе управления рекламным контентом.
                        </div>
                        
                    </div>
                    
                </div>
                
                
            </div><!-- .row / end -->
            
        </div><!-- .container / end -->
    
    </section>
    <!-- section-3 / end -->     
    
    <!-- section-5 / start -->
    <section class="section-5" id="4">
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-xs-12">
                   
                    <div class="section-2_title">
                        Контакты
                    </div>
                    
                </div>
                
                <!-- email -->
                <div class="col-xs-5 col-xs-offset-1">
                
                    <div class="section-5_item">
                        
                        <span class="section-5_item__icon glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        
                        <div class="section-5_item__email">
                            info@asvdgroup.ru
                        </div>
                        
                    </div>
                
                </div>
                
                <!-- phone -->
                <div class="col-xs-5 col-xs-offset-1">
                
                    <div class="section-5_item">
                        
                        <span class="section-5_item__icon glyphicon glyphicon-earphone" aria-hidden="true"></span>
                        
                        <div class="section-5_item__email">
                            +7 (495) 125-26-24
                        </div>
                        
                    </div>
                
                </div>
                
                <!-- form -->
                <div class="col-xs-6 col-xs-offset-3">                    
                    
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('fos') ); ?> 
                    
                </div>
                
            </div><!-- .row / end -->
            
        </div><!-- .container / end -->
    
    </section>
    <!-- section-5 / end --> 
    
    <!-- ---------------------------------------------------- -->
    
<?php get_footer(); ?>
