/* ========================================================================= */
/*	Preloader
/* ========================================================================= */

jQuery(window).load(function(){

	$("#preloader").fadeOut("slow");

});

var dataList = [];
$(document).ready(function(){

    /* ========================================================================= */
	/*	Fix link nav top
	/* ========================================================================= */
    $('.linkfix_LogIn a').on('click',function() {           
        window.location.href = "http://localhost/eproject/public/";
    });

	/* ========================================================================= */
	/*	Menu item highlighting
	/* ========================================================================= */
	jQuery('#nav').singlePageNav({
		offset: jQuery('#nav').outerHeight(),
		filter: ':not(.external)',
		speed: 1200,
		currentClass: 'current',
		easing: 'easeInOutExpo',
		updateHash: true,
		beforeStart: function() {
			console.log('begin scrolling');
		},
		onComplete: function() {
			console.log('done scrolling');
		}
	});
	
    $(window).scroll(function () {
        if ($(window).scrollTop() > 400) {
            $("#navigation").css("background-color","#000000");
        } else {
            $("#navigation").css("background-color","rgba(16, 22, 54, 0.6)");
        }
    });
	
	/* ========================================================================= */
	/*	Fix Slider Height
	/* ========================================================================= */	

	var slideHeight = $(window).height()/1.1;
	
	$('#slider, .carousel.slide, .carousel-inner, .carousel-inner .item').css('height',slideHeight);

	$(window).resize(function(){'use strict',
		$('#slider, .carousel.slide, .carousel-inner, .carousel-inner .item').css('height',slideHeight)

	});
	
	
	/* ========================================================================= */
	/*	Portfolio Filtering
	/* ========================================================================= */	
	
	//Wow
	var wow = new WOW ({
		boxClass:     'wow',      // animated element css class (default is wow)
		animateClass: 'animated', // animation css class (default is animated)
		offset:       120,          // distance to the element when triggering the animation (default is 0)
		mobile:       false,       // trigger animations on mobile devices (default is true)
		live:         true        // act on asynchronously loaded content (default is true)
	  }
	);
	wow.init();


	
    // portfolio filtering

    $(".project-wrapper").mixItUp();
	
	$(".fancybox").fancybox({
		padding: 0,

		openEffect : 'elastic',
		openSpeed  : 650,

		closeEffect : 'elastic',
		closeSpeed  : 550,

		closeClick : true,

	});
	$(".fancybox").fancybox({
    type: "iframe",
    // other API options
	});
	
	/* ========================================================================= */
	/*	Parallax
	/* ========================================================================= */	
	
	$('#facts').parallax("50%", 0.3);
	
	/* ========================================================================= */
	/*	Timer count
	/* ========================================================================= */

	"use strict";
    $(".number-counters").appear(function () {
        $(".number-counters [data-to]").each(function () {
            var e = $(this).attr("data-to");
            $(this).delay(6e3).countTo({
                from: 50,
                to: e,
                speed: 3e3,
                refreshInterval: 50
            })
        })
    });
	
	/* ========================================================================= */
	/*	Back to Top
	/* ========================================================================= */
	
	
    $(window).scroll(function () {
        if ($(window).scrollTop() > 400) {
            $("#back-top").fadeIn(200)
        } else {
            $("#back-top").fadeOut(200)
        }
    });
    $("#back-top").click(function () {
        $("html, body").stop().animate({
            scrollTop: 0
        }, 1500, "easeInOutExpo")
    });



    /* ========================================================================= */
	/*	Localstorage add to cart at view adminlte::frontenddetail.detail
	/* ========================================================================= */
	var total = 0;
	$('#formAddtocart').submit(function () {
		var thumbnail = $("#thumbnail").val();
		var productid = $("#productid").val();
		var price = $("#price").val();
		var quantity = $("#quantity").val();
		var subtotal = $("#quantity").val() * $("#price").val();
		
		if (quantity == '') {
			alert('Please input quantity by using these arrows');
		} else {
			var obj = {
				'thumbnail': thumbnail,
				'productid': productid,
				'price': price,
				'quantity': quantity,
				'subtotal': subtotal
			}
			dataList.push(obj);
			sessionStorage.setItem("dataList", JSON.stringify(dataList));
			var n = dataList.length;
		}
	});

	var json = sessionStorage.getItem("dataList");
	if(json == null || json == '') return;
	dataList = JSON.parse(json);
	for (var i = 0; i < dataList.length; i++) {
		total += dataList[i].subtotal;
		$('#cartResult').append(`<tr>
				<td>${i+1}</td>
				<td style="width: 10%;"><img src="${dataList[i].thumbnail}" class="img-thumbnail img-responsive" alt="Your Item ${dataList[i].productid}" style="width: 100%;"></td>
				<td>${dataList[i].productid}</td>
				<td>${dataList[i].price}</td>
				<td>${dataList[i].quantity}</td>
				<td>${dataList[i].subtotal}</td>
				<td><button class="btn btn-warning" onclick="deleteProduct(${i})">Remove</button></td>
			</tr>`);
	}
	if (total > 0) {
		$('#total').html(`Total: $${total}`).css({"font-size": "25px", "color": "red"});
		$('#cartTotal').val(total);
	}
	$('#cartForm').submit(function(){
		alert("Your order has been sent!");
		sessionStorage.clear();
	});
	total = 0;
	
});
//function delete item from YOUR CART
function deleteProduct(index) {
	dataList.splice(index, 1);
	sessionStorage.removeItem("dataList");
	sessionStorage.setItem("dataList", JSON.stringify(dataList));
	location.reload();
}

/* ========================================================================= */
/*	Contact Form
/* ========================================================================= */

$('#contact-form').validate({
	rules: {
		name: {
			required: true,
			minlength: 2
		},
		email: {
			required: true,
			email: true
		},
		subject: {
			required: true
		},
		message: {
			required: true
		}
	},
	messages: {
		name: {
			required: "Please enter your name?",
			minlength: "your name must consist of at least 2 characters"
		},
		email: {
			required: "Please enter your email"
		},
		subject: {
			required: "Please enter your subject"
		},
		message: {
			required: "Please enter your message",
			minlength: "."
		}
	},
});



// ==========  START GOOGLE MAP ========== //
function initMap() {
	var location ={lat: 21.035000, lng: 105.826950};
	var map = new google.maps.Map(document.getElementById("map"), {
		zoom: 15,
		center: location
	});

	var marker = new google.maps.Marker({
		position: location, 
		map: map
	});
}

// ========== END GOOGLE MAP ========== //