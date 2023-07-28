<?php
    echo"Hello";
 ?>
//   // 连接到MySQL数据库
//   $servername = "54.65.230.207";
//   $username = "laundry";
//   $password = "12345678";
//   $dbname = "Laundry";
//
//   $conn = new mysqli($servername, $username, $password, $dbname);
//
//   // 检查连接是否成功
//   if ($conn->connect_error) {
//       die("连接失败: " . $conn->connect_error);
//   }
//
//   // 检索数据
//   $sql = "SELECT * FROM your_table_name";
//   $result = $conn->query($sql);
//
//   // 在HTML页面中直接嵌入数据
//   if ($result->num_rows > 0) {
//       while($row = $result->fetch_assoc()) {
//           echo "<div>".$row["column1"]." - ".$row["column2"]."</div>";
//       }
//   } else {
//       echo "没有数据";
//   }
//
//   // 关闭连接
//   $conn->close();
  ?>