@extends('layout.app')

@section('content')
    <style>
        #arrow-scroll{
            animation: lompat 1s infinite alternate;
        }
        @keyframes lompat{
            0%      {transform: translateY(0);}
            100%    {transform: translateY(-30px);}
        }

        .text-focus-in {
        -webkit-animation: text-focus-in 1.5s ease-in-out ;
                animation: text-focus-in 1.5s ease-in-out ;
        }

    @-webkit-keyframes text-focus-in {
        0% {
            -webkit-filter: blur(12px);
                    filter: blur(12px);
            opacity: 0;
        }
        100% {
            -webkit-filter: blur(0px);
                    filter: blur(0px);
            opacity: 1;
        }
    }

    @keyframes text-focus-in {
        0% {
            -webkit-filter: blur(12px);
                    filter: blur(12px);
            opacity: 0;
        }
        100% {
            -webkit-filter: blur(0px);
                    filter: blur(0px);
            opacity: 1;
        }
    }
    </style>

    {{-- HEADER --}}
    <div class="h-screen justify-center-safe place-items-center grid sm:mt-[5%] font-['Jersey10'] mt-[20%]">
        <div id="header" class="grid justify-center place-items-center">
            <iframe src="images/icon/ksmHytam.svg" type="image/svg+xml"></iframe>
            <h3 class="sm:text-3xl sm:mt-3 text-2xl">Kelompok Studi Mahasiswa Informatika</h3>
            <h3 class="sm:text-3xl text-2xl">UNIVERSITAS SURABAYA</h3>
            <h1 class="sm:text-6xl text-4xl">"We Not Me"</h1>

            <div class="flex text-3xl mt-14">
                <a class="mr-16 text-white bg-black p-3 pr-4 rounded-2xl" href="">Join Us</a>
                <a class="p-3 rounded-2xl border-2 backdrop-blur-sm" href="">About Us</a>
            </div>
        </div>

        <div id="arrow-scroll" class="text-2xl mt-9">
            <p>Scroll This Page</p>
            <img class="ml-11 w-10 relative" src="images/icon/arrow.svg" type="image/svg+xml">
        </div>
    </div>

    {{-- NAVBAR --}}
    @include ('layout.mainNavbar')

    {{-- About Us --}}
    <div id="aboutus" class="font-['Jersey10'] md:text-4xl text-2xl m-14">
        <h1 class="text-6xl">ABOUT US</h1>
        <p>An Informatics Engineering student organization, established on the University of Surabaya Campus since 1998. We are located at the TF 4.10 Building, University of Surabaya Tenggilis.</p>
    </div>

    {{-- Our Vision --}}
    <div id="our-vision" class="font-['Jersey10'] md:text-4xl text-2xl grid place-items-center m-14 sm:p-14 ">
        <h1 class="text-6xl te">Our Vision</h1>
        <p > To be an organization capable of accommodating, expanding knowledge, and realizing the aspirations of engineering faculty students related to Computer Science.</p>
    </div>

    {{-- DEPARTMENT --}}
    <div id="department" class="font-['Jersey10'] sm:text-3xl text-2xl grid place-items-center mb-20">
        <h1 class="text-6xl">DEPARTMENT</h1>

        {{-- Button --}}
        <form action="/our-team" method="GET" class="flex mb-8">
            <button type="submit" class="text-2xl bg-black text-white p-2 pl-4 pr-4 rounded-4xl">
                Let's see our team
            </button>
            <img src="/images/icon/click_this.webp" alt="" class="absolute ml-44">
        </form>

        <div class="grid lg:grid-cols-2 grid-cols-1 place-items-center gap-14">
            <div id="department-BPH" class="lg:col-span-2 lg: grid place-items-center">
                <h2 class="sm:text-5xl text-4xl">BPH</h2>
                <h3>Badan Pengurus Harian</h3>
            </div>

            <div class="grid place-items-center" id="department-IRD">
                <h2 class="sm:text-5xl text-4xl">IRD</h2>
                <h3>Internal Relation Department</h3>
            </div>

            <div class="grid place-items-center" id="department-PRD">
                <h2 class="sm:text-5xl text-4xl">PRD</h2>
                <h3>Public Relation Department</h3>
            </div>

            <div class="grid place-items-center" id="department-HRDD">
                <h2 class="sm:text-5xl text-4xl">HRDD</h2>
                <h3>Human Resource</h3>
                <h3>Development Department</h3>
            </div>

            <div class="grid place-items-center" id="department-CDD">
                <h2 class="sm:text-5xl text-4xl">CDD</h2>
                <h3>Creative Design Department</h3>
            </div>
        </div>
    </div>
<script>
    setTimeout(() => {
        $('#header').addClass('text-focus-in');
    }, 1500);

</script>
@endsection
