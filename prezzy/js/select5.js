function handleFileSelect5(ev) {
   ev.stopPropagation();
   ev.preventDefault();
   var files = ev.dataTransfer.files;
   var output = [];
   var i, f;
   for (i = 0, f = null; f = files[i]; i++) {
      output.push('<li><strong>', escape(f.name), '</strong> is a <u>', f.type || 'n/a  ', '</u> file with size ', f.size, ' bytes', '</li>');
   }
   document.getElementById('newlist').innerHTML = '<ul>' + output.join('') + '</ul>';
}

function handleDragOver(ev) {
   ev.stopPropagation();
   ev.preventDefault();
   ev.dataTransfer.dropEffect = "copy";
}

var dropZone = document.getElementById('drop_zone');
dropZone.addEventListener('dragover', handleDragOver, false);
dropZone.addEventListener('drop', handleFileSelect5, false);