$(document).ready(function () {
  $('#n4').change(function () {
    var val = $("#n4 option:selected").text();
    if (val == "") {
      $('.book').hide();
      $('.disc').hide();
      $('.furnit').hide();
      $('#f1').val('');
      $('#f2').val('');
      $('#f3').val('');
      $('#b1').val('');
      $('#w1').val('');
    }
    if (val == "Furniture") {
      $('.book').hide();
      $('.disc').hide();
      $('.furnit').show();
      $('#w1').val('');
      $('#b1').val('');
    }
    if (val == "DVD-disc") {
      $('.book').hide();
      $('.furnit').hide();
      $('.disc').show();
      $('#f1').val('');
      $('#f2').val('');
      $('#f3').val('');
      $('#b1').val('');

    }
    if (val == "Book") {
      $('.furnit').hide();
      $('.disc').hide();
      $('.book').show();
      $('#f1').val('');
      $('#f2').val('');
      $('#f3').val('');
      $('#w1').val('');
    }
  });

  $("#button-cancel").click(function (event) {
    event.preventDefault();
    location.href = "../ScndiWeb/index.php"
  });

});
