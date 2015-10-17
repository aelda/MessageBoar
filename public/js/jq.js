$(document).ready(function(){ 

    $(window).load(function(){ 
    $("#img1").rotate({
     bind: {
               mouseover : function() {
                    $(this).rotate({animateTo:180});
               },
               mouseout : function() {
                    $(this).rotate({animateTo:0});
               }
     }
});
});


    $(window).load(function(){ 
    $("#img2").rotate({
     bind: {
               mouseover : function() {
                    $(this).rotate({animateTo:180});
               },
               mouseout : function() {
                    $(this).rotate({animateTo:0});
               }
     }
});
});



    
    $("#title").bind({
                 mouseover : function() {
                    
                    $(this).removeClass("color").addClass('color2');


               },
                 mouseout : function() {
                   $(this).removeClass("color2").addClass('color');
                    
               }
         
});
   
    $(".memo").hide();
    $(".sure").hide();
    $(".cancle").hide();
  
    $(".edit").click(function(){
      $(this).parent().parent().parent().children().find(".memo").addClass("active");
      $(this).parent().parent().parent().children().find(".sure").addClass("active");
      $(this).parent().parent().parent().find(".cancle").addClass("active");
      $(".active").show();
      $(this).parent().parent().parent().find(".memo_show").hide();
    });
    $(".cancle").click(function(){
       $(this).parent().parent().find(".memo_show").show();
       $(this).parent().find(".memo").removeClass("active").hide();
       $(this).parent().find(".sure").removeClass("active").hide();
       $(this).parent().find(".cancle").removeClass("active").hide();
    });

    $("textarea").keypress(function(e){
    if (e.keyCode == 13 && !e.shiftKey)
    {        
        e.preventDefault();
        //now call the code to submit your form
        alert("just enter was pressed");
        return;
    }

    if (e.keyCode == 13 && e.shiftKey)
    {       
        //this is the shift+enter right now it does go to a new line
        alert("shift+enter was pressed");        
    }    
    });

    $(".delete").click(function(){

          var id = $(this).data('id');
          alert(document.getElementsByName('deleteid').getElementsById('ddid').value);
         // document.getElementsByName('myid').value =id; 
         // $("#delete").modal('show');
        });
     alert(document.getElementsByName('deleteid').getElementsById('ddid').value);
});