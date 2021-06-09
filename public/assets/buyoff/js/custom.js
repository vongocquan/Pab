function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).html()).select();
    document.execCommand("copy");
    $temp.remove();
}

function copyToClipboard_2(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).html()).select();
    document.execCommand("copy-2");
    $temp.remove();
}

$( ".event-type-select" ).change(function() {
    var selectedEventType = this.options[this.selectedIndex].value;
    if (selectedEventType == "all") {
      $('.qr-filter div').removeClass('hidden');
    } else {
      $('.qr-filter div').addClass('hidden');
      $('.qr-filter div[data-eventtype="' + selectedEventType + '"]').removeClass('hidden');
    }	
  });



function onReady()
{
    var qrcode = new QRCode("id_qrcode_TRC_20", {
        text:"TQ1T9VipGQRKdGnqg4ptoZRCX7CHwpixvZ",
        colorDark:"#000000",
        colorLight:"#ffffff",
        correctLevel:QRCode.CorrectLevel.H
    });
}

function onReady_2()
{
    var qrcode = new QRCode("id_qrcode_ERC_20", {
        text:"0x7Fb2D2d825ef33e57609219Cc02Ca26b5F957D01",
        colorDark:"#000000",
        colorLight:"#ffffff",
        correctLevel:QRCode.CorrectLevel.H
    });
}

function custom_template(obj){
  var data = $(obj.element).data();
  var text = $(obj.element).text();
  if(data && data['img_src']){
      img_src = data['img_src'];
      template = $("<div style=\"display: flex;padding: 16px;\"><img src=\"" + img_src + "\" style=\"height:25px;margin-right:14px;\"/><span style=\"font-size:30px;color:#F99303;text-align: left;\">" + text + "</span></div>");
      return template;
  }
}
var options = {
'templateSelection': custom_template,
'templateResult': custom_template,
}
$('#id_select2_example').select2(options);
$('.select2-container--default .select2-selection--single').css({'height': 'auto','width':'auto'});


function validateForm() {
  var a = document.forms["submit-sale-icon"]["phone"].value;
  var b = document.forms["submit-sale-icon"]["content"].value;
  var c = document.forms["submit-sale-icon"]["email"].value;
  var d = document.forms["submit-sale-icon"]["address"].value;
  if (a == null || a == "", b == null || b == "", c == null || c == "", d == null || d == "") {
    alert("Please Fill All Required Field");
    return false;
  }
}
