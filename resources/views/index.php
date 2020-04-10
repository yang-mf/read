<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script language="javascript">
    function changeColor()

    {
        var color="#f00|#0f0|#00f|#880|#808|#088|yellow|green|blue|gray";
        color=color.split("|");
        document.getElementById("blink").style.color=color[parseInt(Math.random() * color.length)];
    }
    setInterval("changeColor()",200);
</script>



<div id="blink" style="margin-top: 25%;margin-left: 40%;">爱你哦</div>
</body>
<script>

</script>
</html>
