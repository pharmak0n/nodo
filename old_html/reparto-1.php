<!doctype HTML>
<html lang="it">
  <head>
    <title>isia - da2 2019</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="stylesheet" href="style.css">

    <script src="aframe.min.js"></script>
    <script src="aframe-ar.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/init.js"></script>
  </head>
  <body style='margin : 0px; overflow: hidden;'>

    <div id="call-to-action">
      <a href="...">Scopri di più...</a>
    </div>
    <a-scene embedded vr-mode-ui="enabled: false" arjs="sourceType: webcam; detectionMode: color_and_matrix; patternRatio: 0.9; debugUIEnabled: false;">

      <a-assets>
        <img id="ar_wayfing_arrow_mono" src="assets/gfx_arrow_mono.png">
        <img id="ar_wayfing_arrow_top" src="assets/gfx_arrow_top.png">
        <img id="ar_wayfing_arrow_top_left" src="assets/gfx_arrow_top_right.png">
      </a-assets>

      <!-- <a-marker type="pattern" url="assets/patt/pattern-marker_source_03.patt" smooth="true" smoothCount="10" smoothTolerance="0.1" smoothThreshold="5"> -->

      <a-marker type="pattern" url="assets/patt/pattern-marker_source_01.patt">
        <!-- here define the content to display on top of the marker -->
        <a-plane markerhandler src="#ar_wayfing_arrow_mono" width="1" height="1" rotation="-90 0 0" scale="2 2 2" position="0 0 0"></a-plane>
      </a-marker>

      <a-marker type="pattern" url="assets/patt/pattern-marker_source_02.patt">
        <!-- here define the content to display on top of the marker -->
        <a-plane markerhandler src="#ar_wayfing_arrow_mono" width="1" height="1" rotation="-90 0 45" scale="2 2 2" position="0 0 0"></a-plane>
      </a-marker>

      <a-marker type="pattern" url="assets/patt/pattern-marker_source_03.patt">
        <!-- here define the content to display on top of the marker -->
        <a-plane markerhandler src="#ar_wayfing_arrow_mono" width="1" height="1" rotation="-90 0 90" scale="2 2 2" position="0 0 0"></a-plane>
      </a-marker>

      <a-marker type="pattern" url="assets/patt/pattern-marker_source_04.patt">
        <!-- here define the content to display on top of the marker -->
        <a-plane markerhandler src="#ar_wayfing_arrow_mono" width="1" height="1" rotation="-90 0 135" scale="2 2 2" position="0 0 0"></a-plane>
      </a-marker>



      <a-marker type="pattern" url="assets/patt/pattern-marker_source_05.patt">
        <!-- here define the content to display on top of the marker -->
        <a-plane markerhandler src="#ar_wayfing_arrow_mono" width="1" height="1" rotation="-90 0 180" scale="2 2 2" position="0 0 0"></a-plane>
      </a-marker>

      <a-marker type="pattern" url="assets/patt/pattern-marker_source_06.patt">
        <!-- here define the content to display on top of the marker -->
        <a-plane markerhandler src="#ar_wayfing_arrow_mono" width="1" height="1" rotation="-90 0 225" scale="2 2 2" position="0 0 0"></a-plane>
      </a-marker>

      <a-marker type="pattern" url="assets/patt/pattern-marker_source_07.patt">
        <!-- here define the content to display on top of the marker -->
        <a-plane markerhandler src="#ar_wayfing_arrow_mono" width="1" height="1" rotation="-90 0 270" scale="2 2 2" position="0 0 0"></a-plane>
      </a-marker>

      <a-marker type="pattern" url="assets/patt/pattern-marker_source_08.patt">
        <!-- here define the content to display on top of the marker -->
        <a-plane markerhandler src="#ar_wayfing_arrow_mono" width="1" height="1" rotation="-90 0 315" scale="2 2 2" position="0 0 0"></a-plane>
      </a-marker>

      <!-- define a simple camera -->
      <a-entity camera></a-entity>

    </a-scene>

  </body>
</html>
