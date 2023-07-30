<section class="flex justify-between px-5 py-5 bg-[#DDDDEC] px-10">
   <div class="flex justify-between">
    <img src="../images/outgoing.svg" alt="" srcset="">
    <span>
    Call Us at : (250) 786373726
    </span>
   </div>

   <div class="flex justify-between">

    <img src="../images/account.png" alt="" srcset="">
    <span>
     @auth

     <a href="/dashboard">
    Dashboard
    </a>

      @else
      <a href="/login">
    Login
    </a>
      @endauth
   
    </span>
   </div>
  </section>

  <section class="flex items-center justify-between mx-10">
    <div class="flex items-center p-5 gap-2">
        <img src="../images/logo.png" alt="" srcset="">
        <div class="flex flex-col text-[#015AAB] text-2xl">
        <span>
        Human Justice 
        </span>
        <span>
     Organisation
        </span>
        </div>
      
    </div>
    <nav class="text-black  md:flex hidden">
          <ul class="flex uppercase font-bold">
       
            <li class="p-5 relative main-menu font-light {{Request::is('/') ? ' text-[#015AAB]' : ''}}"><a href="/">Home</a>
    
        </li>
            <li class=" p-5 relative main-menu font-light {{Request::is('about') ? ' text-[#015AAB]' : ''}}"><a href="/about">About Us</a>

          </li>
            <li class=" p-5 font-light {{Request::is('our-services') ? ' text-[#015AAB]' : ''}}"><a href="/our-services">Services</a>

          </li>
            <li class="p-5 relative main-menu font-light {{Request::is('contact') ? ' text-[#015AAB]' : ''}}"><a href="/contact">Contact Us</a>
 
            </li>


          </ul>
        </nav>
       
        <span class="p-2 bg-[#015AAB] flex gap-2 text-white  md:flex hidden">
            <img src="../images/business.svg" alt="" srcset="">
            <span>
            Get an Appointment
            </span>

        </span>

  </section>