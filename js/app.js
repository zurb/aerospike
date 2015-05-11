// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();


$(document).foundation();
$(".megamenu").mouseenter(function(){
  if($(window).width()>641){
    $(".dropdown-wrapper").offset({left: 0});
    $(".dropdown-wrapper").css("width",$(window).width());
  }else{
    $(".dropdown-wrapper").css("width",auto);
  }
});