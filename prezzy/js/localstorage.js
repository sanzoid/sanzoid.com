
var nols = document.getElementById('nols');
var ls = document.getElementById('ls');

nols.placeholder = "Without localStorage";
ls.placeholder = "With localStorage";

function onLoad() {
   if(window.localStorage.data) {
      ls.value = window.localStorage.data;
   }
}

function onClear() {
   if(window.localStorage.data) {
      window.localStorage.clear();
   }
   ls.value="";
}

ls.addEventListener('keyup', function() {
   window.localStorage.data = ls.value;
});

document.getElementById('clear_btn').addEventListener('click', onClear);

window.onload = onLoad;