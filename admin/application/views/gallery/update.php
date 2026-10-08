<?php
$m = (isset($_GET['m']) && $_GET['m'] !== "") ? $_GET['m'] : "";
if($m == "1")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Album has been added.",
            timer: 6000,
            type: "success",
            showConfirmButton: true
        });
    </script>
    <?php
}
else if($m == "0")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Album has not been added. Please try again.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}
else if($m == "2")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Album has been updated.",
            timer: 6000,
            type: "success",
            showConfirmButton: true
        });
    </script>
    <?php
}
else if($m == "3")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Album has not been updated. Please try again.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}
else if($m == "4")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Album has been deleted.",
            timer: 6000,
            type: "success",
            showConfirmButton: true
        });
    </script>
    <?php
}
else if($m == "5")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Album has not been deleted. Please try again.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}
else if($m == "6")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Image upload failed. Please try again.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}
else if($m == "7")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Invalid image. Only jpg, png and gif images allowed",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}

else if($m == "8")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Images has been added.",
            timer: 6000,
            type: "success",
            showConfirmButton: true
        });
    </script>
    <?php
}

else if($m == "9")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Images has not been added. Please try again.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}

else if($m == "10")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Image has been deleted.",
            timer: 6000,
            type: "success",
            showConfirmButton: true
        });
    </script>
    <?php
}

else if($m == "11")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Image has not been deleted. Please try again.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}

else if($m == "12")
{
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Image not found.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}
?>

<?php
$id = (isset($_GET['id']) && $_GET['id'] !== "") ? $_GET['id'] : "";
$getalbum = mysqli_query($conn, "select * from gallery_album where id = '".$id."'");
if(mysqli_num_rows($getalbum) > 0)
{
    $isAlbum = true;
    $rowalbum = mysqli_fetch_assoc($getalbum);

    $title = $rowalbum['title'];
    $banner_text = $rowalbum['banner_text'];
    $cover_pic = $rowalbum['cover_pic'];
    $banner_pic = $rowalbum['banner_pic'];
    $albumid = $rowalbum['id'];
}
else
{
    $isAlbum = false;
    ?>
    <script type="text/javascript">
        swal({
            title: "",
            text: "Gallery not found.",
            timer: 6000,
            type: "error",
            showConfirmButton: true
        });
    </script>
    <?php
}
?>
<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="dashboard.php">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>Gallery</li>
    </ul>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white white hand-top"></i><span class="break"></span>Quick Actions</h2>
            </div>
            <div class="box-content">
                <a href="gallery.php" class="quick-button-small span1">
                    <i class="icon-film"></i>
                    <p>Albums</p>
                    <?php
                    $getalbumcount = mysqli_query($conn, "select count(id) as cn from gallery_album");
                    $rowalbumcount = mysqli_fetch_assoc($getalbumcount);
                    $albumcount = $rowalbumcount['cn'];
                    ?>
                    <span class="notification yellow"><?php echo $albumcount; ?></span>
                </a>
                <a href="gallery.php?option=add" class="quick-button-small span1">
                    <i class="icon-plus-sign "></i>
                    <p>Add Album</p>
                </a>
                <a href="gallery.php?option=images" class="quick-button-small span1">
                    <i class="icon-picture"></i>
                    <p>Images</p>
                </a>
                <a href="gallery.php?option=addimages" class="quick-button-small span1">
                    <i class="icon-plus-sign"></i>
                    <p>Add Images</p>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Update Album</h2>
            </div>
            <div class="box-content">
                <?php
                if($isAlbum == false)
                {
                    echo "<p>Gallery not found. Please <a href=\"gallery.php\">go back</a> and try again.";
                }
                else {
                    ?>
                    <form class="form-horizontal" name="frmalbum" action="gallery/galleryprocess.php?action=update" method="post" onsubmit="return validatealbumsupdate();" enctype="multipart/form-data">
                        <input type="hidden" id="albumid" name="albumid" value="<?php echo $albumid; ?>">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="title">Title</label>
                                <div class="controls">
                                    <input type="text" class="span6" id="title" name="title" value="<?php echo $title; ?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="banner_text">Banner Text</label>
                                <div class="controls">
                                    <textarea name="banner_text" style="width: 405px;"><?php echo $banner_text; ?></textarea>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="cover_pic">Cover Pic</label>
                                <div class="controls">
                                    <input class="input-file uniform_on" id="cover_pic" type="file" name="cover_pic">
                                    <p class="help-block">Upload image, if you want to update cover pic otherwise leave it.</p>
                                    <img src="../uploads/<?php echo $cover_pic; ?>" width="100">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="banner_pic">Banner Pic</label>
                                <div class="controls">
                                    <input class="input-file uniform_on" id="banner_pic" type="file" name="banner_pic">
                                    <p class="help-block">Upload image, if you want to update banner pic otherwise leave it.</p>
                                    <img src="../uploads/<?php echo $banner_pic; ?>" width="100">
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="reset" class="btn">Cancel</button>
                            </div>
                        </fieldset>
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

</div><!--/.fluid-container-->

<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->
