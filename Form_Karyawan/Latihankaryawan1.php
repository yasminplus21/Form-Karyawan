<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Karyawan</title>
<link href="daftar3.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
    //Validasi Form
    function validasi(karyawan){
    var huruf =  /^[a-zA-Z ]+$/;
    var email = /^([a-zA-Z0-9_.+-])+@(([a-zA-Z0-9-])+.[a-zA-Z0-9]{2,4})+$/;
    var terpilih = (karyawan.jabatan.value);


    if (!isNaN(karyawan.id.value)){

    } else {
        alert("ID Harus Angka"); //ID
        karyawan.id.focus();
        return false;
    }
    if (karyawan.nama.value.match(huruf)){

    } else {
        alert("Nama Harus Huruf"); //NAMA
        karyawan.nama.focus();
        return false;
    }
    if (!isNaN(karyawan.tlp.value)){

    } else {
        alert("No Hp/Telp Harus Angka"); //ID
        karyawan.tlp.focus();
        return false;
    }
    if (terpilih == 0) { 
    
        alert ("Harap Pilih Jabatan");
        return false;
    }
    return true;
    return true;
}
</script>
</head>
<body>
<h3>Pencatatan Penjualan Fotocopy</h3>
<form name="karyawan" action="" method="post" class="smart-green" onsubmit="return validasi(this)">
    <h1>Form Karyawan 
        <span>Silahkan Isi Text Dibawah Ini !</span>
    </h1>
    <label>
        <span>ID Pegawai :</span>
        <input id="id" type="text" name="id" placeholder=" Your Id Pegawai" required="" />
    </label>
    
    <label>
        <span>Nama Pegawai:</span>
        <input id="nama" type="text" name="nama" placeholder="Your Name Pegawai" / required="">
    </label>
    
    <label>
        <span>No Telp :</span>
        <input id="tlp" type="text" name="tlp" placeholder="Your Number Telp/Hp" required="">
    </label> 

    <label>
        <span>Pilih Jabatan :</span>
        <select name="jabatan" id="jabatan" size="I" required="">
            <option value="0">-- Pilih Jabatan --</option>
            <option>Admin</option>
            <option>Data Entry</option>
        </select>
    </label> 

    <label>
        <span>Username:</span>
        <input id="username" type="text" name="username" placeholder="Your Username " / required="">
    </label>
    
    <b><label>
        <span>Password</span>
        <input id="telp" type="password" name="password" placeholder="Your Password" required="">
    </label></b>
    <label>
        <input type="submit" class="submit" value="Submit" /> 
      <input type="reset" class="reset" value="Reset"></td>     
    </label>    
</form>
</body>
</html>