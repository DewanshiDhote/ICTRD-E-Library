<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Options</title>
</head>
<body>
    <select id="mySelect">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="addOption">Add Option</option>
    </select>

    <select id="authorSelect">
        <option value="author1">Author 1</option>
        <option value="author2">Author 2</option>
        <option value="addAuthor">Add Author</option>
    </select>

    <script>
        function handleSelectChange(event) {
            var select = event.target;
            var selectedValue = select.value;

            if (selectedValue === "addOption") {
                var newOption = prompt("Enter new option:");
                if (newOption && newOption.trim() !== "" && !select.querySelector("option[value='" + newOption + "']")) {
                    var option = new Option(newOption, newOption);
                    select.appendChild(option);
                    select.value = newOption; // Select the newly added option

                    // AJAX call to PHP script to save the new option
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "save_option.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            console.log(xhr.responseText); // Log the response from the server
                        }
                    };
                    xhr.send("option=" + encodeURIComponent(newOption));
                } else {
                    // Handle invalid input or duplicate options
                    alert("Invalid input or option already exists.");
                    select.value = ""; // Reset select value
                }
            }
        }

        document.getElementById("mySelect").addEventListener("change", handleSelectChange);

        document.getElementById("authorSelect").addEventListener("change", function(event) {
            var select = event.target;
            var selectedValue = select.value;

            if (selectedValue === "addAuthor") {
                var newAuthor = prompt("Enter new author:");
                if (newAuthor && newAuthor.trim() !== "" && !select.querySelector("option[value='" + newAuthor + "']")) {
                    var option = new Option(newAuthor, newAuthor);
                    select.appendChild(option);
                    select.value = newAuthor; // Select the newly added author

                    // AJAX call to PHP script to save the new author
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "save_author.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            console.log(xhr.responseText); // Log the response from the server
                        }
                    };
                    xhr.send("author=" + encodeURIComponent(newAuthor));
                } else {
                    // Handle invalid input or duplicate authors
                    alert("Invalid input or author already exists.");
                    select.value = ""; // Reset select value
                }
            }
        });
    </script>
</body>
</html>
