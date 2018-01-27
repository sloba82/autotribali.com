<?php

echo "<pre>";

print_r($_FILES['file_upload']);

echo "<pre>";
?>



<form  method="POST" action="" enctype="multipart/form-data">

file:<input type="file" name="file_upload"  />

<br>
<br>
<br>
<input type="submit"  name="submit"/>

</form>