<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Display Webcam Stream</title>
 
<style>
    .container{
        width:100%;
        height:100%;
    }

</style>
</head>
 
<body>
    <div class="container">
	
    <iframe src="https://video.ibm.com/broadcaster/23856732"><video autoplay="true" id="videoElement"></video></iframe>
    </div>
<script>
	var video = document.querySelector("#videoElement");

if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
    })
    .catch(function (err0r) {
      console.log("Something went wrong!");
    });
	}

	

</script>
</body>
</html>