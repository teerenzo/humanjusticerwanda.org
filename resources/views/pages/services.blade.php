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

    <p class="text-white text-6xl font-bold">Our Services. </p>

    <div>



        
    </div>
  </div>

  </section>

  <section class="flex flex-col justify-center bg-[#E8E8E8] w-full py-10">
    <div class="flex flex-col justify-center items-center w-full">
      <p class="text-xl p-2">
      What we offer.
      </p>
      <p class="text-2xl">
      The nicest laws service in the town, that go to you 24/7!
      </p>
    </div>
    <div class="flex gap-10 justify-center flex-wrap p-5">

    <div class=" bg-service1 w-1/4 text-white flex-wrap" style="">

    <div class=" z-50 p-5 flex flex-col  gap-5 ">
      <img src="../images/raw.png" alt="" srcset="" height="50" width="50" >

      <p class="z-10">
      Advocacy for persons with disabilities
      </p>

      <p>
      Estate planning notary service that assists individuals in preparing and notarizing various estate planning documents
      </p>
   

    </div>
    
    </div>

    <div class=" bg-service1 w-1/4 text-white flex-wrap" style="">

<div class=" z-50 p-5 flex flex-col  gap-5 ">
  <img src="../images/raw.png" alt="" srcset="" height="50" width="50" >

  <p class="z-10">
  Advocacy for persons with disabilities
  </p>

  <p>
  Estate planning notary service that assists individuals in preparing and notarizing various estate planning documents
  </p>


</div>

</div>

<div class=" bg-service1 w-1/4 text-white flex-wrap" style="">

<div class=" z-50 p-5 flex flex-col  gap-5 ">
  <img src="../images/raw.png" alt="" srcset="" height="50" width="50" >

  <p class="z-10">
  Advocacy for persons with disabilities
  </p>

  <p>
  Estate planning notary service that assists individuals in preparing and notarizing various estate planning documents
  </p>


</div>

</div>

    <div class=" bg-service1 w-1/4 text-white flex-wrap" style="">

<div class=" z-50 p-5 flex flex-col  gap-5 ">
  <img src="../images/raw.png" alt="" srcset="" height="50" width="50" >

  <p class="z-10">
  Orienting cases
  </p>

  <p>
  Estate planning notary service that assists individuals in preparing and notarizing various estate planning documents
  </p>


</div>

</div>

<div class=" bg-service1 w-1/4 text-white flex-wrap" style="">

<div class=" z-50 p-5 flex flex-col  gap-5 ">
  <img src="../images/raw.png" alt="" srcset="" height="50" width="50" >

  <p class="z-10">
  Counselling based on laws 
  </p>

  <p>
  Estate planning notary service that assists individuals in preparing and notarizing various estate planning documents
  </p>


</div>

</div>
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