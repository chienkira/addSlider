<?php
  header("X-Content-Type-Options: nosniff");
  header("Content-Type: text/css");
  include("../Convert.php");

  $slider = "#007cff";
  extract($_GET);
?>
*[class^=addui-slider] {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}
.addui-slider-wrapper {
  display: block;
  margin: 20px;
  margin-top: 40px;
  height: 20px;
}
.addui-slider-track {
  display: block;
  position: relative;
}
.addui-slider-bar {
  display: block;
  width: 100%;
  height: 4px;
  background-color: #b3b3b3;
  border-radius: 4px;
}
.addui-slider-handle {
  display: inline-block;
  height: 30px;
  width: 30px;
  position: absolute;
  top: -14px;
  background-color: #ffffff;
  border: 1px solid #d4d4d4;
  border-radius: 99999px;
  z-index: 999;
  margin-left: -20px;
  transition: background 0.4s, box-shadow 0.4s;
  cursor: pointer;
  box-shadow: 0 2px 2px rgba(179,179,179,0.5);
}
.addui-slider-value {
  display: inline-block;
  height: 30px;
  margin: 0 auto;
  text-align: center;
  font-size: 0;
  transition: font 0.8s;
  position: absolute;
  top: -75%;
  left: 50%;
  transform: translateX(-50%);
}
.addui-slider-active .addui-slider-value,
.addui-slider-activeMin .addui-slider-handle-min .addui-slider-value,
.addui-slider-activeMin .addui-slider-handle-max .addui-slider-value,
.addui-slider-activeMax .addui-slider-handle-min .addui-slider-value,
.addui-slider-activeMax .addui-slider-handle-max .addui-slider-value {
  font-size: 18px;
}
.addui-slider-activeBar {
  display: block;
  width: 0;
  height: 4px;
  background-color: <?php echo $slider; ?>;
  max-width: 100%;
  position: absolute;
  border-radius: 4px;
}
