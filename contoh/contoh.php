<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            setInterval(function(){
                $("#volumeair").load("volumeair.php");
                $("#arus").load("arus.php");
                $("#ph").load("ph.php");
            }, 1000);

            
        });
    </script>
</head>
<body>
      
    <table class="col-12">
        <tr>
            <td ></td>
            <td ></td>
            <td ></td>
        </tr>
    </table>

    <table class="table table-dark">
        <thead>
            ...
        </thead>
        <tbody style="">
            <tr class="table-active">
            ...
            </tr>
            <tr>
            ...
            </tr>
            <tr>
            <td><span  id="volumeair"> 0 </span></td>
            <td><span  id="arus"> 0 </span></td>
            <td><span  id="ph"> 0 </span></td>
            </tr>
        </tbody>
    </table>

    
</body>
</html>