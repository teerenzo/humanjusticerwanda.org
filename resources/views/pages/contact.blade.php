<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <style>
    .bg-land{
      background-image: url('../images/back.png');
      background-repeat: no-repeat;
      background-size: cover;
    }
    .bg-service1{
      background-image: url('../images/service1.png');
    }
  </style>
</head>
<body>

@include('pages.includes.header')

  <section class="bg-land flex h-[40vh] items-center px-10">

  <div class=" w-1/3">

    <p class="text-white text-6xl font-bold">Contact Us </p>

    <div>



        
    </div>
  </div>

  </section>

  <section class="bg-[#DDDDEC] p-5">
  <div class="py-8  px-4 mx-auto w-full  md:w-2/3  bg-white">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
      <p class="mb-8  font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a comment ?</p>
      <form action="#" class="space-y-8">
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
              <input type="email" id="email" class="peer block min-h-[auto] border border-[#015AAB] border-1 w-full rounded  bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none " placeholder="enter your email" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
              <input type="text" id="subject" class="peer block min-h-[auto] border border-[#015AAB] border-1 w-full rounded  bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none " placeholder="Let us know how we can help you" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
              <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-[#015AAB] border-1 focus:ring-primary-500 focus:border-primary-500 " placeholder="Leave a comment..."></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg  focus:ring-4 focus:outline-none focus:ring-primary-300  bg-[#015AAB]">Send message</button>
      </form>
  </div>
</section>




 @include('pages.includes.footer')


  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 32,
      autoplay: {
        delay: 8000,
      },
      navigation: {
        nextEl: '.next-button',
        prevEl: '.prev-button',
      },
      breakpoints: {
        640: {
          slidesPerView: 1.5,
          centeredSlides: true,
        },
        1024: {
          centeredSlides: false,
          slidesPerView: 2.25,
        },
      },
    })
  })
</script>
</body>
</html>