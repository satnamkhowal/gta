<?php
// Include any necessary global configurations or header files here
include('../includes/header.php');

$branchName = 'Delhi Branch';
$location = '456, Connaught Place, New Delhi';
$contact = '+91 1234567890';
$hours = 'Mon-Fri: 10am - 7pm';
$courses = ['Data Analytics', 'Artificial Intelligence', 'Cyber Security'];
$teamMembers = [
    ['name' => 'Pawan Goyal', 'designation' => 'Senior Developer', 'expertise' => 'JavaScript, React, Node.js'],
    ['name' => 'Mohit Sharma', 'designation' => 'Django Developer', 'expertise' => 'Python, Django, APIs'],
];
include('branch-template.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $branchName; ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <!-- Branch Details -->
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-4"><?php echo $branchName; ?></h1>
                <p><strong>Location:</strong> <?php echo $location; ?></p>
                <p><strong>Contact:</strong> <?php echo $contact; ?></p>
                <p><strong>Operating Hours:</strong> <?php echo $hours; ?></p>
            </div>
            <div class="col-md-4">
                <!-- Example image placeholder for branch -->
                <img src="https://via.placeholder.com/300x200" class="img-fluid rounded" alt="Branch Image">
            </div>
        </div>

        <!-- Courses Offered -->
        <div class="row mt-4">
            <div class="col-12">
                <h2>Courses Offered</h2>
                <ul class="list-group">
                    <?php foreach ($courses as $course) {
                        echo "<li class='list-group-item'>$course</li>";
                    } ?>
                </ul>
            </div>
        </div>

        <!-- Team Members Section -->
        <div class="row mt-5">
            <div class="col-12">
                <h2>Meet Our Team</h2>
                <div class="row">
                    <?php foreach ($teamMembers as $member) { ?>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $member['name']; ?></h5>
                                    <p class="card-text"><strong>Designation:</strong> <?php echo $member['designation']; ?></p>
                                    <p class="card-text"><strong>Expertise:</strong> <?php echo $member['expertise']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 p-4 text-center">
        &copy; 2024 Groot Academy. All Rights Reserved.
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>