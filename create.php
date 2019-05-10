<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Linn Internship Program</title>
    <style>
    .banner_div{
    background-color : green;
    width:100%;
    height:50px;

    }
    .banner_table{
        
        width:100%;
        height:auto;
    }
    .footer{
        background-color : red;
        position: fixed;
        left:0;
        bottom:0;
        width:100%;
        color:white;
       text-align=center;
    }
        .banner_mar{
            margin left:600px;
        }
    </style>
</head>
<body>
    <div class="banner_div" align="center">
        <h1 id="banner_title">Linn Internship Program</h1>
    </div>
    <br>
    <a href="create.php">
     <input type="button"  value="Add new student"></a>
     <br><br>

     <caption>Internship Student listing</caption>
     <div class="banner_mar"align="center">
     <form action="query/store.php" method="post">
        <label>Roll No</label><br>
        <input type="text" name="rollno"><br>
        <label>Name</label><br>
        <input type="text" name="name"><br>
        <label>Email</label><br>
        <input type="text" name="email"><br>
        <label>Phone</label><br>
        <input type="text" name="phone"><br>
        <label>Address</label><br>
        <input type="textarea" name="address"><br>
        <br>
        <button>
            <a href="index.php">Back</a>
        </button>
       <input type="submit" value="Save"><br>
       <input type="submit" value="update"><br>
     </form>
    
    <div class="footer">
    <p>well done</p>
    </div>

</body>
</html>