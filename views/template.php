<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilan Comptable du:&nbsp;<?php echo date('d/M/Y'); ?></title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            margin-right: 10px;
            text-align: center;
        }
        body{
            
            font-size: 1.5rem;
            font-family: cursive;
        }
        table th{
            border: 1px solid black;
        }
        table,td{
            border: 1px solid black;
        }
        .one .one-td{
            color:red;
            border-left: none;
            border-right: none;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Check #</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo date('d,M,Y'); ?></td>
                <td><?php echo "7777"; ?></td>
                <td><?php echo "Transaction 1"; ?></td>
                <td><?php echo "$,456456"; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>