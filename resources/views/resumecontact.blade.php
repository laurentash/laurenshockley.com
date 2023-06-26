@extends('navbar')

@section('content')


<section class="bg-black">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-4xl text-center font-serif  text-black md:text-2xl dark:text-white">
                    Please provide your information. 
                </h1>
                <p class="text-sm text-bold mx-auto text-center">Due to safety concerns, access to the full resume will be granted only after submitting your information. 
                    
                    Thank you for understanding!
                </p>
                <form class="space-y-4 md:space-y-6" method="POST" action={{ route('resumeinfo') }}>
                    @csrf
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                        <input type="text" name="first_name" id="first_name" placeholder="Alice" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>

                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                        <input type="text" name="last_name" id="last_name" placeholder="Roosevelt" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                   
                    <div>
                        <label for="message" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                        <input type="text" name="message" id="message" placeholder="Message" value="ResuemeRequest" class="hidden bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="allierose@whitehouse.gov" required="">
                    </div>    

                    <div>
                        <label for="repeat_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comfirm your email</label>
                        <input type="email" name="repeat_email" id="repeat_email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:focus:border-blue-500" placeholder="allierose@whitehouse.gov" required="">
                    </div>
                   
                    
                    <button type="submit" class="w-full text-white bg-black hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center md:hover:text-[#000000] md:hover:bg-[#e5ff00]">Submit</button>
                </form>
            </div>
        </div>
    </div>
  </section>

@endsection