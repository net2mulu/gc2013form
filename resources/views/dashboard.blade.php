 {{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome {{Auth::user()->full_name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>  --}}


                                
 <!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.holathemes.com/coursterhtml/form-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 17:42:42 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Basic Page Needs
    ================================================== -->
    <title>GC-2013</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wollo university KIOT GC-2013">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="assets/css/uikit.css">
    <link rel="stylesheet" href="assets/css/tailwind.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/toast.css">
        <script src="assets/js/toast.js"></script>
    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">
 @livewireStyles
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

</head>

<body>


    <div id="Wrapper">
        <div class="uk-container">
             <img class="" src="assets/gc app logo.png" style="width: 100%" alt="">
            <div class="uk-width-1-3@m m-auto my-16">       
              <h1>Welcome:<span class="uk-text-bold"> {{ Auth::user()->full_name }}</span></h1>
              <h6>Kiot - Id: {{ Auth::user()->kiot_id}}</h6>
              <h6>Department: {{ Auth::user()->dept}}</h6>
                <livewire:lastwords />
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                    </a>
                    </form>
                     <div class="mb-4">
                    <h6>Form built by<span class="uk-text-bold"> TECHINO CLUB </span> GC-2013</h6>
                </div>
            </div>



        </div>

        

        <!-- Content / End -->

    </div>

@livewireScripts


<!-- Scripts
    ================================================== -->
    <script src="assets/js/tippy.all.min.js"></script>  
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/uikit.js"></script>
    <script src="assets/js/simplebar.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
</body>


<!-- Mirrored from demo.holathemes.com/coursterhtml/form-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 May 2021 17:42:42 GMT -->
</html> 