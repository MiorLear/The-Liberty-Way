function sendValueToPHP() {
    var checkbox = document.getElementById("myCheckbox");
    var valueToSend;

    if (checkbox.checked) {
        valueToSend = "ON"; // Replace "checked_value" with the value you want to send when the checkbox is checked
        console.log(valueToSend);
    } else {
        valueToSend = "OFF"; // Replace "unchecked_value" with the value you want to send when the checkbox is unchecked
        console.log(valueToSend);
    }

    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Configure the AJAX request
    xhr.open("POST", "../../Views/Dashboard/dashboard_permissions.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Define the function to handle the response from PHP
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Request was successful, you can handle the response here if needed
                // console.log(xhr.responseText);
                var processedValue = valueToSend.toUpperCase();

                document.getElementById("value").value = processedValue;

            } else {
                // Request failed, handle the error here if needed
                console.error("Error sending value to PHP");
            }
        }
    };

    // Send the request with the value as a parameter
    xhr.send("value=" + encodeURIComponent(valueToSend));
}

function sendValueToPHP2() {
    var checkbox2 = document.getElementById("myCheckbox2");
    var valueToSend;

    if (checkbox2.checked) {
        valueToSend = "ON"; // Replace "checked_value" with the value you want to send when the checkbox is checked
        console.log(valueToSend);
    } else {
        valueToSend = "OFF"; // Replace "unchecked_value" with the value you want to send when the checkbox is unchecked
        console.log(valueToSend);
    }

    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Configure the AJAX request
    xhr.open("POST", "../../Views/Dashboard/dashboard_permissions.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Define the function to handle the response from PHP
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Request was successful, you can handle the response here if needed
                // console.log(xhr.responseText);
                var processedValue = valueToSend.toUpperCase();

                document.getElementById("value2").value = processedValue;

                
            } else {
                // Request failed, handle the error here if needed
                console.error("Error sending value to PHP");
            }

        }

    };
    // Send the request with the value as a parameter
    xhr.send("value2=" + encodeURIComponent(valueToSend));
}


function sendValueToPHP3() {
    var checkbox = document.getElementById("myCheckbox3");
    var valueToSend;

    if (checkbox.checked) {
        valueToSend = "ON"; // Replace "checked_value" with the value you want to send when the checkbox is checked
        console.log(valueToSend);
    } else {
        valueToSend = "OFF"; // Replace "unchecked_value" with the value you want to send when the checkbox is unchecked
        console.log(valueToSend);
    }

    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Configure the AJAX request
    xhr.open("POST", "../../Views/Dashboard/dashboard_permissions.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Define the function to handle the response from PHP
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Request was successful, you can handle the response here if needed
                // console.log(xhr.responseText);
                var processedValue = valueToSend.toUpperCase();

                document.getElementById("value3").value = processedValue;

            } else {
                // Request failed, handle the error here if needed
                console.error("Error sending value to PHP");
            }
        }
    };

    // Send the request with the value as a parameter
    xhr.send("value3=" + encodeURIComponent(valueToSend));
}


function sendValueToPHP4() {
    var checkbox = document.getElementById("myCheckbox4");
    var valueToSend;

    if (checkbox.checked) {
        valueToSend = "ON"; // Replace "checked_value" with the value you want to send when the checkbox is checked
        console.log(valueToSend);
    } else {
        valueToSend = "OFF"; // Replace "unchecked_value" with the value you want to send when the checkbox is unchecked
        console.log(valueToSend);
    }

    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Configure the AJAX request
    xhr.open("POST", "../../Views/Dashboard/dashboard_permissions.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Define the function to handle the response from PHP
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Request was successful, you can handle the response here if needed
                // console.log(xhr.responseText);
                var processedValue = valueToSend.toUpperCase();

                document.getElementById("value4").value = processedValue;

            } else {
                // Request failed, handle the error here if needed
                console.error("Error sending value to PHP");
            }
        }
    };

    // Send the request with the value as a parameter
    xhr.send("value4=" + encodeURIComponent(valueToSend));
}

function sendValueToPHP5() {
    var checkbox = document.getElementById("myCheckbox5");
    var valueToSend;

    if (checkbox.checked) {
        valueToSend = "ON"; // Replace "checked_value" with the value you want to send when the checkbox is checked
        console.log(valueToSend);
    } else {
        valueToSend = "OFF"; // Replace "unchecked_value" with the value you want to send when the checkbox is unchecked
        console.log(valueToSend);
    }

    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();

    // Configure the AJAX request
    xhr.open("POST", "../../Views/Dashboard/dashboard_permissions.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Define the function to handle the response from PHP
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Request was successful, you can handle the response here if needed
                // console.log(xhr.responseText);
                var processedValue = valueToSend.toUpperCase();

                document.getElementById("value5").value = processedValue;

            } else {
                // Request failed, handle the error here if needed
                console.error("Error sending value to PHP");
            }
        }
    };

    // Send the request with the value as a parameter
    xhr.send("value5=" + encodeURIComponent(valueToSend));
}