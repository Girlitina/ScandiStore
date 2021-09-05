$(document).ready(function () {
  $('#productType').change(function () {
    var val = $("#productType option:selected").text();
    if (val == "") {
      $('.book').hide();
      $('.disc').hide();
      $('.furnit').hide();
      $('#height').val('');
      $('#width').val('');
      $('#length').val('');
      $('#size').val('');
      $('#weight').val('');
    }
    if (val == "Furniture") {
      $('.book').hide();
      $('.disc').hide();
      $('.furnit').show();
      $('#weight').val('');
      $('#size').val('');
    }
    if (val == "DVD") {
      $('.book').hide();
      $('.furnit').hide();
      $('.disc').show();
      $('#height').val('');
      $('#width').val('');
      $('#length').val('');
      $('#size').val('');

    }
    if (val == "Book") {
      $('.furnit').hide();
      $('.disc').hide();
      $('.book').show();
      $('#height').val('');
      $('#width').val('');
      $('#length').val('');
      $('#weight').val('');
    }
  });

  $("#button-cancel").click(function (event) {
    event.preventDefault();
    location.href = "../ScndiWeb/index.php"
  });

});
