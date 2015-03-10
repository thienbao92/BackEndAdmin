
<?php include 'header.php';?>
<?php include 'navigation.php';?>

<!-- scripts -->
<script type="text/javascript" src="../js/Chart.js"></script>
<script type="text/javascript" src="../js/CustomPieChart.js"></script>
<!-- End scripts -->

<!-- Content start from here -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Test Analysis
                        </h1>
                    </div><!-- /.col-lg-12 -->
                     <div class="col-xs-6 col-md-6">
                        <h3 > <small>Class :</small>  C001 </h3>
                        <h3>Test Te001 <small>Result:</small>   </h3>
                        
                        <h3>Average Score: <strong>5.3</strong></h3>
                        <h3>Average Time Finish: <strong>00:10:00</strong></h3>                 
                     </div>
                   <!--  End Left Column -->

                   <div class="col-xs-6 col-md-6">

                   <h3>Pie chart analysis</h3>
                   <canvas id="chart-area" width="300" height="300"/>
                   </div>
                </div>
                <!-- /.row -->



<!-- Contents ends here -->

<?php include 'footer.php';?>  