$(document).ready(function(){


    var slideIndex = 1;
        showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("img-galary");

        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        
        slides[slideIndex-1].style.display = "block";  

    }

    $(".next").click(function (){
        plusSlides(1);
    });

    $(".prev").click(function (){
        plusSlides(-1);
    });


    var modal = document.getElementById('myModal');

    var arr = document.getElementsByClassName('arr-gal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementsByClassName('img-mod');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");

    for(var i=0; i<img.length; i++){
        img[i].onclick = function(){
            arr[0].style.display = "none";
            arr[1].style.display = "none";
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
        modal.style.display = "none";
        arr[0].style.display = "block";
        arr[1].style.display = "block";
    }

    var yel = document.getElementById('img-yell');

    var arr_img = document.getElementsByClassName('img-galary');


    for(var i=0; i<img.length; i++){
        $(".img-galary").css("margin-top",document.getElementsByClassName("yellow-back")[0].getBoundingClientRect().height * -1 + 10);

    }

})