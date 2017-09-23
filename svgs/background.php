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
			<title>background</title>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">			
			<link rel="stylesheet" href="../assets/css/mycss.css">
			<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script type="text/javascript" src="../assets/js/tether.min.js"></script>
    		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
			<script type="text/javascript" src="../assets/js/fabric.js"></script>
			<script type="text/javascript" src="../assets/js/FileSaver.js"></script>
		</head>
		<body id="body1">
			<div class="container" >
				<div class="row">
					<div class="col-md-2">
					
					</div>
					<div class="col-md-8 " id="title">
						<h2> File Name : "background" </h2>
					</div>
				</div>
				<div class="row toolbar">
					<div class="col-md-2">
						<div class="row">
							<button type="button" id="saveIMG" class="btn btn-danger">Save as Image</button>
						</div>
						<div class="row " id="saveredo">
							<button type="button" id="svg" class="btn btn-danger " style="display:none">SVG</button>
							<button type="button" id="can" class="btn btn-danger ">Canvas</button>
							<button type="button" class="btn btn-danger" id="redo">Before</button>
						</div>
					</div>
					<div class="col-md-4 can" style="display:none">
						<div class="colorboard row">
							<img src="../assets/icon/red.png" class="pencolor" id="ff3821">
							<img src="../assets/icon/blue.png" class="pencolor" id="1f2eff">
							<img src="../assets/icon/green.png" class="pencolor" id="1a7c1e">
							<img src="../assets/icon/black.png" class="pencolor" id="252425">
							<img src="../assets/icon/white.png" class="pencolor" id="f9f8f9">
							<input id="selectcolor" type="color" value="#0645fb">
							<input id="pencolor" value="" type="hidden">
						</div>
						<div class="brushsizeboard row">
							<img src="../assets/icon/small.png" class="pensize" id="1">
							<img src="../assets/icon/medium.png" class="pensize" id="5">
							<img src="../assets/icon/large.png" class="pensize" id="10">
							<img src="../assets/icon/elarge.png" class="pensize" id="15">
							<input name="" type="text" class="pensizetext" id="pensizeid"/>
							<div class="btn-group">
								<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split custombutton" data-toggle="dropdown">
								</button>
								<div class="dropdown-menu"><a class="dropdown-item" href="#"><div id=5 class="pensize" style="background-color:black;border-radius:5px; width: 5px; height:5px;"></div></a><a class="dropdown-item" href="#"><div id=10 class="pensize" style="background-color:black;border-radius:10px; width: 10px; height:10px;"></div></a><a class="dropdown-item" href="#"><div id=15 class="pensize" style="background-color:black;border-radius:15px; width: 15px; height:15px;"></div></a><a class="dropdown-item" href="#"><div id=20 class="pensize" style="background-color:black;border-radius:20px; width: 20px; height:20px;"></div></a><a class="dropdown-item" href="#"><div id=25 class="pensize" style="background-color:black;border-radius:25px; width: 25px; height:25px;"></div></a><a class="dropdown-item" href="#"><div id=30 class="pensize" style="background-color:black;border-radius:30px; width: 30px; height:30px;"></div></a><a class="dropdown-item" href="#"><div id=35 class="pensize" style="background-color:black;border-radius:35px; width: 35px; height:35px;"></div></a><a class="dropdown-item" href="#"><div id=40 class="pensize" style="background-color:black;border-radius:40px; width: 40px; height:40px;"></div></a><a class="dropdown-item" href="#"><div id=45 class="pensize" style="background-color:black;border-radius:45px; width: 45px; height:45px;"></div></a><a class="dropdown-item" href="#"><div id=50 class="pensize" style="background-color:black;border-radius:50px; width: 50px; height:50px;"></div></a><a class="dropdown-item" href="#"><div id=55 class="pensize" style="background-color:black;border-radius:55px; width: 55px; height:55px;"></div></a><a class="dropdown-item" href="#"><div id=60 class="pensize" style="background-color:black;border-radius:60px; width: 60px; height:60px;"></div></a><a class="dropdown-item" href="#"><div id=65 class="pensize" style="background-color:black;border-radius:65px; width: 65px; height:65px;"></div></a></div>
							</div>					
							<input id="pensize" value="" type="hidden">
						</div>
						<div class="row penstyleboard">
							<img src="../assets/icon/pencil.png" class="penstyle" id="pencil">
							<img src="../assets/icon/straight.png" class="penstyle " id="straight">						
							<img src="../assets/icon/straightarrow.png" class="penstyle" id="straightarrow">
							<img src="../assets/icon/hline.png" class="penstyle" id="hline">
							<img src="../assets/icon/square.png" class="penstyle" id="square">
							<div class="btn-group">
								<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split custombutton" data-toggle="dropdown">
								</button>
								<div class="dropdown-menu">
								<a class="dropdown-item" href="#"><img src="../assets/icon/vline.png" class="penstyle"
                                    id="vline"></a>
								
                            <a class="dropdown-item" href="#"><img id="solid1" class="penstyle"
                                    src="../assets/icon/solid1.png"></a>
                            
								</div>
							</div>
							<input id="penstyle" value="" type="hidden">
						</div>
										
					</div>
					<div class="col-md-5 can" style="display:none">
						<div class="row icontool">
							<div>
							<img src="../assets/icon/cyst.png" class="icon" id="cyst">
							<img id="attachtxt" class="icon" src="../assets/icon/text.png">
							<img id="check" class="icon" src="../assets/icon/check.png">
							<img id="x" class="icon" src="../assets/icon/x.png">
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split custombutton" data-toggle="dropdown">
								</button>
								<div class="dropdown-menu">
								<a class="dropdown-item" href="#"><img id="distance" class="icon"
										src="../assets/icon/distance.png"></a>
								<a class="dropdown-item" href="#"><img id="pipeline" class="icon"
								src="../assets/icon/pipeline.png"></a>
								<a class="dropdown-item" href="#"><img id="star" class="icon"
										src="../assets/icon/star.png"></a>
								
									<a class="dropdown-item" href="#"><img id="spongiform1" class="icon"
                                    src="../assets/icon/spongiform1.png"></a>
								<a class="dropdown-item" href="#"><img id="soongiform2" class="icon"
                                    src="../assets/icon/soongiform2.png"></a>
								<a class="dropdown-item" href="#"><img id="scar1" class="icon" src="../assets/icon/scar1.png"></a>
								
								<a class="dropdown-item" href="#"><img id="bpipeline" class="icon"
										src="../assets/icon/bpipeline.png"></a>
								<a class="dropdown-item" href="#"><img id="spipeline" class="icon"
										src="../assets/icon/spipeline.png"></a>
								
								<a class="dropdown-item" href="#"><img id="join" class="icon"
										src="../assets/icon/join.png"></a>
								<a class="dropdown-item" href="#"><img id="scar2" class="icon" src="../assets/icon/scar2.png"></a>
								
								<a class="dropdown-item" href="#"><img id="songiform3" class="icon" src="../assets/icon/songiform3.png"></a>
									</div>
							</div>
						</div>	
						<div class="row zoomtoolrow">
							<div class="col-md-6 zoomtool">
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
							<div class="col-md-6">
								<button type="button" class="btn btn-primary mode" id="myeraser">Eraser</button>
								<img src="../assets/icon/undo.png" class="redo" onclick="undo()">
								<img src="../assets/icon/redo.png" class="redo" onclick="redo()">
							</div>
						</div>
						<div class="row selecttool">
							<div>
								<button class="mode btn btn-primary" id="selectmode"> Select</button>
								<button class="mode btn btn-primary" id="drawmode"> Draw</button>
								<button class="mode btn btn-primary" id="delete"> Delete</button>
								<button class="mode btn btn-primary" onclick="allclear()"> Clear</button>
							</div>
							<div>
								<button class="mode btn btn-primary" id="addtxt"> Add Text</button>
								<button class="mode btn btn-primary" id="addshape"> Add Shape</button>
								
							</div>
						</div>
					</div>
				</div>
				<div id="shapeselect" style="width:230px;position:absolute;display:none">
						<table>
							<tr><td><b onclick=addshape("circle");>Circle</b></td></tr>
							<tr><td><b onclick=addshape("rectangle")>Rectangle</b></td></tr>
						</table>
					</div>
				</div>
			<div class="container can" id="canV" style="display:none;margin-left:4%;width:100%;position:relative">
				<div id="canvasView">
					<canvas id="canvas" style="border: 1px solid #ccc" >
					</canvas>
				</div>
				<div id="txtmodify" style="width:327px;position:absolute;display:none">
					<table>
						<tr>
							<td><b id="fontWeight">B</b></td>
							<td><i id="fontStyle">I</i></td>
							<td>
								<select id="fontSize">
									<option value="10">10</option>
									<option value="12">12</option>
									<option value="14">14</option>
									<option value="16">16</option>
									<option value="18">18</option>
									<option value="20" selected="selected">20</option>
									<option value="24">24</option>
									<option value="30">30</option>
								</select>
							</td>
							<td style="width:94px">
								<select id="fontFamily">
									<option value="Arial" selected="selected">Arial</option>
									<option value="Arial Black">Arial Black</option>
									<option value="SimSun">SimSun</option>
									<option value="Cambria">Cambria</option>
									<option value="Calibri">Calibri</option>
									<option value="SimHei">SimHei</option>
									<option value="Comic Sans MS">Comic Sans MS</option>
								</select>
							</td>
							<td>
								<input id="fontColor" type="color" value="#0645fb">	
							</td>
							<td>
								<img src="../assets/icon/del.png" onclick="deleteObjects();">
							</td>
						</tr>
					</table>
					<input type="hidden" id="fweight" value="normal">
					<input type="hidden" id="fstyle" value="normal">									
				</div>
				<div id="shapemodify" style="width:230px;position:absolute;display:none">
					<table>
						<tr>							
							<td>
								<select id="lineSize">
									<option value="2">2</option>
									<option value="4">4</option>
									<option value="6">6</option>
									<option value="8">8</option>
									<option value="10">10</option>
									<option value="12">12</option>
									<option value="14">14</option>
									<option value="16">16</option>
									<option value="18">18</option>									
								</select>
							</td>
							<td>								
								<input id="lineColor" type="color" value="#0645fb">	
							</td>							
							<td>
								<img src="../assets/icon/del.png" onclick="deleteObjects();">
							</td>
						</tr>
					</table>														
				</div>
				<div id="imagemodify" style="width:230px;position:absolute;display:none">
					<table>
						<tr>							
							<td>								
								<img src="../assets/icon/rotateimg.png" onclick="rotateObjects();">	
							</td>							
							<td>
								<img src="../assets/icon/del.png" onclick="deleteObjects();">
							</td>
						</tr>
					</table>														
				</div>
				<div id="drawmodify" style="width:350px;position:absolute;display:none">
					<table>
						<tr>
							<td>
								<select id="drawSize">
									<option value="2">2</option>
									<option value="4">4</option>
									<option value="6">6</option>
									<option value="8">8</option>
									<option value="10">10</option>
									<option value="12">12</option>
									<option value="14">14</option>
									<option value="16">16</option>
									<option value="18">18</option>									
								</select>
							</td>
							<td>								
								<input id="drawColor" type="color" value="#0645fb">	
							</td>							
							<td>								
								<img src="../assets/icon/rotateimg.png" onclick="rotateObjects();">	
							</td>							
							<td>
								<img src="../assets/icon/del.png" onclick="deleteObjects();">
							</td>
						</tr>
					</table>														
				</div>
			</div>
			<div id="container" style="margin-left:4%;width:80%; height:1000px;">
				<svg id="svgl" version="1.1" xmlns="http://www.w3.org/2000/svg" width="1092.8px" height="1000px" viewBox="0 0 1092.8 1000" xml:space="preserve">
					<g id="regions"><path id="ss_0" vector-effect="non-scaling-stroke" fill="#0645fb" stroke-width="1" stroke="#0645fb" d="M 746.9559178569896 121.92143330535845 Q 746.9549178569896 121.92243330535845 744.9563762707502 122.92179751277942 Q 742.9578346845108 123.9211617202004 738.461116115472 127.91861854988429 Q 733.9643975464332 131.91607537956816 725.9702312014756 134.91416800183106 Q 717.9760648565178 137.912260624094 712.4800754943594 139.91098903893595 Q 706.9840861322009 141.9097174537779 693.4939304250847 143.90844586861982 Q 680.0037747179684 145.90717428346176 656.5209110796551 146.40685638717224 Q 633.0380474413417 146.90653849088272 618.048985544546 146.90653849088272 Q 603.0599236477501 146.90653849088272 570.5836228713592 146.90653849088272 Q 538.1073220949685 146.90653849088272 508.1291983013769 146.90653849088272 Q 478.1510745077853 146.90653849088272 464.66091880066915 146.90653849088272 Q 451.1707630935529 146.90653849088272 433.183888817398 146.90653849088272 Q 415.19701454124305 146.90653849088272 403.7054004203663 146.40685638717224 Q 392.2137862994895 145.90717428346176 389.71560931669023 145.40749217975127 Q 387.21743233389094 144.9078100760408 384.71925535109165 143.40876376490934 Q 382.22107836829235 141.9097174537779 381.7214429717325 139.41130693522547 Q 381.22180757517265 136.91289641667302 381.22180757517265 133.9148037944101 Q 381.22180757517265 130.9167111721472 384.71925535109165 124.42084382391089 Q 388.21670312701065 117.92497647567458 390.71488010980994 114.92688385341167 Q 393.21305709260923 111.92879123114875 401.207223437567 105.43292388291243 Q 409.20138978252476 98.93705653467613 420.6930039034015 93.4405533938608 Q 432.1846180242783 87.94405025304545 447.17367992107404 84.44627552707205 Q 462.16274181786986 80.94850080109865 473.6543559387466 79.4494544899672 Q 485.1459700596234 77.95040817883574 509.1284690944966 76.45136186770429 Q 533.1109681293699 74.95231555657283 555.0949255780037 74.95231555657283 Q 577.0788830266374 74.95231555657283 589.0701325440741 74.95231555657283 Q 601.0613820615107 74.95231555657283 627.0424226826234 77.45072607512526 Q 653.0234633037361 79.94913659367768 671.5099729764509 82.9472292159406 Q 689.9964826491656 85.94532183820351 695.992107407884 87.94405025304545 Q 701.9877321666023 89.94277866788738 709.4822631150003 92.9408712901503 Q 716.9767940633981 95.93896391241321 720.4742418393171 98.43737443096563 Q 723.9716896152361 100.93578494951807 724.9709604083557 101.93514915693905 Q 725.9702312014755 102.93451336436001 725.9702312014755 104.93324177920195 Q 725.9702312014755 106.9319701940439 725.9702312014755 108.93069860888585 Q 725.9702312014755 110.92942702372778 724.9709604083557 115.42656595712215 Q 723.9716896152361 119.92370489051652 720.9738772358769 125.91989013504234 Q 717.9760648565178 131.91607537956816 716.9767940633981 134.91416800183106 Q 715.9775232702783 137.912260624094 712.4800754943593 143.40876376490934 Q 708.9826277184403 148.9052669057247 705.4851799425213 152.90272373540859 Q 701.9877321666023 156.90018056509246 696.4917428044439 160.39795529106584 Q 690.9957534422854 163.89573001703923 688.997211856046 165.39477632817068 Q 686.9986702698066 166.89382263930216 682.002316304208 168.8925510541441 Q 677.0059623386094 170.89127946898603 674.0081499592502 172.3903257801175 Q 671.010337579891 173.88937209124896 670.0110667867714 173.88937209124896 Q 669.0117959936516 173.88937209124896 669.0117959936516 172.3903257801175 Q 669.0117959936516 170.89127946898603 669.5114313902114 169.39223315785458 L 670.0120667867712 167.89218684672312z" fill-opacity="0" stroke-opacity="1" cursor="pointer"></path></g></svg></div>
			<script type="text/javascript">
	     			
		     	$("#body1").on("dblclick",function(e){
		     		$("#note").css("display","none");
		     		if(e.target.tagName != "path"){		     			
		     			$("#container").html('<svg id=\"svgl\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1092.8px\" height=\"614.4000000000001px\" viewBox=\"0 0 1092.8 1000\" xml:space=\"preserve\"><g id=\"regions\"><path id="ss_0" vector-effect="non-scaling-stroke" fill="#0645fb" stroke-width="1" stroke="#0645fb" d="M 746.9559178569896 121.92143330535845 Q 746.9549178569896 121.92243330535845 744.9563762707502 122.92179751277942 Q 742.9578346845108 123.9211617202004 738.461116115472 127.91861854988429 Q 733.9643975464332 131.91607537956816 725.9702312014756 134.91416800183106 Q 717.9760648565178 137.912260624094 712.4800754943594 139.91098903893595 Q 706.9840861322009 141.9097174537779 693.4939304250847 143.90844586861982 Q 680.0037747179684 145.90717428346176 656.5209110796551 146.40685638717224 Q 633.0380474413417 146.90653849088272 618.048985544546 146.90653849088272 Q 603.0599236477501 146.90653849088272 570.5836228713592 146.90653849088272 Q 538.1073220949685 146.90653849088272 508.1291983013769 146.90653849088272 Q 478.1510745077853 146.90653849088272 464.66091880066915 146.90653849088272 Q 451.1707630935529 146.90653849088272 433.183888817398 146.90653849088272 Q 415.19701454124305 146.90653849088272 403.7054004203663 146.40685638717224 Q 392.2137862994895 145.90717428346176 389.71560931669023 145.40749217975127 Q 387.21743233389094 144.9078100760408 384.71925535109165 143.40876376490934 Q 382.22107836829235 141.9097174537779 381.7214429717325 139.41130693522547 Q 381.22180757517265 136.91289641667302 381.22180757517265 133.9148037944101 Q 381.22180757517265 130.9167111721472 384.71925535109165 124.42084382391089 Q 388.21670312701065 117.92497647567458 390.71488010980994 114.92688385341167 Q 393.21305709260923 111.92879123114875 401.207223437567 105.43292388291243 Q 409.20138978252476 98.93705653467613 420.6930039034015 93.4405533938608 Q 432.1846180242783 87.94405025304545 447.17367992107404 84.44627552707205 Q 462.16274181786986 80.94850080109865 473.6543559387466 79.4494544899672 Q 485.1459700596234 77.95040817883574 509.1284690944966 76.45136186770429 Q 533.1109681293699 74.95231555657283 555.0949255780037 74.95231555657283 Q 577.0788830266374 74.95231555657283 589.0701325440741 74.95231555657283 Q 601.0613820615107 74.95231555657283 627.0424226826234 77.45072607512526 Q 653.0234633037361 79.94913659367768 671.5099729764509 82.9472292159406 Q 689.9964826491656 85.94532183820351 695.992107407884 87.94405025304545 Q 701.9877321666023 89.94277866788738 709.4822631150003 92.9408712901503 Q 716.9767940633981 95.93896391241321 720.4742418393171 98.43737443096563 Q 723.9716896152361 100.93578494951807 724.9709604083557 101.93514915693905 Q 725.9702312014755 102.93451336436001 725.9702312014755 104.93324177920195 Q 725.9702312014755 106.9319701940439 725.9702312014755 108.93069860888585 Q 725.9702312014755 110.92942702372778 724.9709604083557 115.42656595712215 Q 723.9716896152361 119.92370489051652 720.9738772358769 125.91989013504234 Q 717.9760648565178 131.91607537956816 716.9767940633981 134.91416800183106 Q 715.9775232702783 137.912260624094 712.4800754943593 143.40876376490934 Q 708.9826277184403 148.9052669057247 705.4851799425213 152.90272373540859 Q 701.9877321666023 156.90018056509246 696.4917428044439 160.39795529106584 Q 690.9957534422854 163.89573001703923 688.997211856046 165.39477632817068 Q 686.9986702698066 166.89382263930216 682.002316304208 168.8925510541441 Q 677.0059623386094 170.89127946898603 674.0081499592502 172.3903257801175 Q 671.010337579891 173.88937209124896 670.0110667867714 173.88937209124896 Q 669.0117959936516 173.88937209124896 669.0117959936516 172.3903257801175 Q 669.0117959936516 170.89127946898603 669.5114313902114 169.39223315785458 L 670.0120667867712 167.89218684672312z" fill-opacity="0" stroke-opacity="1" cursor="pointer"></path></g></svg>');	
		     			for (var i = 0; i < indexofsvg.length; i++) {
		     				$("#"+indexofsvg[i]).attr("fill-opacity",0.7);
		     			};	     		
		     		}
		     		else{
		     			var idd = e.target.id;
		     			var iddd = "";		     			
		     			for(var j=0; j<idd.length; j++){
			     			if(idd.charAt(j) == "_"){
			     				break;
			     			}
		     				iddd += idd.charAt(j);
		     			}
		     			var currentWidth = $("#container").width()*0.8;
			     		$("#svgl path").css("fill-opacity",0);
			     		var string = "<svg id=\"svgl\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width="+currentWidth+"px height=\"1000px\" viewBox=\"0 0 1500 1000\" xml:space=\"preserve\"><image clip-path=url(\"#clipPath\") style=\"transform:scale(3);transform-origin:"+(e.pageX-200)+"px "+e.pageY+"px; \" overflow=\"visible\" width=\"1092.8\"  xlink:href=\"..//background.jpg\"></image><defs><clipPath id=\"clipPath\">";
			     	
			     		for(var k=1; k<=1; k++){
			     			
			     			var id1 = $("#svgl path:nth-child("+k+")").attr("id");
			     			var d = $("#svgl path:nth-child("+k+")").attr("d");
			     			var id2 = "";
				     		for(var s=0; s<id1.length; s++){
				     			if(id1.charAt(s) == "_"){
				     				break;
				     			}
				     			id2 += id1.charAt(s);
				     		}
				     		if(id2 == iddd){
				     			string += "<path d='"+d+"'></path>";
				     		}
			     		}
			     		string += "</clipPath></defs></svg>";
		     			$("#container").html(string);
		     		}
		     		

		     	})
		     	$("#body1").on("mouseover",function(e){
		     		var idd = e.target.id;
		     		var iddd = "";
		     		for(var j=0; j<idd.length; j++){
		     			if(idd.charAt(j) == "_"){
		     				break;
		     			}
		     			iddd += idd.charAt(j);
		     		}
		     		if (e.target.tagName == "path") {		     		
			     		if ($("#"+idd).css("fill-opacity") != 0.7) {
			     			$("#"+idd).css("fill-opacity",0.3);
			     		}
		     		}
		     		var XX = e.pageX;
		     		var YY = e.pageY-80;
		     		if(idd.indexOf("_") != -1){
		     			$("#note").css("display","block");
		     			$("#note").css({"left":XX,"top":YY});
		     			$("#note p").html(iddd);
		     		}
		     		else{
		     			$("#note").css("display","none");
		     		}

		     	})
		     	$("#body1").on("mouseout",function(e){
		     		var idd = e.target.id; 
		     		if (e.target.tagName == "path") {			     		
			     		if ($("#"+idd).css("fill-opacity") != 0.7) {
			     			$("#"+idd).css("fill-opacity",0);
			     		}
			     	}
		     		
		     	})	
				var index = [];var indexofsvg = [];var pathG = [];
				$("#body1").on("click",function(e){
		     		var idd = e.target.id; 	
		     		if (e.target.tagName == "path") {		     		
			     		if ($("#"+idd).css("fill-opacity") == 0.7) {
			     			$("#"+idd).css("fill-opacity",0);
			     			index=jQuery.grep(index, function(value) {
							  return value != "path"+$("path").index(e.target);
							});
							indexofsvg=jQuery.grep(indexofsvg, function(value) {
							  return value != idd;
							});
							
			     		}
			     		else{
			     			$("#"+idd).css("fill-opacity",0.7);
			     			index.push("path"+$("path").index(e.target));
			     			indexofsvg.push(idd);
			     			
			     		}
			     	}	
				})		
					
				$("#saveIMG").on("click",function(){
					$("#canvas").get(0).toBlob(function(blob){
						saveAs(blob,"background.png");
					})
				})
				$("#svg").on("click",function(){
					$("#container").css("display","block");
					$(".can").css("display","none");
					$("#can").css("display","inline");
					$("#svg").css("display","none");
					
					
				})
				$("#can").on("click",function(){
					$("#container").css("display","none");
					$(".can").css("display","block");
					$("#can").css("display","none");
					$("#svg").css("display","inline");
				
					pathG = [];
					fabric.Image.fromURL("../uploads/background.jpg", function(img) {
				    img.scaleToWidth(1092.8);img.scaleToHeight(614.4000000000001);var path0 = new fabric.Path("M 746.9559178569896 121.92143330535845 Q 746.9549178569896 121.92243330535845 744.9563762707502 122.92179751277942 Q 742.9578346845108 123.9211617202004 738.461116115472 127.91861854988429 Q 733.9643975464332 131.91607537956816 725.9702312014756 134.91416800183106 Q 717.9760648565178 137.912260624094 712.4800754943594 139.91098903893595 Q 706.9840861322009 141.9097174537779 693.4939304250847 143.90844586861982 Q 680.0037747179684 145.90717428346176 656.5209110796551 146.40685638717224 Q 633.0380474413417 146.90653849088272 618.048985544546 146.90653849088272 Q 603.0599236477501 146.90653849088272 570.5836228713592 146.90653849088272 Q 538.1073220949685 146.90653849088272 508.1291983013769 146.90653849088272 Q 478.1510745077853 146.90653849088272 464.66091880066915 146.90653849088272 Q 451.1707630935529 146.90653849088272 433.183888817398 146.90653849088272 Q 415.19701454124305 146.90653849088272 403.7054004203663 146.40685638717224 Q 392.2137862994895 145.90717428346176 389.71560931669023 145.40749217975127 Q 387.21743233389094 144.9078100760408 384.71925535109165 143.40876376490934 Q 382.22107836829235 141.9097174537779 381.7214429717325 139.41130693522547 Q 381.22180757517265 136.91289641667302 381.22180757517265 133.9148037944101 Q 381.22180757517265 130.9167111721472 384.71925535109165 124.42084382391089 Q 388.21670312701065 117.92497647567458 390.71488010980994 114.92688385341167 Q 393.21305709260923 111.92879123114875 401.207223437567 105.43292388291243 Q 409.20138978252476 98.93705653467613 420.6930039034015 93.4405533938608 Q 432.1846180242783 87.94405025304545 447.17367992107404 84.44627552707205 Q 462.16274181786986 80.94850080109865 473.6543559387466 79.4494544899672 Q 485.1459700596234 77.95040817883574 509.1284690944966 76.45136186770429 Q 533.1109681293699 74.95231555657283 555.0949255780037 74.95231555657283 Q 577.0788830266374 74.95231555657283 589.0701325440741 74.95231555657283 Q 601.0613820615107 74.95231555657283 627.0424226826234 77.45072607512526 Q 653.0234633037361 79.94913659367768 671.5099729764509 82.9472292159406 Q 689.9964826491656 85.94532183820351 695.992107407884 87.94405025304545 Q 701.9877321666023 89.94277866788738 709.4822631150003 92.9408712901503 Q 716.9767940633981 95.93896391241321 720.4742418393171 98.43737443096563 Q 723.9716896152361 100.93578494951807 724.9709604083557 101.93514915693905 Q 725.9702312014755 102.93451336436001 725.9702312014755 104.93324177920195 Q 725.9702312014755 106.9319701940439 725.9702312014755 108.93069860888585 Q 725.9702312014755 110.92942702372778 724.9709604083557 115.42656595712215 Q 723.9716896152361 119.92370489051652 720.9738772358769 125.91989013504234 Q 717.9760648565178 131.91607537956816 716.9767940633981 134.91416800183106 Q 715.9775232702783 137.912260624094 712.4800754943593 143.40876376490934 Q 708.9826277184403 148.9052669057247 705.4851799425213 152.90272373540859 Q 701.9877321666023 156.90018056509246 696.4917428044439 160.39795529106584 Q 690.9957534422854 163.89573001703923 688.997211856046 165.39477632817068 Q 686.9986702698066 166.89382263930216 682.002316304208 168.8925510541441 Q 677.0059623386094 170.89127946898603 674.0081499592502 172.3903257801175 Q 671.010337579891 173.88937209124896 670.0110667867714 173.88937209124896 Q 669.0117959936516 173.88937209124896 669.0117959936516 172.3903257801175 Q 669.0117959936516 170.89127946898603 669.5114313902114 169.39223315785458 L 670.0120667867712 167.89218684672312z"); path0.set({ fill:false, stroke: "#0645fb", opacity: 0.7,strokeWidth:1 });
						   pathG.push(path0);
						   if(index.indexOf("path0") != -1){
								pathG[0].set({ fill:"#0645fb", stroke: "#0645fb", opacity: 0.7,strokeWidth:1});
							}var group = new fabric.Group([ img  ,path0  ]);
						
						canvas.add(group);
						canvasData = JSON.stringify(canvas.toJSON());
						canvasJson = JSON.parse(canvasData);
						var len = canvasJson.objects.length;
						nJson.objects = [];
						nJson.objects.push(canvasJson.objects[len-1]);
						for (var i = 0; i < canvasJson.objects.length; i++) {
							if (canvasJson.objects[i].type != "group") {
                                nJson.objects.push(canvasJson.objects[i]);
							}
						}
						canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
						var winX = window.screen.width * 0.8;
						var winY = window.screen.height * 0.8;
						canvas.setWidth(winX);
						canvas.setHeight(winY);
						var winXO = 1092.8;		
						canvas.setZoom(eval(winX)/eval(winXO));
					});
					
				})
				
				$(window).resize(function(){
		     		if($("#container").css("display") == "block"){
		     			var winX = $("#container").width();
						var winXO = 1092.8;		
						
						$("#svgl").css("transform","scale("+eval(winX)/eval(winXO)+")");
						var mleft = (winXO - winX)/2;
						var h = $("#svgl").css("height");
						
						var mtop = (1000-1000*(eval(winX)/eval(winXO)))/2;
						$("#svgl").css("margin-left", -1*mleft);
						$("#svgl").css("margin-top", -1*mtop+"px");
		     		}
		     		else{		     			
			     		canvasData = JSON.stringify(canvas.toJSON());
						nJson = JSON.parse(canvasData);
						canvas.loadFromJSON(
							          nJson,
							          canvas.renderAll.bind(canvas));
						
						var winX = $("#canvasView").width()*0.8;
						var winXO = 1092.8;		
						
						canvas.setZoom(eval(winX)/eval(winXO));
						canvas.setWidth(winX);
		     		}					

				})
		     			
			</script>
			<style>
				
				#svgl{
					background-image: url("../uploads/background.jpg");
					background-repeat:no-repeat;
					background-size:100%;
					
				}
				#note{
					position:absolute;
					background-image: url("../assets/icon/quote.png");
					background-repeat:no-repeat;
					background-size:100%;
					display:none;
					width:115px;
					height:80px;
					
				}
				#note p{
					text-align:center;
				}
				
				
				.pensizeselect{
					background-color: #cacaca;
				}
				.pensize:hover{
					cursor: pointer;
				}
				#sizedrop{
					margin-top: 10px;
					padding: 11px;
					font-size: 16px;

				}
				
				.zoom{
					margin-left: 2%;
				}
				.zoom:hover{
					cursor: pointer;
				}
				
				.imgbtnClass:hover{
					cursor: pointer;
				}
				
				#txtmodify table{
					border:2px solid #089de3;
					border-radius: 5px;
					background-color: #ffffff;
				}
				#txtmodify table tr td{
					border-right:2px solid #089de3;
					width: 40px;					
					margin: 0;
					padding:0;
					text-align: center;
					color: #089de3;
				}
				#txtmodify table tr td:last-child{
					border: 0;
				}
				#txtmodify table tr td b:hover{
					cursor: pointer;
				}
				#txtmodify table tr td i:hover{
					cursor: pointer;
				}
				#txtmodify table tr td input{
					width: 85%;
				}
				#txtmodify table tr td select{
					width: 100%;
					padding: 4px 0px;
				}
				#txtmodify table tr td input:hover{
					cursor: pointer;
				}
				#txtmodify table tr td select:hover{
					cursor: pointer;
				}
				#txtmodify table tr td img{
					width: 18px;
					margin-top: 5px;
				}
				#txtmodify table tr td img:hover{
					cursor: pointer;
				}
				#shapeselect{
					z-index: 99999;
				}
				#shapeselect table{
					border:2px solid #089de3;
					border-radius: 5px;

				}
				#shapeselect table td{					
					padding: 0 2px 0 2px;
					border-bottom: 1px solid #089de3;
				}				
				#shapeselect table tr:last-child td{
					border: 0;
				}
				#shapeselect table td b:hover{
					cursor: pointer;
					background-color: #089de3;
				}
				#shapemodify table{
					border:2px solid #089de3;
					border-radius: 5px;
					background-color: #ffffff;
				}
				#shapemodify table tr td{
					border-right:2px solid #089de3;
					width: 40px;					
					margin: 0;
					padding:0;
					text-align: center;
					color: #089de3;
				}
				#shapemodify table tr td:last-child{
					border: 0;
				}
				#shapemodify table tr td input{
					width: 85%;
				}
				#shapemodify table tr td select{
					width: 100%;
					padding: 4px 0px;
				}
				#shapemodify table tr td input:hover{
					cursor: pointer;
				}
				#shapemodify table tr td select:hover{
					cursor: pointer;
				}
				#shapemodify table tr td img{
					width: 18px;
					margin-top: 5px;
				}
				#shapemodify table tr td img:hover{
					cursor: pointer;
				}
				#imagemodify table{
					border:2px solid #089de3;
					border-radius: 5px;
					background-color: #ffffff;
				}
				#imagemodify table tr td{
					border-right:2px solid #089de3;
					width: 40px;					
					margin: 0;
					padding:0;
					text-align: center;
					color: #089de3;
				}
				#imagemodify table tr td:last-child{
					border: 0;
				}
				#imagemodify table tr td img{
					width: 18px;
					margin-top: 5px;
				}
				#imagemodify table tr td img:hover{
					cursor: pointer;
				}
				#drawmodify table{
					border:2px solid #089de3;
					border-radius: 5px;
					background-color: #ffffff;
				}
				#drawmodify table tr td{
					border-right:2px solid #089de3;
					width: 40px;					
					margin: 0;
					padding:0;
					text-align: center;
					color: #089de3;
				}
				#drawmodify table tr td:last-child{
					border: 0;
				}				
				#drawmodify table tr td input{
					width: 85%;
				}
				#drawmodify table tr td select{
					width: 100%;
					padding: 4px 0px;
				}
				#drawmodify table tr td input:hover{
					cursor: pointer;
				}
				#drawmodify table tr td select:hover{
					cursor: pointer;
				}
				#drawmodify table tr td img{
					width: 18px;
					margin-top: 5px;
				}
				#drawmodify table tr td img:hover{
					cursor: pointer;
				}
				

			</style>
			<div id="note"><p></p></div>
				
			<script type="text/javascript">
				
					
				var canvas = new fabric.Canvas("canvas");
				canvas.isDrawingMode= 0;				
				canvas.renderAll();
				var canvasData=JSON.stringify(canvas.toJSON());;
				var canvasJson = JSON.parse(canvasData);
				var nJson = JSON.parse(canvasData);
				var mJson = JSON.parse(canvasData);
				mJson.objects = [];
		     	
		     	canvas.on("path:created",function(e){					
					canvasData = JSON.stringify(canvas.toJSON());
					canvasJson = JSON.parse(canvasData);						
					nJson.objects = [];
					nJson.objects.push(canvasJson.objects[0]);
						
					for (var i = 0; i < canvasJson.objects.length; i++) {
						if (canvasJson.objects[i].type != "group") {
                            nJson.objects.push(canvasJson.objects[i]);
                                
						}
							
					}
					canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
				    
				})				
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
				$("#zoomreset").click(function(){
					
					canvas.setZoom(1);
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
				//add text				
				var appObject = function() {
				  return {
				    __canvas: canvas,
				    __tmpgroup: {},

				    addText: function(size,family, color,bold,style,value,pointX, pointY) {
				      var newID = (new Date()).getTime().toString().substr(5);
				      var text = new fabric.IText(value, {				      	
				        fontFamily: family,
				        left: pointX,
				        top: pointY,
				        myid: newID,
				        objecttype: "text",
				        fontSize:size,
				        fontWeight:bold,				        
				        fontStyle:style,

				      });				      
				      text.setColor(color);
				      this.__canvas.add(text);
				      this.addLayer(newID, "text");
				      
					},
				    setTextParam: function(param, value) {
				      var obj = this.__canvas.getActiveObject();
				      if (obj) {
				        if (param == "color") {
				          obj.setColor(value);
				        } else {
				          obj.set(param, value);
				        }
				        this.__canvas.renderAll();
				      }
				    },
				    setTextValue: function(value) {
				      var obj = this.__canvas.getActiveObject();
				      if (obj) {
				        obj.setText(value);
				        this.__canvas.renderAll();
				      }
				    },
				    addLayer: function() {
				    }

				  };
				}
				var app = appObject();
				 $("#addtxt").click(function() {
				 	$("#penstyle").val("addtxt");
				 	$(".mode").removeClass("modeselect");	    
					$("#addtxt").addClass("modeselect");
				    canvas.isDrawingMode= 0;
				 });
				 $("#text-cont").keyup(function() {
				    app.setTextValue($(this).val());
				  })
				 $("#fontSize").change(function() {
				    app.setTextParam("fontSize",$(this).val());
				  })
				 $("#fontColor").change(function() {				 	
				    app.setTextParam("color",$(this).val());
				  })
				 $("#fontFamily").change(function() {				 	
				    app.setTextParam("fontFamily",$(this).val());
				  })

				 //draw arrow
				function drawArrow(fromx, fromy, tox, toy,color,wid) {

					var angle = Math.atan2(toy - fromy, tox - fromx);

					var headlen = 5;  // arrow head size

					// bring the line end back some to account for arrow head.
					tox = tox - (headlen) * Math.cos(angle);
					toy = toy - (headlen) * Math.sin(angle);

					// calculate the points.
					var points = [
						{
							x: fromx,  // start point
							y: fromy
						}, {
							x: fromx - (headlen / 4) * Math.cos(angle - Math.PI / 2), 
							y: fromy - (headlen / 4) * Math.sin(angle - Math.PI / 2)
						},{
							x: tox - (headlen / 4) * Math.cos(angle - Math.PI / 2), 
							y: toy - (headlen / 4) * Math.sin(angle - Math.PI / 2)
						}, {
							x: tox - (headlen) * Math.cos(angle - Math.PI / 2),
							y: toy - (headlen) * Math.sin(angle - Math.PI / 2)
						},{
							x: tox + (headlen) * Math.cos(angle),  // tip
							y: toy + (headlen) * Math.sin(angle)
						}, {
							x: tox - (headlen) * Math.cos(angle + Math.PI / 2),
							y: toy - (headlen) * Math.sin(angle + Math.PI / 2)
						}, {
							x: tox - (headlen / 4) * Math.cos(angle + Math.PI / 2),
							y: toy - (headlen / 4) * Math.sin(angle + Math.PI / 2)
						}, {
							x: fromx - (headlen / 4) * Math.cos(angle + Math.PI / 2),
							y: fromy - (headlen / 4) * Math.sin(angle + Math.PI / 2)
						},{
							x: fromx,
							y: fromy
						}
					];

					var pline = new fabric.Polyline(points, {
						fill: color,
						stroke: color,
						opacity: 1,
						strokeWidth: wid,
						originX: "left",
						originY: "top",
						selectable: true
					});

					canvas.add(pline);		
					
					canvas.renderAll();
					canvasData = JSON.stringify(canvas.toJSON());
					nJson = JSON.parse(canvasData);					
					canvas.selection = false;
						canvas.forEachObject(function(o) {
						  o.selectable = false;
					})

				}				
				 //draw straight
				function drawStraight(fromx, fromy, tox, toy,color,wid) {

					var angle = Math.atan2(toy - fromy, tox - fromx);

					var headlen = 1;  // arrow head size

					// bring the line end back some to account for arrow head.
					tox = tox - (headlen) * Math.cos(angle);
					toy = toy - (headlen) * Math.sin(angle);

					// calculate the points.
					var points = [
						{
							x: fromx,  // start point
							y: fromy
						}, {
							x: fromx - (headlen / 4) * Math.cos(angle - Math.PI / 2), 
							y: fromy - (headlen / 4) * Math.sin(angle - Math.PI / 2)
						},{
							x: tox - (headlen / 4) * Math.cos(angle - Math.PI / 2), 
							y: toy - (headlen / 4) * Math.sin(angle - Math.PI / 2)
						},{
							x: tox - (headlen / 4) * Math.cos(angle + Math.PI / 2),
							y: toy - (headlen / 4) * Math.sin(angle + Math.PI / 2)
						}, {
							x: fromx - (headlen / 4) * Math.cos(angle + Math.PI / 2),
							y: fromy - (headlen / 4) * Math.sin(angle + Math.PI / 2)
						},{
							x: fromx,
							y: fromy
						}
					];

					var pline = new fabric.Polyline(points, {
						fill: color,
						stroke: color,
						opacity: 1,
						strokeWidth: wid,
						originX: "left",
						originY: "top",
						selectable: true
					});

					canvas.add(pline);		
					
					canvas.renderAll();
					canvasData = JSON.stringify(canvas.toJSON());
					nJson = JSON.parse(canvasData);					
					canvas.selection = false;
						canvas.forEachObject(function(o) {
						  o.selectable = false;
					})

				}					
				$(document).click(function(e){					
					if(e.target.id == "addshape"){
						$(".mode").removeClass("modeselect");	    
						$("#addshape").addClass("modeselect");
						$("#shapeselect").css({"display":"block","left":e.clientX,"top":e.clientY+20});
					}
					else{
						$("#shapeselect").css({"display":"none","left":e.clientX,"top":e.clientY});
					}

					if(e.target.id == "addimage"){
						selectmode();
						$(".mode").removeClass("modeselect");	    
						$("#addimage").addClass("modeselect");
						$("#imageselect").css({"display":"block","left":e.clientX,"top":e.clientY+20});
						$("#penstyle").val("addimage");
					}
					else{
						$("#imageselect").css({"display":"none","left":e.clientX,"top":e.clientY});
						
					}
					
				})
				// click and drag to draw more arrow!
				var startX, startY, endX, endY; // straightarrow 
				var circle, isDown, origX, origY;				
				var square, started = false;var x = 0;var y = 0;

				canvas.on("mouse:down", function() {
					//free draw
					var draw = $("#penstyle").val();
					var pointer = canvas.getPointer(event.e);
					if (draw == "straightarrow") {						
					    startX = pointer.x;
					    startY = pointer.y;						
					}
					else if(draw == "straight"){					
					    startX = pointer.x;
					    startY = pointer.y;
					}
					else if(draw == "addtxt"){											
						var size = $("#fontSize").val();
					 	var color = $("#fontColor").val();
					 	var family = $("#fontFamily").val();
					 	var value = "Text";
					    var bold = $("#fweight").val();
					    var style = $("#fstyle").val();
					    app.addText(size,family,color,bold,style,value,pointer.x,pointer.y);
					    selectmode();
					}
					else if(draw == "circle"){
						isDown = true;
						var pointer = canvas.getPointer(event.e);
						origX = pointer.x;
						origY = pointer.y;
						circle = new fabric.Circle({ 
						    left: origX,
						    top: origY,
						    originX: "left",
						    originY: "top",
						    radius: pointer.x-origX,
						    angle: 0,
						    fill: "",
						    stroke:"#0645fb",
						    strokeWidth:3,
						});
						canvas.add(circle);	

					    
					}
					else if(draw == "rectangle"){					
					    started = true;
					    x = pointer.x;
					    y = pointer.y;  

					    square = new fabric.Rect({ 
					        width: 1, 
					        height: 1, 
					        left: x, 
					        top: y, 
					        fill: "",
					        stroke:"#0645fb"

					    });
					    canvas.add(square); 					    
					    
					}
					else if(draw == "addimage"){
						var fd = new FormData();
				        var files = $("#file")[0].files[0];
				        fd.append("file",files);

				        $.ajax({
				            url: "../canvasAddImage.php",
				            type: "post",
				            data: fd,
				            contentType: false,
				            processData: false,
				            success: function(response){
				                if(response != 0){
				                    canvasAddImage(response,pointer.x, pointer.y);
				                }else{
				                    
				                }
				            },
				        });						
						
					}
					else if ( draw == "cyst" ||draw == "mixed1" || draw == "scar1" || draw == "scar2" || draw == "songiform3" || draw == "soongiform2"  || draw ==
            "distance" ||
            draw == "bpipeline" || draw == "spipeline" || draw == "pipeline" || draw == "join" || draw ==
            "check" ||
            draw == "star" || draw == "x") {
            var img = "../assets/icon/" + draw + ".png";
            canvasAddImage1(img, pointer.x, pointer.y);
            selectmode();
        }
					else if(draw == "attachtxt"){
						var maxindex = nJson.objects.length;
						var prevobject = nJson.objects[maxindex-1];
						if (prevobject.type == "image") {
							var size = $("#fontSize").val();
						 	var color = $("#fontColor").val();
						 	var family = $("#fontFamily").val();
						 	var value = "Text";
						    var bold = $("#fweight").val();
						    var style = $("#fstyle").val();
						    app.addText(size,family,color,bold,style,value,pointer.x,pointer.y);
						    selectmode();

						    initjson();
						    
						    var nextobject = nJson.objects[maxindex];

						    var x1, y1, x2, y2;
						    if (prevobject.left > nextobject.left && prevobject.top > nextobject.top) { //1-4
						    	x1 = prevobject.left; y1 = prevobject.top; x2 = nextobject.left+nextobject.width; y2 = nextobject.top+nextobject.height;
						    }
						    else if (prevobject.left > nextobject.left && prevobject.top < nextobject.top) { //2-4
						    	x1 = prevobject.left; y1 = prevobject.top+prevobject.height; x2 = nextobject.left+nextobject.width; y2 = nextobject.top;
						    }
						    else if (prevobject.left < nextobject.left && prevobject.top < nextobject.top) { //3-4
						    	x1 = prevobject.left+prevobject.width; y1 = prevobject.top+prevobject.height; x2 = nextobject.left; y2 = nextobject.top;
						    }
						    else if (prevobject.left < nextobject.left && prevobject.top > nextobject.top) { //4-4
						    	x1 = prevobject.left+prevobject.width; y1 = prevobject.top; x2 = nextobject.left; y2 = nextobject.top+nextobject.height;
						    }
							canvas.add(new fabric.Line([x2, y2, x1, y1], {
						        
						        strokeWidth:4,
						        stroke: "rgb(255,0,0)",
						    }));
						}
						
						
					}

					//click background
					var activeObject = canvas.getActiveObject();
					$("#txtmodify").css({"display":"none"});
					$("#shapemodify").css({"display":"none"});
					$("#imagemodify").css({"display":"none"});
					$("#drawmodify").css({"display":"none"});

					if (activeObject && activeObject.type == "group") {												
						initjson();
						
					}
					else if(activeObject && activeObject.type == "i-text"){
						$("#fontSize").val(activeObject.fontSize);
						$("#fontColor").val(activeObject.fill);
						var objleft = activeObject.left;
						var objtop = activeObject.top-50;
						$("#txtmodify").css({"display":"block","left":objleft,"top":objtop});
						
						
					}
					else if(activeObject && activeObject.type == "circle"){
						$("#lineSize").val(activeObject.strokeWidth);
						$("#lineColor").val(activeObject.stroke);
						var objleft = activeObject.left;
						var objtop = activeObject.top-50;
						$("#shapemodify").css({"display":"block","left":objleft,"top":objtop});
						document.onkeydown = function(e) {
							if (46 === e.keyCode) {
							  deleteObjects();
							}
						}
					}
					else if(activeObject && activeObject.type == "rect"){
						$("#lineSize").val(activeObject.strokeWidth);
						$("#lineColor").val(activeObject.stroke);
						var objleft = activeObject.left;
						var objtop = activeObject.top-50;
						$("#shapemodify").css({"display":"block","left":objleft,"top":objtop});
						document.onkeydown = function(e) {
							if (46 === e.keyCode) {
							  deleteObjects();
							}
						}
					}
					else if(activeObject && activeObject.type == "image"){
						var objleft = activeObject.left;
						var objtop = activeObject.top-50;
						$("#imagemodify").css({"display":"block","left":objleft,"top":objtop});
						document.onkeydown = function(e) {
							if (46 === e.keyCode) {
							  deleteObjects();
							}
						}
					}
					else if(activeObject && (activeObject.type == "path" || activeObject.type == "polyline")){
						$("#drawSize").val(activeObject.strokeWidth);
						$("#drawColor").val(activeObject.stroke);
						var objleft = activeObject.left;
						var objtop = activeObject.top-50;
						$("#drawmodify").css({"display":"block","left":objleft,"top":objtop});
						if (activeObject.stroke.type == "pattern") {
							$("#drawColor").css("display","none");
						}
						document.onkeydown = function(e) {
							if (46 === e.keyCode) {
							  deleteObjects();
							}
						}
					}


					//drawable or not
					if ($("#penstyle").val() == "vline" || $("#penstyle").val() == "pencil" || $("#penstyle").val() == "hline" || $("#penstyle").val() == "square") {
						canvas.isDrawingMode = 1;
						canvas.freeDrawingBrush.width=$("#pensize").val();
						canvas.freeDrawingBrush.color=$("#pencolor").val();
					}
					else{
						canvas.isDrawingMode = 0;
					}					
				    
				});
				canvas.on("mouse:up", function() {					
					var draw = $("#penstyle").val();
					if (draw == "straightarrow") {
						var pointer = canvas.getPointer(event.e);
						endX = pointer.x;
						endY = pointer.y;						
						drawArrow(startX, startY, endX, endY,$("#pencolor").val(),$("#pensize").val());
						
					}
					else if(draw == "straight"){
						var pointer = canvas.getPointer(event.e);
						endX = pointer.x;
						endY = pointer.y;
						drawStraight(startX, startY, endX, endY,$("#pencolor").val(),$("#pensize").val());

					}
					else if(draw == "circle"){
						isDown = false;
						canvas.selection = true;
							canvas.forEachObject(function(o) {
							  o.selectable = true;
						})
						selectmode();
					}
					else if(draw == "rectangle"){
						started = false;
						canvas.selection = true;
							canvas.forEachObject(function(o) {
							  o.selectable = true;
						})
						selectmode();
					}
					
					canvasData = JSON.stringify(canvas.toJSON());
					canvasJson = JSON.parse(canvasData);

						    
				})
				canvas.on("mouse:move", function() {
					var draw = $("#penstyle").val();
					if (draw == "circle") {
						canvas.selection = false;
							canvas.forEachObject(function(o) {
							  o.selectable = false;
						})
						canvas.isDrawingMode = 0;
						if (!isDown) return;
						var pointer = canvas.getPointer(event.e);
						var radius = Math.max(Math.abs(origY - pointer.y),Math.abs(origX - pointer.x))/2;
						if (radius > circle.strokeWidth) {
						    radius -= circle.strokeWidth/2;
						}
						circle.set({ radius: radius});

						if(origX>pointer.x){
						    circle.set({originX: "right" });
						} else {
						    circle.set({originX: "left" });
						}
						if(origY>pointer.y){
						    circle.set({originY: "bottom"  });
						} else {
						    circle.set({originY: "top"  });
						}
						canvas.renderAll();
					}
					else if(draw == "rectangle"){
						canvas.selection = false;
						canvas.forEachObject(function(o) {
							o.selectable = false;
						})
						canvas.isDrawingMode = 0;
						if(!started) {
					        return false;
					    }

					    var mouse = canvas.getPointer(event.e);

					    var x1 = Math.min(mouse.x,  x),
					    y1 = Math.min(mouse.y,  y),
					    w = Math.abs(mouse.x - x),
					    h = Math.abs(mouse.y - y);

					    if (!w || !h) {

					        return false;
					    }
					    square.set("top", y1).set("left", x1).set("width", w).set("height", h);
					    canvas.renderAll(); 
					}
					
				})
				$(".pensize").on("click",function(e){
					var size = e.target.id;
					canvas.freeDrawingBrush.width = size;		    
					canvas.renderAll();
					$("#pensize").val(size);
					document.getElementById("pensizeid").value = size;
					$(".pensize").removeClass("pensizeselect");
					$("#"+e.target.id).addClass("pensizeselect");
					$("#sizedrop").val("");
				})
				$("#pensizeid").keyup(function() {
					var size = $("#pensizeid").val();
					console.log(size);
					canvas.freeDrawingBrush.width = size;		    
					canvas.renderAll();
					$("#pensize").val(size);
					$(".pensize").removeClass("pensizeselect");
					$("#"+e.target.id).addClass("pensizeselect");
					
				})
				$("#sizedrop").on("click",function(){
					if (selectdraw == 1) {
						var size = $(this).val();					
						$("#pensize").val(size);
						$(".pensize").removeClass("pensizeselect");
						canvas.freeDrawingBrush.width = size;	
					}									
				})
				$(".pencolor").on("click",function(e){
					if (selectdraw == 1) {
						var color = "#"+e.target.id;					
						$("#pencolor").val(color);
						$(".pencolor").removeClass("pencolorselect");
						$("#"+e.target.id).addClass("pencolorselect");
						canvas.freeDrawingBrush.color = color;
					}					
				})
				$("#selectcolor").on("change",function(){
					if (selectdraw == 1) {
						var color = $("#selectcolor").val();					
						$("#pencolor").val(color);
						$(".pencolor").removeClass("pencolorselect");
						
						canvas.freeDrawingBrush.color = color;
					}					
				})
				$(".penstyle").on("click",function(e){
					if (selectdraw == 1) {
						var style = e.target.id;					
						$("#penstyle").val(style);
						$(".penstyle").removeClass("penstyleselect");
						$("#"+e.target.id).addClass("penstyleselect");
						
						if (style == "pencil") {
							canvas.isDrawingMode = 1;
							canvas.freeDrawingBrush.width=$("#pensize").val();
							canvas.freeDrawingBrush.color=$("#pencolor").val();
							canvas.freeDrawingBrush = new fabric["PencilBrush"](canvas);
						}
						else if(style == "hline"){
							canvas.isDrawingMode = 1;
							canvas.freeDrawingBrush.width=$("#pensize").val();
							canvas.freeDrawingBrush.color=$("#pencolor").val();
							canvas.freeDrawingBrush = hLinePatternBrush
						}
						else if(style == "vline"){
							canvas.isDrawingMode = 1;
							canvas.freeDrawingBrush.width=$("#pensize").val();
							canvas.freeDrawingBrush.color=$("#pencolor").val();
							canvas.freeDrawingBrush = vLinePatternBrush
						}
						else if(style == "square"){
							canvas.isDrawingMode = 1;
							canvas.freeDrawingBrush.width=$("#pensize").val();
							canvas.freeDrawingBrush.color=$("#pencolor").val();
							canvas.freeDrawingBrush = squarePatternBrush
						}
						else if (style == "solid1") {

							var circle = new fabric.Circle({
								radius: $("#pensize").val(),
								fill: $("#pencolor").val(),
								left: 100,
								top: 100,
							});
			
							canvas.add(circle);
			
						}
						else{
							canvas.isDrawingMode = 0;
						}
					}
					
				})
				$(".icon").click(function(e){
					selectmode();
					$("#penstyle").val(e.target.id);
					$(".icon").removeClass("iconselect");
					$("#"+e.target.id).addClass("iconselect");
				})
				$("#selectmode").click(function(){
					selectmode();
				})
				$("#drawmode").click(function(){					
					drawmode();				
				})
				$("#delete").click(function(){				    
				    deleteObjects();
				});
				$("#fontWeight").click(function(){					
					if($("#fweight").val() == "normal"){
						$("#fweight").val("bold");						
					}
					else{
						$("#fweight").val("normal");						
					}
					app.setTextParam("fontWeight",$("#fweight").val());
				})
				$("#fontStyle").click(function(){
					
					if($("#fstyle").val() == "normal"){
						$("#fstyle").val("italic");						
					}
					else{
						$("#fstyle").val("normal");						
					}
					app.setTextParam("fontStyle",$("#fstyle").val());
				})

				//add shape
				function addshape(value){
					$("#penstyle").val(value);
					canvas.isDrawingMode = 0;
				}
				$("#lineColor").change(function(){
					var lineColor = $(this).val();					
					var	activeObject1 = canvas.getActiveObject();
													
					activeObject1.stroke = lineColor;
					canvasData = JSON.stringify(canvas.toJSON());
					nJson = JSON.parse(canvasData);
					canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
					$("#shapemodify").css("display","none");
				})
				$("#lineSize").change(function(){

					var lineSize = $(this).val();					
					var activeObject1 = canvas.getActiveObject();					
					activeObject1.strokeWidth = lineSize;
					canvasData = JSON.stringify(canvas.toJSON());
					nJson = JSON.parse(canvasData);
					canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
					$("#shapemodify").css("display","none");
				})
				//add image
				
				function canvasAddImage(imageName,leftx,topy) {
					fabric.Image.fromURL("../uploads/"+imageName, function(lImg) {
							var imgToAdd = lImg.set({left: leftx, top: topy, scaleX: 0.1, scaleY: 0.1});
							canvas.add(imgToAdd);
							canvasData = JSON.stringify(canvas.toJSON());
							nJson = JSON.parse(canvasData);
							canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
						});
					selectmode();
					
				}
				function canvasAddImage1(imageName,leftx,topy) {
					fabric.Image.fromURL("../uploads/"+imageName, function(lImg) {
							var imgToAdd = lImg.set({left: leftx, top: topy, scaleX: 1, scaleY: 1});
							canvas.add(imgToAdd);
							canvasData = JSON.stringify(canvas.toJSON());
							nJson = JSON.parse(canvasData);
							canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
						});
					selectmode();
					
				}
				$("#drawColor").change(function(){
					var drawColor = $(this).val();					
					var	activeObject1 = canvas.getActiveObject();
													
					activeObject1.stroke = drawColor;
					
					canvasData = JSON.stringify(canvas.toJSON());
					nJson = JSON.parse(canvasData);
					canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
					$("#drawmodify").css("display","none");
				})
				$("#drawSize").change(function(){

					var drawSize = $(this).val();					
					var activeObject1 = canvas.getActiveObject();					
					activeObject1.strokeWidth = drawSize;
					canvasData = JSON.stringify(canvas.toJSON());
					nJson = JSON.parse(canvasData);
					canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
					$("#drawmodify").css("display","none");
				})
				//set mode
				var selectdraw;
				function selectmode(){
					canvas.isDrawingMode = 0;	
					$(".pencolor").removeClass("pencolorselect");
					$("#pencolor").val("");
					$(".pensize").removeClass("pensizeselect");	
					$("#pensize").val("");			
					$(".penstyle").removeClass("penstyleselect");
					$("#penstyle").val("");
					canvas.selection = true;
						canvas.forEachObject(function(o) {
						  o.selectable = true;
					})
					selectdraw = 0;
					$(".mode").removeClass("modeselect");
					$(".icon").removeClass("iconselect");	    
					$("#selectmode").addClass("modeselect");
				}
				function drawmode(){
					canvas.selection = false;
						canvas.forEachObject(function(o) {
						  o.selectable = false;
					})
					init();
					selectdraw = 1;
					$(".mode").removeClass("modeselect");
					$(".icon").removeClass("iconselect");
					$("#drawmode").addClass("modeselect");  	    
						
				}
				$("#myeraser").click(function(){
					$("#penstyle").val("pencil");
					$("#pencolor").val("#ffffff");
					canvas.freeDrawingBrush.color = "#ffffff";
					canvas.freeDrawingBrush.width = $("#size").val();
					$(".mode").removeClass("modeselect");
					$(".icon").removeClass("iconselect");
					$("#myeraser").addClass("modeselect");
					
				});
				function deleteObjects(){
					var activeObject = canvas.getActiveObject();				    
				    if (confirm("Are you sure?")) {
				        canvas.remove(activeObject);
				    }
				    $("#txtmodify").css("display","none");
				    $("#shapemodify").css("display","none");
				    $("#imagemodify").css("display","none");
				    $("#drawmodify").css("display","none");
				    initjson();
				}
				function rotateObjects(){
					
					var activeObject = canvas.getActiveObject();
					var rotate = activeObject.angle;				    
				    activeObject.set({angle:90+rotate});
				    canvasData = JSON.stringify(canvas.toJSON());
					nJson = JSON.parse(canvasData);
					canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
				    $("#txtmodify").css("display","none");
				    $("#shapemodify").css("display","none");
				    $("#imagemodify").css("display","none");
				    $("#drawmodify").css("display","none");
				}
				function undo(){
					var len = nJson.objects.length;
					if (len >= 0) {
						mJson.objects.push(nJson.objects[len-1]);
						if (nJson.objects[len-1].type != "group") {
							nJson.objects.pop();
						}
						canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
					}
					
				}
				function redo(){
					var len = mJson.objects.length;
					if (len >= 0) {
						nJson.objects.push(mJson.objects[len-1]);
						mJson.objects.pop();
						canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
					}					
				}
				

			    var vLinePatternBrush = new fabric.PatternBrush(canvas);
			    vLinePatternBrush.getPatternSrc = function() {

			      var patternCanvas = fabric.document.createElement("canvas");
			      patternCanvas.width = patternCanvas.height = 10;
			      var ctx = patternCanvas.getContext("2d");

			      ctx.strokeStyle = this.color;
			      ctx.lineWidth = 5;
			      ctx.beginPath();
			      ctx.moveTo(5, 0);
			      ctx.lineTo(5, 10);
			      ctx.closePath();
			      ctx.stroke();

			      return patternCanvas;
				};
				
				var hLinePatternBrush = new fabric.PatternBrush(canvas);
				hLinePatternBrush.getPatternSrc = function() {
					
					var patternCanvas = fabric.document.createElement("canvas");
					patternCanvas.width = patternCanvas.height = 10;
					var ctx = patternCanvas.getContext("2d");

					ctx.strokeStyle =this.color;
					ctx.lineWidth = 5;
					ctx.beginPath();
					ctx.moveTo(0, 5);
					ctx.lineTo(10, 5);
					ctx.closePath();
					ctx.stroke();

					return patternCanvas;
				};
				
				var squarePatternBrush = new fabric.PatternBrush(canvas);
			    squarePatternBrush.getPatternSrc = function() {

			      var squareWidth = 10, squareDistance = 2;

			      var patternCanvas = fabric.document.createElement("canvas");
			      patternCanvas.width = patternCanvas.height = squareWidth + squareDistance;
			      var ctx = patternCanvas.getContext("2d");

			      ctx.fillStyle = this.color;
			      ctx.fillRect(0, 0, squareWidth, squareWidth);

			      return patternCanvas;
			    };
				function init(){
			    	$("#pencolor").val("#000000");
			    	$(".pencolor").removeClass("pencolorselect");
			    	
			    	
			    	$("#pensize").val(5);
			    	$(".pensize").removeClass("pensizeselect");
			    	
			    	
			    	$("#penstyle").val("pencil");
			    	$(".penstyle").removeClass("penstyleselect");
			    	
			    	
					canvas.freeDrawingBrush.width=20;
					canvas.freeDrawingBrush.color="#ffffff";
					selectdraw = 0;
					$(".mode").removeClass("modeselect");	    
					$("#drawmode").removeClass("modeselect"); 	
			    }
			    function initjson(){
			    	canvasData = JSON.stringify(canvas.toJSON());
					canvasJson = JSON.parse(canvasData);						
					nJson.objects = [];
					nJson.objects.push(canvasJson.objects[0]);
						
					for (var i = 0; i < canvasJson.objects.length; i++) {
						if (canvasJson.objects[i].type != "group") {
                            nJson.objects.push(canvasJson.objects[i]);
						}
							
					}
					canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
			    }
			    function allclear(){
			    	canvasData = JSON.stringify(canvas.toJSON());
					nJson = JSON.parse(canvasData);
			    	var len = nJson.objects.length;
			    	if (confirm("Are you sure?")) {
			    		for (var i = 1; i < len; i++) {
				    		nJson.objects.pop();
				    	}
			    	}			    	
			    	canvas.loadFromJSON(nJson,canvas.renderAll.bind(canvas));
			    }
			    init();
			    var paths = [], canvasPathD = [], canvasPathFill = [], canvasPathS = [], canvasPathW=[];paths[0]='<path id="ss_0" vector-effect="non-scaling-stroke" fill="#0645fb" stroke-width="1" stroke="#0645fb" d="M 746.9559178569896 121.92143330535845 Q 746.9549178569896 121.92243330535845 744.9563762707502 122.92179751277942 Q 742.9578346845108 123.9211617202004 738.461116115472 127.91861854988429 Q 733.9643975464332 131.91607537956816 725.9702312014756 134.91416800183106 Q 717.9760648565178 137.912260624094 712.4800754943594 139.91098903893595 Q 706.9840861322009 141.9097174537779 693.4939304250847 143.90844586861982 Q 680.0037747179684 145.90717428346176 656.5209110796551 146.40685638717224 Q 633.0380474413417 146.90653849088272 618.048985544546 146.90653849088272 Q 603.0599236477501 146.90653849088272 570.5836228713592 146.90653849088272 Q 538.1073220949685 146.90653849088272 508.1291983013769 146.90653849088272 Q 478.1510745077853 146.90653849088272 464.66091880066915 146.90653849088272 Q 451.1707630935529 146.90653849088272 433.183888817398 146.90653849088272 Q 415.19701454124305 146.90653849088272 403.7054004203663 146.40685638717224 Q 392.2137862994895 145.90717428346176 389.71560931669023 145.40749217975127 Q 387.21743233389094 144.9078100760408 384.71925535109165 143.40876376490934 Q 382.22107836829235 141.9097174537779 381.7214429717325 139.41130693522547 Q 381.22180757517265 136.91289641667302 381.22180757517265 133.9148037944101 Q 381.22180757517265 130.9167111721472 384.71925535109165 124.42084382391089 Q 388.21670312701065 117.92497647567458 390.71488010980994 114.92688385341167 Q 393.21305709260923 111.92879123114875 401.207223437567 105.43292388291243 Q 409.20138978252476 98.93705653467613 420.6930039034015 93.4405533938608 Q 432.1846180242783 87.94405025304545 447.17367992107404 84.44627552707205 Q 462.16274181786986 80.94850080109865 473.6543559387466 79.4494544899672 Q 485.1459700596234 77.95040817883574 509.1284690944966 76.45136186770429 Q 533.1109681293699 74.95231555657283 555.0949255780037 74.95231555657283 Q 577.0788830266374 74.95231555657283 589.0701325440741 74.95231555657283 Q 601.0613820615107 74.95231555657283 627.0424226826234 77.45072607512526 Q 653.0234633037361 79.94913659367768 671.5099729764509 82.9472292159406 Q 689.9964826491656 85.94532183820351 695.992107407884 87.94405025304545 Q 701.9877321666023 89.94277866788738 709.4822631150003 92.9408712901503 Q 716.9767940633981 95.93896391241321 720.4742418393171 98.43737443096563 Q 723.9716896152361 100.93578494951807 724.9709604083557 101.93514915693905 Q 725.9702312014755 102.93451336436001 725.9702312014755 104.93324177920195 Q 725.9702312014755 106.9319701940439 725.9702312014755 108.93069860888585 Q 725.9702312014755 110.92942702372778 724.9709604083557 115.42656595712215 Q 723.9716896152361 119.92370489051652 720.9738772358769 125.91989013504234 Q 717.9760648565178 131.91607537956816 716.9767940633981 134.91416800183106 Q 715.9775232702783 137.912260624094 712.4800754943593 143.40876376490934 Q 708.9826277184403 148.9052669057247 705.4851799425213 152.90272373540859 Q 701.9877321666023 156.90018056509246 696.4917428044439 160.39795529106584 Q 690.9957534422854 163.89573001703923 688.997211856046 165.39477632817068 Q 686.9986702698066 166.89382263930216 682.002316304208 168.8925510541441 Q 677.0059623386094 170.89127946898603 674.0081499592502 172.3903257801175 Q 671.010337579891 173.88937209124896 670.0110667867714 173.88937209124896 Q 669.0117959936516 173.88937209124896 669.0117959936516 172.3903257801175 Q 669.0117959936516 170.89127946898603 669.5114313902114 169.39223315785458 L 670.0120667867712 167.89218684672312z" fill-opacity="0" stroke-opacity="1" cursor="pointer"></path>';canvasPathD[0]='M 746.9559178569896 121.92143330535845 Q 746.9549178569896 121.92243330535845 744.9563762707502 122.92179751277942 Q 742.9578346845108 123.9211617202004 738.461116115472 127.91861854988429 Q 733.9643975464332 131.91607537956816 725.9702312014756 134.91416800183106 Q 717.9760648565178 137.912260624094 712.4800754943594 139.91098903893595 Q 706.9840861322009 141.9097174537779 693.4939304250847 143.90844586861982 Q 680.0037747179684 145.90717428346176 656.5209110796551 146.40685638717224 Q 633.0380474413417 146.90653849088272 618.048985544546 146.90653849088272 Q 603.0599236477501 146.90653849088272 570.5836228713592 146.90653849088272 Q 538.1073220949685 146.90653849088272 508.1291983013769 146.90653849088272 Q 478.1510745077853 146.90653849088272 464.66091880066915 146.90653849088272 Q 451.1707630935529 146.90653849088272 433.183888817398 146.90653849088272 Q 415.19701454124305 146.90653849088272 403.7054004203663 146.40685638717224 Q 392.2137862994895 145.90717428346176 389.71560931669023 145.40749217975127 Q 387.21743233389094 144.9078100760408 384.71925535109165 143.40876376490934 Q 382.22107836829235 141.9097174537779 381.7214429717325 139.41130693522547 Q 381.22180757517265 136.91289641667302 381.22180757517265 133.9148037944101 Q 381.22180757517265 130.9167111721472 384.71925535109165 124.42084382391089 Q 388.21670312701065 117.92497647567458 390.71488010980994 114.92688385341167 Q 393.21305709260923 111.92879123114875 401.207223437567 105.43292388291243 Q 409.20138978252476 98.93705653467613 420.6930039034015 93.4405533938608 Q 432.1846180242783 87.94405025304545 447.17367992107404 84.44627552707205 Q 462.16274181786986 80.94850080109865 473.6543559387466 79.4494544899672 Q 485.1459700596234 77.95040817883574 509.1284690944966 76.45136186770429 Q 533.1109681293699 74.95231555657283 555.0949255780037 74.95231555657283 Q 577.0788830266374 74.95231555657283 589.0701325440741 74.95231555657283 Q 601.0613820615107 74.95231555657283 627.0424226826234 77.45072607512526 Q 653.0234633037361 79.94913659367768 671.5099729764509 82.9472292159406 Q 689.9964826491656 85.94532183820351 695.992107407884 87.94405025304545 Q 701.9877321666023 89.94277866788738 709.4822631150003 92.9408712901503 Q 716.9767940633981 95.93896391241321 720.4742418393171 98.43737443096563 Q 723.9716896152361 100.93578494951807 724.9709604083557 101.93514915693905 Q 725.9702312014755 102.93451336436001 725.9702312014755 104.93324177920195 Q 725.9702312014755 106.9319701940439 725.9702312014755 108.93069860888585 Q 725.9702312014755 110.92942702372778 724.9709604083557 115.42656595712215 Q 723.9716896152361 119.92370489051652 720.9738772358769 125.91989013504234 Q 717.9760648565178 131.91607537956816 716.9767940633981 134.91416800183106 Q 715.9775232702783 137.912260624094 712.4800754943593 143.40876376490934 Q 708.9826277184403 148.9052669057247 705.4851799425213 152.90272373540859 Q 701.9877321666023 156.90018056509246 696.4917428044439 160.39795529106584 Q 690.9957534422854 163.89573001703923 688.997211856046 165.39477632817068 Q 686.9986702698066 166.89382263930216 682.002316304208 168.8925510541441 Q 677.0059623386094 170.89127946898603 674.0081499592502 172.3903257801175 Q 671.010337579891 173.88937209124896 670.0110667867714 173.88937209124896 Q 669.0117959936516 173.88937209124896 669.0117959936516 172.3903257801175 Q 669.0117959936516 170.89127946898603 669.5114313902114 169.39223315785458 L 670.0120667867712 167.89218684672312z';canvasPathFill[0]='#0645fb';canvasPathS[0]='#0645fb';canvasPathW[0]='1';$("#redo").click(function(){
					$.ajax({
						url: "../public/savecanvas.php",
						type: "post",
						data:{
							"paths":paths,
							"imgName":"background",
							"imgfullname":"background.jpg",
							"num" : "1",
							"canvasPathD":canvasPathD,
							"canvasPathFill":canvasPathFill,
							"canvasPathS":canvasPathS,
							"canvasPathW":canvasPathW,
						},
						success: function(result){
							document.location = "../canvas/background.php";
							
					    }
					});
				})	
				</script>
			
		</body>
	</html>