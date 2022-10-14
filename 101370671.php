<!--Student Name: Binye Liu-->
<!--Student ID: 101370671-->
<!--Class Day/Time: Lec Tue 10am, Lab Fri 4pm-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BinyeLiu 101370671 - assignment 1</title>
</head>
<body>
    <?php
//    3. Use an associative array to store the Inventory information. You will be using
//        it as your data source.
        $inventoryInfo = ["ip"=>$_SERVER['SERVER_ADDR'],"browser"=>$_SERVER['HTTP_USER_AGENT'],"time"=>date('Y-m-d h:i:s')];

//    4. 4 Points - Add a section to your website. Add a heading called "Client Details". Inside
//        you must print out the information below. Make sure you add the text like in the image
//        below.:
//            a. The IP address of the user looking at the current page.
//            b. The browser that the user using
//            c. The time representing when the request from the client -> browser was made
            echo "<section><h1>Client Details</h1>";
            echo "IP address of client: ".$inventoryInfo["ip"]."<br>";
            echo "Browser used by the client: ".$inventoryInfo["browser"]."<br>";
            echo "Date and time this website was Accessed:".$inventoryInfo["time"]."<br></section>";



//    5. 1 Point - Add a heading called "Your Shop Name", replacing it with a shop name of your
//        choice
            echo "<h1>Phone Shop</h1>";

//    6. 5 Points - Add a drop down menu with the 3 (or more) product categories as the
//        options. The drop down menu must be within a form. You must use a loop (any loop of
//        your choice) to do this. Use the GET method to send the category to your script once the
//        Checkout button has been pressed.
            $selectValue = ["Apple","Samsung","Google","LG","TCL","Motorola"];
            echo "<form method='GET'>";
            echo "<select>";
            for ($i=0;$i<count($selectValue);$i++){
                echo "<option value='$selectValue[$i]'>$selectValue[$i]</option>";
            }
            echo "</select><br>";
            echo "<input type='submit' value='Checkout'>";
            echo "</form>";
//    7. 2 Points - Validate the category selection to make sure that the selected category:
//        a. … was sent to your script
//        b. … and matches one of the categories stored in the original associative array

//    8. 6 Points - If the category is valid:
//        a. Based on the category chosen, print out all the associated product items and
//            prices as checkboxes.
//        ○ Use the GET method to send the price (of each item "checked" by the user) to
//        your script. You must use a loop (any loop of your choice) to do this.
//        ○ Make sure to format the price to 2 decimal places.
//    9. 5 Points - If the price has been sent:
//        Add up together the prices of all the items "checked" in the current category.
//        You must use a loop (any loop of your choice) to do this.
//    10. 2 Points - Add a heading called "Total: ________ " and (instead of the blank) print out
//        the total prices you calculated above.
        echo "<hr>";
        echo show_source(__FILE__);
    ?>
</body>
</html>