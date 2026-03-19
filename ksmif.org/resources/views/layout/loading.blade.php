<div id="loading" class="h-screen w-screen fixed top-0 z-10 grid place-items-center bg-white">
    <div id="loading-content" class="grid place-items-center">
        <p id="loading-percent" class="font-['Bitcount'] text-7xl">0%</p>
        <div class="flex" style="width:250px; border: 2px black dashed; border-radius: 15px; padding: 1px;">
            <div id="loading-param" style="height:10px; background-color:black; border-radius: 8px;"></div>
        </div>
    </div>
</div>
<style>
    .fade {
        animation: fade 0.5s reverse both;
    }

    @keyframes fade {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    .slide-in-top {
        animation: slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) reverse both;
    }

    @keyframes slide-in-top {
        0% {
            transform: translateY(-1000px);
        }
        100% {
            transform: translateY(0);
        }
    }

    #loading-param {
        width: 0%;
        transition: width 1.5s cubic-bezier(1.0, 0.15, 0.1, 0.9);
    }
</style>
<script>
    onload = function() {
        const duration = 1500;
        const stepDuration = 40;

        $('#loading-param').css('width', '100%');

        let loaded = setInterval(() => {
            const width = $('#loading-param').width();
            const maxWidth = $('#loading-param').parent().width();
            const percent = Math.round(width / maxWidth * 100);

            $('#loading-percent').text(`${percent}%`);
        }, stepDuration);

        setTimeout(() => {
            clearInterval(loaded);

            $('#loading-percent').text('100%');

            setTimeout(() => {
                $('#loading-content').addClass('fade slide-in-top');
                $('#loading').addClass('fade');
                setTimeout(() => {
                    $('#loading').attr('hidden', 'true');
                }, 400);
            }, 150);
        }, duration);
    }
</script>
