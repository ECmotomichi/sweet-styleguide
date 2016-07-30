(function(){
  $('body')
    .on('click', '.js-sg-header-0001__view-area-width-changer-li', function(){
        var width = $.trim($(this).text());
        $('.js-sg-table-0001__display-cell-inner').css({'width':width});
    })
    .on('click', '.js-sg-table-0001__btn-select-this-code', function(){
      $(this).prev().select();
    });

})();
