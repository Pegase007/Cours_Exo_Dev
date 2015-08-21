$(document).ready(function() {
  var regHexa, regYear, voiture, year;
  year = function() {
    var d, n;
    d = new Date;
    n = d.getFullYear();
    return n;
  };
  voiture = function(marque) {
    var mark;
    console.log(marque);
    mark = $('#modeles').find($(' :not(option[name=' + marque + ']) '));
    console.log(mark);
    $('#modeles').removeAttr('disabled');
    $('#modeles').find($('option').removeClass('hidden'));
    mark.addClass('hidden');
  };
  $('#prix').slider();
  $('#km').slider();
  $('#trouve').select2();
  $('.js-example-basic-multiple').select2({});
  regHexa = /^#[0-9a-zA-Z]{6}$/;
  regYear = /^[1|2][0-9a-zA-Z]{3}$/;
  $('#couleurhexa').parent().addClass('hidden');
  $('#modeles').attr('disabled', 'disabled');
  $('#marque').change(function() {
    var marque;
    console.log($('#marque').val());
    marque = $('#marque').val();
    console.log(marque);
    voiture(marque);
  });
  $('#anneemin').keyup(function() {
    if (!regYear.test($(this).val()) || $(this).val() > $('#anneemax').val() || $(this).val() < 1900) {
      $(this).parent().addClass('has-error');
    } else {
      $(this).parent().removeClass('has-error').addClass('has-success');
    }
  });
  $('#anneemax').keyup(function() {
    if (!regYear.test($(this).val()) || $('#anneemin').val() > $(this).val() || $(this) > year()) {
      $(this).parent().addClass('has-error');
    } else {
      $(this).parent().removeClass('has-error').addClass('has-success');
    }
  });
  $('#couleur').click(function() {
    console.log($('#couleur').val());
    if ($('#couleur').val() === 'vide') {
      $('#couleur').parent().addClass('has-error');
    } else if ($('#couleur').val() === 'autres') {
      $('#couleur').parent().removeClass('has-error');
      $('#couleurhexa').parent().removeClass('hidden');
    } else {
      $('#couleurhexa').parent().addClass('hidden');
    }
  });
  $('#couleurhexa').keyup(function() {
    if (!regHexa.test($(this).val())) {
      $(this).parent().addClass('has-error');
    } else {
      $(this).parent().removeClass('has-error').addClass('has-success');
    }
  });
});
