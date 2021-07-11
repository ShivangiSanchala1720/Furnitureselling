<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8; 
  cursor: pointer; 
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
</head>
<body>

<div style="text-align:center">
  <h2>DRAMS GALLERY</h2>
  <p>Click on the images below:</p>
</div>

<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="image/4.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="image/5.jpg" alt="Snow" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="image/6.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="image/14.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="image/15.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="image/16.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="image/7.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="image/8.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="image/9.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="image/1.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>

  <div class="column">
    <img src="image/49.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>

  <div class="column">
    <img src="image/17.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>

  <div class="column">
    <img src="image/18.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>

  <div class="column">
    <img src="image/40.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>

  <div class="column">
    <img src="image/51.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>

  <div class="column">
    <img src="image/42.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>

  <div class="column">
    <img src="image/26.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>

  <div class="column">
    <img src="image/52.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>

  <div class="column">
    <img src="image/53.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>

  <div class="column">
    <img src="image/25.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
  </div>



</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>

</body>
</html>
