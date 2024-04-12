<?php
// Retrieve the XML data from the POST request
$xmlData = $_POST['xml'];

// Append the XML data to the recipes.xml file
$filename = 'recipes.xml';
$currentData = file_get_contents($filename);

// Check if file_put_contents was successful
if(file_put_contents($filename, $currentData . $xmlData) !== false) {
    echo "Recipe saved successfully!";
} else {
    echo "Error saving recipe!";
}
?>
