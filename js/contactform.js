function regTestInput(elId, reg, target) {
  $("#" + elId).change(function() {
    var str = $(this).val();
    if (reg.test(str)) {
      $("#" + target).show();
      $(this).css("background-color", "pink");
      console.log("no");
    } else {
      $("#" + target).hide();
      $(this).css("background-color", "white");
      console.log("ok");
    }
    setDisableButton();
  });
}

function invertRegTestInput(elId, reg, target) {
  $("#" + elId).change(function() {
    var str = $(this).val();
    if (!(reg.test(str))) {
      $("#" + target).show();
      $(this).css("background-color", "pink");
    } else {
      $("#" + target).hide();
      $(this).css("background-color", "white");
    }
    setDisableButton();
  });
}
function setDisableButton() {
  var check = true;
  for (var i = 0; i < 5; i++) {
    if ($('#alertBirth, #alertName, #alertPseudo, #alertFileFormat, #alertFileSize').eq(i).is(":visible") == "visible") {
      check = false;
    }
  }
  if (check == true) {
    $('#submit').prop("disabled", false);
  } else {
    $('#submit').prop("disabled", true);
  }
}
$('#alertBirth, #alertName, #alertPseudo, #alertFileFormat, #alertFileSize').hide();
$("#uploadIlimage").change(function() {
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        var header = "";
        reader.onloadend = function(e) {
            $('#yourImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }
    var size = this.files[0].size;
    if (size > 1000000) {
        $("#alertFileSize").show();
    } else {
        $("#alertFileSize").hide();
    }
    var type = this.files[0].type.slice(6, 10);
    reg0 = /^(jpg)|(png)|(jpeg)/i;
    if (!(reg0.test(type))) {
        $("#alertFileFormat").show();

    } else {
        $("#alertFileFormat").hide();
    }
    setDisableButton();
});

var reg1 = /^[0-9]+/i;
regTestInput("pseudo", reg1, "alertPseudo");
var reg2 = /[0-9]/i;
regTestInput("firstName", reg2, "alertName");
var reg3 = /^((0[1-9])|([1-2])([0-9])|(3[0-1]))\/((0[1-9])|(1[0-2]))\/(19([0-9]{2})|(20[0-1][0-9]))$/i;
invertRegTestInput("birthday", reg3, "alertBirth");
