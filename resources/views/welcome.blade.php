@extends('navbar')

@section('content')

    
<section class="bg-black">
    <div class="px-4 py-14 lg:py-16 lg:px-12">
        <div class="mx-auto max-w-screen-xl text-center ">
            
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight font-serif leading-none text-white md:text-5xl lg:text-6xl">Your one-stop-shop for all things me</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 xl:px-48">Not only do you get to visit a cool website, you get to learn about me in the process!</p>
            
            <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="/resume" class="inline-flex justify-center items-center text-[#e5ff00] py-3 px-5 text-base font-medium text-center hover:text-[#E384FF] rounded-lg">
                    Resume
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="/about" class="inline-flex justify-center items-center text-[#e5ff00] py-3 px-5 text-base font-medium text-center hover:text-[#E384FF] rounded-lg">
                    About Page
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
    </div>
        
</section>
    



<div class="px-8 py-18"
    ​<section class="bg-black">

        <h2 class="text-white text-4xl text-center text-bold font-serif px-4 py-15">Sapere Aude<h2>
        <p class="text-sm text-gray-500 italic text-center">dare to know</p>
            
        <div class="gap-8 items-center py-4 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-8 lg:px-6">
            <img class="w-full transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-lg shadow-lg" src="sitting.jpeg"/>
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl font-serif tracking-tight font-semibold text-white">Someone You Can Rely On</h2>
                <p class="mb-6 font-light text-gray-200 md:text-lg">I'm the tech employee you can trust. Consider me your reliable workhorse in the realm of technology. Whether you need software knowledge, systems management, or cybersecurity capabilities, I'll be your dependable partner. I stay updated on all the tech trends and latest vulnerabilities, so you can sit back and relax while I handle the complexity with precision and consistency. Let's team up and make your future talent acquisition experience a successful adventure with a dedicated person you can always count on!
                </p>
            </div>
        </div>
    </section>

    ​<section class="bg-black">
        <div class="gap-8 items-center py-4 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-8 lg:px-6">
            {{-- <img class="w-md transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-lg shadow-lg" src="sitting.jpeg"/>
            <div class="mt-4 md:mt-0"> --}}
                
        
                <div class="col-span-1">
                    <h2 class="mb-4 text-4xl font-serif tracking-tight font-semibold text-white">Symbiosis over Settlement</h2>
                    <p class="mb-6 font-light text-gray-200 md:text-lg">We're the Wreck Techs! We are a team of undergraduate students at Georgia Tech that assist other students, faculty, and staff throughout the year with technical and customer service needs, specializing in fixing wired and wireless Internet issues within campus residential environments. We assist customers via email, phone, live chat, and in walk-up locations in both Howell Residence Hall and West Village Dining Commons.</p>
                </div>
    
                <div id="custom-controls-gallery" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="bench.jpg" class="absolute w-full transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-lg shadow-lg block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Park Bench">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="beach.jpg" class="w-full transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 rounded-lg shadow-lg absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Beach">
                        </div>
                    </div>
                    
                </div>


            </div>
        </div>
    </section>
</div>


@endsection