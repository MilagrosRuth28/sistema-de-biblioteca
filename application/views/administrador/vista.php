<script src="<?php echo base_url(); ?>code/highcharts.js"></script>
<script src="<?php echo base_url(); ?>code/modules/exporting.js"></script>
<script src="<?php echo base_url(); ?>code/modules/export-data.js"></script>
<div class="container">
        <div class="row">
            <div class="col-lg-12 mt40">
               <div class="pull-left">
                    <h2>Vista General</h2>
            </div>
        </div>
    </div>
    <hr>
    <br>
</div>
  
  <div class="row" style="margin: auto; height: 100% width: 100% background-color: lightgray;"> 
<div class="col-lg-5">
    <label>Total libros prestados</label>
    <h1 align="center"><strong>145</strong></h1>
  </div>

  <div class="col-lg-5" > 
    <label>Total libros fuera de plazo</label>
    <h1 align="center"><strong>5</strong></h1>                       
  </div>

</div>   
     
<div  style="background-color:lightgray; width:500px;height:400px; margin: 0 auto ">
    
<div id="container" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>



        <script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Libros mas prestados'
    },
    
    xAxis: {
        categories: ['Ingenieria', 'Sociales', 'Biomedicas'],
        title: {
            text: null
        }
    },
    
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 60,
        floating: true,
        borderWidth: 5,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Ingenieria',
        data: [307]
    }, {
        name: 'Sociales',
        data: [0, 576]
    }, {
        name: 'Biomedicas',
        data: [0, 0, 208]
    }]
});
        </script>

</div>

        
</body>
</html>