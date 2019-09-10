
<!doctype html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
        <head>
    <!-- Plotly.js -->
    <script src="https://cdn.plot.ly/plotly-latest.min.js"> </script>

    </head>
    <body>
    
    <div id="myDiv"></div>
    
        <script>
          
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
            ejeY.push( Math.sin(ejeX[index])/ejeX[index] );
            
        }
            

            var trace1 = {
            x: ejeX,
            y: ejeY,
            type: 'line',
            };

        
            var data = [trace1];

            Plotly.newPlot('myDiv', data, {}, {showSendToCloud: true});

        </script>
    </body>
    </html>
