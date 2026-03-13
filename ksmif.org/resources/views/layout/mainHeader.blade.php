<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" type="image/x-icon" href="images/icon/tab-icon.png" />
<script src="lib/jquery.js"></script>
<style>
    body{
        background-image: url("images/icon/background.png");
        position: relative;
        width: 100%;
        animation-name: bg-gerak;
        animation-iteration-count: infinite;
        animation-duration: 10s;
        width: 100%;
    }

    @keyframes bg-gerak {
        0%   {
            background-position-x: 0%;
            background-position-y: 0%;
        }
        25%  {
            background-position-x: 25%;
            background-position-y: 25%;
        }
        50%  {
            background-position-x: 50%;
            background-position-y: 50%;
        }
        75%  {
            background-position-x: 75%;
            background-position-y: 75%;
        }
        100% {
            background-position-x: 100%;
            background-position-y: 100%;
        }
    }
</style>