<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_timing'])) {
        $batch_id = $_POST['batch_id'];
        $day_of_week = $_POST['day_of_week'];
        $start_time = $_POST['start_time'];
        $end_time = $_POST['end_time'];

        $sql = "INSERT INTO batch_timing (batch_id, day_of_week, start_time, end_time) VALUES ('$batch_id', '$day_of_week', '$start_time', '$end_time')";
        if ($conn->query($sql) === TRUE) {
            echo "New timing added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$sql = "SELECT batch_timing.*, batch.course_name, batch.start_date FROM batch_timing 
        JOIN batch ON batch_timing.batch_id = batch.id";
$result = $conn->query($sql);
$batchResult = $conn->query("SELECT * FROM batch");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Batch Timings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Batch Timings</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Batch</th>
                <th>Day of Week</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['course_name'] . ' (' . $row['start_date'] . ')'; ?></td>
                    <td><?php echo $row['day_of_week']; ?></td>
                    <td><?php echo $row['start_time']; ?></td>
                    <td><?php echo $row['end_time']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h2>Add Batch Timing</h2>
    <form action="batch_timing.php" method="post">
        <div class="form-group">
            <label for="batch_id">Batch:</label>
            <select class="form-control" id="batch_id" name="batch_id">
                <?php while($batch = $batchResult->fetch_assoc()) { ?>
                    <option value="<?php echo $batch['id']; ?>"><?php echo $batch['course_name'] . ' (' . $batch['start_date'] . ')'; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="day_of_week">Day of Week:</label>
            <select class="form-control" id="day_of_week" name="day_of_week">
                <option>Monday</option>
                <option>Tuesday</option>
                <option>Wednesday</option>
                <option>Thursday</option>
                <option>Friday</option>
                <option>Saturday</option>
                <option>Sunday</option>
            </select>
        </div>
        <div class="form-group">
            <label for="start_time">Start Time:</label>
            <input type="time" class="form-control" id="start_time" name="start_time">
        </div>
        <div class="form-group">
            <label for="end_time">End Time:</label>
            <input type="time" class="form-control" id="end_time" name="end_time">
        </div>
        <button type="submit" name="add_timing" class="btn btn-primary">Add Timing</button>
    </form>
</div>
</body>
</html>
