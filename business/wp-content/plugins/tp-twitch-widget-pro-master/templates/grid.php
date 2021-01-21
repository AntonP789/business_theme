<?php
/**
 * Grid template
 *
 * @var TP_Twitch_Stream $stream
 */

if ( ! isset( $streams ) || ! isset( $template_args ) )
    return;

$size = ( isset ( $template_args ) && ! empty( $template_args['size'] ) ) ? $template_args['size'] : 'large';
$preview = ( isset ( $template_args ) && ! empty( $template_args['preview'] ) ) ? $template_args['preview'] : 'image';
$grid = ( isset ( $template_args ) && ! empty( $template_args['grid'] ) ) ? $template_args['grid'] : null;
if($grid > 2) $grid = 4;
else if($grid < 2) $grid = 2;
$stream_count = 0;

if($grid) :
?>

<style>

.grid_twitch {
    display: grid;
    grid-template-columns: repeat(<?= $grid; ?> , <?= 100 / $grid . '%' ?>);
}
.tp-twitch .tp-twitch-streams--style-white .tp-twitch-stream {
    margin: 5px;
}
@media(max-width: 991px) {
    .grid_twitch {
        grid-template-columns: repeat(2 , 50%)
    }
}
@media(max-width: 550px) {
    .grid_twitch {
        grid-template-columns: repeat(1 , 100%);
    }
}
<?php
endif;
?>
</style>
<div class="tp-twitch">
    <div class="<?php tp_twitch_the_streams_classes( 'tp-twitch-streams tp-twitch-streams--box', $template_args ); ?> grid_twitch" >

        <?php foreach ( $streams as $stream ) { ?>
            <?php $stream_count++; ?>

            <?php if ( 'large' === $size || ( 'large-first' === $size && 1 === $stream_count ) ) { ?>

                <div class="<?php $stream->the_classes('tp-twitch-stream'); ?>">
                    <div class="tp-twitch-stream__header">

                        <?php if ( 'video' === $preview || ( 'video-first' === $preview && 1 === $stream_count ) ) { ?>

                            <div class="tp-twitch-stream__video">
                                <div class="tp-twitch-iframe-container">
                                    <iframe
                                            src="https://player.twitch.tv/?channel=<?php echo $stream->get_user_name(); ?>&parent=<?php echo tp_twitch_get_site_host(); ?>&muted=true"
                                            width="800"
                                            height="450"
                                            frameborder="0"
                                            scrolling="no"
                                            allowfullscreen="true">
                                    </iframe>
                                </div>
                            </div>

                        <?php } else { ?>

                            <a class="tp-twitch-stream__thumbnail-link" href="<?php echo $stream->get_url(); ?>" target="_blank" rel="nofollow">
                                <img class="tp-twitch-stream__thumbnail" src="<?php echo $stream->get_thumbnail_url( 800, 450 ); ?>" alt="<?php echo $stream->get_thumbnail_alt(); ?>" />
                            </a>

                        <?php } ?>

                    </div>
                    <div class="tp-twitch-stream__body">
                        <span class="tp-twitch-stream__user-avatar">
                            <a href="<?php echo $stream->get_user_url(); ?>" target="_blank" rel="nofollow">
                                <img class="tp-twitch-stream__avatar" src="<?php echo $stream->get_user_avatar_url( 50, 50 ); ?>" alt="<?php echo $stream->get_user_display_name(); ?>" />
                            </a>
                        </span>
                        <span class="tp-twitch-stream__title"><a href="<?php echo $stream->get_url(); ?>" target="_blank" rel="nofollow"><?php echo $stream->get_title(); ?></a></span>
                        <span class="tp-twitch-stream__user">
                            <span class="tp-twitch-icon-user"></span><a href="<?php echo $stream->get_user_url(); ?>" target="_blank" rel="nofollow"><?php echo $stream->get_user_display_name(); ?></a><?php $stream->the_user_verified_icon(); ?>
                        </span>
                        <?php if ( $stream->get_game() ) { ?>
                            <span class="tp-twitch-stream__game">
                                <span class="tp-twitch-icon-game"></span><a href="<?php echo $stream->get_game_url(); ?>" target="_blank" rel="nofollow"><?php echo $stream->get_game(); ?></a>
                            </span>
                        <?php } ?>
                    </div>
                    <div class="tp-twitch-stream__footer">
                        <span class="tp-twitch-stream__viewer">
                            <span class="tp-twitch-icon-viewer"></span><?php echo ( $stream->get_viewer( true ) ) ? $stream->get_viewer( true ) : __( 'Offline', 'tomparisde-twitchtv-widget' ); ?>
                        </span>
                        <span class="tp-twitch-stream__views">
                            <span class="tp-twitch-icon-views"></span><?php echo $stream->get_views( true ); ?>
                        </span>
                    </div>
                </div>

            <?php } else { ?>

                <div class="<?php $stream->the_classes('tp-twitch-stream'); ?>">
                    <div class="tp-twitch-stream__body">
                    <span class="tp-twitch-stream__user-avatar">
                        <a href="<?php echo $stream->get_user_url(); ?>" target="_blank" rel="nofollow">
                            <img class="tp-twitch-stream__avatar" src="<?php echo $stream->get_user_avatar_url( 50, 50 ); ?>" alt="<?php echo $stream->get_user_display_name(); ?>" />
                        </a>
                    </span>
                    <span class="tp-twitch-stream__title"><a href="<?php echo $stream->get_url(); ?>" target="_blank" rel="nofollow"><?php echo $stream->get_title(); ?></a></span>
                    <span class="tp-twitch-stream__user">
                        <span class="tp-twitch-icon-user"></span><a href="<?php echo $stream->get_user_url(); ?>" target="_blank" rel="nofollow"><?php echo $stream->get_user_display_name(); ?></a><?php $stream->the_user_verified_icon(); ?>
                    </span>
                    <?php if ( $stream->get_game() ) { ?>
                        <span class="tp-twitch-stream__game">
                            <span class="tp-twitch-icon-game"></span><a href="<?php echo $stream->get_game_url(); ?>" target="_blank" rel="nofollow"><?php echo $stream->get_game(); ?></a>
                        </span>
                    <?php } ?>
                    </div>
                    <div class="tp-twitch-stream__footer">
                        <span class="tp-twitch-stream__viewer">
                            <span class="tp-twitch-icon-viewer"></span><?php echo ( $stream->get_viewer( true ) ) ? $stream->get_viewer( true ) : __( 'Offline', 'tomparisde-twitchtv-widget' ); ?>
                        </span>
                        <span class="tp-twitch-stream__views">
                            <span class="tp-twitch-icon-views"></span><?php echo $stream->get_views( true ); ?>
                        </span>
                    </div>
                </div>

            <?php } ?>

        <?php } ?>

    </div>
</div>