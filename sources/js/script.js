
//Requete AJAX //
$("a").click(function(info)
{
  info.preventDefault();
  var url= $(this).attr("href")
  var options = {
    url: url+ "&ajax",
  }
  $.ajax(options).done(function(section)
  {
    $('#move').html(section);
  });
});
