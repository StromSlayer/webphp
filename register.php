
<link href="./styles.css" rel="stylesheet"/>
<form action="member_insert.php" method="post" enctype="multipart/form-data">
    ชื่อ  <input type="text" name="firstname" /> class="input" />
    นามสกุล  <input type="text" name="lastname" /> <br/>
    อีเมล <input type="email" name="email" /> <br/>
    เบอร์โทร <input type="text" name="phone" /> <br/>
    ที่อยู่ <textarea name="address"> </textarea> <br/>
    แนบรูป <input type="file" name="photo" /> <br/>
    <input type="submit" value="บันทึกข้อมูล" />
</form>