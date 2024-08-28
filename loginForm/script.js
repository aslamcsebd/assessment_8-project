$(document).ready(function(){    
	var current_fs, next_fs, previous_fs; //fieldsets
	var opacity;
	var current = 1;
	var steps = $("fieldset").length;

	setProgressBar(current);

    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }

	$(".next").click(function(){
        var email 	= $('.login #email').val();
        var username 	= $('.login #username').val();

        var password 	= $('.login #password').val();
        var con_pass 	= $('.login #con_pass').val();        
        
        var emailErr = userErr = passErr= true;
        
        if(email == "") {
            printError("emailErr", "Please enter your email address");
        } else {
            // Regular expression for basic email validation
            var regex = /^\S+@\S+\.\S+$/;
            if(regex.test(email) === false) {
                printError("emailErr", "Please enter a valid email address");
            } else {
                printError("emailErr", "");
                emailErr = false;
            }
        }

        if(username == "") {
            printError("userErr", "Please enter your username");
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            var total = username.length;
            if(regex.test(username) === false) {
                printError("userErr", "Please enter a valid username");
            } 
            else if(total>20){
                printError("userErr", "Not more than 20 characters");
            }
            else {
                printError("userErr", "");
                userErr = false;
            }
        }

        if(password == "") {
            printError("passErr", "Please enter password");
        }else if(password !== con_pass) {
            printError("passErr", "Password & confirm password dont match");
        } else {
            printError("passErr", "");
            passErr = false;
        }

        if(emailErr == false && userErr == false && passErr == false){
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;
    
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({'opacity': opacity});
                },
                duration: 500
            });
            setProgressBar(++current);

            if(current == 4){
                document.forms["msform"].submit();
            }
        }
	});

	$(".previous").click(function(){

		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();

		//Remove class active
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

		//show the previous fieldset
		previous_fs.show();

		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;

				current_fs.css({
				'display': 'none',
				'position': 'relative'
				});
				previous_fs.css({'opacity': opacity});
			},
			duration: 500
		});
		setProgressBar(--current);
	});

    if (window.location.hash === '#success') {
        $("fieldset").hide();
        $("#fieldset").show();
        $("#progressbar li").addClass("active");
        setProgressBar(4);
        var uri = window.location.toString();
         if (uri.indexOf("#") > 0) {
            var clean_uri = uri.substring(0, uri.indexOf("#"));
            window.history.replaceState({}, document.title, clean_uri);
         }
    }

	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar").css("width",percent+"%")
	}

	$(".submit").click(function(){
		return false;
	})
});