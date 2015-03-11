
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
                        <h3>Total number of play: <strong>3</strong></h3>

                        <button type="button" class="btn btn-primary">Game 1</button>
                        <button type="button" class="btn btn-primary"> Game 2</button>
                        <button type="button" class="btn btn-primary">Game 3</button>
                     </div>


                   <!--  End Left Column -->

                   <div class="col-xs-6 col-md-6">
                   <h3 >Process Status</h3>
                      <div id="StudentProcessChart"></div>
                   </div> <!-- Button blocks -->
                </div> <!-- End row -->

  <div class="row">
    <div class="panel panel-default">

  <div class="panel-heading">
    <h3 class="panel-title"><strong>Result over times of play</strong></h3>
  </div>
  <div class="panel-body">
     <div id="StudentStackedChart"></div>
  </div>
</div>

  </div>

  <!-- Contents ends here -->

  <?php include 'footer.php';?>  