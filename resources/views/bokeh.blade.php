
    <a href="/notas" class="btn btn-primary btn-sm">Regresar a Notas</a>
  

<head>
        <!-- Plotly.js -->
        <script src="https://cdn.plot.ly/plotly-latest.min.js"> </script>
    
        </head>
    
<body style="background:black;">
    <div id="container" style="background:black;" ></div>
    
        <script >
          
        // function makeArr(startValue, stopValue, cardinality) {
        //     var arr = [];
        //     var step = (stopValue - startValue) / (cardinality - 1);
        //     for (var i = 0; i < cardinality; i++) {
        //         arr.push(startValue + (step * i));
        //     }
        //     return arr;
        // } 
       var start = -30;
       var stop = 30;
       var incremento = 0.1;
       var ejeX = [];


        for (let index = start; index < stop; index= index+incremento) {
            ejeX.push(index);
        }
        var ejeY =[];
        for (let index = 0; index < ejeX.length; index++) {
            ejeY.push( Math.sin(ejeX[index])/ejeX[index]);
            //ejeY.push( Math.atan(ejeX[index])  );
        }
            

            var trace1 = {
            x: ejeX,
            y: ejeY,
            type: 'scatter',
            line:{
                color:'rgb(255,0,0)'
            }
            };

            layout ={
                plot_bgcolor: 'rgba(0, 0,0,0.4)',
                paper_bgcolor:'rgba(0,0,0,0)'
            };
        
            var data = [trace1];

            Plotly.newPlot('container', data,layout, {showSendToCloud: true});

        </script>
</body>