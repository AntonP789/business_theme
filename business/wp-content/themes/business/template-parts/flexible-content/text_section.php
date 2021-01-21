<?php
    $text_section++;
?>
<section class="text_section" id="text_section-<?php echo $text_section;?>">
    <?php if($text_section < 2):?>
        <style>
            .text_section{
                background: #fff;
                padding-bottom: 50px;
            }
        </style>
    <?php endif; ?>

    <?php if(get_sub_field('show_title')=='yes'): ?>
    <div class="title-wrap">
        <h2 class="title-box">
            <span class="title-line"></span>
            <span class="title-text"><?php echo get_sub_field('text_title'); ?></span>
            <span class="subtitle-text"><?php echo get_sub_field('text_subtitle'); ?></span>
        </h2>
    </div>
    <?php endif; ?>
    <div class="container-custom">
        <article>
            <p><?php echo get_sub_field('text_text'); ?></p>
        </article>
    </div>
</section>