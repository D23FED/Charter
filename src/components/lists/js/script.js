/* global $, jquery */
$('#cssChange').click(function() {
  if($('#lobStyle').attr("href") == "css/style1.css") {
    $('#lobStyle').attr('href', 'css/style2.css');
    $('#cssChange').text('Residential');
  } else if($('#lobStyle').attr("href") == "css/style2.css") {
    $('#lobStyle').attr('href', 'css/style1.css');
    $('#cssChange').text('Business');
  };
  return false;
});
