<nav id="navbar" class="font-['Jersey10'] m-2.5 text-3xl sticky top-2 rounded-2xl">
    <div id="desktop-nav" class="flex justify-between">
        <div id="desktop-nav-menu" class="flex w-fit border-4 border-dashed rounded-2xl gap-12 backdrop-blur-sm">
            <a href="/" class="nav-link flex p-2.5 w-fit rounded-2xl">
                <img class="h-9" src="images/icon/home.svg" alt="" type="image/svg+xml">
                <p>Homepage</p>
            </a>
            <a href="/our-team" class="nav-link flex p-2.5 w-fit rounded-2xl">
                <img class="h-9" src="images/icon/people.svg" alt="" type="image/svg+xml">
                <p>Our Team</p>
            </a>
            <a href="/bursa-soal" class="nav-link flex p-2.5 w-fit rounded-2xl">
                <img class="h-9" src="images/icon/book.svg" alt="" type="image/svg+xml">
                <p>Bursa Soal</p>
            </a>
        </div>
        <div class="grid gap-x-4 grid-cols-2 h-fit">
            <a href="" class="bg-black text-white p-1.5 pl-2.5 rounded-2xl">
                SignUp
            </a>
            <a href="" class="border-2 rounded-2xl p-1.5 backdrop-blur mr-5">
                Login
            </a>
        </div>
    </div>
    
    <div class="backdrop-blur-sm">    
        <div id="mobile-nav" class="p-2 nav-link flex border-4 border-dashed rounded-2xl">
            <img class="h-9 ml-3" src="images/icon/menu.svg" alt="" type="image/svg+xml">
        </div>
        <div id="mobile-nav-menu" hidden >
            <a href="/" class="nav-link flex p-2.5 w-full rounded-2xl border-2">
                <img class="h-9" src="images/icon/home.svg" alt="" type="image/svg+xml">
                <p>Homepage</p>
            </a>
            <a href="/about-us" class="nav-link flex p-2.5 w-full rounded-2xl border-2">
                <img class="h-9" src="images/icon/people.svg" alt="" type="image/svg+xml">
                <p>Our Team</p>
            </a>
            <a href="/bursa-soal" class="nav-link flex p-2.5 w-full rounded-2xl border-2">
                <img class="h-9" src="images/icon/book.svg" alt="" type="image/svg+xml">
                <p>Bursa Soal</p>
            </a>
        </div>
    </div>
</nav>
<script>
    let mobileMenuClick = false;
    $('#mobile-nav').click(function () { 
        if(!mobileMenuClick){
            $('#mobile-nav-menu').attr('hidden', 'true');
            mobileMenuClick = true;
        }else{
            $('#mobile-nav-menu').removeAttr('hidden');
            mobileMenuClick = false;
        }
    });

    $('.nav-link').hover(function(){
            // over
            $(this).addClass('nav-hover');
            console.log("hover");       
        }, function() {
            // out
            $(this).removeClass('nav-hover');
            console.log("out");
        }
    );
    
</script>
<style>
    .nav-hover{
        color : white;
        background-color: rgba(0, 0, 0, 0.683);
    }
    
    .nav-hover img {
    filter: invert(1);
    }
</style>