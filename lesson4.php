<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson4</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--  jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--  JavaScript -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<!--  CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>

<body>

</body>
<div class="container p-5 my-5 bg-dark text-white">
    <h1>Database to Web with PHP</h1>
    <p>6501102057504 Miss.Suparat Tatara</p>
</div>
<?php
require "connect.php";
$sql = "SELECT * FROM tb_section";

// Prepare and execute the statement
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Fetch all results as an associative array
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="container mt-3">
    <h2>Section Data</h2>
    <p>Section Data details</p>
    <div class="btn-group btn-group-lg">
  <button type="button" class="btn btn-success" onclick="window.location.href ='lesson1.php'">Lesson 1 : แสดงข้อมูลทั้งหมดโดยเรียงจาก SECT_ID จากมากไปหาน้อย</button>
  <button type="button" class="btn btn-success" onclick="window.location.href ='lesson2.php'">Lesson 2 : แสดงข้อมูลเฉพาะ SECT_TELEPHONE และ SECT_NAME โดยเรียงจาก SECT_NAME จาก A-Z</button>
  <button type="button" class="btn btn-success" onclick="window.location.href ='lesson3.php'">Lesson 3 : แสดงข้อมูลทั้งหมด โดยเลือกเฉพาะที่ SECT_TELEPHONE มีเลข 12 และเรียงข้อมูลจาก SECT_NAME จาก Z-A
</button>
</div>
    <table class="table table-hover" id="myTable">
        <thead>
            <tr>
                <th>SECT_ID</th>
                <th>SECT_NAME</th>
                <th>SECT_BUILDING_NAME</th>
                <th>SECT_TELEPHONE</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $row) { ?>
                <tr>
                    <td><?php echo $row['SECT_ID']; ?></td>
                    <td><?php echo $row['SECT_NAME']; ?></td>
                    <td><?php echo $row['SECT_BUILDING_NAME']; ?></td>
                    <td><?php echo $row['SECT_TELEPHONE']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
</script>



</html>