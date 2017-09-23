/*customjs begining...... */

var fileName = $("#phpvalue").text();
var zoom = 0;
var canvasData;
var draw = false;
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
var imgn = " "; //image name without file extention
var canvasWidth = 0; //initial canvas width
var img = ""; // image variable for uploading images to canvas
const winX = $(".canvasView").width();

var canvas = new fabric.Canvas("myCanvas");
canvas.isDrawingMode = 1;
canvas.freeDrawingBrush.color = "#0645fb";
canvas.freeDrawingBrush.width = 1;
canvas.renderAll();
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
  $("#pathReg").css("display", "inline");
  canvasPathD.push(pathString);
  canvasPathFill.push(fillcolor);
  canvasPathS.push(e.path.stroke);
  canvasPathW.push(e.path.strokeWidth);
  canvasData = JSON.stringify(canvas.toJSON());
});
/** Path recording */
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
      console.log(pathGroup);
    }
    pathArr = [];
    pathStrokeArr = [];
    pathStrokeWArr = [];

    $("#pathID").val("");
    // $("#saveSVG").css("display", "inline");
  } else {
    $("#pathID").focus();
  }
});
/**
 *  when html file load, get image file name
 */
$(document).ready(function() {
  var imgnn = fileName; // name gotten from fileUpload.php using header
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
  // canvas.setDimensions({width:800, height:600});
  
  // var winY = $(".canvasView").height() * 0.6;
  imgInstance.scaleToWidth(winX);
  // imgInstance.scaleToWidth(winY);
  canvas.setWidth(winX);
  // console.log(canvas.setWidth(winX));
  // canvas.setWidth(winY);
  canvas.setZoom(1);
  canvas.add(imgInstance);
  canvasData = JSON.stringify(canvas.toJSON());
  drawmode();
});
/** */
$(window).resize(function() {
  canvas.clear();
  var canvasJson = JSON.parse(canvasData);
  canvas.loadFromJSON(canvasJson, canvas.renderAll.bind(canvas));

  var winX = $("#myCanvas").width() * 0.7;
  var winXO = canvasWidth;

  canvas.setZoom(eval(winX) / eval(winXO));
  canvas.setWidth(winX);
});

$("#saveIMG").on("click", function() {
  $("canvas")
    .get(0)
    .toBlob(function(blob) {
      saveAs(blob, imgn.concat("png"));
    });
});

$("#saveSVG").on("click", function() {
  $.ajax({
    url: "savesvg.php",
    type: "post",
    data: {
      paths: pathGroup,
      imgname: imgn,
      imgfullname: fileName,
      canvasWidth: canvasWidth,
      // canvasHeight: canvasHeight,
      num: id_no,
      canvasPathD: canvasPathD,
      canvasPathFill: canvasPathFill,
      canvasPathS: canvasPathS,
      canvasPathW: canvasPathW
    },
    
    success: function(result) {
      alert(result);
      document.location = "svgs/" + fileName + '.php';
    }
  });
});

$("#zoomtext").keyup(function() {
  if($("#zoomtext").val() == "")
  var zoom =0.1;
  else{
    var zoom = $("#zoomtext").val() / 100;
  }
  canvas.setZoom(zoom);
  canvas.setWidth(zoom * winX);
  canvasData = JSON.stringify(canvas.toJSON());
  nJson = JSON.parse(canvasData);
  canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));
});
$("#zoomselect ").change(function() {
  var zoom =$("#zoomselect").val() /100;
  canvas.setWidth(zoom * winX);
  canvas.setZoom(zoom);
  canvasData = JSON.stringify(canvas.toJSON());
  nJson = JSON.parse(canvasData);
  canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));
  
});

$("#zoomin").click(function() {
  if (zoom < 0) {
    zoom = 0;
  }
  zoom += 0.1;
 
  canvas.setZoom(1 + zoom);
  canvas.setWidth((1 + zoom) * winX);
  canvasData = JSON.stringify(canvas.toJSON());
  nJson = JSON.parse(canvasData);
  canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));
});

$("#zoomout").click(function() {
  if (zoom <= 0) {
    zoom = 0;
    return;
  }
  zoom -= 0.1;
  canvas.setZoom(1 + zoom);
  canvas.setWidth((1 + zoom) * winX);
  canvasData = JSON.stringify(canvas.toJSON());
  nJson = JSON.parse(canvasData);
  canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));
});

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
