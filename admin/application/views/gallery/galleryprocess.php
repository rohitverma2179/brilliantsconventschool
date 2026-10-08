<?php
session_start();
require_once('../dbc.php');

$action = (isset($_GET['action']) && $_GET['action'] != "") ? $_GET['action'] : "";

switch($action)
{
    case "add" : add();
        break;
    case "update" : update();
        break;
    case "delete" : delete();
        break;
    case "addimages" : addimages();
        break;
    case "deleteimage" : deleteimage();
        break;
    default: header('Location: ../gallery.php');
}

function add()
{
    global $conn;
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $banner_text = mysqli_real_escape_string($conn, $_POST['banner_text']);
    $cdate = date("Y-m-d");

    $extcoverpic = strtolower(strtolower(findexts($_FILES['cover_pic']['name'])));
    if($extcoverpic == "png" || $extcoverpic == "jpeg" || $extcoverpic == "gif" || $extcoverpic == "jpg")
    {
        $coverpicname = time().generateRandomString().".".$extcoverpic;
        //echo $primg;
        if(move_uploaded_file($_FILES['cover_pic']['tmp_name'], '../../uploads/'.$coverpicname))
        {
            $isUploadcoverpic = true;
        }
        else
        {

            $isUploadcoverpic = false;
        }
    }
    else
    {
        header('Location: ../gallery.php?option=add&m=7');
        die();
    }

    $extbannerpic = strtolower(strtolower(findexts($_FILES['banner_pic']['name'])));
    if($extbannerpic == "png" || $extbannerpic == "jpeg" || $extbannerpic == "gif" || $extbannerpic == "jpg")
    {
        $bannerpicname = time().generateRandomString().".".$extbannerpic;
        //echo $primg;
        if(move_uploaded_file($_FILES['banner_pic']['tmp_name'], '../../uploads/'.$bannerpicname))
        {
            $isUploadbannerpic = true;
        }
        else
        {

            $isUploadbannerpic = false;
        }
    }
    else
    {
        header('Location: ../gallery.php?option=add&m=7');
        die();
    }

    if($isUploadbannerpic == true && $isUploadcoverpic == true) {
        $insertalbum = "insert into gallery_album (title, cover_pic, banner_pic, banner_text, created) values('".$title."','".$coverpicname."','".$bannerpicname."','".$banner_text."','".$cdate."')";
        if (mysqli_query($conn, $insertalbum)) {
            header('Location: ../gallery.php?m=1');
        } else
        {
            header('Location: ../gallery.php?option=add&m=0');
        }
    }
    else
    {
        header('Location: ../gallery.php?option=add&m=6');
    }
}

function update()
{
    global $conn;
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $banner_text = mysqli_real_escape_string($conn, $_POST['banner_text']);
    $albumid = mysqli_real_escape_string($conn, $_POST['albumid']);
    $cdate = date("Y-m-d");
    $isCoverpic = false;
    $isBannerpic = false;

    if($_FILES['cover_pic']['name'] != "")
    {
        $extcoverpic = strtolower(strtolower(findexts($_FILES['cover_pic']['name'])));
        if($extcoverpic == "png" || $extcoverpic == "jpeg" || $extcoverpic == "gif" || $extcoverpic == "jpg")
        {
            $coverpicname = time().generateRandomString().".".$extcoverpic;
            //echo $primg;
            if(move_uploaded_file($_FILES['cover_pic']['tmp_name'], '../../uploads/'.$coverpicname))
            {
                $isUploadcoverpic = true;
            }
            else
            {
                $isUploadcoverpic = false;
            }
        }
        else
        {
            header('Location: ../gallery.php?option=add&m=7');
            die();
        }
        $isCoverpic = true;
    }

    if($_FILES['banner_pic']['name'] != "")
    {
        $extbannerpic = strtolower(strtolower(findexts($_FILES['banner_pic']['name'])));
        if ($extbannerpic == "png" || $extbannerpic == "jpeg" || $extbannerpic == "gif" || $extbannerpic == "jpg") {
            $bannerpicname = time() . generateRandomString() . "." . $extbannerpic;
            //echo $primg;
            if (move_uploaded_file($_FILES['banner_pic']['tmp_name'], '../../uploads/' . $bannerpicname)) {
                $isUploadbannerpic = true;
            } else {
                $isUploadbannerpic = false;
            }
        } else {
            header('Location: ../gallery.php?option=add&m=7');
            die();
        }
        $isBannerpic = true;
    }

    if($isCoverpic == false && $isBannerpic == false)
    {
        $query = "update gallery_album set title = '".$title."', banner_text = '".$banner_text."' where id = '".$albumid."'";
    }
    else if($isCoverpic == true && $isBannerpic == true)
    {
        $query = "update gallery_album set title = '".$title."', banner_text = '".$banner_text."', cover_pic = '".$coverpicname."',banner_pic = '".$bannerpicname."' where id = '".$albumid."'";
    }
    else if($isCoverpic == true && $isBannerpic == false)
    {
        $query = "update gallery_album set title = '".$title."', banner_text = '".$banner_text."', cover_pic = '".$coverpicname."' where id = '".$albumid."'";
    }
    else if($isCoverpic == false && $isBannerpic == true)
    {
        $query = "update gallery_album set title = '".$title."', banner_text = '".$banner_text."', banner_pic = '".$bannerpicname."' where id = '".$albumid."'";
    }

        if (mysqli_query($conn, $query))
        {
            header('Location: ../gallery.php?m=2');
        } else
        {
            header('Location: ../gallery.php?option=update&id='.$albumid .'&m=0');
        }
}

