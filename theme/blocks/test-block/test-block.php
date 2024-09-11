<?php
$heading = get_field('heading');
$items = get_field('items');

?>

<div <?php echo get_block_wrapper_attributes([
    'class' => 'bg-white  pt-80 pb-40'
]); ?>>
    <div class="fluid-container mx-auto">
        <div class="flex py-10 text-black">
            <div class="text-4xl font-semibold">
                <?php echo $heading; ?>
            </div>
        </div>

        <div x-data="{active: 0}" class="w-full bg-white divide-y divide-slate-300 text-slate-700 dark:divide-slate-700 dark:text-slate-300">
            <?php
            if ($items):
                $i = 0;
                foreach ($items as $item):
                    $i++;
                    ?>
                    <div>
                        <button id="controlsAccordionItemOne" type="button"
                            class="flex w-full items-center justify-between gap-4 py-4 text-left underline-offset-2 focus-visible:underline focus-visible:outline-none text-black"
                            @click="active = <?= $i; ?>" :class="active === <?= $i; ?> ? 'font-bold'  : ' font-medium'">
                            <?php echo $item['title']; ?>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                :class="active === <?= $i; ?> ?  'rotate-180'  :  ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                        <div x-cloak x-show="active === <?= $i; ?>" id="accordionItemOne" x-collapse>
                            <div class="pb-4 text-sm sm:text-base text-pretty text-slate-700">
                                <?php echo $item['content']; ?>
                            </div>
                        </div>
                    </div>

                <?php
                $i++;
                endforeach;

            endif;

            ?>
        </div>

    </div>

</div>