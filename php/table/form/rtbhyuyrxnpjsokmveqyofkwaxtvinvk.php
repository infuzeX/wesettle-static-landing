<?php
include("../../db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>User Queries</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta name="author" content="Shreethemes" />
    <meta name="Version" content="2.1" />
    <!-- favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body style="margin: 2%;">

    <section>
        <center>
            <label><b>Export Table Data To Excel File: </b></label>
            <button class="btn btn-primary" onclick="exportTableToExcel('tblData')">Click Here To Export Data</button>
        </center>
        <br>
        <table class="table" id="tblData">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email-id</th>
                    <th scope="col">Area</th>
                    <th scope="col">Premium Properties</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    $sql = "SELECT * FROM form";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                ?>
                            <tr>
                                <td class="text-left"><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["phone"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["area"]; ?></td>
                                <td><?php echo $row["whatsapp_updates"]; ?></td>
                            </tr>
                <?php
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </tbody>
        </table>
        
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
            function exportTableToExcel(tableID, filename = 'data'){
                var downloadLink;
                var dataType = 'application/vnd.ms-excel';
                var tableSelect = document.getElementById(tableID);
                var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
                
                // Specify file name
                filename = filename?filename+'.xls':'excel_data.xls';
                
                // Create download link element
                downloadLink = document.createElement("a");
                
                document.body.appendChild(downloadLink);
                
                if(navigator.msSaveOrOpenBlob){
                    var blob = new Blob(['\ufeff', tableHTML], {
                        type: dataType
                    });
                    navigator.msSaveOrOpenBlob( blob, filename);
                }else{
                    // Create a link to the file
                    downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
                
                    // Setting the file name
                    downloadLink.download = filename;
                    
                    //triggering the function
                    downloadLink.click();
                }
            }
        </script>
</body>

</html>