 <!DOCTYPE html>
 <html>

 <head>
     <meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
     <meta http-equiv="Pragma" content="no-cache">
     <meta http-equiv="Cache-Control" content="no-cache">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <meta http-equiv="Lang" content="en">
     <meta name="author" content="">
     <meta http-equiv="Reply-to" content="@.com">
     <meta name="generator" content="PhpED 8.0">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="creation-date" content="09/06/2012">
     <meta name="revisit-after" content="15 days">
     <title>Convert to canvas</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="../assets/css/mycss.css">
     <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
         integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
     </script>
     <script type="text/javascript" src="../assets/js/tether.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
         integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
     </script>
     <script type="text/javascript" src="../assets/js/fabric.js"></script>
     <script type="text/javascript" src="../assets/js/FileSaver.js"></script>
     </style>
 </head>

 <body>
     <div class="container">
         <div class="row ">
             <div class="col-md-2">

             </div>
             <div class="col-md-8 title">
                 <h2>File Name :background </h2>
             </div>

         </div>
         <div class="row">
             <div class="col-md-2 zoomtool">
                 <img class="zoom" id="zoomin" src="../assets/icon/zoomin.png" alt="">
                 <img class="zoom" id="zoomout" src="../assets/icon/zoomout.png" alt="">
                 <img class="zoom" id="zoomreset" src="../assets/icon/rezoom.png" alt="">
                 <input name="" type="text" id="zoomtext" />
                 <select name="" id="zoomselect">
                     <option value="59" title="Title for Item 1">59</option>
                     <option value="60" title="Title for Item 2">60</option>
                     <option value="61" title="Title for Item 3">61</option>
                     <option value="62" title="Title for Item 1">62</option>
                     <option value="63" title="Title for Item 2">63</option>
                     <option value="64" title="Title for Item 3">64</option>
                     <option value="65" title="Title for Item 1">65</option>
                     <option value="66" title="Title for Item 2">66</option>
                     <option value="67" title="Title for Item 3">67</option>
                     <option value="68" title="Title for Item 1">68</option>
                     <option value="69" title="Title for Item 2">69</option>
                     <option value="70" title="Title for Item 3">70</option>
                 </select>
             </div>
             <div class="col-md-3 conCenter buttontool">
                 <button type="button" class="btn btn-primary mode modeselect" id="drawmode">Draw</button>
                 <button type="button" class="btn btn-primary mode" id="selectmode">Select</button>
                 <button type="button" class="btn btn-primary mode" id="delete"
                     onclick="deleteObjects()">Delete</button>
             </div>
             <div class="col-md-3 conCenter">
                 <div class="row saveColor">
                     Color: <input id="color" type="color" value="#0645fb">
                     Fill Color: <input id="fillcolor" type="color" value="#0645fb"><br>
                 </div>
                 <div class="row saveColor">
                     Brush size: <input id="size" type="range" min="1" max="100" step="0.5" value="20">
                 </div>

             </div>
             <div class="col-md-3 buttontool">
                 <div class="row">
                     <span id="pathReg">
                         <button class="btn btn-danger" id="register"> Register</button>
                         <input id="pathID" type="text">
                     </span>
                 </div>
                 <div class="row save">
                     <button type="button" class="btn btn-danger" id="saveIMG">Save As IMG</button>
                     <button type="button" class="btn btn-danger" id="saveSVG">Save As SVG</button>
                 </div>
             </div>
         </div>
         <div id="canvasView">
             <canvas id="canvas" height="1000" style="border: 1px solid #ccc"></canvas>
         </div>
         <img src="../uploads/background.jpg" id="my-image" style="display:none">
     </div>

     <style type="text/css">
     h2 {
         display: inline;
     }

     img:hover {
         cursor: pointer;
     }

     .mode {
         padding: 8px;
         border: 1px solid #ebebeb;
         display: inline;
         background: #fff;
         border-radius: 10px;
         font-weight: bold;
         margin-left: 10px;
         position: relative;
         top: -9px;
     }

     .mode:hover {
         cursor: pointer;
         background: #ebebeb;
     }

     .modeselect {
         background: #ebebeb;
     }
     </style>
     <script type="text/javascript">
     var canvas = new fabric.Canvas("canvas");
     canvas.isDrawingMode = 1;
     canvas.freeDrawingBrush.color = "#0645fb";
     canvas.freeDrawingBrush.width = 1;
     canvas.renderAll();

     $("#size").on("change", function() {
         var size = this.value;
         canvas.freeDrawingBrush.width = size / 2;
         canvas.renderAll();
         //alert(size);
     })
     $("#color").on("change", function() {
         var color = this.value;
         canvas.freeDrawingBrush.color = color;
         canvas.renderAll();
         //alert(size);
     })
     $("#fillcolor").on("change", function() {
         fillcolor = this.value;
     })

     var imgElement, imgInstance;
     var pathGroup = [];
     var canvasPathFill = [];
     var canvasPathD = [];
     var canvasPathS = [];
     var canvasPathW = [];
     var id_no = "1";
     pathGroup[0] =
         '<path id="ss_0" vector-effect="non-scaling-stroke" fill="#0645fb" stroke-width="1" stroke="#0645fb" d="M 415.198014541243 95.93796391241321 Q 415.19701454124305 95.93896391241321 414.19774374812334 98.43737443096563 Q 413.19847295500364 100.93578494951807 410.20066057564446 107.43165229775437 Q 407.2028481962853 113.92751964599069 401.207223437567 120.423386994227 Q 395.2115986788487 126.91925434246332 391.71415090292965 130.9167111721472 Q 388.21670312701065 134.9141680018311 378.7236305923733 141.4100353500674 Q 369.230558057736 147.9059026983037 359.23785012653883 151.9033595279876 Q 349.24514219534166 155.9008163576715 343.24951743662336 156.90018056509246 Q 337.253892677905 157.89954477251342 324.26337236734867 158.3992268762239 Q 311.2728520567923 158.8989089799344 295.7841547634367 158.3992268762239 Q 280.29545747008103 157.89954477251342 272.80092652168315 156.40049846138197 Q 265.3063955732853 154.9014521502505 252.8155106592888 152.40304163169807 Q 240.3246257452923 149.90463111314565 230.831553210655 146.40685638717224 Q 221.33848067601767 142.90908166119885 218.34066829665852 140.91035324635692 Q 215.34285591729935 138.91162483151496 211.84540814138035 134.91416800183106 Q 208.34796036546132 130.9167111721472 206.34941877922188 124.42084382391089 Q 204.35087719298244 117.92497647567458 203.85124179642258 113.9275196459907 Q 203.35160639986273 109.93006281630682 203.35160639986273 100.4361028458076 Q 203.35160639986273 90.94214287530836 206.34941877922188 79.94913659367768 Q 209.34723115858102 68.956130312047 212.84467893450005 63.45962717123166 Q 216.34212671041908 57.96312403041632 225.8351992450564 48.968846163627575 Q 235.32827177969372 39.97456829683884 250.81696907304934 29.98092622262913 Q 266.305666366405 19.98728414841942 275.29910350448245 15.49014521502505 Q 284.2925406425599 10.99300628163068 305.7768626946339 2.998092622262913 Q 327.26118474670784 -4.996821037104855 347.2466006091022 -6.995549451946797 Q 367.2320164714966 -8.994277866788739 377.22472440269377 -9.493959970499224 Q 387.21743233389094 -9.99364207420971 402.20649423068676 -8.994277866788739 Q 417.1955561274825 -7.994913659367768 430.18607643803887 -4.497138933394369 Q 443.17659674859516 -0.999364207420971 448.6725861107536 0.999364207420971 Q 454.1685754729121 2.998092622262913 464.16128340410927 8.994277866788739 Q 474.15399133530644 14.990463111314565 479.6499806974649 20.98664835584039 Q 485.1459700596234 26.982833600366217 486.6448762493029 28.98156201520816 Q 488.1437824389825 30.9802904300501 489.14305323210226 34.4780651560235 Q 490.14232402522197 37.9758398819969 490.64195942178185 40.47425040054932 Q 491.1415948183417 42.972660919101756 491.1415948183417 43.97202512652272 Q 491.1415948183417 44.97138933394369 490.64195942178185 49.46852826733806 Q 490.14232402522197 53.96566720073243 488.1437824389825 58.96248823783729 Q 486.1452408527431 63.95930927494214 484.1466992665037 66.95740189720506 Q 482.1481576802642 69.95549451946798 476.1525329215459 75.9516797639938 Q 470.15690816282756 81.94786500851961 462.1627418178698 87.94405025304545 Q 454.1685754729121 93.94023549757128 450.1714923004332 97.43801022354467 Q 446.17440912795433 100.93578494951807 436.68133659331704 105.43292388291243 Q 427.1882640586797 109.93006281630682 418.6944623171621 114.42720174970118 Q 410.20066057564446 118.92434068309555 406.2035774031656 120.423386994227 Q 402.2064942306867 121.92243330535845 395.7112340754085 124.42084382391089 Q 389.21597392013035 126.91925434246332 384.21961995453177 129.41766486101574 Q 379.2232659889332 131.91607537956816 376.7250890061339 132.41575748327864 Q 374.2269120233346 132.91543958698915 370.2298288508557 134.4144858981206 Q 366.23274567837683 135.91353220925205 363.73456869557754 136.91289641667302 Q 361.23639171277824 137.912260624094 360.73675631621836 138.41194272780447 Q 360.23712091965854 138.91162483151496 359.23785012653883 139.41130693522547 Q 358.2385793334191 139.91098903893595 357.73894393685924 139.91098903893595 Q 357.23930854029936 139.91098903893595 357.23930854029936 139.41130693522547 Q 357.23930854029936 138.91162483151496 357.23930854029936 137.912260624094 L 357.23930854029936 136.91189641667302z" fill-opacity="0" stroke-opacity="1" cursor="pointer"></path>';
     canvasPathFill[0] = '#0645fb';
     canvasPathD[0] =
         'M 415.198014541243 95.93796391241321 Q 415.19701454124305 95.93896391241321 414.19774374812334 98.43737443096563 Q 413.19847295500364 100.93578494951807 410.20066057564446 107.43165229775437 Q 407.2028481962853 113.92751964599069 401.207223437567 120.423386994227 Q 395.2115986788487 126.91925434246332 391.71415090292965 130.9167111721472 Q 388.21670312701065 134.9141680018311 378.7236305923733 141.4100353500674 Q 369.230558057736 147.9059026983037 359.23785012653883 151.9033595279876 Q 349.24514219534166 155.9008163576715 343.24951743662336 156.90018056509246 Q 337.253892677905 157.89954477251342 324.26337236734867 158.3992268762239 Q 311.2728520567923 158.8989089799344 295.7841547634367 158.3992268762239 Q 280.29545747008103 157.89954477251342 272.80092652168315 156.40049846138197 Q 265.3063955732853 154.9014521502505 252.8155106592888 152.40304163169807 Q 240.3246257452923 149.90463111314565 230.831553210655 146.40685638717224 Q 221.33848067601767 142.90908166119885 218.34066829665852 140.91035324635692 Q 215.34285591729935 138.91162483151496 211.84540814138035 134.91416800183106 Q 208.34796036546132 130.9167111721472 206.34941877922188 124.42084382391089 Q 204.35087719298244 117.92497647567458 203.85124179642258 113.9275196459907 Q 203.35160639986273 109.93006281630682 203.35160639986273 100.4361028458076 Q 203.35160639986273 90.94214287530836 206.34941877922188 79.94913659367768 Q 209.34723115858102 68.956130312047 212.84467893450005 63.45962717123166 Q 216.34212671041908 57.96312403041632 225.8351992450564 48.968846163627575 Q 235.32827177969372 39.97456829683884 250.81696907304934 29.98092622262913 Q 266.305666366405 19.98728414841942 275.29910350448245 15.49014521502505 Q 284.2925406425599 10.99300628163068 305.7768626946339 2.998092622262913 Q 327.26118474670784 -4.996821037104855 347.2466006091022 -6.995549451946797 Q 367.2320164714966 -8.994277866788739 377.22472440269377 -9.493959970499224 Q 387.21743233389094 -9.99364207420971 402.20649423068676 -8.994277866788739 Q 417.1955561274825 -7.994913659367768 430.18607643803887 -4.497138933394369 Q 443.17659674859516 -0.999364207420971 448.6725861107536 0.999364207420971 Q 454.1685754729121 2.998092622262913 464.16128340410927 8.994277866788739 Q 474.15399133530644 14.990463111314565 479.6499806974649 20.98664835584039 Q 485.1459700596234 26.982833600366217 486.6448762493029 28.98156201520816 Q 488.1437824389825 30.9802904300501 489.14305323210226 34.4780651560235 Q 490.14232402522197 37.9758398819969 490.64195942178185 40.47425040054932 Q 491.1415948183417 42.972660919101756 491.1415948183417 43.97202512652272 Q 491.1415948183417 44.97138933394369 490.64195942178185 49.46852826733806 Q 490.14232402522197 53.96566720073243 488.1437824389825 58.96248823783729 Q 486.1452408527431 63.95930927494214 484.1466992665037 66.95740189720506 Q 482.1481576802642 69.95549451946798 476.1525329215459 75.9516797639938 Q 470.15690816282756 81.94786500851961 462.1627418178698 87.94405025304545 Q 454.1685754729121 93.94023549757128 450.1714923004332 97.43801022354467 Q 446.17440912795433 100.93578494951807 436.68133659331704 105.43292388291243 Q 427.1882640586797 109.93006281630682 418.6944623171621 114.42720174970118 Q 410.20066057564446 118.92434068309555 406.2035774031656 120.423386994227 Q 402.2064942306867 121.92243330535845 395.7112340754085 124.42084382391089 Q 389.21597392013035 126.91925434246332 384.21961995453177 129.41766486101574 Q 379.2232659889332 131.91607537956816 376.7250890061339 132.41575748327864 Q 374.2269120233346 132.91543958698915 370.2298288508557 134.4144858981206 Q 366.23274567837683 135.91353220925205 363.73456869557754 136.91289641667302 Q 361.23639171277824 137.912260624094 360.73675631621836 138.41194272780447 Q 360.23712091965854 138.91162483151496 359.23785012653883 139.41130693522547 Q 358.2385793334191 139.91098903893595 357.73894393685924 139.91098903893595 Q 357.23930854029936 139.91098903893595 357.23930854029936 139.41130693522547 Q 357.23930854029936 138.91162483151496 357.23930854029936 137.912260624094 L 357.23930854029936 136.91189641667302z';
     canvasPathS[0] = '#0645fb';
     canvasPathW[0] = '1';
     var pathArr = [];

     var pathStrokeArr = [];
     var pathStrokeWArr = [];
     var fillcolor = $("#fillcolor").val();

     canvas.on("path:created", function(e) {
         id_no++;
         var dd = e.path.path;

         var pathline = dd.toString();
         var pathString = "";
         for (var i = 0; i < pathline.length; i++) {
             if (pathline.charAt(i) === ",") {
                 pathString += " ";
                 continue;
             }
             pathString += pathline[i];
         };
         pathString += "z";

         pathArr.push(pathString);
         pathStrokeArr.push(e.path.stroke);
         pathStrokeWArr.push(e.path.strokeWidth);


         canvasPathD.push(pathString);
         canvasPathFill.push(fillcolor);
         canvasPathS.push(e.path.stroke);
         canvasPathW.push(e.path.strokeWidth);
         canvasData = JSON.stringify(canvas.toJSON());

     })
     $("#pathReg").on("click", function() {
         var pID = $("#pathID").val();
         if (pID != "") {
             for (var i = 0; i < pathArr.length; i++) {

                 var paths = '<path id="' + pID + '_' + i + '" vector-effect="non-scaling-stroke" fill="' +
                     fillcolor + '" stroke-width="' + pathStrokeWArr[i] + '" stroke="' + pathStrokeArr[i] +
                     '" d="' + pathArr[i] + '" fill-opacity="0" stroke-opacity="1" cursor="pointer"></path>';

                 pathGroup.push(paths);

             }
             pathArr = [];
             pathStrokeArr = [];
             pathStrokeWArr = [];

             $("#pathID").val("");

         } else {
             $("#pathID").focus();
         }

     })

     $("#saveSVG").on("click", function() {
         $.ajax({
             url: "../public/savesvg.php",
             type: "post",
             data: {
                 "paths": pathGroup,
                 "imgName": imgn,
                 "imgfullname": "background.jpg",
                 "canvasWidth": canvasWidth,
                 "canvasHeight": canvasHeight,
                 "num": id_no,
                 "canvasPathD": canvasPathD,
                 "canvasPathFill": canvasPathFill,
                 "canvasPathS": canvasPathS,
                 "canvasPathW": canvasPathW,
             },
             success: function(result) {
                 alert(result);
                 document.location = "../svgs/" + imgn + ".php";
             }
         });
     })

     var imgn = "";
     var canvasWidth = 0;
     $(document).ready(function() {
         var imgnn = "background.jpg";
         for (var i = 0; i < imgnn.length; i++) {
             if (imgnn.charAt(i) === ".") {
                 break;
             }
             imgn += imgnn[i];
         }

         imgElement = document.getElementById("my-image");
         imgInstance = new fabric.Image(imgElement, {
             left: 0,
             top: 0,
             angle: 0,
             opacity: 1,
         });
         var winX = $("#canvasView").width() * 0.8;
         var winY = $("#canvasView").height() * 0.8;
         canvasWidth = winX;
         canvasHeight = winY;
         imgInstance.scaleToWidth(winX);
         canvas.setWidth(winX);
         canvas.setZoom(1);
         canvas.add(imgInstance);
         var path0 = new fabric.Path(canvasPathD[0]);
         path0.set({
             fill: false,
             stroke: canvasPathS[0]
         });
         canvas.add(path0);
         canvasData = JSON.stringify(canvas.toJSON());

         drawmode();

     });
     var canvasData;
     $(window).resize(function() {
         canvas.clear();
         var canvasJson = JSON.parse(canvasData);
         canvas.loadFromJSON(
             canvasJson,
             canvas.renderAll.bind(canvas));

         var winX = $("#canvasView").width() * 0.8;
         var winXO = canvasWidth;

         canvas.setZoom(eval(winX) / eval(winXO));
         canvas.setWidth(winX);
     })

     $("#saveIMG").on("click", function() {
         $("canvas").get(0).toBlob(function(blob) {
             saveAs(blob, "background.jpg.png");
         })
     })
     $("#zoomreset").click(function() {

         canvas.setZoom(1);
         canvasData = JSON.stringify(canvas.toJSON());
         nJson = JSON.parse(canvasData);
         canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));

     });
     var zoom = 0;
     $("#zoomin").click(function() {
         if (zoom < 0) {
             zoom = 0;
         }
         zoom += 0.05;
         canvas.setZoom(1 + zoom);
         canvasData = JSON.stringify(canvas.toJSON());
         nJson = JSON.parse(canvasData);
         canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));
     })

     $("#zoomout").click(function() {
         if (zoom <= 0) {
             zoom = 0;
             return;
         }
         zoom -= 0.05;
         var winX = $(window).width();
         canvas.setZoom(1 + zoom);
         canvasData = JSON.stringify(canvas.toJSON());
         nJson = JSON.parse(canvasData);
         canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));
     })
     $("#zoomtext").keyup(function() {
         if ($("#zoomtext").val() == "")
             var zoom = 0.1;
         else {
             var zoom = $("#zoomtext").val() / 100;
         }
         document.getElementById("zoomtext").value = zoom * 100
         canvas.setZoom(zoom);
         canvas.setWidth(zoom * winX);
         canvasData = JSON.stringify(canvas.toJSON());
         nJson = JSON.parse(canvasData);
         canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));
     });
     $("#zoomselect ").change(function() {
         var zoom = $("#zoomselect").val() / 100;
         document.getElementById("zoomtext").value = zoom * 100
         canvas.setWidth(zoom * winX);
         canvas.setZoom(zoom);
         canvasData = JSON.stringify(canvas.toJSON());
         nJson = JSON.parse(canvasData);
         canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));
     });
     canvas.on('mouse:wheel', function(opt) {
         var delta = opt.e.deltaY;
         var zoom = canvas.getZoom();
         zoom = zoom + delta / 400;
         if (zoom > 20) zoom = 20;
         if (zoom < 0.01) zoom = 0.01;
         canvas.setZoom(zoom);
         opt.e.preventDefault();
         opt.e.stopPropagation();
         canvasData = JSON.stringify(canvas.toJSON());
         nJson = JSON.parse(canvasData);
         canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));
     })
     canvas.on('mouse:down', function(opt) {
         var evt = opt.e;
         if (evt.altKey === true) {
             this.isDragging = true;
             this.selection = false;
             this.lastPosX = evt.clientX;
             this.lastPosY = evt.clientY;
         }
     });
     canvas.on('mouse:move', function(opt) {
         if (this.isDragging) {
             var e = opt.e;
             this.viewportTransform[4] += e.clientX - this.lastPosX;
             this.viewportTransform[5] += e.clientY - this.lastPosY;
             this.requestRenderAll();
             this.lastPosX = e.clientX;
             this.lastPosY = e.clientY;
         }
     });
     canvas.on('mouse:up', function(opt) {
         this.isDragging = false;
         this.selection = true;
     });

     var draw = false;

     function selectmode() {
         canvas.isDrawingMode = 0;
         canvas.selection = true;
         canvas.forEachObject(function(o) {
             o.selectable = true;
         })
         draw = false;
     }

     function drawmode() {
         initjson();
         canvas.isDrawingMode = 1;
         canvas.selection = false;
         canvas.forEachObject(function(o) {
             o.selectable = false;
         })
         draw = true;


     }

     function initjson() {
         var canvasData = JSON.stringify(canvas.toJSON());
         var canvasJson = JSON.parse(canvasData);
         var nJson = JSON.parse(canvasData);
         nJson.objects = [];


         for (var i = 0; i < canvasJson.objects.length; i++) {

             nJson.objects.push(canvasJson.objects[i]);



         }
         canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));
     }
     $(".mode").click(function(e) {
         $(".mode").removeClass("modeselect");
         var id = e.target.id;
         $("#" + id).addClass("modeselect");
         if (id == "selectmode") {
             selectmode();
         } else {
             drawmode();
         }
     })

     function deleteObjects() {
         var activeObject = canvas.getActiveObject();
         if (activeObject && confirm("Are you sure?")) {
             var n = -1;
             for (var i = 0; i < canvasPathD.length; i++) {
                 if (canvasPathD[i].substring(2, 10) == canvas.getActiveObject().path[0].toString().substring(2, 10)) {
                     n = i;
                 }
             }

             id_no--;
             canvasPathD.splice(n, 1);
             canvasPathS.splice(n, 1);
             canvasPathFill.splice(n, 1);
             canvasPathW.splice(n, 1);
             pathGroup.splice(n, 1);
             canvas.remove(activeObject);
         }
         initjson();
     }
     var img = "";
     canvas.on("mouse:down", function() {
         var pointer = canvas.getPointer(event.e);
         if (img != "") {
             canvasAddImage(img, pointer.x, pointer.y);
             //selectmode();
             img = "";
             $(".mode").removeClass("modeselect");
             $("#drawmode").addClass("modeselect");

         }

         var activeObject = canvas.getActiveObject();
         if (activeObject && activeObject.type == "image" && activeObject.left == 0 && activeObject.top == 0 &&
             draw == false) {
             $(".mode").removeClass("modeselect");
             $("#selectmode").addClass("modeselect");
             initjson();
             selectmode();
         }
     })

     function canvasAddImage(imageName, leftx, topy) {
         fabric.Image.fromURL("./assets/icon/" + imageName + ".png", function(lImg) {
             var imgToAdd = lImg.set({
                 left: leftx,
                 top: topy,
                 scaleX: 0.3,
                 scaleY: 0.3
             });
             canvas.add(imgToAdd);
             canvasData = JSON.stringify(canvas.toJSON());
             nJson = JSON.parse(canvasData);
             canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));
         });


     }
     $("#resvg").click(function() {
         document.location = "../svgs/background.php";
     })
     </script>


 </body>

 </html>