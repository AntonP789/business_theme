<?php
    $list_section++;
?>
<section class="list-section" id="list_section-<?php echo $list_section;?>">
    <?php if($list_section < 2):?>
        <style>
            .list-section ul{
                padding-bottom: 50px;
                margin: 0;
                list-style: none;
                column-count: 2;
            }
            .list-section ul li{
                font: 700 16px 'Fira Sans Condensed';
                color: var(--main-color);
                text-transform: uppercase;
                letter-spacing: 0.1em;
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }
            .list-section ul li img{
                width: 40px;
            }
            .list-section ul li span{
                flex-shrink: 0;
                margin-right: 20px;
            }
            .list-section ul li i{
                font-size: 40px;
            }
            /*RESPONSIVENESS*//*RESPONSIVENESS*//*RESPONSIVENESS*/
            @media(max-width:767px){
                .team-block-wrap {
                    width: 50%;
                }
                .list-section ul{
                    max-width: 600px;
                    padding: 0 0 30px;
                    column-count: 1;
                    margin: 0 auto;
                }
            }
        </style>
    <?php endif; ?>
    <div class="container-custom">
        <ul>
            <?php if( have_rows('list_section') ): ?>
                <?php while( have_rows('list_section') ): the_row(); ?>
                    <li>
                        <span>
                            <?php $list_marker = get_sub_field('list_item_marker'); ?>
                            <img src="<?=$list_marker['url']; ?>" alt="<?=$list_marker['alt']; ?>">
                        </span>
                        <?php echo get_sub_field('list_item_text'); ?>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div><!-- end container-custom -->
</section>