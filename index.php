<?php 
include 'models/db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<style>
		.newevent{
			padding: 20px;
			margin-left: 15vw;
			width: 70vw;
			max-width:600px;
			display: none;
		}
		textarea {
	    	resize: none;
		}
		.eventbutton{
			background: #e74c3c;
			color: white;
			margin-left: 30vw;
		}
		.modalcloser{
			position: absolute;
			top: 0px;
			left: 0px;
			z-index: -1;
			height: 1200px;
			width: 100%;
		}
		body{
			display: inline-block;
		}
	</style>

</head>
<body>

	<button onclick="document.getElementById('newevent').style.display='block'" class="w3-btn eventbutton">Add a new event
	</button>
	<div id='modalcloser' class='modalcloser'>
		<br/>
		<br/>
	</div>

	<form id='newevent' class='w3-modal-content w3-card-4 w3-animate-zoom newevent'>
		<p>Add a new event form:</p>
		 <span onclick="document.getElementById('newevent').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
		 <br/>
		<p>Choose Date</p>
		<input id="date" class="w3-input" type="date" name='date'/>
		<p>Choose Time<p>
		<input id="time" class="w3-input" type="time" value="13:00" name='time'/>
		<textarea id="description" rows="8" class="w3-input" placeholder="write a brief description of this event" name='description'></textarea>
		<input class='w3-input' type='submit' />
	</form>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script>

$(document).ready(function(){
	let currentTime = new Date().toISOString().slice(0,10).replace(/-/g,"-");
	$('#date').val(currentTime)
	$('#newevent').submit(function(e){
		e.preventDefault();
		console.log(e.target.date.value);
		console.log(e.target.time.value);
		console.log(e.target.description.value);

	});

	document.getElementById('modalcloser').addEventListener('click',function(){
		document.getElementById('newevent').style.display = 'none';
	});

})


</script>
<body>
</body>
</html>