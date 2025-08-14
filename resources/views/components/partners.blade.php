<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

@php
    $insurancePartners = [
        ['img' => 'assets/partner1.png', 'alt' => 'Maxicare'],
        ['img' => 'assets/partner2.png', 'alt' => 'Maxicare'],
        ['img' => 'assets/partner3.png', 'alt' => 'Maxicare'],
        ['img' => 'assets/partner4.png', 'alt' => 'Maxicare'],
        ['img' => 'assets/partner5.png', 'alt' => 'Maxicare'],
    ];
    $repeatTimes = 8; // number of times to duplicate the slides
@endphp

<div class="flex flex-col items-center justify-center bg-[#17509E] py-8 gap-3">
    <div class="flex items-center gap-3">
        <img src="{{ asset('assets/logo-white.png') }}" alt="aboutus-icon" class="w-5 h-4">
        <span class="px-4 py-2 text-xs text-white rounded-full bg-white/10 w-fit">
            In Partners With
        </span>
    </div>
    <div class="mx-2 text-xs text-center text-white">
        We work alongside trusted partners who share our vision for better care and lasting impact.
    </div>

    <!-- Alpine initialized swiper container -->
    <div x-data="insuranceSwiper()" x-init="init()" class="swiper insurance-swiper"
        style="--swiper-navigation-color: #00473E; --swiper-pagination-color: #00473E;">
        <div class="swiper-wrapper flex items-center gap-10">
            @for ($r = 0; $r < $repeatTimes; $r++)
                @foreach ($insurancePartners as $partner)
                    <div class="flex justify-center items-center swiper-slide">
                        <img src="{{ asset($partner['img']) }}" alt="{{ $partner['alt'] }}"
                            class="h-auto mx-auto block w-auto" />
                    </div>
                @endforeach
            @endfor
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<style>
    .swiper {
        width: 100%;
        padding: 20px 0;
    }
</style>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('insuranceSwiper', () => ({
            swiperInstance: null,
            rafId: null,
            speed: 0.5, // pixels per frame
            translate: 0,

            init() {
                this.$nextTick(() => {
                    this.swiperInstance = new Swiper(this.$el, {
                        slidesPerView: 3,
                        spaceBetween: 30,
                        loop: true,
                        freeMode: true,
                        freeModeMomentum: false,
                        allowTouchMove: true,
                        simulateTouch: true,
                        pagination: {
                            el: this.$el.querySelector('.swiper-pagination'),
                            clickable: false, // disable clickable pagination for smoothness
                        },
                        breakpoints: {
                            0: {
                                slidesPerView: 1
                            },
                            640: {
                                slidesPerView: 2
                            },
                            1024: {
                                slidesPerView: 9
                            },
                        },
                    });

                    // Hide pagination if needed (optional)
                    this.$el.querySelector('.swiper-pagination').style.display = 'none';

                    // Start the smooth scrolling animation loop
                    this.animate();
                });
            },

            animate() {
                this.translate -= this
                    .speed; // decrement because translate values are negative when sliding left

                // If we reached the max negative translate, reset to 0 to loop
                if (this.translate < this.swiperInstance.maxTranslate()) {
                    this.translate = 0;
                }

                this.swiperInstance.setTranslate(this.translate);

                this.rafId = requestAnimationFrame(() => this.animate());
            },

            destroy() {
                if (this.rafId) {
                    cancelAnimationFrame(this.rafId);
                }
                if (this.swiperInstance) {
                    this.swiperInstance.destroy(true, true);
                    this.swiperInstance = null;
                }
            },
        }));
    });
</script>
