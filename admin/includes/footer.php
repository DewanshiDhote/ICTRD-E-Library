<footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              
            </div>
            <div class="col-lg-6">
              
              </ul>
            </div>
          </div>
        </div>
      </footer>

      </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0"></h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        
      </div>
    </div>
  </div>
 

  <!--   Core JS Files   -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  });
</script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="assets/js/plugins/chartjs.min.js"></script>
  

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" 
  integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  
    


  

<script>
        document.getElementById("mySelect").addEventListener("change", function(event) {
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
                    xhr.open("POST", "publisher_save_newOption.php", true);
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
        });
    </script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        fetchAuthors();
    });

    function fetchAuthors() {
        fetch('fetch_authors.php')
            .then(response => response.json())
            .then(data => {
                const dropdown = document.getElementById('dropdown');
                data.forEach(author => {
                    const div = document.createElement('div');
                    div.textContent = author.name;
                    div.setAttribute('data-id', author.id);
                    div.addEventListener('click', selectAuthor);
                    dropdown.appendChild(div);
                });
            });
    }

    function showDropdown() {
        document.getElementById('dropdown').style.display = 'block';
    }

    function hideDropdown() {
        document.getElementById('dropdown').style.display = 'none';
    }

    function filterDropdown() {
        const input = document.getElementById('authorInput').value.toLowerCase();
        const dropdown = document.getElementById('dropdown');
        const items = dropdown.getElementsByTagName('div');
        for (let i = 0; i < items.length; i++) {
            const txtValue = items[i].textContent || items[i].innerText;
            items[i].style.display = txtValue.toLowerCase().indexOf(input) > -1 ? '' : 'none';
        }
    }

    function selectAuthor(event) {
        const selectedItems = document.getElementById('selectedItems');
        const div = document.createElement('div');
        div.className = 'selected-item';
        div.textContent = event.target.textContent;
        div.setAttribute('data-id', event.target.getAttribute('data-id'));

        const span = document.createElement('span');
        span.textContent = 'x';
        span.onclick = function() {
            selectedItems.removeChild(div);
            updateAuthorIds();
        };
        div.appendChild(span);

        selectedItems.insertBefore(div, selectedItems.querySelector('.input-container'));
        updateAuthorIds();
        hideDropdown();
        document.getElementById('authorInput').value = '';
    }

    document.getElementById('authorInput').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            const input = document.getElementById('authorInput').value;
            if (input.trim() !== '') {
                addNewAuthor(input);
            }
            e.preventDefault();
        }
    });

    function addNewAuthor(name) {
        fetch('add_author.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ name })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const selectedItems = document.getElementById('selectedItems');
                const div = document.createElement('div');
                div.className = 'selected-item';
                div.textContent = name;
                div.setAttribute('data-id', data.id);

                const span = document.createElement('span');
                span.textContent = 'x';
                span.onclick = function() {
                    selectedItems.removeChild(div);
                    updateAuthorIds();
                };
                div.appendChild(span);

                selectedItems.insertBefore(div, selectedItems.querySelector('.input-container'));
                updateAuthorIds();
                document.getElementById('authorInput').value = '';
            } else {
                alert('Failed to add author');
            }
        });
    }

    function updateAuthorIds() {
        const selectedItems = document.getElementsByClassName('selected-item');
        const authorIds = [];
        for (let item of selectedItems) {
            authorIds.push(item.getAttribute('data-id'));
        }
        document.getElementById('authorIds').value = authorIds.join(',');
    }

    document.addEventListener('click', function(event) {
        if (!event.target.closest('.select-container')) {
            hideDropdown();
        }
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    fetchPublishers();
});

function fetchPublishers() {
    fetch('fetch_publisher.php')
        .then(response => response.json())
        .then(data => {
            const dropdown = document.getElementById('dropdown1');
            data.forEach(publisher => {
                const div = document.createElement('div');
                div.textContent = publisher.name;
                div.setAttribute('data-id', publisher.id);
                div.addEventListener('click', selectPublisher);
                dropdown.appendChild(div);
            });
        });
}

function showDropdown1() {
    document.getElementById('dropdown1').style.display = 'block';
}

function hideDropdown1() {
    document.getElementById('dropdown1').style.display = 'none';
}

function filterDropdown1() {
    const input = document.getElementById('publisherInput').value.toLowerCase();
    const dropdown = document.getElementById('dropdown1');
    const items = dropdown.getElementsByTagName('div');
    for (let i = 0; i < items.length; i++) {
        const txtValue = items[i].textContent || items[i].innerText;
        items[i].style.display = txtValue.toLowerCase().indexOf(input) > -1 ? '' : 'none';
    }
}

function selectPublisher(event) {
    const selectedItems = document.getElementById('selectedItems1');
    selectedItems.innerHTML = '';  // Clear previous selection
    
    const div = document.createElement('div');
    div.className = 'selected-items1';
    div.textContent = event.target.textContent;
    div.setAttribute('data-id', event.target.getAttribute('data-id'));

    const span = document.createElement('span');
    span.textContent = 'x';
    span.onclick = function() {
        selectedItems.removeChild(div);
        document.getElementById('publisherIds').value = ''; // Clear the hidden input when the selected item is removed
    };
    div.appendChild(span);

    selectedItems.appendChild(div);
    hideDropdown1();

    document.getElementById('publisherIds').value = event.target.getAttribute('data-id'); // Set the hidden input value
    document.getElementById('publisherInput').value = ''; // Clear the input field
}

document.getElementById('publisherInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        const input = document.getElementById('publisherInput').value;
        if (input.trim() !== '') {
            addNewPublisher(input);
        }
        e.preventDefault();
    }
});

function addNewPublisher(name) {
    fetch('add_publisher.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ name })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            selectPublisher({ target: { textContent: name, getAttribute: () => data.id } });
        } else {
            alert('Failed to add Publisher');
        }
    });
}

document.addEventListener('click', function(event) {
    if (!event.target.closest('.select-container1')) {
        hideDropdown1();
    }
});
</script>

</body>



  



</body>

</html>

