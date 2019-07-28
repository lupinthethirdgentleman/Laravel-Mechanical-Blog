$('.bars').click(function(){
 $('.btrigger').toggle();
})
$('.darkbg').appendTo('body');


$('.icon1').click(function(){
  $('.darkbg,  .hover1').show();
 
});
$('.icon2').click(function(){
  $('.darkbg,  .hover2').show();
 
})
$('.icon3').click(function(){
  $('.darkbg,  .hover3').show();
 
})
$('.icon4').click(function(){
  $('.darkbg,  .hover4').show();
 
})

$('.darkbg').click(function(e){
 
   if (e.target !== this)
    return;
  $('.darkbg,  .hover').hide();
})