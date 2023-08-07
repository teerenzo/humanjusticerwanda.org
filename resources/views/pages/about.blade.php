<!doctype html>
<html>
<head>
        <title>Human justices organisation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <style>
    .bg-land{
      background-image: url('../images/bg9.png');
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

    <p class="text-white text-6xl font-bold">About Us </p>

    <div>



        
    </div>
  </div>

  </section>

  <section class="p-16">
    <h1 class="text-[#015AAB] text-2xl py-2">
    NON-GOVERNMENTAL ORGANIZATION : HUMAN JUSTICE ORGANISATION (HJO).
    </h1>
    <p class="pb-5">HUMAN JUSTICE ORGANISATION (HJO) is non-governmental Organization created on 07/July
2020 and its mandate is to provide the legal aid .</p>

<h2 class="text-[#015AAB] text-2xl py-2">
Our vision
</h2>
<p class="pb-5">
Justice to all for the best future .
</p>

<h2 class="text-[#015AAB] text-2xl py-2">
Objectives
</h2>

<ul style="list-style-type:disc; pb-5">
<li>
To  promote the social well -being of  beneficiaries through training based on laws.
</li>
<li>
Conflicts resolution in the society through mediation 
</li>
<li>
to provide assistance in the justice for defiled  children  and raped persons .
</li>
<li>
to orient complainants in good ways of suing their cases in the competent authority .
</li>
<li>
to promote the social well-being of people through counselling based on laws 
</li>
<li>
to avoid wasting time and cost reduction due to the ignorance of laws 
</li>
<li>
Advocacy for the persons with intellectual disabilities and neuro-development .
</li>

</ul>

<h2 class="text-[#015AAB] text-2xl py-2">
Our Values
</h2>

<ul style="list-style-type:disc; pb-5">
<li>
Pray and praise heavenly God 
</li>
<li>
respect 
</li>
<li>
Equity 
</li>
<li>
Dignity
</li>
<li>
Social accountability and professional deontology oriented .
</li>
</ul>



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
