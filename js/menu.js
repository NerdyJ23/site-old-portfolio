//must have jquery to run this
function evenwidth()
{
  var div = "#sites .site";
  var width = $(window).width() - 13 - 5*3; //due to the scrollbar appearing....
  var even = width / $(div).length;

  console.log("Width is " + width);
  console.log("Count of items is " + $(div).length);
  console.log("Even width is " + even);

  var el = $(div);
  var img = $(div + ' img');

  el.css({
    width: even,
  });

  img.css({
    width: even,
  });
}

$(document).ready(evenwidth);
$(window).resize(evenwidth);
