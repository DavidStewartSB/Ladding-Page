<?php 
    global $wq;
    $args = array(
        "post_type" => "opinioes",
        'posts_per_page'=> 2,
    );
    $wq = new WP_Query( $args );
    while($wq-> have_posts() ) : $wq->the_post();?>
<div class="cardL4">
            <div class="header-img">
                <img class="img-cl4" src="<?php the_field('image')?>" alt="Man">
            </div>
            <div class="card-content4">
                <div class="card-body4">
                    <div>
                        <p>
                            <?php the_field('description');?>
                        </p><br>
                    </div>
                    <div>
                        <span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star-half-stroke"></i></span><br>
                        <br>
                        <h4><?php the_field('post_name');?></h4>
                        <p>Designer</p>
                    </div>
                </div>
            </div>   
        </div>

<?php endwhile;?>