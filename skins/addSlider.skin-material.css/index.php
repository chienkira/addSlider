<?php
  header("X-Content-Type-Options: nosniff");
  header("Content-Type: text/css");
  include("../Convert.php");

  $slider = "#3366ff";
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
  height: 2px;
  background-color: #999999;
}
.addui-slider-handle {
  display: inline-block;
  height: 40px;
  width: 40px;
  position: absolute;
  top: -19px;
  border-radius: 99999px;
  z-index: 999;
  margin-left: -20px;
  transition: background 0.4s, box-shadow 0.4s;
  cursor: pointer;
}
.addui-slider-active .addui-slider-handle,
.addui-slider-activeMin .addui-slider-handle-min,
.addui-slider-activeMax .addui-slider-handle-max {
  background-color: <?php
    echo Format::rgba2css(Adjust::rgbaAlpha(Format::css2rgba($slider),-0.75));
  ?>;
  box-shadow:
    0 0 <?php psize($size, 10); ?> <?php
    echo Format::rgba2css(Adjust::rgbaAlpha(Format::css2rgba($slider),-0.75));
  ?>;
}
.addui-slider-handle::before {
  display: block;
  content: " ";
  width: 20px;
  height: 20px;
  background-color: <?php echo $slider; ?>;
  margin: 10px;
  border-radius: 999999px;
}
.addui-slider-value {
  display: inline-block;
  height: 40px;
  margin: 0 auto;
  text-align: center;
  font-size: 0;
  transition: font 0.8s;
  position: absolute;
  top: -60%;
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
  height: 2px;
  background-color: <?php echo $slider; ?>;
  max-width: 100%;
  position: absolute;
  box-shadow: 0 0 0 <?php echo $slider; ?>;
  transition: box-shadow 0.4s;
}
.addui-slider-active .addui-slider-activeBar,
.addui-slider-activeMin .addui-slider-activeBar,
.addui-slider-activeMax .addui-slider-activeBar {
  box-shadow: 0 0 2px <?php echo $slider; ?>;
}
