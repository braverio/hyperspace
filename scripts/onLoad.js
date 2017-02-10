$(document).ready(function () {
    function onLoad(){
    $("div.hidden")
        .css('opacity', 0)
        .slideDown(1000)
        .animate(
            { opacity: 1 },
            { queue: false, duration: 1500 }
  );}
    setTimeout(onLoad, 100);
});