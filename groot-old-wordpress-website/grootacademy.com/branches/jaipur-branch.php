<?php
// Data specific to each branch
$branchName = 'Jaipur Branch'; // Change this for each branch
$location = '123, Main Street, Jaipur, Rajasthan';
$contact = '+91 9876543210';
$hours = 'Mon-Fri: 9am - 6pm';
$courses = ['Full Stack Development', 'Data Science', 'Digital Marketing'];
$teamMembers = [
    ['name' => 'Jitin Goyal', 'designation' => 'Principal Software Engineer', 'expertise' => 'Full Stack, System Design'],
    ['name' => 'Bhaskar Yogi', 'designation' => 'Software Architect', 'expertise' => 'Cloud, AWS, React Native'],
    // Add more team members as needed
];
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