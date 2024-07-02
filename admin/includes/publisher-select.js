document.addEventListener("DOMContentLoaded", () => {
    fetchPublishers();

    document.getElementById('publisherInputField').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            addPublisherOption(e.target.value);
        }
    });
});

function showPublisherDropdown() {
    document.getElementById("publisherDropdown").style.display = "block";
}

function filterPublisherDropdown() {
    let input, filter, dropdown, div, i;
    input = document.getElementById("publisherInputField");
    filter = input.value.toUpperCase();
    dropdown = document.getElementById("publisherDropdown");
    div = dropdown.getElementsByTagName("div");
    for (i = 0; i < div.length; i++) {
        let txtValue = div[i].textContent || div[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            div[i].style.display = "";
        } else {
            div[i].style.display = "none";
        }
    }
}

async function fetchPublishers() {
    try {
        let response = await fetch('getPublishers.php');
        let publishers = await response.json();
        let dropdown = document.getElementById("publisherDropdown");
        publishers.forEach(publisher => {
            let div = document.createElement("div");
            div.textContent = publisher.name;
            div.dataset.id = publisher.id;
            div.onclick = () => selectPublisher(publisher.id, publisher.name);
            dropdown.appendChild(div);
        });
    } catch (error) {
        console.error("Error fetching publishers:", error);
    }
}

function selectPublisher(id, name) {
    let selectedItems = document.getElementById("publisherSelectedItems");
    selectedItems.innerHTML = '';  // Clear any previous selection
    let span = document.createElement("span");
    span.className = "publisher-selected-item";
    span.textContent = name;
    span.dataset.id = id;
    selectedItems.appendChild(span);

    document.getElementById("publisherHiddenId").value = id;
    document.getElementById("publisherDropdown").style.display = "none";  // Hide the dropdown
}

function addPublisherOption(name) {
    let dropdown = document.getElementById("publisherDropdown");
    let div = document.createElement("div");
    div.textContent = name;
    div.dataset.id = name;  // Assuming new options will be identified by their names
    div.onclick = () => selectPublisher(name, name);
    dropdown.appendChild(div);

    selectPublisher(name, name);
}
