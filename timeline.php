<?php
include_once "modules/db/DAOFactory.php";

include_once "modules/graph/PmfSimile.php";
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"

 "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
   <!-- See http://developer.yahoo.com/yui/grids/ for info on the grid layout -->

   <title>Timeline</title>

   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

  <script>
 Timeline_ajax_url="inc/timeline_2.3.0/timeline_ajax/simile-ajax-api.js";
 Timeline_urlPrefix='inc/timeline_2.3.0/timeline_js/';
 Timeline_parameters='bundle=true';
 </script>
 <script src="inc/timeline_2.3.0/timeline_js/timeline-api.js"
 type="text/javascript">
 </script> 

 
   <link rel="stylesheet" href="styles/simile/timeline.css" type="text/css">

   <!-- Since we don't have our own server, we do something tricky and load our data here as if it were a library file -->
   <script type="text/javascript">
<?php

	$g = new PmfSimile();
	$g->addPeople();
	$g->display('');
?>
</script>


   <script>        
        var tl;
        function onLoad() {
            var tl_el = document.getElementById("tl");
            var eventSource1 = new Timeline.DefaultEventSource();
            
            var theme1 = Timeline.ClassicTheme.create();
            theme1.autoWidth = true; // Set the Timeline's "width" automatically.
                                     // Set autoWidth on the Timeline's first band's theme,
                                     // will affect all bands.
            theme1.timeline_start = new Date(Date.UTC(1200, 0, 1));
            theme1.timeline_stop  = new Date(Date.UTC(2100, 0, 1));
            
            var d = Timeline.DateTime.parseGregorianDateTime("1900")
            var bandInfos = [
                Timeline.createBandInfo({
                    width:          45, // set to a minimum, autoWidth will then adjust
                    intervalUnit:   Timeline.DateTime.DECADE, 
                    intervalPixels: 200,
                    eventSource:    eventSource1,
                    date:           d,
                    theme:          theme1,
                    layout:         'original'  // original, overview, detailed
                })
            ];
                                                            
            // create the Timeline
            tl = Timeline.create(tl_el, bandInfos, Timeline.HORIZONTAL);
            
            var url = '.'; // The base url for image, icon and background image
                           // references in the data
            eventSource1.loadJSON(timeline_data, url); // The data was stored into the 
                                                       // timeline_data variable.
            tl.layout(); // display the Timeline
        }
        
        var resizeTimerID = null;
        function onResize() {
            if (resizeTimerID == null) {
                resizeTimerID = window.setTimeout(function() {
                    resizeTimerID = null;
                    tl.layout();
                }, 500);
            }
        }
   </script>

</head>

<body onload="onLoad();" onresize="onResize();">

<div id="doc3" class="yui-t7">

   <div id="hd" role="banner">
     <h1>Timeline</h1>
   </div>

	     <p>To move the Timeline: use the mouse scroll wheel, the arrow keys or grab and drag the Timeline.</p>
   <div id="bd" role="main">

	   <div class="yui-g">

	     <div id='tl'></div>

	   </div>

	 </div>

   <div id="ft" role="contentinfo">
     <p>Thanks to the <a href='http://simile-widgets.org/timeline/'>Simile Timeline project</a> Timeline version <span id='tl_ver'></span></p>
     <script>Timeline.writeVersion('tl_ver')</script> 
   </div>

</div>


</body>

</html>
