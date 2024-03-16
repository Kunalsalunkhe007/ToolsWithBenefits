<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['userlogin'])) {
  // Redirect to login page
  header("Location: ../login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF to EXCEL</title>

  <style>
    body {
      margin: 20px 60px;
    }

    .custom-loader {
  width: 80px;
  height: 80px;
  --c: linear-gradient(#766DF4 0 0);
  --r1: radial-gradient(farthest-side at bottom,#766DF4 93%,#0000);
  --r2: radial-gradient(farthest-side at top   ,#766DF4 93%,#0000);
  background: 
    var(--c) ,
    var(--r1),
    var(--r2),
    var(--c) ,  
    var(--r1),
    var(--r2),
    var(--c) ,
    var(--r1),
    var(--r2);
  background-repeat: no-repeat;
  animation: db2 1s infinite alternate;
}

@keyframes db2 {
  0%,25% {
    background-size: 16px 0,16px 8px,16px 8px,16px 0,16px 8px,16px 8px,16px 0,16px 8px,16px 8px;
    background-position: 0 50%,0 calc(50% - 4px),0 calc(50% + 4px),50% 50%,50% calc(50% - 4px),50% calc(50% + 4px),100% 50%,100% calc(50% - 4px),100% calc(50% + 4px);
 }
 50% {
    background-size: 16px 100%,16px 8px,16px 8px,16px 0,16px 8px,16px 8px,16px 0,16px 8px,16px 8px;
    background-position: 0 50%,0 calc(0% - 4px),0 calc(100% + 4px),50% 50%,50% calc(50% - 4px),50% calc(50% + 4px),100% 50%,100% calc(50% - 4px),100% calc(50% + 4px);
 }
 75% {
    background-size: 16px 100%,16px 8px,16px 8px,16px 100%,16px 8px,16px 8px,16px 0,16px 8px,16px 8px;
    background-position: 0 50%,0 calc(0% - 4px),0 calc(100% + 4px),50% 50%,50% calc(0% - 4px),50% calc(100% + 4px),100% 50%,100% calc(50% - 4px),100% calc(50% + 4px);
 }
 95%,100% {
    background-size: 16px 100%,16px 8px, 16px 8px,16px 100%,16px 8px,16px 8px,16px 100%,16px 8px,16px 8px;
    background-position: 0 50%,0 calc(0% - 4px),0 calc(100% + 4px),50% 50%,50% calc(0% - 4px),50% calc(100% + 4px),100% 50%,100% calc(0% - 4px),100% calc(100% + 4px);
 }
}
    
    .drop-container {
      position: relative;
      display: flex;
      gap: 10px;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 200px;
      padding: 20px;
      border-radius: 10px;
      border: 2px dashed #555;
      color: #444;
      cursor: pointer;
      transition: background .2s ease-in-out, border .2s ease-in-out;
    }
    
    .drop-container:hover {
      background: #eee;
      border-color: #111;
    }
    
    .drop-container:hover .drop-title {
      color: #222;
    }
    
    .drop-title {
      color: #444;
      font-size: 20px;
      font-weight: bold;
      text-align: center;
      transition: color .2s ease-in-out;
    }
    
    input[type=file] {
      width: 350px;
      max-width: 100%;
      color: #444;
      padding: 5px;
      background: #fff;
      border-radius: 10px;
      border: 1px solid #555;
    }
    
    input[type=file]::file-selector-button {
      margin-right: 20px;
      border: none;
      background: #084cdf;
      padding: 10px 20px;
      border-radius: 10px;
      color: #fff;
      cursor: pointer;
      transition: background .2s ease-in-out;
    }
    
    input[type=file]::file-selector-button:hover {
      background: #0d45a5;
    }

body {
  background: linear-gradient(135deg, #FFC3A0, #FFAFBD, #C1E1C5, #B2DBD5, #FFB7C5, #E2BCFF);
  background-size: 800% 800%;
  animation: gradient 30s ease infinite;
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}



  </style>

</head>
<body>

  <form id="my_frm" action="https://v2.convertapi.com/convert/pdf/to/xlsx?Secret=YOUR_API_KEY&download=attachment" method="post" enctype="multipart/form-data" onsubmit="return submitForm();">

  <label for="file-upload" class="drop-container">
    <span class="drop-title">Drop files here</span>
    or
    <input type="file" id="file-upload" name="File" accept=".pdf" required>

   
    <button type="submit" id="conv" style="padding: 10px;" onClick="fun()" disabled>Convert file</button>
  </label>
  <center>

   <div class="custom-loader" hidden="hidden" id="myDiv"></div>
   

   </center>

  

</form>

<script>
  function submitForm() {
    var form = document.querySelector('form');
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        alert(xhr.responseText);
        document.getElementById('myDiv').setAttribute("hidden", "hidden");
      }
    };
    xhr.open("POST", "upload.php");
    xhr.send(formData);

    return true;
    window.open("thankyou.php")
  }

  function fun()
  {
      document.getElementById('myDiv').removeAttribute("hidden");
  }
    const fileInput = document.getElementById('file-upload');
    const submitBtn = document.getElementById('conv');

  fileInput.addEventListener('change', () => {
			// Enable the button if a file is selected
			submitBtn.disabled = !fileInput.files.length;
		});
submitBtn.addEventListener('click', () => {
			// Disable the button after the first click
			submitBtn.disabled = true;
            const formm = document.getElementById('my_frm');
            submitForm();
            formm.submit();
		});
        
</script>
</body>
</html>