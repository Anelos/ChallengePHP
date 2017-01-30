<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; SimplonBSM 2017</p>
        </div>
    </div>
</footer>

<!-- /.container -->
<?php
$req=mysqli_query($cnx,"SELECT snow FROM graphicoptions WHERE id=(SELECT idGraph FROM user WHERE id='1')");
$snow = mysqli_fetch_assoc($req);
if($snow['snow']==1){
	echo "<div id='snowflakeContainer'>";
	echo "<p class='snowflake'>*</p>";
	echo "</div>";
	echo "<script src='/challengePHP/js/fallingsnow_v6.js'></script>";
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="/challengePHP/js/bootstrap.min.js"></script>
