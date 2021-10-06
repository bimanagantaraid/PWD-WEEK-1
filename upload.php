<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>

<body>
    <form action="prosesupload.php" method="POST" enctype="multipart/form-data">
        <table border="1">
            <tr>
                <td>
                    <p>Pilih file : </p>
                </td>
                <td>
                    <input type="file" name="fileupload"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Deskripsi File : </p> 
                </td>
                <td>
                    <textarea name="deskripsi" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <input type="submit" value="Upload">
                    </center>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>