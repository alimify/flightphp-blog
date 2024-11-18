<?php

use app\records\MediaRecord;
use Intervention\Image\ImageManager;

function route($route, $params = []){
    return get_url(Flight::getUrl($route, $params));
}

function get_url($url){
    $base = Flight::get('flight.base_url');
    if ($base !== '/' && strpos($url, '://') === false) {
        $url = preg_replace('#/+#', '/', $base . '/' . $url);
    }
    return $url;
}

function asset($url){
    $base = Flight::get('flight.base_url');
    if ($base !== '/' && strpos($url, '://') === false) {
        $url = preg_replace('#/+#', '/', $base . '/' . $url);
    }
    return $url;
}

function string_to_slug($string) {
    $slug = strtolower($string);
    $slug = preg_replace('/\s+/', '-', $slug);
    $slug = preg_replace('/[^a-z0-9\-]/', '', $slug);
    $slug = preg_replace('/-+/', '-', $slug);
    $slug = trim($slug, '-');
    return $slug;
}

function article_media_content_filter($article){
    $content = $article->desc;
    preg_match_all('/FILE_(\d+)_FILE/', $content, $matches);
    
    if(count($matches[0]) > 0){
        $medias = new MediaRecord();
        $medias = $medias->order('id desc')->in('id',$matches[1])->findAll();
    
        foreach ($medias as $media) {
            $fileContent = "";
            $fileUrl = get_url($media->filepath);
            if(in_array($media->ext,['png','jpg','jpeg','gif'])){
                $fileContent = "<img src='". $fileUrl . "' alt=''/>";
            }else {
                $filename = $media->name;
                $fileContent = "<a href='$fileUrl'>$filename</a>";
            }
            $content = str_replace("FILE_". $media->id. "_FILE", $fileContent, $content);
        }
    }

    return $content;
}

function uploadFile($file){

    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    $filename = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];
    $fileType = $file['type'];

    if ($fileError !== UPLOAD_ERR_OK) {
        return '';
    }

    // $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    // if (!in_array($fileType, $allowedTypes)) {
    //     $messages[] = "Invalid file type for $fileName. Only JPEG, PNG, and GIF are allowed.";
    //     continue;
    // }

    $pathInfo = pathinfo($filename);
    $fileExtension = $pathInfo['extension'];

    $maxSize = 50 * 1024 * 1024;
    if ($fileSize > $maxSize) {
       return "";
    }

    $destination = $uploadDir . uniqid() .basename($filename);

    if (file_exists($destination)) {
        return $destination;
    }

    $saved = false;
    if (move_uploaded_file($fileTmpName, $destination)) {
       $saved = true;
    }
    if(Flight::get('image.compression') && $saved && extension_loaded('gd')){
        $imageTypes = ['image/jpg','image/jpeg','image/png','image/gif'];
        if(in_array($fileType, $imageTypes)){
            ImageManager::gd()->read($destination)
                              ->resize(800,600, function($constraint){
                                $constraint->aspectRatio();
                                $constraint->upsize();
                              })
                              ->save($destination);
        }
    }

    return $saved 
    ? $destination : "";
}


function abort($status){
    Flight::response()->status(404);
    echo '<!DOCTYPE html>
<html>
<head>
    <title>404 - Page Not Found</title>
</head>
<body>
    <h1>404 - Page Not Found</h1>
    <p>The page you are looking for might have been moved or deleted.</p>
</body>
</html>
';
    exit();
}