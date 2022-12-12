<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    PsyTest
  </div>
  <strong>Pusat Kaunseling UPSI &copy; <a href="http://kaunseling.upsi.edu.my/">PsyTest</a>.</strong> All rights reserved.
</footer>
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/custom/js/dm.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    var table = $('#iofi').DataTable({"dom":'ftip'});
  } );
  $(document).ready( function () {
    var table = $('#roboco').DataTable({"dom":'ftip'});
  } );
  $(document).ready( function () {
    var table = $('#miko').DataTable({"dom":'ftip'});
  } );
  $(document).ready( function () {
    var table = $('#ouji').DataTable({"dom":'ftip'});
  } );
  $(document).ready( function () {
    var table = $('#gad71,#gad72,#gad73,#gad74,#phq91,#phq92,#phq93,#phq94,#phq95,#who1,#who2,#dass,#bdi1,#bdi2,#bdi3,#bdi4,#bai1,#bai2,#bai3,#mbti').DataTable({"dom":'ftip'});
  } );
  $(document).ready( function () {
    var table = $('#o1,#o2,#o3,#o4').DataTable({"dom":'ftip'});
  } );



</script>
<?php if($this->session->userdata('omega') == 'alpha'){
  echo "<script>
      Swal.fire({
        toast: true,
        icon: 'success', 
        title : 'Successful send test',
        position: 'top-end',
          showConfirmButton: false,
          timer: 3000
      })
    </script>";
  $this->session->unset_userdata('omega');
} ?>
<script>
  $(function(){

    var gadChart = $('#pieGAD').get(0).getContext('2d')
    var gadData = {
      labels: ['Student','Staff','Orientation'],
      datasets: [
        {
          data: [
            <?php echo $this->admin_model->gad_student() ;?>,
            <?php echo $this->admin_model->gad_staff() ;?>,
            <?php echo $this->admin_model->gad_orientation() ;?>,
          ],
          backgroundColor : ['#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    };

    var pieOptions = {
      maintainAspectRatio : false,
      responsive : true,
      plugins:{
        datalabels:{
          color:'#fff',
          anchor:'end',
          align:'start',
          offset: -10,
          borderWidth: 2,
          borderColor: '#fff',
          borderRadius: 25,
          backgroundColor: (context) => {
            return context.dataset.backgroundColor;
          },
          font:{
            weight:'bold',
            size:'12'
          },
          formatter:(value)=>{
            return ' '+value+' ';
          }
        }
      }
    }

    new Chart(gadChart, {
      type: 'pie',
      data: gadData,
      options: pieOptions,
      plugins: [ChartDataLabels], 
    })

    var gadBar = $('#barGAD').get(0).getContext('2d')
    var gadBarData = {
      labels  : ['None', 'Mild', 'Moderate', 'Severe'],
      datasets: [
        {
          label               : 'Score',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
            <?php echo $this->admin_model->gad_none() ;?>,
            <?php echo $this->admin_model->gad_mild() ;?>,
            <?php echo $this->admin_model->gad_moderate() ;?>,
            <?php echo $this->admin_model->gad_severe() ;?>,
          ]
        },
      ]
    }

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales: {
          yAxes: [{
              ticks: {
                  beginAtZero: true
              }
          }]
      },
      plugins:{
        datalabels:{
          color:'#fff',
          anchor:'end',
          align:'start',
          offset: -10,
          borderWidth: 2,
          borderColor: '#fff',
          borderRadius: 25,
          backgroundColor: (context) => {
            return context.dataset.backgroundColor;
          },
          font:{
            weight:'bold',
            size:'12'
          },
          formatter:(value)=>{
            return ' '+value+' ';
          }
        }
      }
    }

    new Chart(gadBar, {
      type: 'bar',
      data: gadBarData,
      options: barChartOptions,
      plugins: [ChartDataLabels],      
    })
  })
</script>
<script>
$(function(){

    var phqChart = $('#piePHQ').get(0).getContext('2d')
    var phqData = {
      labels: ['Student','Staff','Orientation'],
      datasets: [
        {
          data: [
            <?php echo $this->admin_model->phq_student() ;?>,
            <?php echo $this->admin_model->phq_staff() ;?>,
            <?php echo $this->admin_model->phq_orientation() ;?>,
          ],
          backgroundColor : ['#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    };

    var pieOptions = {
      maintainAspectRatio : false,
      responsive : true,
      plugins:{
        datalabels:{
          color:'#fff',
          anchor:'end',
          align:'start',
          offset: -10,
          borderWidth: 2,
          borderColor: '#fff',
          borderRadius: 25,
          backgroundColor: (context) => {
            return context.dataset.backgroundColor;
          },
          font:{
            weight:'bold',
            size:'12'
          },
          formatter:(value)=>{
            return ' '+value+' ';
          }
        }
      }
    }

    new Chart(phqChart, {
      type: 'pie',
      data: phqData,
      options: pieOptions,
      plugins: [ChartDataLabels], 
    })

    var phqBar = $('#barPHQ').get(0).getContext('2d')
    var phqBarData = {
      labels  : ['None', 'Mild', 'Moderate','Moderate Severe', 'Severe'],
      datasets: [
        {
          label               : 'Score',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
            <?php echo $this->admin_model->phq_none() ;?>,
            <?php echo $this->admin_model->phq_mild() ;?>,
            <?php echo $this->admin_model->phq_moderate() ;?>,
            <?php echo $this->admin_model->phq_modsevere() ;?>,
            <?php echo $this->admin_model->phq_severe() ;?>,
          ]
        },
      ]
    }

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales: {
          yAxes: [{
              ticks: {
                  beginAtZero: true
              }
          }]
      },
      plugins:{
        datalabels:{
          color:'#fff',
          anchor:'end',
          align:'start',
          offset: -10,
          borderWidth: 2,
          borderColor: '#fff',
          borderRadius: 25,
          backgroundColor: (context) => {
            return context.dataset.backgroundColor;
          },
          font:{
            weight:'bold',
            size:'12'
          },
          formatter:(value)=>{
            return ' '+value+' ';
          }
        }
      }
    }

    new Chart(phqBar, {
      type: 'bar',
      data: phqBarData,
      options: barChartOptions,
      plugins: [ChartDataLabels], 
    })
  })
</script>
<script>
  $(function(){

    var whoChart = $('#pieWHO').get(0).getContext('2d')
    var whoData = {
      labels: ['Student','Staff','Orientation'],
      datasets: [
        {
          data: [
            <?php echo $this->admin_model->whooley_student() ;?>,
            <?php echo $this->admin_model->whooley_staff() ;?>,
            <?php echo $this->admin_model->whooley_orientation() ;?>
            ],
          backgroundColor : ['#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    };

    var pieOptions = {
      maintainAspectRatio : false,
      responsive : true,
      plugins:{
        datalabels:{
          color:'#fff',
          anchor:'end',
          align:'start',
          offset: -10,
          borderWidth: 2,
          borderColor: '#fff',
          borderRadius: 25,
          backgroundColor: (context) => {
            return context.dataset.backgroundColor;
          },
          font:{
            weight:'bold',
            size:'12'
          },
          formatter:(value)=>{
            return ' '+value+' ';
          }
        }
      }
    }

    new Chart(whoChart, {
      type: 'pie',
      data: whoData,
      options: pieOptions,
      plugins: [ChartDataLabels], 
    })

    var whoBar = $('#barWHO').get(0).getContext('2d')
    var whoBarData = {
      labels  : ['Positive', 'Negative'],
      datasets: [
        {
          label               : 'Score',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
            <?php echo $this->admin_model->whooley_positive() ;?>,
            <?php echo $this->admin_model->whooley_negative() ;?>,]
        },
      ]
    }

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales: {
          yAxes: [{
              ticks: {
                  beginAtZero: true
              }
          }]
      },
      plugins:{
        datalabels:{
          color:'#fff',
          anchor:'end',
          align:'start',
          offset: -10,
          borderWidth: 2,
          borderColor: '#fff',
          borderRadius: 25,
          backgroundColor: (context) => {
            return context.dataset.backgroundColor;
          },
          font:{
            weight:'bold',
            size:'12'
          },
          formatter:(value)=>{
            return ' '+value+' ';
          }
        }
      }
    }

    new Chart(whoBar, {
      type: 'bar',
      data: whoBarData,
      options: barChartOptions,
      plugins: [ChartDataLabels], 
    })
  })
</script>
<script>
  $(function(){

    var bdiChart = $('#pieBDI').get(0).getContext('2d')
    var bdiData = {
      labels: ['Student','Staff'],
      datasets: [
        {
          data: [<?php echo $this->admin_model->bdi_student();?>,<?php echo $this->admin_model->bdi_staff();?>],
          backgroundColor : ['#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    };

    var pieOptions = {
      maintainAspectRatio : false,
      responsive : true,
      plugins:{
        datalabels:{
          color:'#fff',
          anchor:'end',
          align:'start',
          offset: -10,
          borderWidth: 2,
          borderColor: '#fff',
          borderRadius: 25,
          backgroundColor: (context) => {
            return context.dataset.backgroundColor;
          },
          font:{
            weight:'bold',
            size:'12'
          },
          formatter:(value)=>{
            return ' '+value+' ';
          }
        }
      }
    }

    new Chart(bdiChart, {
      type: 'pie',
      data: bdiData,
      options: pieOptions,
      plugins: [ChartDataLabels], 
    })

    var bdiBar = $('#barBDI').get(0).getContext('2d')
    var bdiBarData = {
      labels  : ['Minimal', 'Mild', 'Moderate', 'Severe'],
      datasets: [
        {
          label               : 'Score',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
            <?php echo $this->admin_model->bdi_minimal();?>,
            <?php echo $this->admin_model->bdi_mild();?>,
            <?php echo $this->admin_model->bdi_moderate();?>,
            <?php echo $this->admin_model->bdi_severe();?>
          ]
        },
      ]
    }

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales: {
          yAxes: [{
              ticks: {
                  beginAtZero: true
              }
          }]
      },
      plugins:{
        datalabels:{
          color:'#fff',
          anchor:'end',
          align:'start',
          offset: -10,
          borderWidth: 2,
          borderColor: '#fff',
          borderRadius: 25,
          backgroundColor: (context) => {
            return context.dataset.backgroundColor;
          },
          font:{
            weight:'bold',
            size:'12'
          },
          formatter:(value)=>{
            return ' '+value+' ';
          }
        }
      }
    }

    new Chart(bdiBar, {
      type: 'bar',
      data: bdiBarData,
      options: barChartOptions,
      plugins: [ChartDataLabels], 
    })
  })
</script>
<script>
  $(function(){

    var baiChart = $('#pieBAI').get(0).getContext('2d')
    var baiData = {
      labels: ['Student','Staff'],
      datasets: [
        {
          data: [<?php echo $this->admin_model->bai_student();?>,<?php echo $this->admin_model->bai_staff();?>],
          backgroundColor : ['#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    };

    var pieOptions = {
      maintainAspectRatio : false,
      responsive : true,
      plugins:{
        datalabels:{
          color:'#fff',
          anchor:'end',
          align:'start',
          offset: -10,
          borderWidth: 2,
          borderColor: '#fff',
          borderRadius: 25,
          backgroundColor: (context) => {
            return context.dataset.backgroundColor;
          },
          font:{
            weight:'bold',
            size:'12'
          },
          formatter:(value)=>{
            return ' '+value+' ';
          }
        }
      }
    }

    new Chart(baiChart, {
      type: 'pie',
      data: baiData,
      options: pieOptions,
      plugins: [ChartDataLabels], 
    })

    var baiBar = $('#barBAI').get(0).getContext('2d')
    var baiBarData = {
      labels  : ['Low', 'Moderate', 'Severe'],
      datasets: [
        {
          label               : 'Score',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
            <?php echo $this->admin_model->bai_low();?>,
            <?php echo $this->admin_model->bai_moderate();?>,
            <?php echo $this->admin_model->bai_severe();?>
          ]
        },
      ]
    }

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales: {
          yAxes: [{
              ticks: {
                  beginAtZero: true
              }
          }]
      },
      plugins:{
        datalabels:{
          color:'#fff',
          anchor:'end',
          align:'start',
          offset: -10,
          borderWidth: 2,
          borderColor: '#fff',
          borderRadius: 25,
          backgroundColor: (context) => {
            return context.dataset.backgroundColor;
          },
          font:{
            weight:'bold',
            size:'12'
          },
          formatter:(value)=>{
            return ' '+value+' ';
          }
        }
      }
    }

    new Chart(baiBar, {
      type: 'bar',
      data: baiBarData,
      options: barChartOptions,
      plugins: [ChartDataLabels], 
    })
  })
</script>
<script>
  $(function(){

    var dassChart = $('#pieDASS').get(0).getContext('2d')
    var dassData = {
      labels: ['Student','Staff','Orientation'],
      datasets: [
        {
          data: [<?php echo $this->admin_model->dass_student();?>,<?php echo $this->admin_model->dass_staff();?>,<?php echo $this->admin_model->dass_orientation();?>],
          backgroundColor : ['#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    };

    var pieOptions = {
      maintainAspectRatio : false,
      responsive : true,
      plugins:{
        datalabels:{
          color:'#fff',
          anchor:'end',
          align:'start',
          offset: -10,
          borderWidth: 2,
          borderColor: '#fff',
          borderRadius: 25,
          backgroundColor: (context) => {
            return context.dataset.backgroundColor;
          },
          font:{
            weight:'bold',
            size:'12'
          },
          formatter:(value)=>{
            return ' '+value+' ';
          }
        }
      }
    }

    new Chart(dassChart, {
      type: 'pie',
      data: dassData,
      options: pieOptions,
      plugins: [ChartDataLabels], 
    })

    var dassBar = $('#barDASS').get(0).getContext('2d')
    var dassBarData = {
      labels  : ['Stress', 'Anxiety', 'Depression'],
      datasets: [{
          label: "NORMAL",
          backgroundColor     : 'rgba(66, 245, 117,0.9)',
          borderColor         : 'rgba(66, 245, 117,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(66, 245, 117)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(66, 245, 117)',
          data: [
            <?php echo $this->admin_model->dass_normal1();?>, 
            <?php echo $this->admin_model->dass_normal2();?>, 
            <?php echo $this->admin_model->dass_normal3();?>
          ]
        }, {
          label: "MILD",
          backgroundColor     : 'rgba(173, 245, 66,0.9)',
          borderColor         : 'rgba(173, 245, 66,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(173, 245, 66,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(173, 245, 66,1)',
          data: [
            <?php echo $this->admin_model->dass_mild1();?>, 
            <?php echo $this->admin_model->dass_mild2();?>, 
            <?php echo $this->admin_model->dass_mild3();?>
          ]
        }, {
          label: "MDOERATE",
          backgroundColor     : 'rgba(236, 245, 66,0.9)',
          borderColor         : 'rgba(236, 245, 66,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(236, 245, 66,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(236, 245, 66,1)',
          data: [
            <?php echo $this->admin_model->dass_moderate1();?>, 
            <?php echo $this->admin_model->dass_moderate2();?>, 
            <?php echo $this->admin_model->dass_moderate3();?>
          ]
        }, {
          label: "Severe",
          backgroundColor     : 'rgba(245, 191, 66,0.9)',
          borderColor         : 'rgba(245, 191, 66,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(245, 191, 66,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(245, 191, 66,1)',
          data: [
            <?php echo $this->admin_model->dass_severe1();?>, 
            <?php echo $this->admin_model->dass_severe2();?>, 
            <?php echo $this->admin_model->dass_severe3();?>
          ]
        }
        , {
          label: "EXTREMELY SEVERE",
          backgroundColor     : 'rgba(245, 69, 66,0.9)',
          borderColor         : 'rgba(245, 69, 66,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(245, 69, 66,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(245, 69, 66,1)',
          data: [
            <?php echo $this->admin_model->dass_exsevere1();?>, 
            <?php echo $this->admin_model->dass_exsevere2();?>, 
            <?php echo $this->admin_model->dass_exsevere3();?>
          ]
        }]
    }

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false,
      scales: {
          yAxes: [{
              ticks: {
                  beginAtZero: true
              }
          }]
      },
      plugins:{
        datalabels:{
          color:'#fff',
          anchor:'end',
          align:'start',
          offset: -10,
          borderWidth: 2,
          borderColor: '#fff',
          borderRadius: 25,
          backgroundColor: (context) => {
            return context.dataset.backgroundColor;
          },
          font:{
            weight:'bold',
            size:'12'
          },
          formatter:(value)=>{
            return ' '+value+' ';
          }
        }
      }
    }

    new Chart(dassBar, {
      type: 'bar',
      data: dassBarData,
      options: barChartOptions,
      plugins: [ChartDataLabels], 
    })
  })
</script>