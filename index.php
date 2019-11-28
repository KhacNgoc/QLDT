<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QLDT</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
        }

        body {
            background-size: cover;
            height: 100vh;
        }

        table,
        th,
        td {
            border: 3px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
        }

        .container {
            position: absolute;
            top: 29%;
            transform: translateY(-25%);
            margin-left: 30%;
        }
    </style>
    <script>
        function myAdd() {
            document.getElementById("form").setAttribute('action', 'add.php');
        }
        function myEdit() {
            document.getElementById("form").setAttribute('action', 'update.php');
        }
        function eventEdit($idpr,$madt, $tendt, $tinhnang, $gia, $hang) {
            document.getElementById("idpr").setAttribute('value', $idpr);
            document.getElementById("id").setAttribute('value', $madt);
            document.getElementById("name").setAttribute('value', $tendt);
            document.getElementById("utility").setAttribute('value', $tinhnang);
            document.getElementById("price").setAttribute('value', $gia);
            document.getElementById("cat").value = $hang;
        }
    </script>
    <?php
    $con = mysqli_connect("localhost", "root", "", "QLDT");
    ?>
</head>

<body>
    <div class="container">
        <!-- Form -->
        <form id="form" action="#" method="POST">
            <input id="idpr" type="textbox" name="idpr" hidden value = "">
            Mã điện thoại
            <input id="id" type="textbox" name="id" required><br><br>
            Tên điện thoại
            <input id="name" type="textbox" name="name" required><br><br>
            Tính năng
            <input id="utility" type="textbox" name="utility" required><br><br>
            Giá
            <input id="price" type="number" name="price" required><br><br>
            Hãng
            <select id="cat" name="cat">
                <option value='Nokia'> Nokia </option>
                <option value='Sony Ericssion'> Sony Ericssion </option>
                <option value='SamSung'> SamSung </option>
            </select>
            <br><br>
            <input onclick="myAdd()" type="submit" value="   Thêm mới   ">
            <input onclick="myEdit()" type="submit" value="   Sửa   "><br><br>
        </form>
        <!-- view -->
        <table>
            <thead>
                <tr>
                    <th> STT1 </th>
                    <th> Mã điện thoại </th>
                    <th> Tên điện thoại </th>
                    <th> Giá </th>
                    <th> Hãng </th>
                    <th> Sửa </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM DIENTHOAI";
                $result = mysqli_query($con, $sql);
                $stt = 1;
                while ($row = mysqli_fetch_array($result)) {
                    $idpr=$row['id'];
                    $st = $stt;
                    $stt++;
                    $madt = $row['Ma dien thoai'];
                    $tendt = $row['Ten dien thoai'];
                    $tinhnang = $row['Tinh nang'];
                    $gia = $row['Gia'];
                    $hang = $row['Hang'];
                    ?>
                    <tr>
                        <td> <?php echo $st; ?> </td>
                        <td> <?php echo $madt; ?> </td>
                        <td> <?php echo $tendt; ?> </td>
                        <td> <?php echo $gia; ?> </td>
                        <td> <?php echo $hang; ?> </td>
                        <td>
                            <button onclick="eventEdit(<?php echo $idpr; ?>, '<?php echo $madt; ?>', '<?php echo $tendt; ?>', '<?php echo $tinhnang; ?>', <?php echo $gia; ?>, '<?php echo $hang; ?>')">
                            Edit
                            </button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <br>
    </div>
</body>
<?php
?>

</html>