<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    <style>
        body {
            margin: 0; /* Remove default margin */
            font-family: Arial, sans-serif; /* Set a default font */
        }

        .dashboard-header {
            display: flex;
            justify-content: flex-end; /* Align content to the right */
            align-items: center;
            background-color: whitesmoke;
            padding: 10px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: fixed; /* Keep header fixed at the top */
            top: 0;
            left: 0;
            right: 0; /* Extend to the right edge */
            z-index: 1000; /* Ensure it is above other content */
        }

        .logo {
            position: absolute;
            left: 40px; /* Space between logo and search */
        }

        .header-left {
            display: flex;
            gap: 20px;
        }

        .profile-btn, .logout-btn {
            text-decoration: none;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .profile-btn:hover, .logout-btn:hover {
            background-color: #0056b3;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed; /* Keep sidebar fixed on the left */
            left: 0;
            top: 60px; /* Adjusted to start below the header */
            width: 180px;
            height: calc(100% - 60px); /* Full height minus header height */
            background-color: whitesmoke;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
            overflow-y: auto; /* Allow scrolling if content overflows */
        }

        .menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-list li {
            margin-bottom: 15px;
        }

        .menu-list a {
            text-decoration: none;
            color: #444;
            font-size: 16px;
            display: flex; /* Use flexbox for alignment */
            align-items: center; /* Center items vertically */
            padding: 10px 15px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .menu-list a:hover {
            background-color: #ccc;
        }

        .menu-list a i {
            margin-right: 10px; /* Space between icon and text */
        }

        /* Dropdown menu */
        .dropdown .dropdown-menu {
            display: none; /* Start hidden */
            list-style: none;
            padding-left: 0px;
        }

        .dropdown-menu li {
            margin-bottom: 10px;
        }

        .dropdown-menu a {
            font-size: 14px;
        }

        /* Optional for better UI */
        .menu-list .dropdown-toggle::after {
            content: "▼";
            float: right;
            font-size: 12px;
            color: #ccc;
        }


    .main-contant{
        margin-left: 250px;
        margin-top: 90px;
        position: absolute;
        color: #444;
    }

    </style>
</head>

<body>

@include('admin.header')

@include('admin.sidever')


<div class="main-contant">

@yield('contand')


</div>




<script>
    // JavaScript for dropdown functionality
    document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
        toggle.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default anchor behavior
            const dropdownMenu = this.nextElementSibling; // Get the next sibling (the dropdown menu)
            const isVisible = dropdownMenu.style.display === 'block'; // Check if it is currently visible
            
            // Hide all dropdown menus
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.style.display = 'none';
            });

            // Toggle visibility of the clicked dropdown menu
            dropdownMenu.style.display = isVisible ? 'none' : 'block';
        });
    });

    // Optional: close dropdowns when clicking outside
    document.addEventListener('click', function (event) {
        if (!event.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.style.display = 'none';
            });
        }
    });
</script>

</body>
</html>
