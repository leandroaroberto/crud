/*********************************
* http://www.elevateweb.co.uk/image-zoom/examples
*********************************/


 $(document).ready(function () {
    //$(".zoom").elevateZoom({zoomWindowPosition: 10});

    //img
    $("td img").each(function(i){
        console.log("foto"+i+".jpg");
        i++;
        $(this).attr('src','upload/foto'+ i + '.jpg');
        $(this).attr('data-zoom-image','upload/foto'+ i + '.jpg');
        $(this).addClass("zoom"+i);
        $(".zoom"+i).elevateZoom({zoomWindowPosition: 10});
    });
    
}); 





    
