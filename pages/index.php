<?php include 'header.php';?>
<?php include 'navigation.php';?>

<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Test Table 
                        </h1>
                    </div><!-- /.col-lg-12 -->

                    <!-- End header -->
<div class="col-lg-12">

<!-- Test Jput -->


<div id="TestList">	
	<div jput="Test List">
 
		<a href="TestResult.php">
	<div class="panel panel-default">
	<div class="panel-body">
			<div class="col-xs-12 col-md-10">
			<h3 > Class : {{ClassID}} - Test : {{Test name}} - Test ID: {{TestID}}</h3>
			<h4>Deadline: {{Deadline}}</h4>
		</div>
		<div class="col-xs-6 col-md-2">
		<!-- So luong hoc sinh hoan thanh bai test -->
		<p>
			<br>

		</p>

			<div class="progress">
  	<div class="progress-bar" role="progressbar" aria-valuenow="{{Number finished}}" aria-valuemin="0" aria-valuemax="100" style="width: {{Number finished}}%;">
    {{Number finished}}
  </div>
</div>
		</div>
		</div>
	</div> <!-- End panel -->
		
	</a>
</div><!-- End TestList Jput -->
</div><!-- End TestList ID -->
		

</div> <!-- end col-lg-12 -->
		


</div>




<?php include 'footer.php';?>  