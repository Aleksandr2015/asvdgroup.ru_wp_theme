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
                        <?php the_field('asvd_title_block_2'); ?>
                    </div>
                    
                </div>
                
                <!-- item 1 -->
                <div class="col-xs-6">
                    
                   <div class="section-2_item">
                        
                        <div class="section-2_item__img">
                           <img src="<?php the_field('asvd_block_2_img_1'); ?>" alt="">
                        </div>
                        
                       <div class="section-2_item__text">
                           <?php the_field('asvd_block_2_text_1'); ?>
                       </div>
                       
                   </div>
                    
                </div><!-- .col-xs- / end -->
                
                <!-- item 2 -->
                <div class="col-xs-6">
                   
                   <div class="section-2_item">
                        
                        <div class="section-2_item__img _right">
                           <img src="<?php the_field('asvd_block_2_img_2'); ?>" alt="">
                        </div>
                        
                       <div class="section-2_item__text">
                           <?php the_field('asvd_block_2_text_2'); ?>
                       </div>
                       
                   </div> 
                    
                </div><!-- .col-xs- / end -->
                
                <!-- item 3 -->
                <div class="col-xs-6">
                   
                    <div class="section-2_item">
                        
                        <div class="section-2_item__img">
                           <img src="<?php the_field('asvd_block_2_img_3'); ?>" alt="">
                        </div>
                        
                       <div class="section-2_item__text">
                           <?php the_field('asvd_block_2_text_3'); ?>
                       </div>
                       
                   </div> 
                    
                </div><!-- .col-xs- / end -->
                
                <!-- item 4 -->
                <div class="col-xs-6">
                    
                    <div class="section-2_item">
                        
                        <div class="section-2_item__img _right">
                           <img src="<?php the_field('asvd_block_2_img_4'); ?>" alt="">
                        </div>
                        
                       <div class="section-2_item__text">
                           <?php the_field('asvd_block_2_text_4'); ?>
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
                        <?php the_field('asvd_title_block_3'); ?>
                    </div>
                    
                </div>
                
                <!-- item 1 -->
                <div class="col-xs-4">
                    
                    <div class="section-3_item">
                        
                        <div class="section-3_item__img">
                            <img class="img-circle" alt="" src="<?php the_field('asvd_block_3_img_1'); ?>" width="250" height="250">
                        </div>
                        
                        <div class="section-3_item__text">
                            <?php the_field('asvd_block_3_text_1'); ?>
                        </div>
                        
                    </div>
                    
                </div>
                
                <!-- item 2 -->
                <div class="col-xs-4">
                    
                    <div class="section-3_item">
                        
                        <div class="section-3_item__img">
                            <img class="img-circle" alt="" src="<?php the_field('asvd_block_3_img_2'); ?>" width="250" height="250">
                        </div>
                        
                        <div class="section-3_item__text">
                            <?php the_field('asvd_block_3_text_2'); ?>
                        </div>
                        
                    </div>
                    
                </div>
                
                <!-- item 3 -->
                <div class="col-xs-4">
                    
                    <div class="section-3_item">
                        
                        <div class="section-3_item__img">
                            <img class="img-circle" alt="" src="<?php the_field('asvd_block_3_img_3'); ?>" width="250" height="250">
                        </div>
                        
                        <div class="section-3_item__text">
                            <?php the_field('asvd_block_3_text_3'); ?>
                        </div>
                        
                    </div>
                    
                </div>
                
                <!-- item 4 -->
                <div class="col-xs-4">
                    
                    <div class="section-3_item">
                        
                        <div class="section-3_item__img">
                            <img class="img-circle" alt="" src="<?php the_field('asvd_block_3_img_4'); ?>" width="250" height="250">
                        </div>
                        
                        <div class="section-3_item__text">
                            <?php the_field('asvd_block_3_text_4'); ?>
                        </div>
                        
                    </div>
                    
                </div>
                
                <!-- item 5 -->
                <div class="col-xs-4">
                    
                    <div class="section-3_item">
                        
                        <div class="section-3_item__img">
                            <img class="img-circle" alt="" src="<?php the_field('asvd_block_3_img_5'); ?>" width="250" height="250">
                        </div>
                        
                        <div class="section-3_item__text">
                            <?php the_field('asvd_block_3_text_5'); ?>
                        </div>
                        
                    </div>
                    
                </div>
                
                <!-- item 6 -->
                <div class="col-xs-4">
                    
                    <div class="section-3_item">
                        
                        <div class="section-3_item__img">
                            <img class="img-circle" alt="" src="<?php the_field('asvd_block_3_img_6'); ?>" width="250" height="250">
                        </div>
                        
                        <div class="section-3_item__text">
                            <?php the_field('asvd_block_3_text_6'); ?>
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
                        <?php the_field('asvd_title_block_4'); ?>
                    </div>
                    
                </div>
                
                <!-- email -->
                <div class="col-xs-5 col-xs-offset-1">
                
                    <div class="section-5_item">
                        
                        <span class="section-5_item__icon glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        
                        <div class="section-5_item__email">
                            <?php the_field('asvd_email_block_4'); ?>
                        </div>
                        
                    </div>
                
                </div>
                
                <!-- phone -->
                <div class="col-xs-5 col-xs-offset-1">
                
                    <div class="section-5_item">
                        
                        <span class="section-5_item__icon glyphicon glyphicon-earphone" aria-hidden="true"></span>
                        
                        <div class="section-5_item__email">
                            <?php the_field('asvd_phone_block_4'); ?>
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
