<!DOCTYPE html>
<html lang ="en">
<head>
    <style>
        table,th,td{
            border: 3px solid green;
            margin: 5px;
        }
    </style>
</head>
    <body>
        <table id="tabelka" style="border 3px solid;">
            <tr><th>Data</th><th>Czas</th></tr>
            <tr>
                <td>
                 <?php echo date("Y-m-d"); ?>
                </td>
                <td>
                  <?php echo date("H:i:s");?>
                </td>
            </tr>
        </table>
    </body>
</html>