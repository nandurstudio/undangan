  
           $(document).ready(function() {

            var counters = $(".count");
            var countersQuantity = counters.length;
            var counter = [];
            
            for (i = 0; i < countersQuantity; i++) {
              counter[i] = parseInt(counters[i].innerHTML);
            }
            
            var count = function(start, value, id) {
              var localStart = start;
              setInterval(function() {
                if (localStart < value) {
                  localStart++;
                  counters[id].innerHTML = localStart;
                }
              }, 40);
            }
            
            for (j = 0; j < countersQuantity; j++) {
              count(0, counter[j], j);
            }
            });


            
  $('.count').each(function () {
         $(this).prop('Counter',0).animate({
         Counter: $(this).text()
         }, {
         duration: 3300,
         easing: 'swing',
         step: function (now) {
             $(this).text(Math.ceil(now));
    }
  });
});
 /*******/
var move_img = document.getElementById("banner-right-img");
move_img.addEventListener("mousemove", (e) =>{
  let x = e.layerX
  let y = e.layerY
  move_img.style.transform = `translate(-${x /6}px`;
})
/********/
// UPDATE: I was able to get this working again... Enjoy!
var cursor = document.querySelector('.cursor');
var cursorinner = document.querySelector('.cursor2');
var cur=document.getElementById('banner-right-con');
var section_element=document.querySelectorAll('.service-box-item');
section_element.forEach(item=>{
item.addEventListener('mousemove',function(e){
  var a = e.clientX;
  var b = e.clientY;
  cursor.style.visibility="visible";
  cursorinner.style.visibility="visible";
  cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
  cursorinner.style.left = a + 'px';
  cursorinner.style.top = b + 'px';
  let x = e.layerX
  
  let y = e.layerY
  //item.style.transform = `rotate(-${x /90}deg`;
});

item.addEventListener('mouseover',function(e){
  let x = e.layerX
  item.style.transform = `rotate(-1deg)`;
  console.log("rotate" + x);

});
item.addEventListener('mouseout',function(e){

  //console.log("Mouse out");

  cursor.style.visibility="hidden";

  cursorinner.style.visibility="hidden";

  let x = e.layerX

  let y = e.layerY

  item.style.transform = 'rotate(0deg)';

});

})
console.log(section_element.length);

cur.addEventListener('mousemove', function(e){
  var x = e.clientX;
  var y = e.clientY;
  cursor.style.visibility="visible";
  cursorinner.style.visibility="visible";
  cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
  cursorinner.style.left = x + 'px';
  cursorinner.style.top = y + 'px';
});
cur.addEventListener('mouseover', function(e){
  cursor.classList.add('cursor');
  cursorinner.classList.add('cursor2');
});

cur.addEventListener('mouseout', function(){
  cursor.style.visibility="hidden";
  cursorinner.style.visibility="hidden";
});



