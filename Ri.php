<?php
error_reporting(0);

?>
<style>
    body {
 background: #2196F3;
 position: relative;
 font-family: 'Roboto', sans-serif;
 color: #fff;
}

#namer {
 position: relative;
 max-width: 400px;
 margin: 150px auto 0;
}

#namer input {
 border: 0;
 border-bottom: 2px solid #1976D2;
 width: 100%;
 font-size: 30px;
 line-height: 35px;
 height: 70px;
 text-align: center;
 padding: 10px;
 background: transparent;
	color: #BBDEFB;
}

#namer input.shake {
 animation-name: shaker;
 animation-duration: 200ms;
 animation-timing-function: ease-in-out;
 animation-delay: 0s;
}

#namer input:focus {
 outline: 0;
	color: #BBDEFB;
}

#namer input::placeholder {
 color: #1976D2;
}

.namer-controls {
 position: relative;
 display: block;
 height: 30px;
 margin: 20px 0;
 text-align: center;
 opacity: 0.3;
 cursor: not-allowed;
}

.namer-controls.active {
 opacity: 1;
 cursor: pointer;
}

.namer-controls div {
 float: left;
 width: 33.33%;
}
#namer-input.serious input {
 letter-spacing: 2px;
 text-transform: uppercase;
 font-family: 'Andada', serif;
 font-weight: 500;
}

#namer-input.modern input {
 font-family: 'Raleway', sans-serif;
 text-transform: lowercase;
 font-weight: 300;
 letter-spacing: 10px;
}

#namer-input.cheeky input {
 font-family: 'Permanent Marker', cursive;
 font-size: 40px;
}

@keyframes shaker {
 0% {
  transform: translate(0px, 0px) rotate(0deg);
  opacity: 0.8;
 }
 10% {
  transform: translate(10px, 7px) rotate(-9deg);
  opacity: 0.6;
 }
 20% {
  transform: translate(13px, -19px) rotate(-3deg);
  opacity: 0.3;
 }
 30% {
  transform: translate(-6px, -6px) rotate(2deg);
  opacity: 0.4;
 }
 40% {
  transform: translate(-9px, -18px) rotate(-5deg);
  opacity: 0.4;
 }
 50% {
  transform: translate(10px, -8px) rotate(5deg);
  opacity: 0.7;
 }
 60% {
  transform: translate(-10px, 14px) rotate(-6deg);
  opacity: 1;
 }
 70% {
  transform: translate(10px, 3px) rotate(6deg);
  opacity: 0.1;
 }
 80% {
  transform: translate(-2px, 20px) rotate(-6deg);
  opacity: 1;
 }
 90% {
  transform: translate(-7px, -19px) rotate(2deg);
  opacity: 0.5;
 }
}
</style>
<b><color> </color></b><br>
<div id="namer">
  <div id="namer-input">
  
<br>
<form method="post">
<input type="text" name="email" placeholder="Enter Email" value="<?php print $_POST['email']?>"required  >
<input type="submit" value="Send test >>">
</form></div>
<br>
<?php
if (!empty($_POST['email'])){
$xx = rand();
mail($_POST['email'],"Result Report Test - ".$xx,"WORKING !");
print "<b>send an report to [".$_POST['email']."] - $xx</b>"; 
}
?>