<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <title>INPUT</title>
</head>
<body style="background-color: #CFF5E7;">
<header>
    <style>
          h3{
          background: #A0E4CB;
          margin-left: 250px;
          margin-right: 250px;
          margin-bottom: 1px;
          }
        form p > label {
            display: inline-block;
            width: 125px;
        }
        form input[type="submit"] {
            border: 1px solid #190a43;
            background-color: #0D4C92;
            color: #ffffff;
            font-weight: bold;
            padding: 5px 15px;
        }
        form fieldset{
          background-color: #A0E4CB;
            margin-left: 250px;
            margin-right: 250px;
            border: 5px solid #59C1BD;
        }
        form label {
            margin-top: 5px;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }
    </style>
    </header>
    <h3 align="center"> Masukan Data Diri </h3>
<form action="OUTPUT.php"  method ="POST">
          <fieldset>  
          
         <p>
            <label for="nama">Nama &emsp; : </label>
            <input type="text" id="nama" name="nama">
        </p>
        <p>
            <label for="tanggal">Tanggal Lahir &ensp; : </label>
            <input type="date" id="tanggal" name="tanggal">
        </p>
        <label for="pekerjaan">Pekerjaan:  &ensp; : </label>
        <select  name="job">
        <option  value="" selected="selected">--PILIH PEKERJAAN </option>
        <option value="ASN">ASN</option>
        <option value="POLISI">POLISI</option>
        <option value="TNI">TNI</option>
        <option value="SWASTA">SWASTA</option>
        <option value="WIRAUSAHA">WIRAUSAHA</option>
    </select>
        <p><input type="submit" value="Kirim"></p>

          </fieldset>
</form> 
</body>

</html>