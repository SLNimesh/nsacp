<style type="text/css">
  .swiper {
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
  }
  .swiper > img {
    scroll-snap-align: start;
  }
</style>
<div class="flex flex-col items-center">
  <div class="flex flex-col items-center">
    <div class="swiper flex overflow-x-scroll w-2/3">
      <img class="w-full h-1/2 object-fill bg-gray-300" src="/img/gallery/slider3.jpg" id="slide1">
      <img class="w-full h-1/2 object-cover bg-gray-300" src="/img/gallery/slider4.png" id="slide2">
      <img class="w-full h-1/2 object-cover bg-gray-300" src="/img/gallery/slider5.jpg" id="slide3">
    </div>
  </div>
  <div class="flex mt-4">
    <a href="#slide1" class="w-4 h-4 mx-1 bg-gray-400 rounded-full"></a>
    <a href="#slide2" class="w-4 h-4 mx-1 bg-gray-400 rounded-full"></a>
    <a href="#slide3" class="w-4 h-4 mx-1 bg-gray-400 rounded-full"></a>
  </div>
</div>