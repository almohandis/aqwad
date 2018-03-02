<!DOCTYPE html>
<html lang="en">

<?php
if($header) echo $header;
?>

<body>
	
<?php
if($nav) echo $nav;

if($sidebar) echo $sidebar;

?>

        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				
			<?php		
              if($page) echo $page;
            ?>

			</div>
			
			
		<!-- Footer -->
		<footer class="footer container-fluid pl-30 pr-30">
			<div class="row">
				<div class="col-sm-12">
					<p>2018 &copy; HUSSEIN ABUSETTA</p>
				</div>
			</div>
		</footer>
		<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

<?php		
if($footer) echo $footer;
?>

</body>

</html>
