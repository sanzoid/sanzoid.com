function countDownTo (n, selector) {
   var i = 9;
   function looop() {
      i--;
      setTimeout(function() {
         var item = $(selector);
         item.html(parseInt(item.html())-1);
         if(i > n) looop();
      }, 160)
   }
   looop();
}

function countUpTo (n, selector) {
   var i = 0;
   function looop() {
      i++;
      setTimeout(function() {
         var item = $(selector);
         item.html(parseInt(item.html())+1);
         if(i < n) looop();
      }, 160)
   }
   looop();
}