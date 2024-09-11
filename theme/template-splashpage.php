<?php

/**
 * Template Name: Splash Page
 * Description: Coming soon landing page.
 */


?>

<?php

get_header();

?>




<section id="primary" class="bg-midnight-500 h-[100vh] bg-midnight-pattern min-h-[700px]">





    <main id="main" class="h-full mx-auto flex max-md:flex-col relative items-center align-middle">
        <div class="absolute top-0 w-full h-48 bg-gradient-to-b from-midnight-500 to-midnight-500/0 z-20"></div>
        <div class="md:w-1/2 w-full p-12 flex flex-col justify-between z-30">
            <div data-scroll="in" data-delay="2" class="fade-down h-24 w-full mb-24">
                <div class="bg-contain h-full w-full bg-no-repeat" style="background-image: url('<?php echo get_template_directory_uri(); ?>/resources/images/TYKEE_LOGO_REVERSED.svg')"></div>
            </div>
            <div data-scroll="in" data-delay="4" class="fade-down pb-8">
                <div class="text-4xl text-white pb-8">Our new website is <br> under construction</div>
                <div class="text-base text-midnight-100">Delivering pragmatic risk and strategy solutions for businesses of all sizes.</div>
            </div>

            <div data-scroll="in" data-delay="6" class="fade-down flex flex-row pb-8">
                <div class="mr-8"><svg width="31" height="27" viewBox="0 0 31 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.23444 11.685C8.71444 15.93 12.71 19.395 17.5839 21.57L21.3728 18.27C21.8378 17.865 22.5267 17.73 23.1294 17.91C25.0583 18.465 27.1422 18.765 29.2778 18.765C30.225 18.765 31 19.44 31 20.265V25.5C31 26.325 30.225 27 29.2778 27C13.1061 27 0 15.585 0 1.5C0 0.675 0.775 0 1.72222 0H7.75C8.69722 0 9.47222 0.675 9.47222 1.5C9.47222 3.375 9.81667 5.175 10.4539 6.855C10.6433 7.38 10.5056 7.965 10.0233 8.385L6.23444 11.685Z" fill="#E44B55" />
                    </svg>
                </div>
                <div class="text-sm text-midnight-100">READY TO CHAT? <br> <a href="tel:+61402072236" class="hover:text-midnight-100/50 animate">call us now</a></div>
            </div>
            <div data-scroll="in" data-delay="8" class="fade-down flex flex-row pb-8">
                <div class="mr-8"><svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.6 0H2.4C1.08 0 0.012 1.06875 0.012 2.375L0 16.625C0 17.9312 1.08 19 2.4 19H21.6C22.92 19 24 17.9312 24 16.625V2.375C24 1.06875 22.92 0 21.6 0ZM21.6 4.75L12 10.6875L2.4 4.75V2.375L12 8.3125L21.6 2.375V4.75Z" fill="#E44B55" />
                    </svg>

                </div>
                <div class="text-sm text-midnight-100">EMAIL US <br> <a href="mailto:info@tykeeadvisory.com.au" class="hover:text-midnight-100/50 animate">info@tykeeadvisory.com</a></div>
            </div>

            <a href="https://www.linkedin.com/company/tykee-advisory/" target="_blank" data-scroll="in" data-delay="10" class="fade-down border-slate-600 border rounded p-4 text-white to-midnight-100  w-[300px] flex flex-row items-center gap-4 hover:bg-white/20 animate">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="20" fill="#E44B55" />
                    <path d="M27 11C27.5304 11 28.0391 11.2107 28.4142 11.5858C28.7893 11.9609 29 12.4696 29 13V27C29 27.5304 28.7893 28.0391 28.4142 28.4142C28.0391 28.7893 27.5304 29 27 29H13C12.4696 29 11.9609 28.7893 11.5858 28.4142C11.2107 28.0391 11 27.5304 11 27V13C11 12.4696 11.2107 11.9609 11.5858 11.5858C11.9609 11.2107 12.4696 11 13 11H27ZM26.5 26.5V21.2C26.5 20.3354 26.1565 19.5062 25.5452 18.8948C24.9338 18.2835 24.1046 17.94 23.24 17.94C22.39 17.94 21.4 18.46 20.92 19.24V18.13H18.13V26.5H20.92V21.57C20.92 20.8 21.54 20.17 22.31 20.17C22.6813 20.17 23.0374 20.3175 23.2999 20.5801C23.5625 20.8426 23.71 21.1987 23.71 21.57V26.5H26.5ZM14.88 16.56C15.3256 16.56 15.7529 16.383 16.0679 16.0679C16.383 15.7529 16.56 15.3256 16.56 14.88C16.56 13.95 15.81 13.19 14.88 13.19C14.4318 13.19 14.0019 13.3681 13.685 13.685C13.3681 14.0019 13.19 14.4318 13.19 14.88C13.19 15.81 13.95 16.56 14.88 16.56ZM16.27 26.5V18.13H13.5V26.5H16.27Z" fill="#05253A" />
                </svg>

                Follow us on LinkedIn
            </a>

        </div>

        <div class="max-md:hidden md:w-1/2 w-full flex h-full align-middle relative z-10">
            
         
            <div data-scroll="in" data-delay="2" class="fade-right  h-full w-full bg-cover bg-[center_left_10vw] bg-no-repeat" style="background-image: url('<?php echo get_template_directory_uri(); ?>/resources/images/slpash-img.webp')"></div>

            <div data-scroll="in" data-delay="6" class="fade-right absolute top-[calc(50%-195px)] left-[6.5vw]">
                <svg width="302" height="402" viewBox="0 0 302 402" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M302 0.490173H179.889L0 201.124L179.889 401.757H302L122.111 201.124L302 0.490173Z" fill="#E44B55"/>
                </svg>

            </div>
        
        </div>


    </main>


</section>