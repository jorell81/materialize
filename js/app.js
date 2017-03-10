$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	    $('.modal').modal();
	    $('#btn-dropdown-perfil').dropdown({
	    	belowOrigin: true,
	    });
		$('.parallax').parallax();
		$("#button-collapse").sideNav();
		$('.master-menu').click(function(e){
			e.preventDefault();
			$(this).next('ul').slideToggle('slow');
			$('.child-menu').not($(this).next()).slideUp('slow');
		});
		$('#btn-sidebar').click(function(e){
			e.preventDefault();
			$('#wrapper').toggleClass('toggled');
			$('#btn-sidebar').toggleClass('toggled');
			$(".hide-on-med-and-down").toggle();
		});
		$('#login').click(function(){
			$('.login-page').slideDown('slow');
			$('.form').slideDown('slow');
		});

		$(".logged").click(function(){
            var user = $("#nombre").val();
            var password = $("#password").val();

            var objeto = {
                password: password,
                user: user                
                }
            //data = $('#loginform').submit().serialize() + "&" + $.param(obj_json);
           
            //console.log(obj_json);
            $.ajax({
                url: 'acceso.php',
                //contentType: "application/json",
                //dataType: "json",
                data: objeto,
                type: 'POST',
                cache: false,
                beforeSend: function(status) {
                    console.log(status);
                    
                },
                error: function(event) {
                    console.log("error");
                },
                success: function(data) {
                    
                
                    var result = $.parseJSON(data);
                    if(result.status==200)
                    {

                        location.href = 'index222.html';
                        $(".spinner").toggle();
                    }else{

                       alert("Error: "+ result.detalle);
                    }
                    //location.href = 'index.html';
                }
            });

		});

		/*$('.logged').click(function(){
			alert($("#nombre").val());
			
		});*/

		$('.message a').click(function(){
		   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
  });
     
