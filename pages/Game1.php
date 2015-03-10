
<?php include 'header.php';?>
<?php include 'navigation.php';?>




<!-- Content start from here -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Test Analysis - Class 3C01 - Test 001 - Game 001
                        </h1>
                    </div><!-- /.col-lg-12 -->
                     <div class="col-xs-6 col-md-6">

                        <h3>Average Score: <strong>5.3</strong></h3>
                        <h3>Average Time Finish: <strong>00:10:00</strong></h3>
                        <h3>Total number of play: <strong>500</strong></h3>
                     </div>
                   <!--  End Left Column -->

                   <div class="col-xs-6 col-md-6">

                   <h3>Pie chart analysis</h3>
                        <div id="PieChart"></div>

                   </div><!-- End right column -->
                </div> <!-- End row -->


                
<div class="row">
<!-- Column -->
<div class=".col-xs-12 .col-md-12">

<table class="table table-striped" data-toggle="table" data-url="../data.json" data-height="500" >
            <thead>
                <tr>
                    <th data-field="studentid" data-sortable="true">Student number</th>
                    <!-- <th data-field="test id">Test ID</th> -->
                    <th data-field="average score">average score</th>
                    <th data-field="average time">average time</th>
                   
                </tr>
            </thead>
        </table> <!-- End Table --> 
 </div> <!-- End class .col-xs-12 .col-md-12 -->
 <!-- End Column --> 
                

   

</div> <!-- End row -->


<!-- Contents ends here -->

<?php include 'footer.php';?>  