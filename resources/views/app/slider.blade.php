<section id="image-carousel" class="splide" aria-label="Beautiful Images">
    <div class="splide__track pb-5">
        <ul class="splide__list">
            <li class="splide__slide">
                <img src="storage/images/slider/1 (1).jpg" alt="" class="rounded-3">
            </li>
            <li class="splide__slide">
                <img src="storage/images/slider/1 (2).jpg" alt="" class="rounded-3">
            </li>
            <li class="splide__slide">
                <img src="storage/images/slider/1 (3).jpg" alt="" class="rounded-3">
            </li>
            <li class="splide__slide">
                <img src="storage/images/slider/1 (4).jpg" alt="" class="rounded-3">
            </li>
        </ul>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let splide = new Splide('#image-carousel', {
            type: 'loop',
            autoplay: true,
            arrows: false,
            interval: 4000,
            pauseOnHover: false,
            pauseOnFocus: false,
            perPage: 1,
            perMove: 1,
        })
        splide.mount();
    });
</script>

<style>
    .splide__slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

</style>
