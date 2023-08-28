<html lang="en">
<body>
    
<?php
include_once("./connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $age = isset($_POST['age'])?$_POST['age']:-1;
    $birthday = isset($_POST['birthday'])?$_POST['birthday']:-1;
    // $filename = $_FILES["inputfile"]["name"];
    // $tempname = $_FILES["inputfile"]["tmp_name"];
    // $folder = "../images/" . $filename;
    $gender = isset($_POST['gender'])?$_POST['gender']:-1;
    $nickname = isset($_POST['nickname'])?$_POST['nickname']:-1;
    $pheight = isset($_POST['pheight'])?$_POST['pheight']:-1;
    $pweight = isset($_POST['pweight'])?$_POST['pweight']:-1;
    $q_alcohol = isset($_POST['q_alcohol'])?$_POST['q_alcohol']:-1;
    $q_alcohol_quant = isset($_POST['q_alcohol_quant'])?$_POST['q_alcohol_quant']:-1;
    $q_alcohol_time = isset($_POST['q_alcohol_time'])?$_POST['q_alcohol_time']:-1;
    $q_antibiotic = isset($_POST['q_antibiotic'])?$_POST['q_antibiotic']:-1;
    $q_breakfast = isset($_POST['q_breakfast'])?$_POST['q_breakfast']:-1;
    $q_depress = isset($_POST['q_depress'])?$_POST['q_depress']:-1;
    $q_dinner = isset($_POST['q_dinner'])?$_POST['q_dinner']:-1;
    $q_disease_anemia = isset($_POST['q_disease_anemia'])?$_POST['q_disease_anemia']:-1;
    $q_disease_cancer = isset($_POST['q_disease_cancer'])?$_POST['q_disease_cancer']:-1;
    $q_disease_diabetes = isset($_POST['q_disease_diabetes'])?$_POST['q_disease_diabetes']:-1;
    $q_disease_hyperlipidemia = isset($_POST['q_disease_hyperlipidemia'])?$_POST['q_disease_hyperlipidemia']:-1;
    $q_disease_hypertension = isset($_POST['q_disease_hypertension'])?$_POST['q_disease_hypertension']:-1;
    $q_disease_none= isset($_POST['q_disease_none'])?$_POST['q_disease_none']:-1;
    $q_disease_thyroid = isset($_POST['q_disease_thyroid'])?$_POST['q_disease_thyroid']:-1;
    $q_drink = isset($_POST['q_drink'])?$_POST['q_drink']:-1;
    $q_exercise = isset($_POST['q_exercise'])?$_POST['q_exercise']:-1;
    $q_healthy = isset($_POST['q_healthy'])?$_POST['q_healthy']:-1;
    $q_lunch = isset($_POST['q_lunch'])?$_POST['q_lunch']:-1;
    $q_medicine = isset($_POST['q_medicine'])?$_POST['q_medicine']:-1;
    $q_sit = isset($_POST['q_sit'])?$_POST['q_sit']:-1;
    $q_sleep = isset($_POST['q_sleep'])?$_POST['q_sleep']:-1;
    $q_smoke = isset($_POST['q_smoke'])?$_POST['q_smoke']:-1;
    $q_state = isset($_POST['q_state'])?$_POST['q_state']:-1;
    $q_stress = isset($_POST['q_stress'])?$_POST['q_stress']:-1;
    $q_tired = isset($_POST['q_tired'])?$_POST['q_tired']:-1;
    $qf_birthpill = isset($_POST['qf_birthpill'])?$_POST['qf_birthpill']:-1;
    $qf_breastfeed = isset($_POST['qf_breastfeed'])?$_POST['qf_breastfeed']:-1;
    $qf_menopause = isset($_POST['qf_menopause'])?$_POST['qf_menopause']:-1;
    $qf_pregnant = isset($_POST['qf_pregnant'])?$_POST['qf_pregnant']:-1;

    // Display the submitted data

    $sql = "INSERT INTO datacamptable (age,birthday,gender,nickname,
    pheight,pweight,q_alcohol,q_alcohol_quant,q_alcohol_time,q_antibiotic,q_breakfast,q_depress,q_dinner,q_disease_anemia,
    q_disease_cancer,q_disease_diabetes,q_disease_hyperlipidemia,q_disease_hypertension,q_disease_none,q_disease_thyroid,q_drink,q_exercise,q_healthy,
    q_lunch,q_medicine,q_sit,q_sleep,q_smoke,q_state,q_stress,q_tired,
    qf_birthpill,qf_breastfeed,qf_menopause,qf_pregnant) VALUES('$age','$birthday',
    '$gender','$nickname','$pheight','$pweight','$q_alcohol','$q_alcohol_quant',
    '$q_alcohol_time','$q_antibiotic','$q_breakfast','$q_depress','$q_dinner','$q_disease_anemia','$q_disease_cancer',
    '$q_disease_diabetes','$q_disease_hyperlipidemia','$q_disease_hypertension','$q_disease_none','$q_disease_thyroid','$q_drink','$q_exercise',
    '$q_healthy','$q_lunch','$q_medicine','$q_sit','$q_sleep','$q_smoke','$q_state',
    '$q_stress','$q_tired','$qf_birthpill','$qf_breastfeed','$qf_menopause','$qf_pregnant')";

    if($conn -> query($sql)){
        echo "<script>alert('등록 성공'); location.href='../result/kalium/kalium.html';</script>";
    }
    else {
        echo "<script>alert('등록 실패');</script>";
    }

}
?>
</body>
</html>