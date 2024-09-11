<?php 
$heading = get_field('heading');
$sub_heading = get_field('sub_heading');
$content = get_field('content');

?>

<div <?php echo get_block_wrapper_attributes([
    'class'=> 'bg-highland-50'
]); ?>>
    <div class="fluid-container mx-auto">
        <div class="flex py-10 text-black">
            <div class="text-4xl font-semibold">
                <?php echo $heading; ?>
            </div>
            <div>
                <h4 class="text-3xl font-semibold m-0"><?php echo $sub_heading ?></h4>
                <div class="">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>

    </div>
</div>