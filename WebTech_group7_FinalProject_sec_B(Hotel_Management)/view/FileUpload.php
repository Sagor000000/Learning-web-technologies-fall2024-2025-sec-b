<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
    <link rel="stylesheet" href="../asset/FileUpload.css"/>
</head>
<body>

    <center>
        <fieldset>
            <h2>Upload Files</h2>
            <form method="POST" action="FileReceive.php" enctype="multipart/form-data">
                <table>
                    <tr>
                        <th><label for="myfile">Select a file:</label></th> 
                        <td><input type="file" id="myfile" name="myfile" class="choose-file-button"></td>
                    </tr>

                    <tr>
                    <td></td>
                    <td> <button type="submit" name="submit" value="Update Information" class="upload-button"><b> Upload File </b></button> </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </center>
</body>
</html>
