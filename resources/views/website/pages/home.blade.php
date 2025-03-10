@extends('website.layouts.app')

    <section class="hero">
        <picture>
            <source srcset="{{ asset('website/images/home/hero12.jpg') }}" media="(max-width: 768px)">
            <img src="{{ asset('website/images/home/hero.png') }}" alt="" class="w-100" loading="lazy">
        </picture>
        <div class="content hero-animated">
            <h1 class="">Envisioning Next
            </h1>
           <p class="">The AVATR experience is nearly here.
            </p>
            
             <h2 class="">Coming Soon!!</h2>
         
        </div>
    </section>

   