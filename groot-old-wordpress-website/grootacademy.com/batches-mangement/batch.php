<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_batch'])) {
        $course_name = $_POST['course_name'];
        $instructor_id = $_POST['instructor_id'];
        $start_date = $_POST['start_date'];
        $duration = $_POST['duration'];

        $sql = "INSERT INTO batch (course_name, instructor_id, start_date, duration_in_months) VALUES ('$course_name', '$instructor_id', '$start_date', '$duration')";
        if ($conn->query($sql) === TRUE) {
            echo "New batch added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$sql = "SELECT batch.*, faculty.name as instructor_name FROM batch 
        JOIN faculty ON batch.instructor_id = faculty.id";
$result = $conn->query($sql);
$facultyResult = $conn->query("SELECT * FROM faculty");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Batches</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Batches</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Course Name</th>
                <th>Instructor</th>
                <th>Start Date</th>
                <th>Duration (Months)</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['course_name']; ?></td>
                    <td><?php echo $row['instructor_name']; ?></td>
                    <td><?php echo $row['start_date']; ?></td>
                    <td><?php echo $row['duration_in_months']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h2>Add Batch</h2>
    <form action="batch.php" method="post">
        <div class="form-group">
            <label for="course_name">Course Name:</label>
            <input type="text" class="form-control" id="course_name" name="course_name">
        </div>
        <div class="form-group">
            <label for="instructor_id">Instructor:</label>
            <select class="form-control" id="instructor_id" name="instructor_id">
                <?php while($faculty = $facultyResult->fetch_assoc()) { ?>
                    <option value="<?php echo $faculty['id']; ?>"><?php echo $faculty['name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date:</label>
            <input type="date" class="form-control" id="start_date" name="start_date">
        </div>
        <div class="form-group">
            <label for="duration">Duration (Months):</label>
            <input type="number" class="form-control" id="duration" name="duration">
        </div>
        <button type="submit" name="add_batch" class="btn btn-primary">Add Batch</button>
    </form>
</div>
</body>
</html>
