
<?php include 'header.php';?>
<?php include 'navigation.php';?>




<!-- Content start from here -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Test : Dynamic math - Test ID: Te001                       </h1>
                    </div><!-- /.col-lg-12 -->
                     <div class="col-xs-6 col-md-6">

                        <h3>Average Score: <strong>5.3</strong></h3>
                        <h3>Average Time Finish: <strong>00:10:00</strong></h3>
                        <h3>Total number of play: <strong>500</strong></h3>
                     </div>
                   <!--  End Left Column -->

                   <div class="col-xs-6 col-md-6">
                      <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    60%
  </div>
</div>
                   </div> <!-- Button blocks -->
                </div> <!-- End row -->

<div class="row"><!-- Chart Area -->
<p></p>
  <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><strong>Bar chart analysis</strong></h3>
  </div>
  <div class="panel-body">
     <div id="MultiBarChart"></div>
  </div>
  <div class="panel-footer">
  <strong> Explaination:</strong>
  <p>
    Excellent: Score > 7 and Time < Average Time.<br>
    Good: Score > 6 and Time > Average Time.<br>
    Average: Score < 5 and Time < Average Time.<br>
    Bad: Score < 5 verage Scrore and Time > Average Time.<br>
  </p>

  </div>
</div>
<div class="panel panel-default">

  <div class="panel-heading">
    <h3 class="panel-title"><strong>Number of plays</strong></h3>
  </div>
  <div class="panel-body">
     <div id="TestResultLineChart"></div>
  </div>
</div>
</div><!-- End Chart Area -->
 


                
                  


<!-- Contents ends here -->

<?php include 'footer.php';?>  