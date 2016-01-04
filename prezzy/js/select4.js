function handleFileSelect(ev) {
   var files = ev.target.files;
   var output = [];
   var i, f;
   for(i = 0, f = null; f = files[i]; i++) {
      output.push('<li><strong>', escape(f.name), '</strong> is a <u>', f.type || 'n/a  ', '</u> file with size ', f.size, ' bytes', '</li>');
   }
   document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
}
document.getElementById('files').addEventListener('change', handleFileSelect, false);