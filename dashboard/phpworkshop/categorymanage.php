<?php
include "../inc/config.php";
echo "<pre>";
print_r($_POST);
print_r($_FILES);
?>

<?php
if (isset($_POST["Create_Category"])) {
    $C_name = $_POST["C_name"];
    $C_Slug = $_POST["C_Slug"];
    $C_ParentCategory = $_POST["C_ParentCategory"];
    $C_Description = $_POST["C_Description"];
    $C_Status = $_POST["C_Status"];
    $C_MetaTitle = $_POST["C_MetaTitle"];
    $C_MetaDescription = $_POST["C_MetaDescription"];
    $Create_Category = $_POST["Create_Category"];

    $C_Logo =time(). $_FILES['C_image']['name'];
    $from = $_FILES['C_image']['tmp_name'];
    $to = '../../assets/images/' . $C_Logo;

    // Check for file upload errors
    if ($_FILES['C_image']['error'] === UPLOAD_ERR_OK) {
        if (move_uploaded_file($from, $to)) {
            // Insert data into the database
            $Query = "INSERT INTO `categories` (`C_name`, `C_Logo`, `C_Status`, `C_Description`, `C_MetaTitle`, `C_MetaDescription`, `C_Slug`, `C_ParentCategory`) 
                          VALUES ('$C_name', '$C_Logo', '$C_Status', '$C_Description', '$C_MetaTitle', '$C_MetaDescription', '$C_Slug', '$C_ParentCategory')";
            if (mysqli_query($connection, $Query)) {
                header("location: ../categories.php");
                die();
            } else {
                echo "Database error: " . mysqli_error($connection);
            }
        } else {
            echo "File upload failed.";
        }
    } else {
        if ($_FILES['C_image']['error'] == 4) {
            $Query = "INSERT INTO `categories` (`C_name`, `C_Logo`, `C_Status`, `C_Description`, `C_MetaTitle`, `C_MetaDescription`, `C_Slug`, `C_ParentCategory`) 
                          VALUES ('$C_name', '$C_Logo', '$C_Status', '$C_Description', '$C_MetaTitle', '$C_MetaDescription', '$C_Slug', '$C_ParentCategory')";
            if (mysqli_query($connection, $Query)) {
                header("location: ../categories.php");
                die();
            } else {
                echo "Database error: " . mysqli_error($connection);
            }
        }
        echo "File upload error code: " . $_FILES['C_image']['error'];
    }





}

if (isset($_GET["DeleteCategoryOfId"])) {
    $id = $_GET["DeleteCategoryOfId"];
    $filename = "../../assets/images/".DatabaseManager::select("categories","C_Logo as cl","C_id=$id")[0]["cl"]; // Specify the path to the file
    
    if (file_exists($filename)) {
        if (unlink($filename)) {
            echo "File 'i.png' has been deleted.";
        } else {
            echo "Unable to delete the file.";
        }
    } else {
        echo "File 'i.png' does not exist.";
    }

    if (mysqli_query($connection, "DELETE from categories where C_id=$id")) {
        header("location: ../categories.php");
        die();

    } else {
        echo "error" + mysqli_error($connection);
    }

}

if (isset($_POST["Edit_Category"])) {
    echo "edit";
    $EDITID = $_POST["Edit_Category"];
    $C_name = $_POST["C_name"];
    $C_Slug = $_POST["C_Slug"];
    $C_ParentCategory = $_POST["C_ParentCategory"];
    $C_Description = $_POST["C_Description"];
    $C_Status = $_POST["C_Status"];
    $C_MetaTitle = $_POST["C_MetaTitle"];
    $C_MetaDescription = $_POST["C_MetaDescription"];


    $C_Logo =time(). $_FILES['C_image']['name'];
    $from = $_FILES['C_image']['tmp_name'];
    $to = '../../assets/images/' . $C_Logo;

    // Check for file upload errors
    if ($_FILES['C_image']['error'] === UPLOAD_ERR_OK) {
        if (move_uploaded_file($from, $to)) {
            $filename = "../../assets/images/".DatabaseManager::select("categories","C_Logo as cl","C_id=$EDITID")[0]["cl"]; // Specify the path to the file
    
            if (file_exists($filename)) {
                if (unlink($filename)) {
                    echo "File 'i.png' has been deleted.";
                } else {
                    echo "Unable to delete the file.";
                }
            } else {
                echo "File 'i.png' does not exist.";
            }
            // Insert data into the database
            $Query = "UPDATE categories SET C_name='$C_name', C_Logo='$C_Logo', C_Status='$C_Status', C_Description='$C_Description', 
            C_MetaTitle='$C_MetaTitle', C_MetaDescription='$C_MetaDescription', C_Slug='$C_Slug', 
            C_ParentCategory='$C_ParentCategory'
            where C_id=$EDITID";

            if (mysqli_query($connection, $Query)) {
                header("location: ../categories.php");
                die();
            } else {
                echo "Database error: " . mysqli_error($connection);
            }
        } else {
            echo "File upload failed.";
        }
    } else {
        if ($_FILES['C_image']['error'] == 4) {
            $Query = "UPDATE categories SET C_name='$C_name', C_Status='$C_Status', C_Description='$C_Description', C_MetaTitle='$C_MetaTitle', C_MetaDescription='$C_MetaDescription', C_Slug='$C_Slug', C_ParentCategory='$C_ParentCategory' where C_id=$EDITID";

            if (mysqli_query($connection, $Query)) {
                header("location: ../categories.php");
                die();
            } else {
                echo "Database error: " . mysqli_error($connection);
            }
        }
        echo "File upload error code: " . $_FILES['C_image']['error'];
    }

}
?>