const navSlide = () => {
    const menu = document.querySelector('.menu');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    menu.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
    });

    navLinks.forEach((link, index) => {
     link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 1.5}s`;
    });
}

navSlide();




var MainImg = document.getElementById("MainImg");
var smallimg = document.getElementsByClassName("small-img");

smallimg [0].onclick = function(){
    MainImg.src = smallimg[0].src;
}
smallimg [1].onclick = function(){
    MainImg.src = smallimg[1].src;
}
smallimg [2].onclick = function(){
    MainImg.src = smallimg[2].src;
}
smallimg [3].onclick = function(){
    MainImg.src = smallimg[3].src;
}


$(document).ready(function(){
      
    show_cart();

	function show_cart(){
		$.ajax({
           method: "POST",
           url:"show_cart.php",
           success:function(data){
             $(".show_cart").html(data);
           }
		});	
	}


    $(document).on("click",".add",function(){
         var id = $(this).attr("id");
         var name = $("#name"+id+"").val();
         var price = $("#price"+id+"").val();
         var quantity = $("#quantity"+id+"").val();

         $.ajax({
            method:"POST",
            url: "add_to_cart.php",
            data:{id:id,name:name,price:price,quantity:quantity},
            success:function(data){
            	alert("you have add new item");
            }
         });
    });
	
	});


