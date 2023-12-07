<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDF</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            background-color: #dee9ff;
        }

        .registration-form {
            padding: 50px 0;
        }

        .registration-form form {
            background-color: #fff;
            max-width: 600px;
            margin: auto;
            padding: 50px 70px;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            box-shadow: 0px 2px 10px rgba(66, 61, 61, 0.075);
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="registration-form"> 
        <form>
            <div>
                <img style="width: 100%; height: 150%;" alt="Image" src="<?php echo asset("/images/logo.png")?>">
            </div>
        </form>
        
    <table>
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Description</th>
                <th>HSN Code</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            <!-- Replace the following rows with actual data -->
            <tr>
                <td>1</td>
                <td>Item 1</td>
                <td>123456</td>
                <td>2</td>
                <td>$100.00</td>
                <td>$200.00</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    <p>Note: Prices are FOB, GST @ 12% extra. Payment and Cancellation as per the terms and conditions of supply.</p>
    <p>Digitally signed by BHAVESH KAPOOR</p>
</div>
</body>
</html>