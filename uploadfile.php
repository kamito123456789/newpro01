<?php
if($_FILES["myfile"]["error"]>0){
    echo "error:".$_FILES["myfile"]["error"];
}else{
    echo "檔案名稱:".$_FILES["myfile"]["name"]."<br>";
    echo "檔案類型:".$_FILES["myfile"]["type"]."<br>";
    echo "檔案大小:".($_FILES["myfile"]["size"]/1024)."KB<br>";
    echo "暫存名稱:".$_FILES["myfile"]["tmp_name"];
    if(file_exists("upload/".$_FILES["myfile"]["name"])){
        echo "檔案存在";
    }else{
        $target_path="upload/";
        $target_path.=$_FILES["myfile"]["name"];
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$target_path)){   
            echo "檔案:".$_FILES["myfile"]["name"]."上傳成功";
        }else{
            echo "上傳失敗";
        }
    }
}
?>