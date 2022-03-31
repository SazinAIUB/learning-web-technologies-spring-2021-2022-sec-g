<?php
    require 'login.php'
    session_start();
?>
<html>
<head>
    <title>Employee Panel</title>>
</head>>
<body>
    <h1>Welcome To Employee Panel</h1>
    <ul>
        <li> 
            <a href="../Views/ApplyJob.php">Job Application</a>
        </li>
        <li> 
            <a href="../Views/PatientService.php">Patient Corner</a> 
        </li>
        <li> 
            <a href="../Views/PatientType.php">Patient Type</a>  
        </li>
        <li>
            <a href="../Views/ProvideMedic.php">Provide Medicine</a>  
        </li>
        <li>
            <a href="../Views/AvailableDrList.php">Available Doctor's</a>  
        </li>
        <li>
            <a href="../Views/PaymentHistory.php">Show Payment History</a>  
        </li>
        <li>
            <a href="../Views/ComplaintAndReview.php"> Complains And Feedback </a>  
        </li>
        <li>
            <a href="../Views/MakePayment.php">View transition history</a>  
        </li>
        <li>
            <a href="../Views/ApplyLeave.php">Call/Email in health care </a>  
        </li>
    </ul>  
</body>>
</html>
