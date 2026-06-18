<?php
include "connect.php";

if(isset($_POST['submit'])) {
    // Get form data
    $old_user_name = $_POST['old_user_name']; // hidden field to identify which record to update
    $user_name = $_POST['user_name'];
    $last_name = $_POST['last_name'];
    $Email = $_POST['Email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    
    try {
        // Update query
        $sql = "UPDATE student SET 
                user_name = :user_name,
                last_name = :last_name,
                Email = :Email,
                gender = :gender,
                age = :age
                WHERE user_name = :old_user_name";
        
        $stmt = $conn->prepare($sql);
        
        // Bind parameters
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':Email', $Email);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':old_user_name', $old_user_name);
        
        // Execute
        $stmt->execute();
        
        echo "Record updated successfully!";
        echo "<br><a href='display.php'>View all records</a>";
        
    } catch(PDOException $e) {
        echo "Error updating record: " . $e->getMessage();
    }
}
?>
