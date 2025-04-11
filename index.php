<!DOCTYPE html>
<html lang="en">

<?php require('template/header.php') ?>

<div class="flex justify-center items-center mt-10">
    <form action="" method="post">
        <label class="block text-2xl font-bold">Wrire Your Note:</label>
        <textarea class="w-3xl h-32 p-2 text-left align-top resize-none border border-black rounded" placeholder="Write here.."></textarea>        
        <div class="text-center mt-4">
            <input type="submit" value="Submit Note" class="bg-blue-500 border border-black text-white p-3 rounded-lg">
        </div>
    </form>
</div>

<?php require('template/footer.php') ?>

</html>