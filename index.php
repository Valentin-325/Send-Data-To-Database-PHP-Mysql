<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending Data To DataBase</title>
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="firstDiv">
        <div class="title">
            <h1>Sending Data To DataBase</h1>
        </div>
        <div class="form">
            <form method="POST" action="trimiteredate.php">
				<label for="Nume">Nume</label>
					<input type="text" id="nume" name="nume" placeholder="Nume">

                <label for="Prenume">Prenume</label>
					<input type="text" id="prenume" name="prenume" placeholder="Prenume">

				<label for="Gen">Gen</label>
					<input type="text" id="gen" name="gen" placeholder="Gen">

                <label for="Varsta">Varsta</label>
					<input type="number" id="varsta" name="varsta" placeholder="Varsta"><br>

				<input type="submit" name="Trimite" value="Trimite">
			</form> 
        </div>



    </div>
</body>
</html>