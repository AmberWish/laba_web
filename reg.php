     <?php

         $mysqli = new mysqli("localhost","root","","data");
		 echo "".$_POST['login'];
		 if($_POST['login'] != '')
	         $result = $mysqli->query("INSERT INTO users (password, date, age, telephone, sex, login, email, lock_user) VALUES ('".$_POST['password']."','".$_POST['date']."','".$_POST['Age']."','".$_POST['usrtel']."','".$_POST['']."','".$_POST['login']."','".$_POST['email']."',b'0')");
		?>
<html>
<head>
<title>Գ������� ����� �� ��������� �������� �� ³���</title>
<style>
   
   td {
    padding: 5px; /* ���� � ������� */
    vertical-align: top; /* ������������ �� �������� ���� ����� */
   }
  
  </style>
</head>
<body bgcolor="#F3E5AB" link="#92000A" background="back1.jpg">
<table width="100%" height="100%" cellpadding="0" cellspacing="0" border="0">
   <!--<h1>Գ������� ����� �� ��������� �������� �� ³���</h1> -->
   <tr>
   <td rowspan="3" width="25%"> </td>
   <td colspan="6" height="20%"><img src="logo.png" height="100%" width="100%" ></td>
   <td rowspan="3" width="25%"> </td>
   </tr>
   <tr>
    <th height="5%"><a href="index.php"><font size="5"  color="#8B0000" >�������</font></a></th>
    <th><a href="biography.html"><font size="5" color="#8B0000">���������</font></th>
    <th><a href="picture.html"><font size="5" color="#8B0000">�������</font></a></th>
    <th><a href="science.html"><font size="5" color="#8B0000">��������</font></a></th>
	<th><a href="quotes.html"><font size="5" color="#8B0000">������</font></a> </th>
	<th><a href="reviews.php"><font size="5" color="#8B0000">³�����</font></a></th> 
   </tr>
   <tr>
   <td colspan="1" width="10%">   
  </td>
   <td colspan="4" width="40%"><p align="center">
	                  <form method="POST" action="reg.php">
							<br><br>
							<center>
							<h3>����������</h3>
							</center>
							<label for="login">����:</label><input type="text" required id="login" name= "login">
							<br><br>
								<label for="email">��.�����:</label><input type="text" required id="email" name= "email">
							<br><br>
							<label for="password">������:</label><input type="text" required id="password" name= "password">
							<br><br>
							<label for="agrpassword">ϳ����������� ������:</label><input type="password" required id="agrpassword">
							<br><br>
							<label for="date">���� ����������:</label><input type="text" id="date" name= "date">
							<br><br>
							<label for="Age">³�:</label><input type="text" min="10" max="100" step="1" value="12" name="Age">
							<br><br>
							<label for="telephone">�������:</label><input type="text" name="usrtel">
                            <br><br>
							<label>�����:</label>
							<br>
							<input type="radio" id="man" name="sex"><label for="man">�������</label>
							<br>
							<input type="radio" id="woman" name="sex"><label for="woman">Ƴ����</label>
							
							<center>
							<p>������ ��������� ���������?</p>
							<input type="submit">
							
							</center>
							<br><br>
						</form> 
   </td>
   </tr>

  </table>
		
		


</body>
</html>