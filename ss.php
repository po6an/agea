<form action="" method="post">
حساب العمر <input type="number" name="n">

<button type="submit" name="submit"> sub </button>


</form>
<?php
if(isset($_POST['submit'])){
    echo "your age in month : " . $_POST['n'] * 12 . '  month  <br/>';
    echo "your age in day : " . $_POST['n'] * 356 . '  days  <br/>';
    echo "your age in hour : " . $_POST['n'] * 8760 . '  hour  <br/>';
    echo "your age in sec : " . $_POST['n'] * 31536000  . '  secnod'; }

?>