 <?php
 session_start();
// $admins=array('mohamed','ahmed','abdallah');
// $username=$_GET['username'];
// if(in_array(strtolower($username),$admins)){
//     echo 'welcom to my controll panal';
// }else echo 'ا
// echo "<pre>";
// echo var_dump($_GET);
// echo "</pre>";

// if(isset($_GET['submit'])){
//     echo 'login sccssufuly';

// //  -->
if(isset($_POST['login'])){
    setcookie('bg-color',$_POST['bg-color'],strtotime("+1 year"));
}

if(isset($_COOKIE['bg-color'])){
    echo "<style>body{background-color:".$_COOKIE['bg-color']."</style>";
};



echo '<pre>';
print_r($_POST);
echo '</pre>';

echo '<pre>';
print_r($_FILES);
echo '</pre>';

var_dump(file_exists("abdo")) ;
echo filesize('index2.php');

$handel=fopen('el.txt','w');







?>

<form method="post">
    <label>Choose your color</label>
    <input type="color" name="bg-color">
    <input type="submit" value="Choose"name='login'>
</form>

<hr>
<form method="post" enctype="multipart/form-data">
    <label>Upload File</label>
    <input type="file" name="uploadfile">
    <input type="submit" value="UPload" name="submitfile">
</form>
