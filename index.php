<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label >CheckBox</label>
    <input type="checkbox" name="" id="checkbox">
    <br>
    <p id="output">23</p>
</body>
<script>
    var checkbox = document.getElementById("checkbox");
    var output = document.getElementById("output");
    var oldvalue=output.innerText;
    // Add an event listener to the checkbox for the 'change' event
    checkbox.addEventListener("change", function() {
        // Check if the checkbox is checked
        if (checkbox.checked) {
            // If checked, update the span value
            output.textContent = parseInt(output.innerText)*2;
        } else {
            // If not checked, update the span value differently
            output.textContent = oldvalue;
        }
    });
    
</script>
</html>
// String containing the dollar sign and a number
// var dollarString = "$60";

// // Convert the numeric part of the string to a number
// var numericValue = parseFloat(dollarString.substring(1)); // or parseInt(dollarString.substring(1)) for integer values

// // Check if the conversion was successful
// if (!isNaN(numericValue)) {
//     // Concatenate the $ sign back to the result
//     var resultWithDollarSign = "$" + numericValue*2;

//     console.log(resultWithDollarSign); // Output: $60
// } else {
//     console.log("Conversion failed");
// }