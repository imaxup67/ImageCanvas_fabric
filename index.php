<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/mycss.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/fabric.js"></script>

    <title>Fabricjs</title>
</head>

<body>
    <div class="container">
        <!-- content here -->
        <nav class="navbar navbar-expand-sm bg-light navbar-light" id="navtool">
            <div class="col-md-1">

            </div>
            <div class="col-md-3">
                <a class="navbar-brand ca">Please upload your File!</a>
            </div>
            <div class="col-md-8">
                <form class="form-inline" action="public/fileUpLoad.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-6 custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="fileToUpload"required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-success" role="button" aria-pressed="true" value="UPLOAD">
                    </div>
                </form>
            </div>

        </nav>
        <div class="row">
            <?php 
                $directoryName= "uploads";
                $fileNames = scandir($directoryName);
                $length = count($fileNames);
                for($i=2;$i<$length;$i++){
                    echo '<img id="'.$fileNames[$i].'"class="float-right img" src="uploads/'.$fileNames[$i].'" width="250" height="150" alt="">';
                }
            ?>
            <input type="hidden" value="" id="imgname">
        </div>
        <script>
            $(".img").on("click",function(e){
                var tempname = e.target.id;
                for(var i=0;i<tempname.length;i++){
                    if(tempname.charAt(i) ==="."){
                        break;
                    }
                    name+=tempname[i];
                }				
                $("#imgname").val(name);
                document.location="svgs/"+name+".php";
                name="";
            });
        </script>
    </div>
</body>
</html>