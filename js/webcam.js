

// Put event listeners into place
window.addEventListener("DOMContentLoaded", function() {
	// Grab elements, create settings, etc.
	
		video = document.getElementById("videoCapture"),
		videoObj = { "video": true },
		errBack = function(error) {
			console.log("Video capture error: ", error.code); 
		};

	
	// Put video listeners into place
	if(navigator.getUserMedia) { // Standard
		navigator.getUserMedia(videoObj, function(stream) {
			video.src = stream;
			video.play();
			document.getElementById("rectanglePicture").style.visibility = "visible";
		}, errBack);
	} else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
		navigator.webkitGetUserMedia(videoObj, function(stream){
			video.src = window.webkitURL.createObjectURL(stream);
			video.play();
			document.getElementById("rectanglePicture").style.visibility = "visible";
		}, errBack);
	}
	else if(navigator.mozGetUserMedia) { // Firefox-prefixed
		navigator.mozGetUserMedia(videoObj, function(stream){
			video.src = window.URL.createObjectURL(stream);
			video.play();
			document.getElementById("rectanglePicture").style.visibility = "visible";
		}, errBack);
	}
}, false);
		
		
	
            
            function snapshot() {
				var canvas = document.getElementById("videoCanvas"),
				
				ctx = canvas.getContext('2d');
				
                canvas.width = video.videoWidth - 400;
                canvas.height = video.videoHeight - 160;
				
                ctx.drawImage(video, -260, -50);
				
				    // save canvas image as data url (png format by default)
				  var dataURL = canvas.toDataURL("image/png");
			
				  // set canvasImg image src to dataURL
				  // so it can be saved as an image
				//  document.getElementById('canvasImg').src = dataURL;
				
            }
		
		