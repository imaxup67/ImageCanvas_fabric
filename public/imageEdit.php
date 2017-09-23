<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/mycss.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="../assets/js/fabric.js"></script>
    <script type="text/javascript" src="../assets/js/FileSaver.js"></script>
    <!-- <script type="text/javascript" src="../assets/js/custom.js"></script> -->
    <title>Convert to svg</title>
</head>

<body>
    <div class="container">
        <div class="row ">
            <div class="col-md-2 upload">
                <button type="button" id="fileuplaod" class="btn btn-success">ImageUpload</button>
            </div>
            <div class="col-md-8 title">
                <h2>File Name : "<?php echo $_GET['imgName']; ?>" </h2>
            </div>

        </div>
        <div class="row" id="too">
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
                <button type="button" class="btn btn-primary mode" id="delete" onclick="deleteObjects()">Delete</button>
                <button type="button" class="btn btn-primary mode" id="myeraser">Eraser</button>
            </div>
            <div class="col-md-4 conCenter">
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
            <canvas id="myCanvas" style="border: 1px solid #ccc"></canvas>
        </div>
        <img src="../uploads/<?php echo $_GET['imgName']; ?>" id="loadImg" style="display:none;">
    </div>

    <script type="text/javascript">
    $("#fileuplaod").click(function() {
        document.location = "../index.php";
    });
    /*customjs begining...... */
    var canvas = new fabric.Canvas("myCanvas");
    var imgn = ""; //image name without file extention
    var canvasWidth = 0; //initial canvas width
    var canvasHeight = 0;
    $(document).ready(function() {
        var imgnn = "<?php echo $_GET['imgName']; ?>";
        for (var i = 0; i < imgnn.length; i++) {
            if (imgnn.charAt(i) === ".") {
                break;
            }
            imgn += imgnn[i];
        }
        /**setting canvas and image width and height and add image to canvas */
        var imgElement = document.getElementById("loadImg");
        var imgInstance = new fabric.Image(imgElement, {
            left: 0,
            top: 0,
            angle: 0,
            opacity: 1
        });
        var winX = window.screen.width * 0.8;
        var winY = window.screen.height * 0.8;
        canvasWidth = winX;
        canvasHeight = winY;
        imgInstance.scaleToWidth(winX);
        imgInstance.scaleToHeight(winY - 20);
        canvas.setWidth(winX);
        canvas.setHeight(winY);
        canvas.setZoom(1);
        canvas.add(imgInstance);
        canvasData = JSON.stringify(canvas.toJSON());

    });
    canvas.freeDrawingBrush.color = "#0645fb";
    canvas.freeDrawingBrush.width = 1;
    // canvas.renderAll();
    $("#size").on("change", function() {
        var size = this.value;
        canvas.freeDrawingBrush.width = size / 2;
        canvas.renderAll();
    });
    $("#color").on("change", function() {
        var color = this.value;
        canvas.freeDrawingBrush.color = color;
        canvas.renderAll();
    });
    $("#fillcolor").on("change", function() {
        fillcolor = this.value;
        canvas.renderAll();
    });
    
    var imgElement, imgInstance;
    var id_no = 0;
    var pathArr = []; //path array variable
    var pathGroup = [];
    var pathStrokeArr = []; // canvas path stroke array variable color
    var pathStrokeWArr = []; // canvas path stroke width array variable color
    var fillcolor = $("#fillcolor").val();
    
    var canvasPathFill = [];
    var canvasPathD = [];
    var canvasPathS = [];
    var canvasPathW = [];
    var canvasData;
    canvas.isDrawingMode = 1;
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
        }
        pathString += "z";
        pathArr.push(pathString);
        pathStrokeArr.push(e.path.stroke);
        pathStrokeWArr.push(e.path.strokeWidth);
        canvasPathD.push(pathString);
        canvasPathFill.push(fillcolor);
        canvasPathS.push(e.path.stroke);
        canvasPathW.push(e.path.strokeWidth);
        canvasData = JSON.stringify(canvas.toJSON());
    });

    $("#pathReg").on("click", function() {
        var pID = $("#pathID").val();
        if (pID != "") {
            for (var i = 0; i < pathArr.length; i++) {
                var paths =
                    '<path id="' +
                    pID +
                    "_" +
                    i +
                    '" vector-effect="non-scaling-stroke" fill="' +
                    fillcolor +
                    '" stroke-width="' +
                    pathStrokeWArr[i] +
                    '" stroke="' +
                    pathStrokeArr[i] +
                    '" d="' +
                    pathArr[i] +
                    '" fill-opacity="0" stroke-opacity="1" cursor="pointer"></path>';
                pathGroup.push(paths);
            }
            pathArr = [];
            pathStrokeArr = [];
            pathStrokeWArr = [];
            $("#pathID").val("");
        } else {
            $("#pathID").focus();
        }
    });

    $("#saveSVG").on("click", function() {
        $.ajax({
            url: "savesvg.php",
            type: "post",
            data: {
                paths: pathGroup,
                imgName: imgn,
                imgfullname: "<?php echo $_GET['imgName']; ?>",
                canvasWidth: canvasWidth,
                canvasHeight: canvasHeight,
                num: id_no,
                canvasPathD: canvasPathD,
                canvasPathFill: canvasPathFill,
                canvasPathS: canvasPathS,
                canvasPathW: canvasPathW
            },
            success: function(result) {
                // alert(result);
                document.location = "../svgs/" + imgn + '.php';
            }
        });
    });

    $(window).resize(function() {
        canvas.clear();
        var canvasJson = JSON.parse(canvasData);
        canvas.loadFromJSON(canvasJson, canvas.renderAll.bind(canvas));
        var rewidth = $(window).width();
        var reheight = $(window).height();

        var winYO = canvasHeight;
        var winXO = canvasWidth;

        if (eval(rewidth) / eval(winXO) == 1) {
            canvas.setZoom(eval(reheight) / eval(winYO));
            canvas.setWidth(rewidth);
            canvas.setHeight(reheight);
        } else {
            canvas.setZoom(eval(rewidth) / eval(winXO));
            canvas.setWidth(rewidth);
            canvas.setHeight(reheight);
        }

    });

    $("#saveIMG").on("click", function() {
        $("canvas")
            .get(0)
            .toBlob(function(blob) {
                saveAs(blob, imgn.concat("png"));
            });
    });

    var zoom = 0;
    $("#zoomreset").click(function(){
					
					canvas.setZoom(1);
					canvasData = JSON.stringify(canvas.toJSON());
					nJson = JSON.parse(canvasData);
					canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));
						
				});
    $("#zoomin").click(function() {
        if (zoom < 0) {
            zoom = 0;
        }
        var winX = $(window).width();
        zoom += 0.05;
        canvas.setZoom(1 + zoom);
        canvasData = JSON.stringify(canvas.toJSON());
        nJson = JSON.parse(canvasData);
        canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));

    });

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
    });

    $("#zoomtext").keyup(function() {
        if ($("#zoomtext").val() == "")
            var zoom = 0.1;
        else {
            var zoom = $("#zoomtext").val() / 100;
        }
        var winX = $(window).width();
        canvas.setZoom(zoom);
        canvasData = JSON.stringify(canvas.toJSON());
        nJson = JSON.parse(canvasData);
        canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));
    });
    $("#zoomselect ").change(function() {
        var zoom = $("#zoomselect").val() / 100;
        var winX = $(window).width();
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
    var img = ""; // image variable for uploading images to canvas

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

    function canvasAddImage(imageName, leftx, topy) {
        fabric.Image.fromURL("../uploads" + imageName + ".png", function(lImg) {
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

    canvas.on("mouse:down", function() {
        var pointer = canvas.getPointer(event.e);
        if (img != "") {
            canvasAddImage(img, pointer.x, pointer.y);
            img = "";
        }
        var activeObject = canvas.getActiveObject();
        if (
            activeObject &&
            activeObject.type == "image" &&
            activeObject.left == 0 &&
            activeObject.top == 0 &&
            draw == false
        ) {
            initjson();
            selectmode();
        }
    });

    /** Path recording */

    /**
     *  when html file load, get image file name
     */

    /** */

    $(".mode").click(function(e) {
        var id = e.target.id;
        if (id == "selectmode") {
            selectmode();
        } else {
            drawmode();
        }
    });

    function selectmode() {
        canvas.isDrawingMode = 0;
        canvas.selection = true;
        canvas.forEachObject(function(o) {
            o.selectable = true;
        });
        draw = false;
    }

    function drawmode() {
        initjson();
        canvas.isDrawingMode = 1;
        canvas.selection = false;
        canvas.forEachObject(function(o) {
            o.selectable = false;
        });
        draw = true;
    }
    $("#myeraser").click(function() {
        canvas.freeDrawingBrush.color = "#ffffff";
        canvas.freeDrawingBrush.width = $("#size").val();
    });

    function deleteObjects() {
        draw = false;
        var activeObject = canvas.getActiveObject();
        if (activeObject && confirm("Are you sure going to delete Selected Image?")) {
            var n = -1;
            for (var i = 0; i < canvasPathD.length; i++) {
                if (
                    canvasPathD[i].substring(2, 10) ==
                    canvas
                    .getActiveObject()
                    .path[0].toString()
                    .substring(2, 10)
                ) {
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
    </script>
</body>

</html>