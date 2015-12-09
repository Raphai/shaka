<?php
    //CSS
   // echo $this->Html->css(['slick', 'slick-theme-accueil'], ['block' => 'css']);
    //JAVASCRIPT
    echo $this->Html->script('jquery-1.11.0.min', ['block' => 'script']);
   // echo $this->Html->script('jquery-migrate-1.2.1.min', ['block' => 'script']);
   // echo $this->Html->script('slick.min.js', ['block' => 'script']);
    echo $this->Html->script('js-menu-accueil', ['block' => 'script']);
   // echo $this->Html->script('js-page-accueil', ['block' => 'script']);
?>

<?php echo $this->element('menu'); ?>

    <div class="wrapper-main">

        <article class="slider-accueil">
            <h1>ShakaSchool École de conduite</h1>
        </article>

        <aside class="services-accueil">

        </aside>

        <?php echo $this->element('footer'); ?>

    </div> <!--END .WRAPPER-MAIN-->
