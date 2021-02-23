(function($) {
  "use strict"; // Start of use strict

    $(".scroll-to-top").on("click",function(){
      $("#content-wrapper").scrollTop(0);
    });
  

  function SideMenu(){
    if(SidemenuStatus=="open"){
      SidemenuStatus="close";
      $(".menuLat").addClass("notOpen");
      $(".menuLat").removeClass("open");
      $(".burger").attr("src","assets/img/burger.png")
    }else{
      SidemenuStatus="open";
      $(".menuLat").addClass("open");
      $(".menuLat").removeClass("notOpen");
      $(".burger").attr("src","assets/img/close.png")

    }
  }

  var SidemenuStatus = "close";

  $(".burger").on("click", SideMenu );



  $(".menuLat > .container-fluid").on("mouseleave", SideMenu);



 
})(jQuery); // End of use strict
