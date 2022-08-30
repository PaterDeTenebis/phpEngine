function loadHistory() {
<<<<<<< HEAD
  $.get('/loader', function (data) {
    if (data == 'Empty') {
      $('#historyBlock').text('History is empty');
    } else if (data != 'End of list') {
      $('#historyBlock').append(data);
    }
  });
}

$(document).ready(function() {
    loadHistory();
})
=======
    $.get('/', function (data) {
        
    })
}
>>>>>>> e3d9d1a (history in process)
