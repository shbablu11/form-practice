<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row mx-auto" style="justify-content: center;">
                <div class="mb-3 mt-5 col-lg-2">
                <form action="./loginchecker.php" method="POST">
                    <div>
                        <label for="emailid" class="form-label">enter your email</label>
                        <input name="user_email" type="email" class="form-control" id="emailid">
                    
                        <label for="idpass" class="form-label">enter your password</label>
                        <input name="user_pass" type="text" class="form-control" id="idpass">
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                </form>
            </div>

            <div class="mb-3 mt-5 col-lg-2">
                <form action="./odd even.php" method="POST">
                    <div>
                        <label for="oddeven" class="form-label">Odd-Even-Pos-Neg</label>
                        <input name="input_number" type="number" class="form-control" id="oddeven">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>

            <div class="mb-3 mt-5 col-lg-2">
                <form action="./timestable.php" method="POST">
                    <div>
                        <label for="timetable" class="form-label">TimeTable 1</label>
                        <input name="number" type="number" class="form-control" id="timetable">
                    </div>

                    <button type="submit" class="btn btn-danger mt-3">Submit</button>
                </form>
            </div>

            <div class="mb-3 mt-5 col-lg-2">
                <form action="./timestablemulti.php" method="POST">
                    <div>
                        <label for="timetables" class="form-label">TimeTable (multi)</label>
                        <input name="numbers" type="number" class="form-control" id="timetables">
                    </div>

                    <button type="submit" class="btn btn-warning mt-3">Submit</button>
                </form>
            </div>

            <div class="mb-3 mt-5 col-lg-2">
                <form action="./factorial.php" method="POST">
                    <div>
                        <label for="factorial" class="form-label">Factorial</label>
                        <input name="input_number" type="number" class="form-control" id="factorial">
                    </div>

                    <button type="submit" class="btn btn-dark mt-3">Submit</button>
                </form>
            </div>


        </div>



    </div>
    
</body>
</html>