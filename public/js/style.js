
$(document).ready(function() {
  if (window.location.pathname === '/') {
    setTimeout(function() {
      $(".loading").fadeOut("slow");
    }, 2000);
  }else{
    $(".loading").css("display","none");
  }
$("#copyButton").click(function() {
  var articleLink = decodeURIComponent($(this).data("link"));
  navigator.clipboard.writeText(articleLink).then(function() {
    $("#copyMessage").fadeIn().delay(2000).fadeOut();
  }).catch(function() {
    alert("حدث خطأ أثناء النسخ إلى الحافظة");
  });
});

$(".filtering").hide();
$(".mostsell").show();

    $(".fillter-button1").click(function(){
        $(".mostsell").hide();
        $(".filtering").hide();
        $(".cat_"+$(this).attr("data-id")).fadeIn();    
    });
    $(".fillter-button0").click(function(){
        $(".mostsell").fadeIn();
        $(".filtering").hide();
      //  $(".cat_"+$(this).attr("data-id")).fadeIn();    
    });

   
    var minLength = 5;
        var numericPattern = /^\d+$/;

  $('#input1').on('input', function() {
 
    
    if ($(this).val().length >= minLength) {
      $(this).removeClass('invalid').addClass('valid');
    } else {
      // البريد الإلكتروني غير صالح
      $(this).removeClass('valid').addClass('invalid');
    }
  });
  
  $('#input3').on('input', function() {
 
  var numericPattern = /^\d*$/;
    var minLength = 5;
    var numericFieldVal = $(this).val();

    // تعطيل إدخال النص في الحقل
    if (!numericPattern.test(numericFieldVal)) {
      $(this).val(numericFieldVal.replace(/[^\d]/g, ''));
    }else{
        if ($(this).val().length >= minLength) {
      $(this).removeClass('invalid').addClass('valid');
    } else {
      // البريد الإلكتروني غير صالح
      $(this).removeClass('valid').addClass('invalid');
    }
    }

    
    
  });
  
  $('#input4').on('input', function() {
 
    
    if ($(this).val().length >= minLength) {
      $(this).removeClass('invalid').addClass('valid');
    } else {
      // البريد الإلكتروني غير صالح
      $(this).removeClass('valid').addClass('invalid');
    }
  });
  
  
  
  $('#input2').on('input', function() {
    var email = $(this).val();
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    
    if (emailPattern.test(email)) {
      // البريد الإلكتروني صالح (Gmail)
      $(this).removeClass('invalid').addClass('valid');
    } else {
      // البريد الإلكتروني غير صالح
      $(this).removeClass('valid').addClass('invalid');
    }
  });
  
  
   
  
  
var x = 0;
   var caller = $("#emcee");
    var confirm = $(".confirm");
   
    
  $('#emcee').on('mouseenter', function() {
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    var field1Val = $('#input1').val();
    var field2Val = $('#input2').val();
    var field3Val = $('#input3').val();
    var field4Val = $('#input4').val();

    if (
      field1Val.length >= minLength &&
      field4Val.length >= minLength &&
      field3Val.length >= minLength && numericPattern.test(field3Val) &&
      (field2Val.length >= minLength && emailPattern.test(field2Val))
    ) {
      x = 1;
   
    } else {
      x = 0;
    }
     
          if(x==1){
              //stop
        $("#emcee").css("background","#0e005c");
        $("#emcee").attr("type"," ");

            var randX = Math.random() * $(".confirm").width();
            caller.stop().animate({"right": 0 + "px"},100);
            caller.css("width","100%");
        caller.css("width","100%!important");
     
    }else{
        //moving
        $("#emcee").css("background","#999");
        $("#emcee").attr("type","button");
        var randX = (Math.random()) * $(".confirm").width();
        
        var val1=.75 *$(".confirm").width();
        var val2=0;
        caller.css("width","auto");
        caller.stop().animate({"right": randX + "px"},40);
        console.log($(".confirm").width(),caller.position().left);
        if(caller.position().left < 200){
            caller.stop().animate({"right": val2 + "px"},40);
        }else{
            caller.stop().animate({"right": val1 + "px"},40);
        }

    
    }
   
  });

    






    $('.session-msg').css('right', '0');
    $('.session-msg').delay(5000).fadeOut('slow');
    $(".rev").hover(
        function(e) {
            $(this).addClass("rate");
            $(this).prevAll().addClass("rate");
        },
        function(e) {
            $(this).removeClass("rate");

            $(this).prevAll().removeClass("rate");
        },


    );
   



    $(window).scroll(function() {
        var Scroll = $(window).scrollTop() + 100; // تعديل الرقم لتحقيق التوافق مع النافبار
        var sections = [
          { id: 'section-1', linkClass: '.main-link' },
          { id: 'section-2', linkClass: '.about-link' },
          { id: 'section-3', linkClass: '.serve-link' },
          { id: 'section-4', linkClass: '.work-link' },
          { id: 'section-5', linkClass: '.contact-link' }
        ];
      
        for (var i = 0; i < sections.length; i++) {
          var section = $('#' + sections[i].id);
          var sectionTop = section.offset().top;
      
          if (Scroll >= sectionTop) {
            $('.nav-item a').removeClass('active');
            $(sections[i].linkClass).addClass('active');
          }
        }
      });




});


