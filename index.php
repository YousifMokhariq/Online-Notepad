<?php
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

        <div class="flex flex-wrap text-2xl text-blue-600 bg-gray-400 rounded-lg px-3 py-2"><?php echo $display['note'] ?></div>
    </form> 

</div>
<?php require('template/footer.php') ?>

</html>