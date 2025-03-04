<div>
    <div class="swiper swiper-container w-full relative">
        <div class="bg-transparent border-b-2 border-b-white absolute z-10 text-white w-full items-center flex">
            <h1 class="font-losta mx-auto text-3xl py-3">Java Lotus Jember</h1>
        </div>
        <div class="lg:flex gap-2 absolute z-20 py-4 pl-3 text-white hidden">
            <x-heroicon-s-map-pin class="size-5" />
            Kec. Patrang, Kabupaten Jember, Jawa Timur 68112
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="{{ asset('assets/images/hotel_details/hotel-gallery-1.jpg') }}"
                    data-lightbox="gallery"><img src="{{ asset('assets/images/hotel_details/hotel-gallery-1.jpg') }}"
                        alt="" class="w-full h-[35rem] object-cover"></a></div>
            <div class="swiper-slide"><a href="{{ asset('assets/images/hotel_details/hotel-gallery-2.jpg') }}"
                    data-lightbox="gallery">
                    <img src="{{ asset('assets/images/hotel_details/hotel-gallery-2.jpg') }}" alt=""
                        class="w-full h-[35rem] object-cover"></a></div>
            <div class="swiper-slide"><a href="{{ asset('assets/images/hotel_details/hotel-gallery-3.jpg') }}"
                    data-lightbox="gallery"><img src="{{ asset('assets/images/hotel_details/hotel-gallery-3.jpg') }}"
                        alt="" class="w-full h-[35rem] object-cover"></a></div>
        </div>
        <div class="swiper-pagination pagination_hotel"></div>
    </div>
    <div class="my-5 swiper gallery_container w-full h-96">
        <div class="swiper-wrapper">
            <div class="swiper-slide flex justify-center"><a
                    href="{{ asset('assets/images/hotel_details/gallery_1.png') }}" data-lightbox="gallery"><img
                        src="{{ asset('assets/images/hotel_details/gallery_1.png') }}" alt=""
                        class="w-full h-[35rem] object-cover"></a></div>
            <div class="swiper-slide flex justify-center"><a
                    href="{{ asset('assets/images/hotel_details/gallery_2.png') }}" data-lightbox="gallery"><img
                        src="{{ asset('assets/images/hotel_details/gallery_2.png') }}" alt=""
                        class="w-full h-[35rem] object-cover"></a></div>
            <div class="swiper-slide flex justify-center"><a
                    href="{{ asset('assets/images/hotel_details/gallery_3.png') }}" data-lightbox="gallery"><img
                        src="{{ asset('assets/images/hotel_details/gallery_3.png') }}" alt=""
                        class="w-full h-[35rem] object-cover"></a></div>
            <div class="swiper-slide flex justify-center"><a
                    href="{{ asset('assets/images/hotel_details/gallery_4.jpg') }}" data-lightbox="gallery"><img
                        src="{{ asset('assets/images/hotel_details/gallery_4.jpg') }}" alt=""
                        class="w-full h-[35rem] object-cover"></a></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
