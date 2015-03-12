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
		<a href="../pages/TestResult.php">
	<div class="panel panel-default">
	<div class="panel-body">
			<div class="col-xs-12 col-md-10">
			<h3 > Class C002 - Test : Dynamic math - Test ID: Te002</h3>
			<h4>Deadline: 15/03/2015</h4>
		</div>
		<div class="col-xs-6 col-md-2">
		<!-- So luong hoc sinh hoan thanh bai test -->
		<p>
			<br>

		</p>

			<div class="progress">
  	<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    60%
  </div>
</div>
		</div>
		</div>
	</div> <!-- End panel -->
		
	</a>
<!-- Test Jput -->
<div jput="tbody_template">
 <tr>
  <td>{{name}}</td>
  <td>{{score}}</td>
 </tr>
</div>

<table>
 <tbody id="tbody">
 </tbody>
</table>
		<!-- End Test Jput -->

</div> <!-- end col-lg-12 -->
		


</div>




<?php include 'footer.php';?>  