<!-- STUDENT NUMBER：101370671-->
<!--Peer-Made Lab I chose:-->
<!--By: Jayden Nguyen - Lab-->
<!--1. Create a new PHP file called lab2.php-->
<!--2. Inside, add the HTML skeleton code and give its title “Lab Week 2”-->
<!--3. In the body tag, add a heading-1 tag with "What is your favourite pet?".-->
<!--4. Create a form tag and use the $_GET method to get user's favourite pet and store it into a variable named $fav_pet.-->
<!--5. Check if the input is string or null.-->
<!--6. If the input is string, print the kind of pet. Else: print "Please enter valid data".-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab Week2 Peer-Made Lab</title>
    <meta name ="description" content="Week 2 Lab">
    <meta name="author" content="Binye Liu">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">


</head>
<body>
<h1>What is your favourite pet?</h1>
<form method='GET'>
    <input type="text" name="fav_pet">
    <input type="submit" value="Submit">
</form>
<?php
$output_str ='';
if(isset($_GET['fav_pet'])){
    $fav_pet = $_GET['fav_pet'];
    if(is_numeric($fav_pet) || $fav_pet == ''){
        echo "Please enter valid data";
    }
    else{
        $output_str = "<h3> Your favourite pet is: $fav_pet</h3>";
    }
}
echo $output_str;
?>
</body>
<?php
echo "<hr>";
show_source(__FILE__);
?>
</html>
