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
  .done(function(data, textStatus, jqXHR){
      $('#preview').append('<img src="' + data + '">');
  })
  .fail(function(jqXHR, textStatus, errorThrown){
      console.log("失敗!");
  });
});
