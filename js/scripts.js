// const observer = new IntersectionObserver(entries => {
//    entries.forEach(entry => {
//        var icon = entry.target.querySelector('.roadmap_item_icon');
        
//        if (entry.isIntersecting) {
//        icon.classList.add('icon-transition');

//        return; // если класс добавлен, продолжать уже не надо
//        }
        // перемещение завершено, теперь надо удалить класс
//        icon.classList.remove('icon-transition');
//    });
//});
//observer.observe(document.querySelector('.roadmap_item_icon_wrapper'));


function onEntry(entry) {
    entry.forEach(change => {
      if (change.isIntersecting) {
       change.target.classList.add('icon-transition');
      }
    });
  }
  
  let options = {
    threshold: [0.5] };
  let observer = new IntersectionObserver(onEntry, options);
  let elements = document.querySelectorAll('.manuallyAnimated');
  
  for (let elm of elements) {
    observer.observe(elm);
}

$(document).ready(function () {
  $(window).on('wheel', function(e){
      var deg = e.originalEvent.deltaY;
      console.log(e.originalEvent.deltaY);
      $('.wellcome_top_img').css({ WebkitTransform: 'rotate(' + deg + 'deg)'});
      $('.wellcome_top_img').css({ '-moz-transform': 'rotate(' -'' + deg + 'deg)'});
  });
})

