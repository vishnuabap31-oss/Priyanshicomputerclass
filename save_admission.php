<?php
$file = fopen("admission_data.csv", "a");

// Add header if file is empty
if (filesize("admission_data.csv") == 0) {
    fputcsv($file, [
        "Student Name",
        "Father Name",
        "Mobile",
        "Email",
        "Gender",
        "Course",
        "Education",
        "Address",
        "Date"
    ]);
}

// Get form data
$data = [
    $_POST['student_name'],
    $_POST['father_name'],
    $_POST['mobile'],
    $_POST['email'],
    $_POST['gender'],
    $_POST['course'],
    $_POST['education'],
    $_POST['address'],
    date("d-m-Y")
];

// Save data
fputcsv($file, $data);
fclose($file);

// Redirect back with message
echo "<script>alert('Admission Form Submitted Successfully!'); window.location='AdmissionForm.html';</script>";
?>
