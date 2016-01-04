var canv = document.getElementById('mycanvas');
var ctx = canv.getContext('2d');

canv.width = 500;
canv.height = 375;

function removeSliders() {
   var sliders = document.getElementById('sliders');
   if(sliders) {
      sliders.style.display = "none";
   }
   var examples = canv.parentElement.querySelectorAll('p');
   [].forEach.call(examples, function(example) {
      example.style.display = "";
   });
}

function drawPaper() {
   removeSliders();
   canv.height = canv.height;
   for(var i = 0.5; i < canv.height; i += 10) {
      ctx.moveTo(0, i);
      ctx.lineTo(canv.width, i);
   }
   for(var i = 0.5; i < canv.width; i += 10) {
      ctx.moveTo(i, 0);
      ctx.lineTo(i, canv.height);
   }
   ctx.strokeStyle = "#eee";
   ctx.stroke();

   ctx.beginPath();
   ctx.moveTo(0, 40);
   ctx.lineTo(240, 40);
   ctx.moveTo(260, 40);
   ctx.lineTo(500, 40);
   ctx.moveTo(495, 35);
   ctx.lineTo(500, 40);
   ctx.lineTo(495, 45);
   
   ctx.moveTo(60, 0);
   ctx.lineTo(60, 153);
   ctx.moveTo(60, 173);
   ctx.lineTo(60, 375);
   ctx.moveTo(65, 370);
   ctx.lineTo(60, 375);
   ctx.lineTo(55, 370);
   ctx.rect(100, 150, 100, 100);
   ctx.closePath();
   
   ctx.strokeStyle = "black";
   ctx.stroke();
   
   ctx.beginPath();
   ctx.arc(300, 200, 50, 0, 2*Math.PI);
   ctx.strokeStyle = "black";
   ctx.stroke();
   ctx.closePath();

   ctx.font = "bold 12px sans-serif";
   ctx.fillText("x", 248, 43);
   ctx.fillText("y", 58, 165);

   ctx.textBaseline = "top";
   ctx.fillText("(0, 0)", 8, 5);
   
   ctx.textAlign = "right";
   ctx.textBaseline = "bottom";
   ctx.fillText("(500, 375)", 492, 370);
   
   ctx.fillRect(0, 0, 3, 3);
   ctx.fillRect(497, 372, 3, 3);
};

function drawGradient() {
   removeSliders();
   canv.height = canv.height;
   var grad = ctx.createLinearGradient(0, 0, canv.width, canv.height);
   grad.addColorStop(0, "#9e009e");
   grad.addColorStop(1/7, "#0000ff");
   grad.addColorStop(2/7, "#00ffff");
   grad.addColorStop(3/7, "#00ff00");
   grad.addColorStop(4/7, "#ffff00");
   grad.addColorStop(5/7, "#ff7f00");
   grad.addColorStop(6/7, "#ff0000");
   ctx.fillStyle = grad;
   ctx.fillRect(0, 0, canv.width, canv.height);
}

function drawRadial () {
   var radialForm = document.getElementById('sliders');
   var horizSlider = document.createElement('input');
   var vertiSlider = document.createElement('input');
   var startBtn = document.createElement('button');

   if(radialForm.childElementCount === 0) {
      radialForm.appendChild(horizSlider);
      radialForm.appendChild(vertiSlider);
      radialForm.appendChild(startBtn);
   }

   horizSlider.setAttribute('type', 'range');
   horizSlider.setAttribute('value', canv.width/2);
   horizSlider.setAttribute('min', canv.width/8);
   horizSlider.setAttribute('max', canv.width*7/8);

   vertiSlider.setAttribute('type', 'range');
   vertiSlider.setAttribute('value', canv.height/2);
   vertiSlider.setAttribute('min', canv.height/8);
   vertiSlider.setAttribute('max', canv.height*7/8);

   startBtn.innerHTML = "Start!";

   radialForm.style.display = "";

   var clickStart = function() {
      var i = 1;
      function myLoop () {
         setTimeout(function() {
            vertiSlider.value = Math.sin(i * Math.PI / 360) * canv.height * 2;
            horizSlider.value = Math.sin((i+180) * Math.PI / 360) * canv.width * 2;
            i++;
            // onInput is not triggered when value is changed programmatically
            onInput();
            if(i < 360 * 6) { 
               myLoop(); 
            }
         }, 3);
      }
      myLoop();
   }


   var onInput = function() {
      canv.height = canv.height;
      var grad = ctx.createRadialGradient(horizSlider.value, vertiSlider.value, 0, canv.width/2, canv.height/2, canv.width/2);
      grad.addColorStop(0.000, '#ffff00');
      grad.addColorStop(0.200, '#ffff00');
      grad.addColorStop(0.210, '#ff0000');
      grad.addColorStop(0.400, '#ff0000');
      grad.addColorStop(0.410, '#82C2EE');
      grad.addColorStop(0.600, '#82C2EE');
      grad.addColorStop(0.610, '#ffffff');
      grad.addColorStop(0.780, '#ffffff');
      grad.addColorStop(0.790, '#000000');
      grad.addColorStop(0.990, '#000000');
      grad.addColorStop(1.000, '#ffffff');
      ctx.fillStyle = grad;
      ctx.fillRect(0, 0, canv.width, canv.height);
   }

   onInput();
   horizSlider.addEventListener('input', onInput);
   vertiSlider.addEventListener('input', onInput);
   startBtn.addEventListener('click', clickStart);
}

function drawCat() {
   removeSliders();
   canv.height = canv.height;
   var cat = new Image();
   cat.src = "files/cat.png";
   cat.onload = function() {
      ctx.drawImage(cat, canv.width/2, canv.height/2);
   }
}

function drawManyCats() {
   removeSliders();
   canv.height = canv.height;
   var cat = new Image();
   cat.src = "files/cat.png";
   cat.onload = function() {
      for(var x = 0, y = 0; x < canv.width && y < canv.height; x += 50, y += 37) {
         ctx.drawImage(cat, x, y, 88, 56);
      }
   }
}

document.getElementById('paper_btn').addEventListener('click', drawPaper);

document.getElementById('gradient_btn').addEventListener('click', drawGradient);

document.getElementById('radial_btn').addEventListener('click', drawRadial);

document.getElementById('cat_btn').addEventListener('click', drawCat);

document.getElementById('manycat_btn').addEventListener('click', drawManyCats);