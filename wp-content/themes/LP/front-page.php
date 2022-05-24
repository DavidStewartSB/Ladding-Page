    <?php //Template Name: Home
    ?>
    <?php get_header()
    ?>
        <!-- Content -->
        <?php get_template_part('template-parts/content-layout1') ?>
        <!-- CARDS -->
        <?php get_template_part('template-parts/cards-layout1');?>
    </div>
    </section>

    <!--Layout 2-->
    <section id="layout2">
        <?php get_template_part('template-parts/content-layout2')?>
    </section>

    <!--Layout 3 -->
    <section id="layout3">
        <main>
            <?php get_template_part('template-parts/content-layout3')?>
        </main>
            <!--Card 1 Layout 3-->
            <?php get_template_part('template-parts/cards-layout3'); ?>
    </section>
    <!--Layout 4-->
    <section id="layout4">
       <main>
            <?php get_template_part('template-parts/content-layout4');?>
       </main>
       <!--Cards L4-->
       <section class="container-cardsL4">
            <?php get_template_part('template-parts/cards-layout4')?>
       </section>
    </section>
    <!--Layout 5-->
    <section id="layout5">        
        <main>
            <?php get_template_part('template-parts/form-layout5')?>
       </main>
    </section>
    <?php get_footer()?>