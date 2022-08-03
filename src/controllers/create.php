<?php
    if(isset($_POST['submit'])){
        echo htmlspecialchars( $_POST['name']);
        echo htmlspecialchars( $_POST['father_name']);
        echo htmlspecialchars($_POST['address']);
        echo htmlspecialchars($_POST['gender']);
        echo htmlspecialchars($_POST['city']);
    }
?>