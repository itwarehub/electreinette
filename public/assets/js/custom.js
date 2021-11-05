$(".denomination").click(function(event) {
  $(".denomination").removeClass("selected").prop('checked', false);
  $(".denomination-other input").removeClass("selected").val('');
  $(this).addClass("selected");
  $(this).children(":first").prop('checked', true);
  $("#continue").text('Donate $' + $(this).children(":first").val())
  $('#total').text('Donate $' + $(this).children(":first").val())
  $("#donate_rs").val($(this).children(":first").val());
});

$(".denomination-other input").on('keypress', function (event) {
  // allow only int values
  // TODO: remove leading 0
  var regex = new RegExp("^[0-9]+$");
  var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
  if (!regex.test(key)) {
    event.preventDefault();
    return false;
  }
  
  $(".denomination").removeClass("selected").prop('checked', false);
  $(this).addClass("selected");
  $("#continue").text('Donate $' + $(this).val() + key );
  $("#total").text('Donate $' + $(this).val() + key );
  $("#donate_rs").val($(this).val());
});
$('.donate-submit').on('click',function(){
$('#donate').addClass('d-none');
});

$('.donate-submit').on('click',function(){
  $('#donate').addClass('d-none');
  $('#form').removeClass('d-none');
  });
  $('#back').on('click',function(){
    $('#donate').removeClass('d-none');
    $('#form').addClass('d-none');
  });
  
  $('#agree').click(function() {
      $("#submit").prop('disabled', false);
});

$("document").ready(function(){
  $("#donate_rs").val($("input:radio[name=amount]:checked").val());

 
  $('input:checkbox[name="retired"]').click(function(){
    if($(this).prop("checked") == '1'){
      $('#emp_details').removeClass('d-none');
    }
    else if($(this).prop("checked") == '0'){
      $('#emp_details').addClass('d-none');
      $('#emp_name').removeAttr('required');
      $('#emp_occupation').removeAttr('required');
      $('#emp_email').removeAttr('required');
      $('#emp_address').removeAttr('required');
      $('#emp_zip').removeAttr('required');
      $('#emp_city').removeAttr('required');
      $('#emp_state').removeAttr('required');
    }
  });
});
  