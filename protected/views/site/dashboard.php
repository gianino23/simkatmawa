<head>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/themes/materialpro/material-pro/src/calendar/lib/main.css" rel="stylesheet" />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/themes/materialpro/material-pro/src/calendar/lib/main.js"></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prevYear,prev,next,nextYear today',
        center: 'title',
        right: 'dayGridMonth,dayGridWeek,dayGridDay'
      },
      initialDate: '<?php echo date("Y-m-d")?>',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
	  <?php
	  $prokers = Proker::model()->findAll();
	  foreach($prokers as $proker){
	  ?>
        {
          title: '<?php echo $proker->agenda;?>',
		  description: 'lalala',
          start: '<?php echo $proker->waktu;?>'
        },
       <?php
	  }
	  ?>
      ]
    });
    calendar.render();
  });

</script>
</head>
<div class="container-fluid">
<div class="body">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                
                <!-- Calendar -->
                <div class="row mb-5">
                        <?php
						$c=Visitor::model()->findAllByAttributes(array('browser'=>'Chrome/Opera'));
						$i=0;
						foreach($c as $e){
							$i++;
						}
						$f=Visitor::model()->findAllByAttributes(array('browser'=>'Firefox'));
						$z=0;
						foreach($f as $d){
							$z++;
						}
						$m=Visitor::model()->findAllByAttributes(array('browser'=>'IE'));
						$k=0;
						foreach($m as $q){
							$k++;
						}
						$n=Visitor::model()->findAllByAttributes(array('browser'=>'Safari'));
						$l=0;
						foreach($n as $x){
							$l++;
						}
						$o=Visitor::model()->findAllByAttributes(array('browser'=>'edge'));
						$p=0;
						foreach($o as $x){
							$p++;
						}
						$chrome=$i;
						$firefox=$z;
						$ie=$k;
						$safari=$l;
						$edge=$p;
						$dataPoints = array( 
							array("label"=>"Chrome", "y"=>$chrome),
							array("label"=>"Firefox", "y"=>$firefox),
							array("label"=>"IE", "y"=>$ie),
							array("label"=>"Safari", "y"=>$safari),
							array("label"=>"Edge", "y"=>$edge),
						)
						 
						?>
						<script>
						window.onload = function() {
						 
						 
						var chart = new CanvasJS.Chart("chartContainer", {
							animationEnabled: true,
							title: {
								text: "Jumlah Pengunjung SIMAHAL"
							},
							subtitles: [{
								text: "Per <?php echo date('j F Y');?>"
							}],
							data: [{
								type: "pie",
								//yValueFormatString: "#,##0.00\"%\"",
								yValueFormatString: "#,##0 \"Pengunjung\"",
								indexLabel: "{label} ({y})",
								dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
							}]
						});
						chart.render();
						 
						}
						</script>
						<div id="chartContainer" style="height: 370px; width: 100%;"></div>
						<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                            </div>
                        </div>
                    </div>
                </div>
<!--
		<div class="col-lg-12">
                        <div class="card-body b-l calender-sidebar">
                            <div id="calendar" ></div>
                        </div>
                 </div>
-->
		<div class="col-6">
		<div class="card">
		<div class="card-body">
<iframe src="https://instagram.com/p/CWA40jcPqkt/embed" width="400" height="400" frameborder="0" valign="middle" allowtransparency="true"></iframe>
		</div>
		</div>
		</div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            </div>
            </div>
        <!--end: Inspiro Slider -->

	
