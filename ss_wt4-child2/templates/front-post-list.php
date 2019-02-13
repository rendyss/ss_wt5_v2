<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="col-sm-3">
    <div class="post">
        <a class="title" href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
        <span class="posted"><?php echo $datetime; ?></span>
        <p class="excerpt"><?php echo $excerpt; ?></p>
    </div>
</div>

