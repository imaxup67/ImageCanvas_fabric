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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">			
<link rel="stylesheet" href="../assets/css/mycss.css">
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script type="text/javascript" src="../assets/js/tether.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
                 <h2>File Name :background-3138516_1920 </h2>
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
		<div id = "canvasView" >
			<canvas id="canvas" height="1000" style="border: 1px solid #ccc"></canvas>			
		</div>		
		<img src="../uploads/background-3138516_1920.jpg" id="my-image" style="display:none">
	</div>
	
	<style type="text/css">
		
		h2{
			display: inline;
		}
		
		img:hover{
			cursor: pointer;
		}	
		
		.mode{
			padding: 8px;
			border:1px solid #ebebeb;
			display: inline;
			background: #fff;
			border-radius: 10px;
			font-weight: bold;
			margin-left: 10px;
			position: relative;
    		top: -9px;					
		}
		.mode:hover{
			cursor: pointer;
			background: #ebebeb;
		}
		.modeselect{
			background: #ebebeb;
		}
	</style>     
    <script type="text/javascript">     		   	
     	    	
		var canvas = new fabric.Canvas("canvas");
     	canvas.isDrawingMode= 1;
		canvas.freeDrawingBrush.color = "#0645fb";
		canvas.freeDrawingBrush.width = 1; 
		canvas.renderAll();

		$("#size").on("change", function(){
			var size = this.value;
			 canvas.freeDrawingBrush.width = size/2;		    
			 canvas.renderAll();
			//alert(size);
		})
		$("#color").on("change", function(){
			var color = this.value;
			 canvas.freeDrawingBrush.color = color;		    
			 canvas.renderAll();
			//alert(size);
		})
		$("#fillcolor").on("change", function(){
			fillcolor = this.value;
		})
		
		var imgElement, imgInstance;
		var pathGroup = [];
		var canvasPathFill = [];
		var canvasPathD = [];
		var canvasPathS = [];
		var canvasPathW = [];
		var id_no="2";pathGroup[0]='<path id="ss_0" vector-effect="non-scaling-stroke" fill="#0645fb" stroke-width="1" stroke="#0645fb" d="M 778.9325832368206 123.9201617202004 Q 778.9315832368206 123.9211617202004 769.9381460987431 128.91798275730525 Q 760.9447089606657 133.91480379441012 755.4487195985073 135.91353220925205 Q 749.9527302363488 137.912260624094 736.9622099257924 142.40939955748837 Q 723.9716896152361 146.90653849088272 714.9782524771585 148.90526690572466 Q 705.9848153390811 150.90399532056662 684.0008578904474 154.40177004654004 Q 662.0169004418135 157.89954477251342 637.0351306138206 158.8989089799344 Q 612.0533607858276 159.89827318735536 598.5632050787115 159.89827318735536 Q 585.0730493715952 159.89827318735536 559.0920087504826 159.89827318735536 Q 533.1109681293699 159.89827318735536 512.6259168704156 158.3992268762239 Q 492.1408656114614 156.90018056509246 480.6492514905846 153.40240583911907 Q 469.15763736970786 149.90463111314565 465.66018959378886 148.40558480201418 Q 462.16274181786986 146.90653849088272 458.6652940419508 144.4081279723303 Q 455.1678462660318 141.9097174537779 454.1685754729121 140.91035324635692 Q 453.1693046797924 139.91098903893595 453.1693046797924 136.91289641667305 Q 453.1693046797924 133.91480379441012 453.1693046797924 127.91861854988429 Q 453.1693046797924 121.92243330535845 453.1693046797924 117.92497647567457 Q 453.1693046797924 113.92751964599069 455.6674816625917 107.93133440146487 Q 458.165658645391 101.93514915693905 462.1627418178698 97.43801022354467 Q 466.1598249903487 92.9408712901503 470.15690816282756 89.94277866788738 Q 474.15399133530644 86.94468604562448 483.1474284733839 83.94659342336156 Q 492.1408656114614 80.94850080109865 504.132115128898 77.45072607512525 Q 516.1233646463346 73.95295134915185 523.6178955947325 73.45326924544136 Q 531.1124265431304 72.95358714173088 548.5996654227255 72.95358714173088 Q 566.0869043023206 72.95358714173088 589.5697679406339 73.45326924544136 Q 613.0526315789473 73.95295134915185 626.0431518895036 75.4519976602833 Q 639.03367220006 76.95104397141476 662.5165358383733 81.44818290480913 Q 685.9993994766868 85.94532183820351 702.9870029597221 88.94341446046641 Q 719.9746064427572 91.94150708272933 725.4705958049157 93.4405533938608 Q 730.9665851670741 94.93959970499225 738.9607515120318 97.93769232725515 Q 746.9549178569896 100.93578494951807 750.9520010294684 103.4341954680705 Q 754.9490842019474 105.93260598662292 755.4487195985073 106.93197019404388 Q 755.9483549950671 107.93133440146487 756.9476257881868 109.43038071259633 Q 757.9468965813065 110.92942702372778 757.9468965813065 111.92879123114875 Q 757.9468965813065 112.92815543856972 757.9468965813065 115.92624806083263 Q 757.9468965813065 118.92434068309555 756.9476257881868 120.423386994227 Q 755.9483549950671 121.92243330535845 753.4501780122678 127.4189364461738 Q 750.9520010294685 132.91543958698915 749.453094839789 135.41385010554157 Q 747.9541886501094 137.912260624094 743.9571054776304 144.4081279723303 Q 739.9600223051516 150.90399532056662 736.9622099257924 155.9008163576715 Q 733.9643975464332 160.89763739477632 731.9658559601938 162.89636580961826 Q 729.9673143739544 164.89509422446022 726.9695019945952 166.89382263930216 Q 723.9716896152361 168.8925510541441 721.9731480289967 170.39159736527557 Q 719.9746064427572 171.89064367640702 718.4757002530777 172.3903257801175 L 716.9757940633981 172.891007883828z" fill-opacity="0" stroke-opacity="1" cursor="pointer"></path>';canvasPathFill[0]='#0645fb';canvasPathD[0]='M 778.9325832368206 123.9201617202004 Q 778.9315832368206 123.9211617202004 769.9381460987431 128.91798275730525 Q 760.9447089606657 133.91480379441012 755.4487195985073 135.91353220925205 Q 749.9527302363488 137.912260624094 736.9622099257924 142.40939955748837 Q 723.9716896152361 146.90653849088272 714.9782524771585 148.90526690572466 Q 705.9848153390811 150.90399532056662 684.0008578904474 154.40177004654004 Q 662.0169004418135 157.89954477251342 637.0351306138206 158.8989089799344 Q 612.0533607858276 159.89827318735536 598.5632050787115 159.89827318735536 Q 585.0730493715952 159.89827318735536 559.0920087504826 159.89827318735536 Q 533.1109681293699 159.89827318735536 512.6259168704156 158.3992268762239 Q 492.1408656114614 156.90018056509246 480.6492514905846 153.40240583911907 Q 469.15763736970786 149.90463111314565 465.66018959378886 148.40558480201418 Q 462.16274181786986 146.90653849088272 458.6652940419508 144.4081279723303 Q 455.1678462660318 141.9097174537779 454.1685754729121 140.91035324635692 Q 453.1693046797924 139.91098903893595 453.1693046797924 136.91289641667305 Q 453.1693046797924 133.91480379441012 453.1693046797924 127.91861854988429 Q 453.1693046797924 121.92243330535845 453.1693046797924 117.92497647567457 Q 453.1693046797924 113.92751964599069 455.6674816625917 107.93133440146487 Q 458.165658645391 101.93514915693905 462.1627418178698 97.43801022354467 Q 466.1598249903487 92.9408712901503 470.15690816282756 89.94277866788738 Q 474.15399133530644 86.94468604562448 483.1474284733839 83.94659342336156 Q 492.1408656114614 80.94850080109865 504.132115128898 77.45072607512525 Q 516.1233646463346 73.95295134915185 523.6178955947325 73.45326924544136 Q 531.1124265431304 72.95358714173088 548.5996654227255 72.95358714173088 Q 566.0869043023206 72.95358714173088 589.5697679406339 73.45326924544136 Q 613.0526315789473 73.95295134915185 626.0431518895036 75.4519976602833 Q 639.03367220006 76.95104397141476 662.5165358383733 81.44818290480913 Q 685.9993994766868 85.94532183820351 702.9870029597221 88.94341446046641 Q 719.9746064427572 91.94150708272933 725.4705958049157 93.4405533938608 Q 730.9665851670741 94.93959970499225 738.9607515120318 97.93769232725515 Q 746.9549178569896 100.93578494951807 750.9520010294684 103.4341954680705 Q 754.9490842019474 105.93260598662292 755.4487195985073 106.93197019404388 Q 755.9483549950671 107.93133440146487 756.9476257881868 109.43038071259633 Q 757.9468965813065 110.92942702372778 757.9468965813065 111.92879123114875 Q 757.9468965813065 112.92815543856972 757.9468965813065 115.92624806083263 Q 757.9468965813065 118.92434068309555 756.9476257881868 120.423386994227 Q 755.9483549950671 121.92243330535845 753.4501780122678 127.4189364461738 Q 750.9520010294685 132.91543958698915 749.453094839789 135.41385010554157 Q 747.9541886501094 137.912260624094 743.9571054776304 144.4081279723303 Q 739.9600223051516 150.90399532056662 736.9622099257924 155.9008163576715 Q 733.9643975464332 160.89763739477632 731.9658559601938 162.89636580961826 Q 729.9673143739544 164.89509422446022 726.9695019945952 166.89382263930216 Q 723.9716896152361 168.8925510541441 721.9731480289967 170.39159736527557 Q 719.9746064427572 171.89064367640702 718.4757002530777 172.3903257801175 L 716.9757940633981 172.891007883828z';canvasPathS[0]='#0645fb';canvasPathW[0]='1';pathGroup[1]='<path id="tr_0" vector-effect="non-scaling-stroke" fill="#0645fb" stroke-width="1" stroke="#0645fb" d="M 436.5 110.999 Q 436.5 111 437 111.5 Q 437.5 112 437.5 112.5 Q 437.5 113 437.5 114.5 Q 437.5 116 436 120.5 Q 434.5 125 432 129.5 Q 429.5 134 428 136.5 Q 426.5 139 421.5 144.5 Q 416.5 150 410.5 155 Q 404.5 160 397 166.5 Q 389.5 173 385.5 176.5 Q 381.5 180 372.5 187 Q 363.5 194 353 201 Q 342.5 208 336.5 211.5 Q 330.5 215 319.5 219.5 Q 308.5 224 304 225 Q 299.5 226 290.5 228 Q 281.5 230 276.5 230.5 Q 271.5 231 269.5 231 Q 267.5 231 266.5 231 Q 265.5 231 265 230.5 Q 264.5 230 264.5 229.5 Q 264.5 229 264 227.5 Q 263.5 226 261.5 221 Q 259.5 216 259.5 213 Q 259.5 210 257.5 202.5 Q 255.5 195 255 185.5 Q 254.5 176 254.5 170.5 Q 254.5 165 255.5 154 Q 256.5 143 258.5 132 Q 260.5 121 262 117 Q 263.5 113 267.5 106 Q 271.5 99 275 94.5 Q 278.5 90 281 88.5 Q 283.5 87 289 83.5 Q 294.5 80 303 78 Q 311.5 76 316.5 75.5 Q 321.5 75 332 75 Q 342.5 75 355 75 Q 367.5 75 373.5 76 Q 379.5 77 390 80 Q 400.5 83 408 86 Q 415.5 89 419 91 Q 422.5 93 428 97.5 Q 433.5 102 437.5 106.5 Q 441.5 111 443.5 114 Q 445.5 117 449 123 Q 452.5 129 455 135 Q 457.5 141 458.5 144 Q 459.5 147 461 152 Q 462.5 157 463 162.5 Q 463.5 168 463.5 170 Q 463.5 172 463.5 175.5 Q 463.5 179 463.5 181 Q 463.5 183 463.5 183.5 L 463.5 184.001z" fill-opacity="0" stroke-opacity="1" cursor="pointer"></path>';canvasPathFill[1]='#0645fb';canvasPathD[1]='M 436.5 110.999 Q 436.5 111 437 111.5 Q 437.5 112 437.5 112.5 Q 437.5 113 437.5 114.5 Q 437.5 116 436 120.5 Q 434.5 125 432 129.5 Q 429.5 134 428 136.5 Q 426.5 139 421.5 144.5 Q 416.5 150 410.5 155 Q 404.5 160 397 166.5 Q 389.5 173 385.5 176.5 Q 381.5 180 372.5 187 Q 363.5 194 353 201 Q 342.5 208 336.5 211.5 Q 330.5 215 319.5 219.5 Q 308.5 224 304 225 Q 299.5 226 290.5 228 Q 281.5 230 276.5 230.5 Q 271.5 231 269.5 231 Q 267.5 231 266.5 231 Q 265.5 231 265 230.5 Q 264.5 230 264.5 229.5 Q 264.5 229 264 227.5 Q 263.5 226 261.5 221 Q 259.5 216 259.5 213 Q 259.5 210 257.5 202.5 Q 255.5 195 255 185.5 Q 254.5 176 254.5 170.5 Q 254.5 165 255.5 154 Q 256.5 143 258.5 132 Q 260.5 121 262 117 Q 263.5 113 267.5 106 Q 271.5 99 275 94.5 Q 278.5 90 281 88.5 Q 283.5 87 289 83.5 Q 294.5 80 303 78 Q 311.5 76 316.5 75.5 Q 321.5 75 332 75 Q 342.5 75 355 75 Q 367.5 75 373.5 76 Q 379.5 77 390 80 Q 400.5 83 408 86 Q 415.5 89 419 91 Q 422.5 93 428 97.5 Q 433.5 102 437.5 106.5 Q 441.5 111 443.5 114 Q 445.5 117 449 123 Q 452.5 129 455 135 Q 457.5 141 458.5 144 Q 459.5 147 461 152 Q 462.5 157 463 162.5 Q 463.5 168 463.5 170 Q 463.5 172 463.5 175.5 Q 463.5 179 463.5 181 Q 463.5 183 463.5 183.5 L 463.5 184.001z';canvasPathS[1]='#0645fb';canvasPathW[1]='1';var pathArr = [];
		
		var pathStrokeArr = [];
		var pathStrokeWArr = [];
		var fillcolor = $("#fillcolor").val();		
		
		canvas.on("path:created",function(e){     		
	     	id_no++;
			var dd = e.path.path;

			var pathline = dd.toString();
			var pathString = "";
			for (var i = 0; i < pathline.length; i++) {
				if(pathline.charAt(i)  === ","){					
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
		$("#pathReg").on("click",function(){			
			var pID = $("#pathID").val();			
			if(pID != ""){				
				for (var i = 0; i < pathArr.length; i++) {
					
					var paths = '<path id="'+pID+'_'+i+'" vector-effect="non-scaling-stroke" fill="'+fillcolor+'" stroke-width="'+pathStrokeWArr[i]+'" stroke="'+pathStrokeArr[i]+'" d="'+pathArr[i]+'" fill-opacity="0" stroke-opacity="1" cursor="pointer"></path>';
					
					pathGroup.push(paths);
					
				}
				pathArr = [];
				pathStrokeArr=[];
				pathStrokeWArr=[];
				
				$("#pathID").val("");
				
			}
			else{$("#pathID").focus();}
			
		}) 
	
		$("#saveSVG").on("click",function(){
			$.ajax({
				url: "../public/savesvg.php",
				type: "post",
				data:{
					"paths":pathGroup,
					"imgName":imgn,
					"imgfullname":"background-3138516_1920.jpg",
					"canvasWidth" : canvasWidth,
					"canvasHeight" : canvasHeight,
					"num" : id_no,
					"canvasPathD":canvasPathD,
					"canvasPathFill":canvasPathFill,
					"canvasPathS":canvasPathS,
					"canvasPathW":canvasPathW,
				},
				success: function(result){
					alert(result);					
			    	document.location = "../svgs/"+imgn+".php";
			    }
			});
		})

		var imgn = ""; var canvasWidth = 0;
     	$(document).ready(function(){
     		var imgnn = "background-3138516_1920.jpg";
     		for (var i = 0; i < imgnn.length; i++) {
				if(imgnn.charAt(i)  === "."){					
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
			var winX = $("#canvasView").width()*0.8;
			var winY = $("#canvasView").height()*0.8;
			canvasWidth = winX;
			canvasHeight = winY;
			imgInstance.scaleToWidth(winX);			
			canvas.setWidth(winX);
			canvas.setZoom(1);
			canvas.add(imgInstance);var path0 = new fabric.Path(canvasPathD[0]);path0.set({ fill: false, stroke: canvasPathS[0]});canvas.add(path0);var path1 = new fabric.Path(canvasPathD[1]);path1.set({ fill: false, stroke: canvasPathS[1]});canvas.add(path1);canvasData = JSON.stringify(canvas.toJSON());

			drawmode();

     	});
     	var canvasData;
     	$(window).resize(function(){
     		canvas.clear();
     		var canvasJson = JSON.parse(canvasData);
			canvas.loadFromJSON(
				          canvasJson,
				          canvas.renderAll.bind(canvas));
			
			 var winX = $("#canvasView").width()*0.8;
			 var winXO = canvasWidth;		
			
			canvas.setZoom(eval(winX)/eval(winXO));
			canvas.setWidth(winX);
		})

     	$("#saveIMG").on("click",function(){
			$("canvas").get(0).toBlob(function(blob){
				saveAs(blob,"background-3138516_1920.jpg.png");
			})
		})	
		$("#zoomreset").click(function(){
					
			canvas.setZoom(1);
			canvasData = JSON.stringify(canvas.toJSON());
			nJson = JSON.parse(canvasData);
			canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));
				
		});
				var zoom = 0;
				$("#zoomin").click(function(){	
					if (zoom < 0) {
						zoom = 0;
					}
					zoom += 0.05;
					canvas.setZoom(1 + zoom);
					canvasData = JSON.stringify(canvas.toJSON());
					nJson = JSON.parse(canvasData);
					canvas.loadFromJSON(nJson, canvas.renderAll.bind(canvas));						
				})

				$("#zoomout").click(function(){	
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
					zoom = zoom + delta/400;
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
			function selectmode(){
				canvas.isDrawingMode = 0;
				canvas.selection = true;
					canvas.forEachObject(function(o) {
						o.selectable = true;
				})
				draw = false;
			}
			function drawmode(){			
				initjson();
				canvas.isDrawingMode = 1;	
				canvas.selection = false;
					canvas.forEachObject(function(o) {
						o.selectable = false;
				})
				draw = true;
				

			}
			function initjson(){
			    	var canvasData = JSON.stringify(canvas.toJSON());
					var canvasJson = JSON.parse(canvasData);						
					var nJson = JSON.parse(canvasData);
					nJson.objects = [];
					
						
					for (var i = 0; i < canvasJson.objects.length; i++) {
						
                            nJson.objects.push(canvasJson.objects[i]);
                                
						
							
					}
					canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
			    }
			$(".mode").click(function(e){
				$(".mode").removeClass("modeselect");
				var id = e.target.id;
				$("#"+id).addClass("modeselect");
				if (id == "selectmode") {
					selectmode();
				}
				else{
					drawmode();
				}
			})
			
			function deleteObjects(){
				var activeObject = canvas.getActiveObject();				    
				if (activeObject && confirm("Are you sure?") ) {
					var n = -1;
					for (var i = 0; i < canvasPathD.length; i++) {
						if (canvasPathD[i].substring(2,10) == canvas.getActiveObject().path[0].toString().substring(2,10)) {
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
			var img="";
			canvas.on("mouse:down", function() {
				var pointer = canvas.getPointer(event.e);
				if (img != "") {
					canvasAddImage(img,pointer.x,pointer.y);					
					//selectmode();
					img = "";
					$(".mode").removeClass("modeselect");
					$("#drawmode").addClass("modeselect");

				}

				var activeObject = canvas.getActiveObject();
				if (activeObject && activeObject.type == "image" && activeObject.left==0 && activeObject.top==0 && draw == false) {	
					$(".mode").removeClass("modeselect");
					$("#selectmode").addClass("modeselect");
					initjson();
					selectmode();
				}
			})
			function canvasAddImage(imageName,leftx,topy) {
					fabric.Image.fromURL("./assets/icon/"+imageName+".png", function(lImg) {
							var imgToAdd = lImg.set({left: leftx, top: topy, scaleX: 0.3, scaleY: 0.3});
							canvas.add(imgToAdd);
							canvasData = JSON.stringify(canvas.toJSON());
							nJson = JSON.parse(canvasData);
							canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
						});
					
					
			}
			$("#resvg").click(function(){
				document.location="../svgs/background-3138516_1920.php";
			})
     </script>


</body>
</html>