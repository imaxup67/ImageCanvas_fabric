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
			<title>book-3246278_1920</title>
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
						<h2> File Name : "book-3246278_1920" </h2>
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
					<g id="regions"><path id="edd_0" vector-effect="non-scaling-stroke" fill="#0645fb" stroke-width="1" stroke="#0645fb" d="M 682.0033163042079 187.87947099514255 Q 682.002316304208 187.88047099514256 681.502680907648 189.379517306274 Q 681.0030455110882 190.87856361740546 677.5055977351692 194.37633834337885 Q 674.0081499592502 197.87411306935226 672.0096083730107 199.8728414841942 Q 670.0110667867713 201.87156989903613 663.5158066314931 205.86902672872003 Q 657.0205464762149 209.8664835584039 651.5245571140565 212.8645761806668 Q 646.0285677518981 215.86266880292973 641.5318491828593 216.8620330103507 Q 637.0351306138206 217.86139721777167 628.0416934757432 218.86076142519266 Q 619.0482563376656 219.86012563261363 603.0599236477501 219.86012563261363 Q 587.0715909578347 219.86012563261363 575.0803414403981 219.86012563261363 Q 563.0890919229614 219.86012563261363 528.1146141637712 217.8613972177717 Q 493.1401364045811 215.86266880292973 455.1678462660318 209.8664835584039 Q 417.1955561274825 203.8702983138781 401.207223437567 200.3725235879047 Q 385.2188907476515 196.8747488619313 360.23712091965854 188.87983520256353 Q 335.2553510916656 180.88492154319576 322.7644661776691 174.38905419495944 Q 310.2735812636726 167.89318684672313 307.7754042808733 165.39477632817068 Q 305.277227298074 162.89636580961826 301.77977952215497 157.89954477251342 Q 298.28233174623597 152.90272373540856 297.78269634967614 146.40685638717224 Q 297.28306095311626 139.91098903893595 297.28306095311626 137.41257852038353 Q 297.28306095311626 134.9141680018311 298.28233174623597 127.4189364461738 Q 299.28160253935573 119.92370489051652 306.27649809119373 112.42847333485923 Q 313.2713936430318 104.93324177920195 318.76738300519025 101.43546705322855 Q 324.26337236734867 97.93769232725515 347.2466006091022 88.94341446046641 Q 370.2298288508557 79.94913659367768 404.704671213486 72.4539050380204 Q 439.1795135761163 64.95867348236311 460.6638356281902 59.96185244525826 Q 482.1481576802642 54.96503140815341 524.1175309912924 50.46789247475904 Q 566.0869043023206 45.970753541364665 601.5610174580706 45.471071437654174 Q 637.0351306138206 44.97138933394369 653.5230987002959 44.97138933394369 Q 670.0110667867713 44.97138933394369 691.995024235405 48.46916405991709 Q 713.9789816840389 51.96693878589049 727.4691373911551 57.46344192670583 Q 740.9592930982714 62.959945067521176 744.9563762707502 65.4583555860736 Q 748.953459443229 67.95676610462603 754.9490842019474 74.95231555657281 Q 760.9447089606657 81.94786500851961 763.442885943465 88.94341446046641 Q 765.9410629262643 95.93896391241321 766.4406983228241 99.43673863838661 Q 766.940333719384 102.93451336436001 767.4399691159438 109.43038071259633 Q 767.9396045125037 115.92624806083263 766.940333719384 122.42211540906894 Q 765.9410629262643 128.91798275730525 764.4421567365847 132.41575748327864 Q 762.9432505469051 135.91353220925205 757.4472611847466 143.40876376490934 Q 751.9512718225882 150.90399532056662 742.9578346845108 157.89954477251342 Q 733.9643975464332 164.89509422446022 727.4691373911551 168.89255105414412 Q 720.9738772358769 172.890007883828 703.9862737528417 181.88428575061673 Q 686.9986702698066 190.87856361740546 669.5114313902114 197.87411306935226 Q 652.0241925106163 204.86966252129906 642.0314845794192 208.86711935098293 Q 632.038776648222 212.86457618066683 617.549350147986 216.36235090664024 Q 603.0599236477501 219.86012563261363 592.5675803199931 221.85885404745557 Q 582.0752369922361 223.8575824622975 580.0766954059966 224.35726456600798 Q 578.0781538197572 224.85694666971847 577.0788830266374 224.85694666971847 Q 576.0796122335178 224.85694666971847 576.0796122335178 222.35853615116605 Q 576.0796122335178 219.86012563261363 578.5777892163171 210.36616566211438 Q 581.0759661991164 200.87220569161516 583.0745077853558 195.8753846545103 L 585.0740493715952 190.87756361740546z" fill-opacity="0" stroke-opacity="1" cursor="pointer"></path></g></svg></div>
			<script type="text/javascript">
	     			
		     	$("#body1").on("dblclick",function(e){
		     		$("#note").css("display","none");
		     		if(e.target.tagName != "path"){		     			
		     			$("#container").html('<svg id=\"svgl\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"1092.8px\" height=\"614.4000000000001px\" viewBox=\"0 0 1092.8 1000\" xml:space=\"preserve\"><g id=\"regions\"><path id="edd_0" vector-effect="non-scaling-stroke" fill="#0645fb" stroke-width="1" stroke="#0645fb" d="M 682.0033163042079 187.87947099514255 Q 682.002316304208 187.88047099514256 681.502680907648 189.379517306274 Q 681.0030455110882 190.87856361740546 677.5055977351692 194.37633834337885 Q 674.0081499592502 197.87411306935226 672.0096083730107 199.8728414841942 Q 670.0110667867713 201.87156989903613 663.5158066314931 205.86902672872003 Q 657.0205464762149 209.8664835584039 651.5245571140565 212.8645761806668 Q 646.0285677518981 215.86266880292973 641.5318491828593 216.8620330103507 Q 637.0351306138206 217.86139721777167 628.0416934757432 218.86076142519266 Q 619.0482563376656 219.86012563261363 603.0599236477501 219.86012563261363 Q 587.0715909578347 219.86012563261363 575.0803414403981 219.86012563261363 Q 563.0890919229614 219.86012563261363 528.1146141637712 217.8613972177717 Q 493.1401364045811 215.86266880292973 455.1678462660318 209.8664835584039 Q 417.1955561274825 203.8702983138781 401.207223437567 200.3725235879047 Q 385.2188907476515 196.8747488619313 360.23712091965854 188.87983520256353 Q 335.2553510916656 180.88492154319576 322.7644661776691 174.38905419495944 Q 310.2735812636726 167.89318684672313 307.7754042808733 165.39477632817068 Q 305.277227298074 162.89636580961826 301.77977952215497 157.89954477251342 Q 298.28233174623597 152.90272373540856 297.78269634967614 146.40685638717224 Q 297.28306095311626 139.91098903893595 297.28306095311626 137.41257852038353 Q 297.28306095311626 134.9141680018311 298.28233174623597 127.4189364461738 Q 299.28160253935573 119.92370489051652 306.27649809119373 112.42847333485923 Q 313.2713936430318 104.93324177920195 318.76738300519025 101.43546705322855 Q 324.26337236734867 97.93769232725515 347.2466006091022 88.94341446046641 Q 370.2298288508557 79.94913659367768 404.704671213486 72.4539050380204 Q 439.1795135761163 64.95867348236311 460.6638356281902 59.96185244525826 Q 482.1481576802642 54.96503140815341 524.1175309912924 50.46789247475904 Q 566.0869043023206 45.970753541364665 601.5610174580706 45.471071437654174 Q 637.0351306138206 44.97138933394369 653.5230987002959 44.97138933394369 Q 670.0110667867713 44.97138933394369 691.995024235405 48.46916405991709 Q 713.9789816840389 51.96693878589049 727.4691373911551 57.46344192670583 Q 740.9592930982714 62.959945067521176 744.9563762707502 65.4583555860736 Q 748.953459443229 67.95676610462603 754.9490842019474 74.95231555657281 Q 760.9447089606657 81.94786500851961 763.442885943465 88.94341446046641 Q 765.9410629262643 95.93896391241321 766.4406983228241 99.43673863838661 Q 766.940333719384 102.93451336436001 767.4399691159438 109.43038071259633 Q 767.9396045125037 115.92624806083263 766.940333719384 122.42211540906894 Q 765.9410629262643 128.91798275730525 764.4421567365847 132.41575748327864 Q 762.9432505469051 135.91353220925205 757.4472611847466 143.40876376490934 Q 751.9512718225882 150.90399532056662 742.9578346845108 157.89954477251342 Q 733.9643975464332 164.89509422446022 727.4691373911551 168.89255105414412 Q 720.9738772358769 172.890007883828 703.9862737528417 181.88428575061673 Q 686.9986702698066 190.87856361740546 669.5114313902114 197.87411306935226 Q 652.0241925106163 204.86966252129906 642.0314845794192 208.86711935098293 Q 632.038776648222 212.86457618066683 617.549350147986 216.36235090664024 Q 603.0599236477501 219.86012563261363 592.5675803199931 221.85885404745557 Q 582.0752369922361 223.8575824622975 580.0766954059966 224.35726456600798 Q 578.0781538197572 224.85694666971847 577.0788830266374 224.85694666971847 Q 576.0796122335178 224.85694666971847 576.0796122335178 222.35853615116605 Q 576.0796122335178 219.86012563261363 578.5777892163171 210.36616566211438 Q 581.0759661991164 200.87220569161516 583.0745077853558 195.8753846545103 L 585.0740493715952 190.87756361740546z" fill-opacity="0" stroke-opacity="1" cursor="pointer"></path></g></svg>');	
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
			     		var string = "<svg id=\"svgl\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width="+currentWidth+"px height=\"1000px\" viewBox=\"0 0 1500 1000\" xml:space=\"preserve\"><image clip-path=url(\"#clipPath\") style=\"transform:scale(3);transform-origin:"+(e.pageX-200)+"px "+e.pageY+"px; \" overflow=\"visible\" width=\"1092.8\"  xlink:href=\"..//book-3246278_1920.jpg\"></image><defs><clipPath id=\"clipPath\">";
			     	
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
						saveAs(blob,"book-3246278_1920.png");
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
					fabric.Image.fromURL("../uploads/book-3246278_1920.jpg", function(img) {
				    img.scaleToWidth(1092.8);img.scaleToHeight(614.4000000000001);var path0 = new fabric.Path("M 682.0033163042079 187.87947099514255 Q 682.002316304208 187.88047099514256 681.502680907648 189.379517306274 Q 681.0030455110882 190.87856361740546 677.5055977351692 194.37633834337885 Q 674.0081499592502 197.87411306935226 672.0096083730107 199.8728414841942 Q 670.0110667867713 201.87156989903613 663.5158066314931 205.86902672872003 Q 657.0205464762149 209.8664835584039 651.5245571140565 212.8645761806668 Q 646.0285677518981 215.86266880292973 641.5318491828593 216.8620330103507 Q 637.0351306138206 217.86139721777167 628.0416934757432 218.86076142519266 Q 619.0482563376656 219.86012563261363 603.0599236477501 219.86012563261363 Q 587.0715909578347 219.86012563261363 575.0803414403981 219.86012563261363 Q 563.0890919229614 219.86012563261363 528.1146141637712 217.8613972177717 Q 493.1401364045811 215.86266880292973 455.1678462660318 209.8664835584039 Q 417.1955561274825 203.8702983138781 401.207223437567 200.3725235879047 Q 385.2188907476515 196.8747488619313 360.23712091965854 188.87983520256353 Q 335.2553510916656 180.88492154319576 322.7644661776691 174.38905419495944 Q 310.2735812636726 167.89318684672313 307.7754042808733 165.39477632817068 Q 305.277227298074 162.89636580961826 301.77977952215497 157.89954477251342 Q 298.28233174623597 152.90272373540856 297.78269634967614 146.40685638717224 Q 297.28306095311626 139.91098903893595 297.28306095311626 137.41257852038353 Q 297.28306095311626 134.9141680018311 298.28233174623597 127.4189364461738 Q 299.28160253935573 119.92370489051652 306.27649809119373 112.42847333485923 Q 313.2713936430318 104.93324177920195 318.76738300519025 101.43546705322855 Q 324.26337236734867 97.93769232725515 347.2466006091022 88.94341446046641 Q 370.2298288508557 79.94913659367768 404.704671213486 72.4539050380204 Q 439.1795135761163 64.95867348236311 460.6638356281902 59.96185244525826 Q 482.1481576802642 54.96503140815341 524.1175309912924 50.46789247475904 Q 566.0869043023206 45.970753541364665 601.5610174580706 45.471071437654174 Q 637.0351306138206 44.97138933394369 653.5230987002959 44.97138933394369 Q 670.0110667867713 44.97138933394369 691.995024235405 48.46916405991709 Q 713.9789816840389 51.96693878589049 727.4691373911551 57.46344192670583 Q 740.9592930982714 62.959945067521176 744.9563762707502 65.4583555860736 Q 748.953459443229 67.95676610462603 754.9490842019474 74.95231555657281 Q 760.9447089606657 81.94786500851961 763.442885943465 88.94341446046641 Q 765.9410629262643 95.93896391241321 766.4406983228241 99.43673863838661 Q 766.940333719384 102.93451336436001 767.4399691159438 109.43038071259633 Q 767.9396045125037 115.92624806083263 766.940333719384 122.42211540906894 Q 765.9410629262643 128.91798275730525 764.4421567365847 132.41575748327864 Q 762.9432505469051 135.91353220925205 757.4472611847466 143.40876376490934 Q 751.9512718225882 150.90399532056662 742.9578346845108 157.89954477251342 Q 733.9643975464332 164.89509422446022 727.4691373911551 168.89255105414412 Q 720.9738772358769 172.890007883828 703.9862737528417 181.88428575061673 Q 686.9986702698066 190.87856361740546 669.5114313902114 197.87411306935226 Q 652.0241925106163 204.86966252129906 642.0314845794192 208.86711935098293 Q 632.038776648222 212.86457618066683 617.549350147986 216.36235090664024 Q 603.0599236477501 219.86012563261363 592.5675803199931 221.85885404745557 Q 582.0752369922361 223.8575824622975 580.0766954059966 224.35726456600798 Q 578.0781538197572 224.85694666971847 577.0788830266374 224.85694666971847 Q 576.0796122335178 224.85694666971847 576.0796122335178 222.35853615116605 Q 576.0796122335178 219.86012563261363 578.5777892163171 210.36616566211438 Q 581.0759661991164 200.87220569161516 583.0745077853558 195.8753846545103 L 585.0740493715952 190.87756361740546z"); path0.set({ fill:false, stroke: "#0645fb", opacity: 0.7,strokeWidth:1 });
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
					background-image: url("../uploads/book-3246278_1920.jpg");
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
			    var paths = [], canvasPathD = [], canvasPathFill = [], canvasPathS = [], canvasPathW=[];paths[0]='<path id="edd_0" vector-effect="non-scaling-stroke" fill="#0645fb" stroke-width="1" stroke="#0645fb" d="M 682.0033163042079 187.87947099514255 Q 682.002316304208 187.88047099514256 681.502680907648 189.379517306274 Q 681.0030455110882 190.87856361740546 677.5055977351692 194.37633834337885 Q 674.0081499592502 197.87411306935226 672.0096083730107 199.8728414841942 Q 670.0110667867713 201.87156989903613 663.5158066314931 205.86902672872003 Q 657.0205464762149 209.8664835584039 651.5245571140565 212.8645761806668 Q 646.0285677518981 215.86266880292973 641.5318491828593 216.8620330103507 Q 637.0351306138206 217.86139721777167 628.0416934757432 218.86076142519266 Q 619.0482563376656 219.86012563261363 603.0599236477501 219.86012563261363 Q 587.0715909578347 219.86012563261363 575.0803414403981 219.86012563261363 Q 563.0890919229614 219.86012563261363 528.1146141637712 217.8613972177717 Q 493.1401364045811 215.86266880292973 455.1678462660318 209.8664835584039 Q 417.1955561274825 203.8702983138781 401.207223437567 200.3725235879047 Q 385.2188907476515 196.8747488619313 360.23712091965854 188.87983520256353 Q 335.2553510916656 180.88492154319576 322.7644661776691 174.38905419495944 Q 310.2735812636726 167.89318684672313 307.7754042808733 165.39477632817068 Q 305.277227298074 162.89636580961826 301.77977952215497 157.89954477251342 Q 298.28233174623597 152.90272373540856 297.78269634967614 146.40685638717224 Q 297.28306095311626 139.91098903893595 297.28306095311626 137.41257852038353 Q 297.28306095311626 134.9141680018311 298.28233174623597 127.4189364461738 Q 299.28160253935573 119.92370489051652 306.27649809119373 112.42847333485923 Q 313.2713936430318 104.93324177920195 318.76738300519025 101.43546705322855 Q 324.26337236734867 97.93769232725515 347.2466006091022 88.94341446046641 Q 370.2298288508557 79.94913659367768 404.704671213486 72.4539050380204 Q 439.1795135761163 64.95867348236311 460.6638356281902 59.96185244525826 Q 482.1481576802642 54.96503140815341 524.1175309912924 50.46789247475904 Q 566.0869043023206 45.970753541364665 601.5610174580706 45.471071437654174 Q 637.0351306138206 44.97138933394369 653.5230987002959 44.97138933394369 Q 670.0110667867713 44.97138933394369 691.995024235405 48.46916405991709 Q 713.9789816840389 51.96693878589049 727.4691373911551 57.46344192670583 Q 740.9592930982714 62.959945067521176 744.9563762707502 65.4583555860736 Q 748.953459443229 67.95676610462603 754.9490842019474 74.95231555657281 Q 760.9447089606657 81.94786500851961 763.442885943465 88.94341446046641 Q 765.9410629262643 95.93896391241321 766.4406983228241 99.43673863838661 Q 766.940333719384 102.93451336436001 767.4399691159438 109.43038071259633 Q 767.9396045125037 115.92624806083263 766.940333719384 122.42211540906894 Q 765.9410629262643 128.91798275730525 764.4421567365847 132.41575748327864 Q 762.9432505469051 135.91353220925205 757.4472611847466 143.40876376490934 Q 751.9512718225882 150.90399532056662 742.9578346845108 157.89954477251342 Q 733.9643975464332 164.89509422446022 727.4691373911551 168.89255105414412 Q 720.9738772358769 172.890007883828 703.9862737528417 181.88428575061673 Q 686.9986702698066 190.87856361740546 669.5114313902114 197.87411306935226 Q 652.0241925106163 204.86966252129906 642.0314845794192 208.86711935098293 Q 632.038776648222 212.86457618066683 617.549350147986 216.36235090664024 Q 603.0599236477501 219.86012563261363 592.5675803199931 221.85885404745557 Q 582.0752369922361 223.8575824622975 580.0766954059966 224.35726456600798 Q 578.0781538197572 224.85694666971847 577.0788830266374 224.85694666971847 Q 576.0796122335178 224.85694666971847 576.0796122335178 222.35853615116605 Q 576.0796122335178 219.86012563261363 578.5777892163171 210.36616566211438 Q 581.0759661991164 200.87220569161516 583.0745077853558 195.8753846545103 L 585.0740493715952 190.87756361740546z" fill-opacity="0" stroke-opacity="1" cursor="pointer"></path>';canvasPathD[0]='M 682.0033163042079 187.87947099514255 Q 682.002316304208 187.88047099514256 681.502680907648 189.379517306274 Q 681.0030455110882 190.87856361740546 677.5055977351692 194.37633834337885 Q 674.0081499592502 197.87411306935226 672.0096083730107 199.8728414841942 Q 670.0110667867713 201.87156989903613 663.5158066314931 205.86902672872003 Q 657.0205464762149 209.8664835584039 651.5245571140565 212.8645761806668 Q 646.0285677518981 215.86266880292973 641.5318491828593 216.8620330103507 Q 637.0351306138206 217.86139721777167 628.0416934757432 218.86076142519266 Q 619.0482563376656 219.86012563261363 603.0599236477501 219.86012563261363 Q 587.0715909578347 219.86012563261363 575.0803414403981 219.86012563261363 Q 563.0890919229614 219.86012563261363 528.1146141637712 217.8613972177717 Q 493.1401364045811 215.86266880292973 455.1678462660318 209.8664835584039 Q 417.1955561274825 203.8702983138781 401.207223437567 200.3725235879047 Q 385.2188907476515 196.8747488619313 360.23712091965854 188.87983520256353 Q 335.2553510916656 180.88492154319576 322.7644661776691 174.38905419495944 Q 310.2735812636726 167.89318684672313 307.7754042808733 165.39477632817068 Q 305.277227298074 162.89636580961826 301.77977952215497 157.89954477251342 Q 298.28233174623597 152.90272373540856 297.78269634967614 146.40685638717224 Q 297.28306095311626 139.91098903893595 297.28306095311626 137.41257852038353 Q 297.28306095311626 134.9141680018311 298.28233174623597 127.4189364461738 Q 299.28160253935573 119.92370489051652 306.27649809119373 112.42847333485923 Q 313.2713936430318 104.93324177920195 318.76738300519025 101.43546705322855 Q 324.26337236734867 97.93769232725515 347.2466006091022 88.94341446046641 Q 370.2298288508557 79.94913659367768 404.704671213486 72.4539050380204 Q 439.1795135761163 64.95867348236311 460.6638356281902 59.96185244525826 Q 482.1481576802642 54.96503140815341 524.1175309912924 50.46789247475904 Q 566.0869043023206 45.970753541364665 601.5610174580706 45.471071437654174 Q 637.0351306138206 44.97138933394369 653.5230987002959 44.97138933394369 Q 670.0110667867713 44.97138933394369 691.995024235405 48.46916405991709 Q 713.9789816840389 51.96693878589049 727.4691373911551 57.46344192670583 Q 740.9592930982714 62.959945067521176 744.9563762707502 65.4583555860736 Q 748.953459443229 67.95676610462603 754.9490842019474 74.95231555657281 Q 760.9447089606657 81.94786500851961 763.442885943465 88.94341446046641 Q 765.9410629262643 95.93896391241321 766.4406983228241 99.43673863838661 Q 766.940333719384 102.93451336436001 767.4399691159438 109.43038071259633 Q 767.9396045125037 115.92624806083263 766.940333719384 122.42211540906894 Q 765.9410629262643 128.91798275730525 764.4421567365847 132.41575748327864 Q 762.9432505469051 135.91353220925205 757.4472611847466 143.40876376490934 Q 751.9512718225882 150.90399532056662 742.9578346845108 157.89954477251342 Q 733.9643975464332 164.89509422446022 727.4691373911551 168.89255105414412 Q 720.9738772358769 172.890007883828 703.9862737528417 181.88428575061673 Q 686.9986702698066 190.87856361740546 669.5114313902114 197.87411306935226 Q 652.0241925106163 204.86966252129906 642.0314845794192 208.86711935098293 Q 632.038776648222 212.86457618066683 617.549350147986 216.36235090664024 Q 603.0599236477501 219.86012563261363 592.5675803199931 221.85885404745557 Q 582.0752369922361 223.8575824622975 580.0766954059966 224.35726456600798 Q 578.0781538197572 224.85694666971847 577.0788830266374 224.85694666971847 Q 576.0796122335178 224.85694666971847 576.0796122335178 222.35853615116605 Q 576.0796122335178 219.86012563261363 578.5777892163171 210.36616566211438 Q 581.0759661991164 200.87220569161516 583.0745077853558 195.8753846545103 L 585.0740493715952 190.87756361740546z';canvasPathFill[0]='#0645fb';canvasPathS[0]='#0645fb';canvasPathW[0]='1';$("#redo").click(function(){
					$.ajax({
						url: "../public/savecanvas.php",
						type: "post",
						data:{
							"paths":paths,
							"imgName":"book-3246278_1920",
							"imgfullname":"book-3246278_1920.jpg",
							"num" : "1",
							"canvasPathD":canvasPathD,
							"canvasPathFill":canvasPathFill,
							"canvasPathS":canvasPathS,
							"canvasPathW":canvasPathW,
						},
						success: function(result){
							document.location = "../canvas/book-3246278_1920.php";
							
					    }
					});
				})	
				</script>
			
		</body>
	</html>