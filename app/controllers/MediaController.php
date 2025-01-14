<?php

namespace app\controllers;

use app\records\CategoryRecord;
use app\records\MediaRecord;
use app\records\UserRecord;
use Flight;
use Intervention\Image\ImageManager;

class MediaController extends BaseController
{

    public function index()
    {
        $alias = Flight::request()->query->alias;
        $aliasId = Flight::request()->query->aliasId;
        if(!$aliasId){
            $aliasId = getMediaAliasId($alias);
        }
        $tag = "$alias"."$aliasId";
        $files = (new MediaRecord())
        ->eq('tag',$tag)
        ->orderBy('id desc')
        ->limit(10)
        ->findAll();

        return $this->render('admin/media/files',[
            'files' => $files
        ]);
    }

    public function uploadFiles()
    {
        $request = Flight::request();
        $files = $request->files['file_drop'];
        $tag = $request->data->tag;
        $messages = [];
    // Check if files were uploaded
    if (count($files) > 0) {
        $uploadedFiles = $files;
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        foreach ($uploadedFiles['name'] as $index => $fileName) {
            $uploaded = false;
            $fileTmpName = $uploadedFiles['tmp_name'][$index];
            $fileError = $uploadedFiles['error'][$index];
            $fileSize = $uploadedFiles['size'][$index];
            $fileType = $uploadedFiles['type'][$index];

            if ($fileError !== UPLOAD_ERR_OK) {
                $messages[] = "Error uploading file: $fileName";
                continue;
            }


            $pathInfo = pathinfo($fileName);
            $fileExtension = $pathInfo['extension'];
            $allowedTypes = ['jpg','png','gif','pdf','doc,','docx','tiff','tif','rtf','doc','rar','zip'];
            if (!in_array($fileExtension, $allowedTypes)) {
                $messages[] = "Invalid file type for $fileName. Only JPEG, PNG, and GIF are allowed.";
                continue;
            }

            $maxSize = 50 * 1024 * 1024;
            if ($fileSize > $maxSize) {
                $messages[] = "File $fileName is too large. Max size is 50MB.";
                continue;
            }

            $destination = $uploadDir . uniqid() .basename($fileName);

            if (file_exists($destination)) {
                $messages[] = "File $fileName already exists.";
                continue;
            }

            if (move_uploaded_file($fileTmpName, $destination)) {
                $uploaded = true;
                $messages[] = "File $fileName uploaded successfully!";
            } else {
                $messages[] = "Failed to move uploaded file: $fileName.";
            }

            if(Flight::get('image.compression') && $uploaded && extension_loaded('gd')){
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

            if($uploaded){
                $media = new MediaRecord();
                $media->name = basename($fileName);
                $media->filepath = $destination;
                $media->ext = $fileExtension;
                $media->tag = $tag;
                $media->insert();
            }
        }
    } else {
        $messages[] = 'No files uploaded.';
    }
        return Flight::json([
            'success' => $uploaded,
            'message' => implode(' ', $messages)
        ]);
    }

    public function destroy($id)
    {
        $media = (new MediaRecord())->findOrFail($id);

        if (file_exists($media->filepath)) {
           unlink($media->filepath);
        }
        $media->delete();
        return Flight::json([
            'success' => true,
            'message' => "File deleted"
        ]);
    }


}