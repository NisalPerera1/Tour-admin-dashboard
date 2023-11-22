<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-rbs5a4AEGR1ByIIFGGpLVI2i0XUqG1hL/zYxpeG2F5iZ1eii0G2mTw7g2fVyvcKa" crossorigin="anonymous">
    <!-- Add these lines for Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-b4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyOVxxu6uYlE8tq2F4hpWz2d+3U8hfxZ" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Tourist Website')</title>

    <!-- Include the select2 CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

    <!-- Include the select2 JS file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <!-- Script to initialize select2 and handle destination options -->

    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #0a1645;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        nav {
            background-color: #444;
            padding: 0.5em;
        }

        nav a {
            color: #fff;
            margin-right: 1em;
            text-decoration: none;
        }

        main {
            padding: 1em;
        }

        /* Add styles for the sidebar */
        .sidebar {
            width: 250px;
            height: 100%;
            position: fixed;
            left: 0;
            overflow-x: hidden;
            padding-top: 20px;
            background: #0d1b38;
            margin-top: 20px;
        }

        .sidebar a {
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #555;
        }


.sidebar {
    /* Add any common styles for the sidebar here */
}


.accordion-item {
    border-bottom: 1px solid #ddd; /* Add a border between accordion items */
}

.accordion-button {
    background-color: #f8f9fa; /* Set a background color for the accordion buttons */
    color: #495057; /* Set the text color for the accordion buttons */
    font-size: 18px; /* Set a big font size for menu items */
}

.accordion-body a {
    display: block;
    padding: 10px; /* Add padding to the sub-menu items */
    font-size: 14px; /* Set a small font size for sub-menu items */
    color: #495057; /* Set the text color for the sub-menu items */
    text-decoration: none;
}

.accordion-body a:hover {
    background-color: #e2e6ea; /* Add a background color on hover for sub-menu items */
}


    </style>
</head>

<body>
    <!-- Include the sidebar -->
    
    @include('layouts.header')
    @include('layouts.sidebar')

    <!-- Page content -->
    <div style="margin-left: 250px;">
        <!-- Include the header -->

        <main>
            @yield('content')
        </main>

        <!-- Include the footer -->
        @include('layouts.footer')
    </div>
</body>

</html>
