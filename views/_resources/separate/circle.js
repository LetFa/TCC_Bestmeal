$(document).ready(function() {
    
    //progress bar
    let containerA = document.getElementById("circleA");

    let circleA = new ProgressBar.Circle(containerA, {
     
     color: '#ffc400',
     strokeWidth: 8,
     duration: 1400,
     from: {color: '#AAA'},
     to: {color: '#ffc400'},

     step: function(state, circle){
        circle.path.setAttribute('stroke', state.color);

        let value = Math.round(circle.value() * 460);
        
        circle.setText(value);

     }

    });

    let containerB = document.getElementById("circleB");

    let circleB = new ProgressBar.Circle(containerB, {
     
     color: '#ffc400',
     strokeWidth: 8,
     duration: 1600,
     from: {color: '#AAA'},
     to: {color: '#ffc400'},

     step: function(state, circle){
        circle.path.setAttribute('stroke', state.color);

        let value = Math.round(circle.value() * 2000);
        
        circle.setText(value);

     }

    });

    let containerC = document.getElementById("circleC");

    let circleC = new ProgressBar.Circle(containerC, {
     
     color: '#ffc400',
     strokeWidth: 8,
     duration: 2000,
     from: {color: '#AAA'},
     to: {color: '#ffc400'},

     step: function(state, circle){
        circle.path.setAttribute('stroke', state.color);

        let value = Math.round(circle.value() * 4);
        
        circle.setText(value);

     }

    });
   
   let containerD = document.getElementById("circleD");

   let circleD = new ProgressBar.Circle(containerD, {
    
    color: '#ffc400',
    strokeWidth: 8,
    duration: 2200,
    from: {color: '#AAA'},
    to: {color: '#ffc400'},

    step: function(state, circle){
       circle.path.setAttribute('stroke', state.color);

       let value = Math.round(circle.value() * 5243);
       
       circle.setText(value);

    }

   });

   //iniciando animação quando o usuário chega no elemento
   let dataAreaOffset = $('#data-area').offset();
   let stop = 0;

   $(window).scroll(function(e) {
     
    let scroll = $(window).scrollTop();
    
    if(scroll > (dataAreaOffset.top - 500) && stop == 0) {
        
        circleA.animate(1.0);
        circleB.animate(1.0);
        circleC.animate(1.0);
        circleD.animate(1.0);
        
        stop = 1;

    }

   }); 

});
