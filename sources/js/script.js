
//Requete AJAX //
// $("a").click(function(info)
// {
//   info.preventDefault();
//   var url= $(this).attr("href")
//   var options = {
//     url: url+ "&ajax",
//   }
//   $.ajax(options).done(function(section)
//   {
//     $('#page').html(section);
//   });
// });


//

$(".modifyvinyls").click(function(){
  $(".togglemodvinyls").toggleClass("defaulthidden");
});




$(".modifyplatines").click(function(){
  $(".togglemodplatines").toggleClass("defaulthidden");
});

