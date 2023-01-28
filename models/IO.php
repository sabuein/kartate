<?php
// Read the JSON
$data = json_decode(file_get_contents("$rootDir/data/input.json"), true);

// Get the data to update
$index = 0; // The index of the person to update
$name = "Jane Doe"; // The new name
$age = 35; // The new age

/* It is a best practice to validate the input passed to constructor and methods, for this you can use filter_var(), is_string(), is_numeric() etc to validate the input passed. */

// Validate the data
if (!isset($data[$index])) {
    // If the index is not set, the person does not exist
    echo "Error: Person at index $index does not exist.\r\n";
    exit();
}
if (!is_string($name) || strlen($name) == 0) {
    // If the name is not a non-empty string, it is not valid
    echo "Error: Invalid name.\r\n";
    exit();
}
if (!is_numeric($age) || $age <= 0) {
    // If the age is not a positive number, it is not valid
    echo "Error: Invalid age.\r\n";
    exit();
}

// Update the data
$data[$index]["name"] = $name;
$data[$index]["age"] = $age;

// Encode the data back to JSON and write it to the file
$json = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents("$rootDir/data/output.json", $json);
echo "Data updated successfully!\r\n";
?>