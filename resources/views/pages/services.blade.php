<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Human justices organisation | service</title>
  @vite('resources/css/app.css')

  <style>
    .bg-land{
      background-image: url('../images/bg9.png');
      background-repeat: no-repeat;
      background-size: cover;
    }
    .bg-service1{
      background-image: url('../images/bg10.png');
    }
    .bg-advocate{
      background-image: url('../images/advocate.png');
    }
    .bg-rape{
      background-image: url('../images/rape.png');
    }
    .bg-meditation{
      background-image: url('../images/meditation.png');
    }
    .bg-law{
      background-image: url('../images/law.png');
    }
    .bg-law2{
      background-image: url('../images/law2.png');
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
      <p class="text-2xl p-2">
      What we offer.
      </p>
      <!-- <p class="text-2xl">
      The nicest laws service in the town, that go to you 24/7!
      </p> -->
    </div>
    <div class="flex gap-10 justify-center flex-wrap p-5">

    <div class=" bg-meditation w-full md:w-1/4 text-white flex-wrap" style="">

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

<div class=" bg-advocate w-full md:w-1/4 text-white flex-wrap" style="">

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

<div class=" bg-rape w-full md:w-1/4 text-white flex-wrap" style="">

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

<div class=" bg-law w-full md:w-1/4 text-white flex-wrap" style="">

<div class=" z-50 p-5 flex flex-col  gap-5 ">
<img src="../images/raw.png" alt="" srcset="" height="50" width="50" >

<p class="z-10">
COUNSELLING BASED ON LAWS 
</p>

<p>
We  promote  the social well-being people through the counseling based on  law
Where we prevent many hindrances to the society by providing  the real   counsels 
</p>


</div>

</div>

<div class=" bg-service1 w-full md:w-1/4 text-white flex-wrap" style="">


<div class=" z-50 p-5 flex flex-col  gap-5 ">
<img src="../images/raw.png" alt="" srcset="" height="50" width="50" >

<p class="z-10">
ORIENTING  CASES
</p>

<p>
We orient complainants  to sue  their cases in the competent authority  .

</p>


</div>

</div>
<div class=" bg-law2 w-full md:w-1/4 text-white flex-wrap" style="">


<div class=" z-50 p-5 flex flex-col  gap-5 ">
<img src="../images/raw.png" alt="" srcset="" height="50" width="50" >

<p class="z-10">
TRAININGS BASED ON LAWS 
</p>

<p>
We promote the social well-being of beneficiaries through trainings based on laws  where  we  acquaint relevant  and current laws to the people through trainings 
</p>


</div>

</div>
<div class=" bg-service1 w-full md:w-1/4 text-white flex-wrap" style="">


<!-- <div class=" z-50 p-5 flex flex-col  gap-5 ">
<img src="../images/raw.png" alt="" srcset="" height="50" width="50" >

<p class="z-10">
ADVOCACY  FOR PERSONS WITH DISABILITIES 
</p>

<p>
We Advocate persons with intellectual  disabilities and neuro –development in different sectors of life 
</p>


</div>

</div> -->
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