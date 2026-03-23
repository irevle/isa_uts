<nav id="navbar" class="font-['Jersey10'] m-2.5 text-3xl backdrop-blur-sm sticky top-2 rounded-2xl">
    <div id="desktop-nav" class="flex border-4 border-dashed rounded-2xl gap-12">
        <a href="/" class="flex p-2.5 w-fit rounded-2xl">
            <img class="h-9" src="images/icon/home.svg" alt="" type="image/svg+xml">
            <p>Homepage</p>
        </a>
        <a href="/our-team" class="flex p-2.5 w-fit rounded-2xl">
            <img class="h-9" src="images/icon/people.svg" alt="" type="image/svg+xml">
            <p>Our Team</p>
        </a>
        <a href="/bursa-soal" class="flex p-2.5 w-fit rounded-2xl">
            <img class="h-9" src="images/icon/book.svg" alt="" type="image/svg+xml">
            <p>Bursa Soal</p>
        </a>
    </div>
    
    <div id="mobile-nav" class="p-2 flex border-4 border-dashed rounded-2xl">
        <img class="h-9 ml-3" src="images/icon/menu.svg" alt="" type="image/svg+xml">
    </div>
    <div id="mobile-nav-menu" hidden >
        <a href="/" class="flex p-2.5 w-full rounded-2xl border-2">
            <img class="h-9" src="images/icon/home.svg" alt="" type="image/svg+xml">
            <p>Homepage</p>
        </a>
        <a href="/about-us" class="flex p-2.5 w-full rounded-2xl border-2">
            <img class="h-9" src="images/icon/people.svg" alt="" type="image/svg+xml">
            <p>Our Team</p>
        </a>
        <a href="/bursa-soal" class="flex p-2.5 w-full rounded-2xl border-2">
            <img class="h-9" src="images/icon/book.svg" alt="" type="image/svg+xml">
            <p>Bursa Soal</p>
        </a>
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
</script>