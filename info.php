<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="helper.php" method="post">

        <label for="">id for delete</label>
        <input type="text" name="id" id="">

        <label for="">Flight Name </label>
        <input type="text" name="flight_name" id="">

        <label for="">Flight time </label>
        <input type="text" name="flight_time" id="">

        <label for="">Flight price </label>
        <input type="text" name="flight_price" id="">

        <label for="">Flight code </label>
        <input type="text" name="flight_code" id="">

        <label for="">Flight company name </label>
        <input type="text" name="flight_company_name" id="">


       <input type="submit" value="insert" name = "insert">
       <input type="submit" value="update" name = "update"> 
       <input type="submit" value="delete" name = "delete">
       


    </form>

    <a href="flight.php">select random flights</a>


    
</body>

</html>