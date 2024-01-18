<?php  
// 检查是否有文件被上传  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
    $uploaddir = 'upload/'; // 上传文件的目录  
    $maxfilesize = 1000000; // 最大文件大小（1MB）  
    $exts = array("pdf", "docx"); // 允许的文件扩展名  
    $count = count($_FILES['files']['name']);  
    $uploadfiles = array(); // 存储所有上传文件的数组  
    for ($i = 0; $i < $count; $i++) {  
        // 检查文件是否被选中  
        if (!empty($_FILES['files']['name'][$i])) {  
            // 检查文件大小和扩展名是否有效  
            $filesize = $_FILES['files']['size'][$i];  
            $fileext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);  
            if ($filesize <= $maxfilesize && in_array($fileext, $exts)) {  
                // 提取文件名并移动到目标目录  
                $filename = basename($_FILES['files']['name'][$i]);  
                $uploadfiles[] = $filename; // 将文件名添加到数组中以备后用  
                move_uploaded_file($_FILES['files']['tmp_name'][$i], $uploaddir . $filename);  
            } else {  
                echo "错误：文件过大或不支持的格式";  
            }  
        } else {  
            echo "错误：请选择至少一个文件";  
        }  
    }  
    
    if (empty($error)) {  
        header("Location: redirect.php"); 
        exit; 
    } else {  
        echo "上传过程中出现错误"; 
    }  
} else {  
    echo "错误：请求方法不是POST";   
}  
?>