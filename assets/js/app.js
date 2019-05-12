$(document).ready(function(){
  $.ajax({
    type: "GET",
    url: "/api/orders",
    dataType: "json",
    seccuss: function(response){
      var render = "";
      for (var i = 0; i < response.length; i++)
      {
        $('#orderColumn')
          .append($('<tr>')
            .append($('<td>' + response[i].id + '</td>'))
            .append($('<td>' + response[i].purchase_date + '</td>'))
            .append($('<td>' + response[i].amout + '</td>'))
            .append($('<td>' + response[i].current + '</td>'))
            .append($('<td>' + response[i].billing_firstname + '</td>'))
            .append($('<td>' + response[i].billing_lastname + '</td>'))
            .append($('<td>' + response[i].billing_email + '</td>'))
            .append($('<td>' + response[i].billing_address + '</td>')));
      }
    }
  })
});
