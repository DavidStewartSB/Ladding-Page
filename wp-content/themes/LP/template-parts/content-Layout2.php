<main class="container2">
            <div class="rowL2">
                <!--Descrição-->               
                    <div class="col1-l2">
                        <span class="lineL2"></span>
                        <h2><?php the_field('title_layout2')?></h2>
                        <p><?php the_field('content_layout2')?></p><br>
                        <a href="#">Learn More <i class="fa-solid fa-angle-right"></i></a>
                    </div>
                <!--Imagem-->
                    <div class="col2-l2">
                            <div class="squad2">
                                <span class="smallImage">
                                    <?php $image_graph = get_field('small_img')?>
                                    <img src="<?php echo $image_graph?>" alt="Graphs">
                                </span>
                                <?php $images = get_field('image_layout2')?>
                                <img class="man-img" src="<?php echo $images;?>" alt="student formal">
                            </div>
                    </div>
            </div>
</main>