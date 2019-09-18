var message = document.querySelector('message a');
var form = document.querySelector('form');


        $('.message a').click(function(){
         $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
      });