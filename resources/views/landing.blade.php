<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human justices organisation</title>
  @vite('resources/css/app.css')

  <style>
    .bg-land{
      background-image: url('../images/bg11.png');
      background-repeat: no-repeat;
      background-size: cover;
      height: 80vh;

    }
    .bg-service1{
      background-image: url('../images/bg10.png');
    }
    .bg-service2{
      background-image: url('../images/service1.png');
    }
    .bg-service3{
      background-image: url('../images/service1.png');
    }
  </style>
</head>
<body>

@include('pages.includes.header')

  <section class="bg-land flex h-full items-center px-10">

  <div class="w-full md:w-1/3">

    <p class="text-white text-6xl font-bold">Justice to all for the best future. </p>

    <div>

    <p class="text-white text-2xl font-bold">We are here to listen to you and help you.</p>

    <div class="flex gap-10">
   <a href="/login"> <button class="bg-[#015AAB] text-white px-5 py-3  mt-5">What Help?</button>
   
</a>

<a href="/login">    <button class="border border-2 border-[#015AAB] text-white px-5 py-3  mt-5">Free Consultation</button>
</a>


    </div>
        
    </div>
  </div>

  </section>



  <section class="flex flex-col gap-10 p-5 m-0 md:m-10 md:flex-row">
   <div class="md:w-1/2 w-full flex flex-col gap-5">
    <p class="">
    Who we are.
    </p>
    <span class="text-3xl">
    NON-GOVERNMENTAL ORGANIZATION.
    </span>
    <p>
    HUMAN JUSTICE ORGANISATION (HJO) is non-governmental Organization created on 07<sup>TH</sup>/July 2020 AND ITS ROLE   IN SOCIETY IS THE LEGAL AID  through Mediation, Assisting  defiled children   and raped persons in different competent courts, Orienting  cases ,Counseling based on laws  and advocacy  for persons with disabilities .
    </p>
   </div>

    <div class="relative">
      <div class=" absolute bg-[#015AAB] flex flex-col justify-center w-1/4 mb-0 right-0 top-0 text-white align-center items-center py-5">
        <span class="text-2xl">
          2+
        </span>
        <span class="text-sm">
        years experience
        </span>
      </div>
      <img src="../images/bg10.png" alt="" srcset="">
    </div>

  </section>


  <section class="flex flex-col justify-center items-center bg-[#E8E8E8] w-full py-10">
    <div class="flex flex-col justify-center items-center w-full">
      <p class="text-xl p-2">
      What we offer.
      </p>
      <!-- <p class="text-2xl">
      The nicest notaries in the town, that go to you 24/7!
      </p> -->
    </div>
    <div class="flex gap-10 justify-center md:flex-wrap md:flex-row flex-col p-5">

    <div class=" bg-service1 w-full md:w-1/4 text-white flex-wrap" style="">

    <div class=" z-50 p-5 flex flex-col  gap-5 ">
      <img src="../images/raw.png" alt="" srcset="" height="50" width="50" >

      <p class="z-10">
      MEDIATION
      </p>

      <p>
      We Mediate  people in society using different methods  of ADR (Alternative dispute Resolution ) 
      </p>
   

    </div>
    
    </div>

    <div class=" bg-service1 w-full md:w-1/4 text-white flex-wrap" style="">

<div class=" z-50 p-5 flex flex-col  gap-5 ">
  <img src="../images/raw.png" alt="" srcset="" height="50" width="50" >

  <p class="z-10">
  ADVOCACY  FOR PERSONS WITH DISABILITIES 
  </p>

  <p>
  We Advocate persons with intellectual  disabilities and neuro –development in different sectors of life .
  </p>


</div>

</div>

<div class=" bg-service1 w-full md:w-1/4 text-white flex-wrap" style="">

<div class=" z-50 p-5 flex flex-col  gap-5 ">
  <img src="../images/raw.png" alt="" srcset="" height="50" width="50" >

  <p class="z-10">
  ASSISTING  DEFILED  AND RAPED PERSONS
  </p>

  <p>
  Human justice organization provides with the   assistance  for defiled children and raped persons  by suing and following their cases in the competent courts  
  </p>


</div>

</div>


    </div>

    <a href="/our-services"> <button class="bg-[#015AAB] text-white px-5 py-3  mt-5">see more</button>
   
   </a>
  </section>

  <section>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

<section class="bg-gray-100">
  <div
    class="mx-auto max-w-[1340px] px-4 py-16 sm:px-6 sm:py-24 lg:me-0 lg:pe-0 lg:ps-8"
  >
    <div class="max-w-7xl items-end justify-between sm:flex sm:pe-6 lg:pe-8">
      <h2 class="max-w-xl text-4xl font-bold tracking-tight sm:text-4xl">
      Read testmony from our beneficiaries.
      </h2>

      <div class="mt-8 flex gap-4 lg:mt-0">
        <button
          class="prev-button rounded-full border border-[#015AAB] p-3 text-[#015AAB] hover:bg-[#015AAB] hover:text-white"
        >
          <span class="sr-only">Previous Slide</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-5 w-5 rtl:rotate-180"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M15.75 19.5L8.25 12l7.5-7.5"
            />
          </svg>
        </button>

        <button
          class="next-button rounded-full border border-[#015AAB] p-3 text-[#015AAB] hover:bg-[#015AAB] hover:text-white"
        >
          <span class="sr-only">Next Slide</span>
          <svg
            class="h-5 w-5 rtl:rotate-180"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9 5l7 7-7 7"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
            />
          </svg>
        </button>
      </div>
    </div>



    <div class="-mx-6 mt-8 lg:col-span-2 lg:mx-0">
      <div class="swiper-container !overflow-hidden">
        <div class="swiper-wrapper">
        @foreach($testimonies as $data)
          <div class="swiper-slide">
            <blockquote
              class="flex h-full flex-col justify-between bg-white p-12"
            >
              <div>
                <div class="flex gap-0.5 text-white">
                 
              
             
                </div>

                <div class="mt-4">
                

                  <p class="mt-4 text-lg text-gray-600">
              
                  <?php
        echo  (substr($data->testimony,0));
        ?> 
                  </p>
                </div>
              </div>

              <footer class="mt-8 text-gray-500">-   {{$data->name}}</footer>
            </blockquote>
          </div>

          @endforeach

        


      


        </div>
      </div>
    </div>
  </div>
</section>


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
