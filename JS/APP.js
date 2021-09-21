function navSlide() {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks = document.querySelectorAll(".nav-links li");
    
    burger.addEventListener("click", () => {
        //Toggle Nav
        nav.classList.toggle("nav-active");
        
        //Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ""
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
        });
        //Burger Animation
        burger.classList.toggle("toggle");
    });
    
}

navSlide();

/******************************
	 ADD ANIMATION TO THE TEXT 
	******************************/
	var count = 0;
	var number = 10;
	
	var interval = setInterval(function(){
       count++;
	   if (count === number) { 
	   		clearInterval(interval);
			$('h1 ,h2').addClass('animationActive');		
		}
	}, 50);
	
	
	
	/*********************
	 SET ROW'S HEIGHT
	*********************/
	$.each($('.row'), function() { 
	   var h = $(this).attr("data-height");
	   $(this).css("height",h);
	});
	
	
	
	/*************************
	 ON WINDOW SCROLL FUNCTION
	*************************/
	var sectionIds = {};		

	$(".row-nav").each(function(){	
		var $this = $(this);			
		sectionIds[$this.attr("id")] = $this.first().offset().top -120;	
	});			
	
	
	var count2 = 0;
	$(window).scroll(function(event){		

		var scrolled = $(this).scrollTop();		

		//If it reaches the top of the row, add an active class to it
		$(".row-nav").each(function(){
			
			var $this = $(this);
			
			if(scrolled >= $this.first().offset().top -120){
				$(".row-nav").removeClass("active");
				$this.addClass("active");	
				
				$(".animation").removeClass('animationActive');
				$this.find(".animation").addClass('animationActive');
						
			}
		});
		
		//when reaches the row, also add a class to the navigation
		for (key in sectionIds){
			if (scrolled >= sectionIds[key]){
				$(".nav-btn").removeClass("active");
				var c = $("[data-row-id="+key+"]");
				c.addClass("active");
				
				var i = c.index();
				$('#nav-indicator').css('left', i*100 + 'px');							
			}
		}	
		
		
		//Check if we've reached the top
	    if (scrolled > count2){  count2++;  } 
		else { count2--; }
	    
		count2 = scrolled;		
		
		if(count2 == 0){
			$('h1 ,h2').addClass('animationActive');
		}else{
			$('h1 ,h2').removeClass('animationActive');
		}
	
	});
	
	
	
	/**************
	 IN-NAVIGATION
	**************/
	$(".nav-btn").click(function(){		
		$(this).addClass("active");
		$(this).siblings().removeClass("active");
		
		var i = $(this).index();
		$('#nav-indicator').css('left', i*100 + 'px');			
		
		var name = $(this).attr("data-row-id");
		var id = "#" + name;
		var top = $(id).first().offset().top -60;			
		$('html, body').animate({scrollTop: top+'px'}, 300);
		
	});
	
	
	
	/*****
	 TOP
	******/
	$('#top').click(function(){
		$('html, body').animate({scrollTop: '0px'}, 300);
    });

	function goBack() {
		window.history.back();
	  }

	

	  /* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
	document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("main").style.marginLeft = "250px";
  }
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.getElementById("main").style.marginLeft = "0";
  }

  
  $('.unmask').on('click', function(){  
	if($(this).prev('input').attr('type') == 'password')
	  $(this).prev('input').prop('type', 'text');  
	else
	  $(this).prev('input').prop('type', 'password');  
	return false;
  });
  //Begin supreme heuristics 
  $('.password').on('keyup',function (){
	var p_c = $('#p-c');
	var p = $('#p');
	console.log(p.val() + p_c.val());
   if(p.val().length > 0){
	if(p.val() != p_c.val()) {
	  $('#valid').html("Passwords Don't Match");
	} else {
	   $('#valid').html('');  
	}
	  var s = 'weak'
  if(p.val().length > 5 && p.val().match(/\d+/g))
	s = 'medium';
  if(p.val().length > 6 && p.val().match(/[^\w\s]/gi))
	s = 'strong';   
	 $('#strong span').addClass(s).html(s);
	}
  });
  
















  