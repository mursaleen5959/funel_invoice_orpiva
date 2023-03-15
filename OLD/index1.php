<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Invocie Form:</h1>
        <hr>
        <form action="pdf.php" method="post">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name here">
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Company:</label>
                        <input type="text" class="form-control" id="company" name="company" placeholder="Enter company name here">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label for="invoice" class="form-label">Invoice Number:</label>
                        <input type="number" class="form-control" id="invoice" name="invoice" placeholder="Enter invoice number">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="duedate" class="form-label">Payment Due Date:</label>
                        <input type="date" class="form-control" id="duedate" name="duedate">
                    </div>
                    <div class="mb-3">
                        <label for="discount" class="form-label">Discount:</label>
                        <input type="number" class="form-control" id="discount" name="discount" placeholder="Enter Discount here">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="desc" class="form-label">Project Description:</label>
                            <textarea name="desc" id="desc" cols="10" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="invoice" class="form-label">Price:</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price here">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <div class="d-grid align-center">
                            <button type="submit" name="formsubmit" class="btn btn-primary"><img src="src/pdf.png" width="55px"></button>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>