<!DOCTYPE html>
<html>

<head>
	<title></title>
	<!-- CSS only -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="table-data">
<table class='table'>
<tr><th>Id</th><th>User</th><th>Pass</th></tr>
</table>
</div>
</div>
<script type="text/javascript">
//var id = 1;
	$(document).ready(function(){
 	function loaddata(page){
		$.ajax({
		url : "data.php",
		type:"POST",
		data : {page : page},
		success : function (data){
		 $("#loadmore").closest("tr").remove();
		 $(".table-data table").append(data);
		}
		})
 	}
loaddata()

$(document).on('click',"#loadmore",function(){
 var id = $(this).data("id");
 loaddata(id)
})

 })

</script>
</body>
</html>
