<div class="container-cards1">
    <?php if(have_rows('card_layout1')) : while (have_rows('card_layout1')) : the_row();
    $cctitle = get_sub_field('card_title');
    $ccdescription = get_sub_field('card_description');
    ?>
                <div class="cards1">
                    <div class="card1">
                        <div class="squad"><i class="fa-solid fa-gear"></i></div>
                        <h4><?php echo $cctitle?></h3>
                        <p><?php echo $ccdescription?></p>
                    </div>
            </div>
    <?php endwhile; endif;?>
</div>