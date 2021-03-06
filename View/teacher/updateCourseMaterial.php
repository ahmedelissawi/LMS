<?php
// Start the session
session_start();

include_once('../../Controllers/common.php');
include_once('../../Models/Courses.php');
include_once('../../Models/user.php');

Database::DBConnect();
if (!isset($_SESSION['id'])) {
    header("Location: ../../index.php?status=session_expired");
} else {
    $user_id = $_SESSION['id'];
}
$crs_id = safeGet('crs_id', 0);
$materialid = safeGet('materialid', 0);
$user = new User($user_id); // get the user id 
?>

<!DOCTYPE html>
<html lang= "en">
    <?php include_once './common/head.php'; ?>  
    <body>
        <?php
        include_once './common/CourseNavbar.php';
        $courseMaterials = Courses::showCourseMaterial($materialid);
        ?>   
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div role="main" class="container">

                    <h2 class="mt-4"><?= ($materialid) ? 'Edit ' : 'Add ' ?>Material:</h2>
                    <form action="../../Controllers/updateCourseMaterialController.php" method="post">
                        <div class="card" style="background: rgba(06 ,44,51,0.85 );">
                            <div class="card-body">
                                <div class="form-group row gutters">
                                    <input type="hidden" name="crs_id" value="<?= $crs_id ?>">
                                    <input type="hidden" name="materialid" value="<?= $materialid ?>">

                                    <label  for="materiallabel" class="col-sm-2 col-form-label" style="color: white;">Material Label</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" id="materiallabel" type="text" name="MaterialLabel" value="<?= $courseMaterials['material_label'] ?>" Required>
                                    </div>
                                    <label  for="materialurl" class="col-sm-2 col-form-label" style="color: white;">Material URL</label>
                                    <div class="col-sm-10" style="margin-bottom: 10px">
                                        <input class="form-control" id="materialurl" type='text' name="MaterialURL" value="<?= $courseMaterials['material_url'] ?>" Required>
                                    </div>

                                    <div class="col-sm-10" style="margin-bottom: 10px"></div>
                                    <div class="col-sm-2" style="margin-bottom: 10px">
                                        <button class="form-control btn btn-outline-success" type='submit'> <?= ($materialid) ? 'Edit ' : 'Add ' ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </body>
    <?php include_once('./common/tail.php') ?> 
</html>


