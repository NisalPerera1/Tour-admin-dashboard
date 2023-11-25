<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-rbs5a4AEGR1ByIIFGGpLVI2i0XUqG1hL/zYxpeG2F5iZ1eii0G2mTw7g2fVyvcKa" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>

    <!-- Add dark mode/light mode styles -->
    <style>
        body {
            transition: background-color 0.5s;
        }

        .dark-mode {
            background-color: #333;
            color: #fff;
        }

        .navbar {
            transition: background-color 0.5s, color 0.5s;
        }

        .navbar-light {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets\images\bird_2.jpg" alt="Your Logo" margin="-20px 0 -20px 0" width="100px" height="100px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-bell"></i> Notifications
                        </a>
                    </li>

<!-- Search Function -->
<li class="nav-item">
    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#searchModal">
        <i class="fa fa-search"></i> Search
    </a>
</li>
<!-- End of Search Function -->

<!-- Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="searchModalLabel">Search</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="searchFormModal" action="{{ route('search') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query" id="searchQueryModal">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>

                <!-- Search Results -->
                <div id="searchResults"></div>
            </div>
        </div>
    </div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Add the following script after including jQuery -->
<script>
    $(document).ready(function () {
        $('#searchFormModal').on('input', function () {
            var query = $('#searchQueryModal').val();

            // Use AJAX to fetch search results
            $.ajax({
                url: "{{ route('search') }}", // Update with your actual route
                method: 'GET',
                data: {query: query},
                success: function (data) {
                    // Construct HTML table based on search results
                    var tableHtml = '<table class="table">';
                    tableHtml += '<thead><tr><th>Name</th><th>Description</th></tr></thead><tbody>';

                    // Iterate through search results and append rows to the table
                    $.each(data, function (index, result) {
                        tableHtml += '<tr><td>' + result.name + '</td><td>' + result.description + '</td></tr>';
                    });

                    tableHtml += '</tbody></table>';

                    // Update the content of the searchResults div with the table
                    $('#searchResults').html(tableHtml);
                }
            });
        });
    });
</script>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-user"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-moon"></i> Dark Mode
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Your content goes here -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
