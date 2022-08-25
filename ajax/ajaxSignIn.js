function postQuery(url, name, data) {
  var str = '';
  $.each(data.split('.'), function (k, v) {
    str += '&' + v + '=' + $('#' + v).val();
  });

  $.ajax({
    url: '/' + url,
    type: 'POST',
    data: name + '_f=1' + str,
    cache: false,
    success: function (result) {
      ans = jQuery.parseJSON(result);
      if (ans.go) {
        console.log(ans);
        go(ans.go);
      } else {
        alert(ans.message);
      }
    },
  });
}

function go(url) {
  window.location.href = '/' + url;
}
