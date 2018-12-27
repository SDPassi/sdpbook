<!DOCTYPE html>
<html>
<head>
<title>test</title>
<style>
a:hover{
	cursor: pointer;
	background-color: aqua;
}
</style>

</head>
<body><input type="text" id="search" placeholder="Search Here" /> 
				<input type="button" id="btnSearch" value="Search"/>
								
			<div id="display"></div>
			<div id="test"></div>	

<script>
	$('document').ready(function(){
		$("#search").keyup(function(){
		var album = $('#search').val();
		if (album == ""){
			$("display").html("");
		}
		else{
			$.ajax({
				type: "post",
				url: "ajax_result.php",
				data: {
					proceed:1,
					search: album
				},
				success: function(respond){
					$("#display").html(respond).show();
					$('#test').hide();
				}
			});
		}
	});
	$("btnSearch").click(function(){
		var album = $('#search').val();
		$.ajax({
			type: "post",
			url: "ajax_result.php",
			data:{
				ok:1,
				search: album
				},
			success: function(respond){
				$("#test").html(respond).show();
			}
			});
		});
	});
function insert(data){
	$('#search').val(data);
	$('#display').hide();
}										
</script>	
</body>

</html>