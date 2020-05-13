<script src="jquery.js"></script>
<script>
	function f(id){
		let str = "id="+id;
		/*
		fetch("server.php",
			{method:'POST',
			headers:{
				'Accept':'application/json',
				'Content-Type':'application/json'
			},
			body:"id="+id
			}
		)
		then(function(answer){
			answer.JSON().then(function(data)){
				console.log('data',data)
			}
			
		})
		*/
		$.ajax({
			type:"POST",
			url:"server.php",
			data:str,
			success:function(answer){
				//let data = JSON.parse(answer);
				$("#x").empty();
				//for(let i of data){
					$("#x").append(answer);
				//}
			}
		});
	}
</script>
<?
include "config.php";

$res = mysqli_query($connect,"select * from marki");

$select = "<select onchange=f(value) id=\"marki\">";
while($data = mysqli_fetch_assoc($res)){
	$select.="<option value='".$data['id']."'>".$data['marka']."</option>";
}

$select.="</select><select id='x'></select>";
echo $select;