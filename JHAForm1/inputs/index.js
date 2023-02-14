


$( "#textarea" ).click(function() {
  $( "#textarea" ).blur();
});

$( "textarea" ).focus(function() {
  $( this ).next( "span" ).css( "display", "inline" ).fadeOut( 1000 );
});

$('#edit').click(function(){
  $('#edit').hide();

  $('td').each(function(){
  var content = $(this).html();
    $(this).html('<textarea>' + content + '</textarea>');
  });  
  
  $('#save').show();
  $('.info').fadeIn('fast');
});

$('#save').click(function(){
  $('#save, .info').hide();
  $('textarea').each(function(){
    var content = $(this).val();
    $(this).html(content);
    $(this).contents().unwrap();    
  }); 

  $('#edit').show(); 
});

