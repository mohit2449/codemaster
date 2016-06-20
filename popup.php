<!DOCTYPE html>
<html>
<head>
    <?php
        //require_once 'include/config_irs.php';
        $base_url = 'http://'.$_SERVER['HTTP_HOST'].'/';
        
    ?>    
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>    
    <script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    
    <script type="text/javascript">
        $(document).ready(function(){
 
            openFancybox();
            $('#various1').fancybox();
        });
        function openFancybox() {
            setTimeout( function() {$('#various1').trigger('click'); },1000);
        }
    </script>
    

    
</head>
<body>
    <h1>fancyBox demonstration</h1>        

    <a id="various1" href="#target"></a>
    <div style="display: none;">
     <div id="target" style="width:300px;height:350px;border:0.5px solid #ccc;">welcome to <a href="http://www.shoesdekho.com">shoesdekho.com</a></div>
    </div>

     
</body>
</html>
