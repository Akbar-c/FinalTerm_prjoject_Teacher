

	// Upload file
	function uploadFile() {

		var files = document.getElementById("file").files;
		
		if(files.length > 0 ){ 

			var formData = new FormData();
			formData.append("file", files[0]);

			var xhttp = new XMLHttpRequest();

			// Set POST method and ajax file path
			xhttp.open("POST", "ajaxfile.php", true);

			// call on request changes state
			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			      	
			      	var response = this.responseText;
			      	if(response == 1){
			      		alert("Upload successfully.");

			      	}else{ 
			      		alert("File not uploaded or invalid extension."); 
			      	}
			    }
			};
			
			// Send request with data
			xhttp.send(formData);

		}else{
			alert("Please select a file");
		}
		
	}
	