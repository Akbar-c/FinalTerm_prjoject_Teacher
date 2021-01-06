<?php
    if(!isset($_COOKIE["username"])){
		header("Location: login.php");
	}
    include 'header.php';
    require_once '../models/db_connect.php';
    require_once '../controllers/studentController.php';
    require_once '../controllers/department_controller.php';
    $student=getStudent($_GET["id"]);
    $depts=getDepts();
?>
<center>
    <form action="" method="post" onsubmit="return doStudentValidation()">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="<?php echo $student[0]["name"];?>" id="name"><span id="err_name" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>DOB:</td>
                <td><input type="date" name="dob" id="dob"><span id="err_dob" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>Credit:</td>
                <td><input type="number" name="credit" value="<?php echo $student[0]["credit"];?>" id="credit"><span id="err_credit" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>CGPA:</td>
                <td><input type="number" step="0.01" name="cgpa" value="<?php echo $student[0]["cgpa"];?>" id="cgpa"><span id="err_cgpa" style="color:red;"></span></td>
            </tr>
            <tr>
                <td>Department:</td>
                <td>
                    <select name="dept" id="dept">
                        <option disabled selected value=""></option>
                        <?php
                            foreach($depts as $dept){
                                echo "<option value='".$dept["id"]."'>".$dept["name"]."</option>";
                            }
                        ?>
                    </select>
                    <span id="err_dept" style="color:red;"></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="edit" value="Update"></td>
            </tr>
        </table>
    </form>
</center>
<script src="../validate/validate.js"></script>
<?php
    include 'footer.php';
?>
