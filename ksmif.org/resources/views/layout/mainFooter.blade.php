<footer class="">

</footer>
<script>
$(document).ready(responsiveDocs);
$(window).resize(function(){
    responsiveDocs();
});

function responsiveDocs(){
    let docWidth  = $(document).width();
    let winHeight = $(window).height();
    console.log(winHeight);
    if(docWidth<640){
        $('#desktop-nav').attr('hidden', '');
        $('#mobile-nav').removeAttr('hidden');
    }else {
        $('#mobile-nav').attr('hidden', '');
        $('#desktop-nav').removeAttr('hidden');
    }
    
    if(winHeight<600){
        $('nav').css('margin-top', '300px');
    }
}


</script>