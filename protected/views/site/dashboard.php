<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
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
						$chrome=($i/($i+$z+$k+$l+$p))*100;
						$firefox=($z/($i+$z+$k+$l+$p))*100;
						$ie=($k/($i+$z+$k+$l+$p))*100;
						$safari=($l/($i+$z+$k+$l+$p))*100;
						$edge=($p/($i+$z+$k+$l+$p))*100;
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
								text: "% Pengunjung Aplikasi"
							},
							subtitles: [{
								text: "Per <?php echo date('j F Y');?>"
							}],
							data: [{
								type: "pie",
								yValueFormatString: "#,##0.00\"%\"",
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
        <!--end: Inspiro Slider -->