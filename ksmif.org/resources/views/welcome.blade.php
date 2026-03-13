<!DOCTYPE html>
<html lang="en">
<head>
    @include ('layout.mainHeader')
    @vite('resources/css/app.css')
</head>

<body>
    <style>
        #arrow-scroll{
            animation: lompat 1s;
            animation-iteration-count: infinite;
        }
        @keyframes lompat{
            0%      {transform: translateY(0);}
            100%    {transform: translateY(-20px);}
        }
    </style>

    {{-- HEADER --}}
    <div class="h-screen justify-center-safe place-items-center grid sm:mt-[5%] font-['Jersey10'] mt-[20%]">
        <div id="" class="grid justify-center place-items-center">
            <iframe src="images/icon/ksmHytam.svg" type="image/svg+xml"></iframe>
            <h3 class="sm:text-3xl sm:mt-3 text-2xl">Kelompok Studi Mahasiswa Informatika</h3>
            <h1 class="sm:text-6xl text-4xl">"We Not Me"</h1>

            <div class="flex text-3xl mt-14">
                <a class="mr-16 text-white bg-black p-3 pr-4 rounded-2xl" href="">Join Us</a>
                <a class="p-3 rounded-2xl border-2 backdrop-blur-sm" href="">About Us</a>
            </div>
        </div>

        <div id="arrow-scroll" class="text-2xl mt-10 bottom-0">
            <p>Scroll This Page</p>
            <img class="ml-11 w-10 relative" src="images/icon/arrow.svg" type="image/svg+xml">
        </div>
    </div>

    @include ('layout.mainNavbar')

    <h1>pp</h1>
    <h1>pp</h1>
    <h1>pp</h1>

    @include ('layout.mainFooter')
</body>
</html>