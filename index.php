<?php

$conn = mysqli_connect("localhost","yousif","test12345","onlinenotepad");

if(!$conn){
    echo "Connection Fail: " . mysqli_connect_error();
}

$sql = "SELECT id, note FROM mynotes ORDER BY created_at";

$result = mysqli_query($conn, $sql);

$notes = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);


$errors = array('note'=>'');
$display = array('note'=>'');
if (isset($_POST['submit'])){

    if(!empty($_POST['note'])){
    $display['note'] = htmlspecialchars($_POST['note']);

}else{
    $errors['note'] = "You Have To Write A Note*";
}
}

?>
<!DOCTYPE html>
<html lang="en">

<?php require('template/header.php') ?>

<div class="flex justify-center items-center mt-10">
    <form action="index.php" method="post">
        <label class="block text-2xl font-bold">Wrire Your Note:</label>
        <textarea class="w-3xl h-32 p-2 text-left align-top resize-none border border-black rounded" name="note" placeholder="Write here.."></textarea>        
        <div class="text-xl text-red-500"><?php echo $errors['note'] ?></div>
        <div class="text-center mt-4">
            <input type="submit" name="submit" value="Submit Note" class="bg-blue-500 border border-black text-white p-3 rounded-lg">
        </div>
    </form> 

    <?php foreach($notes as $note){ ?>
    <div>
        <div>
            <div class="text-2xl font-semibold"><?php echo htmlspecialchars($note['id']); echo htmlspecialchars($note['note']); echo htmlspecialchars($note['created_at']);?></div>
        </div>
    </div>
    <?php } ?>
</div>

<?php require('template/footer.php') ?>

</html>