function delete()
{
    global $conn;
    $albumid = mysqli_real_escape_string($conn, $_GET['albumid']);

    //get image name for deletion
    $getalbum = mysqli_query($conn,"select cover_pic, banner_pic from gallery_album where id = '".$albumid."'");
    if(mysqli_num_rows($getalbum) > 0)
    {
        $rowalbum = mysqli_fetch_assoc($getalbum);
        $cover_pic = $rowalbum['cover_pic'];
        $banner_pic = $rowalbum['banner_pic'];
        unlink('../../uploads/'.$cover_pic);
        unlink('../../uploads/'.$banner_pic);

        //delete notice
        $delete = "delete from gallery_album where id = '".$albumid."'";
        if(mysqli_query($conn,$delete))
        {
            header('Location: ../gallery.php?m=4');
        }
        else
        {
            header('Location: ../gallery.php?m=5');
        }
    }
    else
    {
        header('Location: ../gallery.php?m=5');
    }

}

function addimages()
{
    global $conn;
    $album = mysqli_real_escape_string($conn, $_POST['album']);

    $isUpload = 0;
    $insertcount = 0;
    $imgcount = count($_FILES['images']['name']);
    for($i = 0; $i < $imgcount; $i++)
    {
        $ext = strtolower(strtolower(findexts($_FILES['images']['name'][$i])));
        if ($ext == "png" || $ext == "jpeg" || $ext == "gif" || $ext == "jpg") {
            $picname = time() . generateRandomString() . "." . $ext;
            //echo $primg;
            if (move_uploaded_file($_FILES['images']['tmp_name'][$i], '../../uploads/' . $picname)) {

                //insert image
                $insert = "insert into gallery_album_images (albumid, image) values('".$album."','".$picname."')";
                if(mysqli_query($conn,$insert))
                {
                    $insertcount++;
                }
                $isUpload++;
            }
        }
        else
        {
            header('Location: ../gallery.php?option=addimages&m=7');
            die();
        }
        if($isUpload == $imgcount && $isUpload == $imgcount)
        {
            header('Location: ../gallery.php?option=images&m=8');
        }
        else
        {
            header('Location: ../gallery.php?option=images&m=9');
        }
    }

}

function deleteimage()
{
    global $conn;
    $imageid = mysqli_real_escape_string($conn, $_GET['imageid']);


    //get image name for deletion
    $getimage = mysqli_query($conn,"select image from gallery_album_images where id = '".$imageid."'");
    if(mysqli_num_rows($getimage) > 0)
    {
        $rowimage = mysqli_fetch_assoc($getimage);
        $image = $rowimage['image'];
        unlink('../../uploads/'.$image);

        //delete notice
        $delete = "delete from gallery_album_images where id = '".$imageid."'";
        if(mysqli_query($conn,$delete))
        {
            header('Location: ../gallery.php?option=images&m=10');
        }
        else
        {
            header('Location: ../gallery.php?option=images&m=11');
        }
    }
    else
    {
        header('Location: ../gallery.php?option=images&m=12');
    }

}

function findexts ($filename)
{
    $filename = strtolower($filename) ;
    $exts = explode(".", $filename);
    $n = count($exts)-1;
    $exts = $exts[$n];

    return $exts;
}

function generateRandomString()
{
    $length = 10;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $randomString = '';
    for ($i = 0; $i < $length; $i++)
    {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>