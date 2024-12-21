<?php
$title = "Contact Details Form";
include 'header.php';
?>
        <h2>Contact Us</h2>
        <form action="contact.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
         
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
             <div class="form-group">
                <label for="mobile">Contact No:</label>
                <input type="number" class="form-control" id="mobile" name="mobile" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];

            // Database connection
            $conn = new mysqli('localhost', 'root', '', 'student_db');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "INSERT INTO students (name, email, mobile) VALUES ('$name', '$email' , '$mobile')";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success mt-3'>New record created successfully</div>";
            } else {
                echo "<div class='alert alert-danger mt-3'>Error: " . $sql . "<br>" . $conn->error . "</div>";
            }

            $conn->close();
        }
        ?>
<?php include 'footer.php'; ?>