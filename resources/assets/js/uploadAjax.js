$('#form').on('submit', function(e) {
  e.preventDefault();
  var formdata = new FormData($('#form').get(0));

  $.ajax({
    url  : "http://localhost:8000/upload",
    type : "POST",
    data : formdata,
    cache       : false,
    contentType : false,
    processData : false,
    dataType    : "html"
  })
  .done(function(data, textStatus, jqXHR) {
    var json_data = "";
    try {
      json_data = $.parseJSON(data);
    } catch(e) {
      console.log("JSON形式じゃない!");
    }
    if (json_data["img01"]) {
      $('#preview01 img').removeClass('no_display');
      $('#preview01 img').attr({
        src: "." + json_data["img01"]
      });
    } else {
      $('#preview01 img').addClass('no_display');
    }
    if (json_data["img02"]) {
      $('#preview02 img').removeClass('no_display');
      $('#preview02 img').attr({
        src: "." + json_data["img02"]
      });
    } else {
      $('#preview02 img').addClass('no_display');
    }
    if (json_data["img03"]) {
      $('#preview03 img').removeClass('no_display');
      $('#preview03 img').attr({
        src: "." + json_data["img03"]
      });
    } else {
      $('#preview03 img').addClass('no_display');
    }
  })
  .fail(function(jqXHR, textStatus, errorThrown){
    console.log("失敗!");
  });
});
