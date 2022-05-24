<div class="container-cardsL3">
    <?php if(have_rows('cards_layout3')) : while(have_rows('cards_layout3')) : the_row();
    $cimg = get_sub_field('img_cardl3');
    $clink = get_sub_field('link_content');
    $ctitle = get_sub_field('title_cardl3');
    $ccontent = get_sub_field('main_contentl3');
    $csales = get_sub_field('number_sales');
    $cvalues = get_sub_field('content_values');
    $hours = get_sub_field('hours');
    $cbtn = get_sub_field('card_btn');
    ?>
                <div class="cardL3 card-1">
                   <div class="card-header">
                        <div class="icon-image">
                                <div class="icones">
                                <span class="icons-l3"><i class="fa-solid fa-heart"></i></span>
                                <span class="icons-l3"><i class="fa-solid fa-cart-shopping"></i></span>
                                <span class="icons-l3"><i class="fa-solid fa-eye"></i></span>
                                </div>
                            </div>
                       <img src="<?php echo $cimg?>" alt="Graphic Design">
                   </div>
                   <div class="card-body">
                       <div class="card-content1">
                       <a href="<?php echo $clink?>">English Departament</a>
                       <span> <i class="fa-solid fa-star"></i> 4.9</span>
                       </div>
                       <h4><?php echo $ctitle?></h4><br>
                       <p><?php echo $ccontent?></p>
                       <p> <i class="fa-solid fa-download"></i><?php echo $csales?></p>
                       <span><?php echo $cvalues?> <b style="color:#00ce11;">$6.48</b></span> 
                       
                       
                       <div class="footer-info">
                           <span><i style="color:#23A6F0;" class="fa-solid fa-clock"></i> <?php echo $hours?></span>
                           <span><i style="color:#FFCE31;" class="fa-solid fa-chart-bar"></i> 64 Lessons</span>
                           <span><i style="color:#00ce12;" class="fa-solid fa-chart-area"></i> Progress </span>
                       </div>
                       <button class="btn-card">Learn More <i class="fa-solid fa-angle-right"></i></button>
                   </div>
                </div>
                <!--Card 2 Layout 3--> 
                <?php endwhile; endif;?>
</div>