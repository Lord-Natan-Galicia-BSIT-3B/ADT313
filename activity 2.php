
Natan
Natan Galicia
<!DOCTYPE html>
<html>
<head>
    <title>Hands-on Activity</title>
</head>
<body>

<h1>Hands-on Activity</h1>

<?php
$table = array(
    "header" => array(
        "Firstname",
        "Middlename",
        "Lastname",
        "Section",
        "Course",
        "Yearlevel"
    ),
    "body" => array(
        array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        ),
        array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        ),
        array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        ),
        array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        ),
     array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        ),
        array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        ),
     array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        ),
        array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        ),
     array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        ),
        array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        ),
     array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        ),
        array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        ),
     array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        ),
        array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        ),
        array(
            "Firstname" => "Firstname",
            "Middlename" => "Middlename",
            "Lastname" => "Lastname",
            "Section" => "Section",
            "Course" => "Course",
            "Yearlevel" => "Yearlevel"
        )
    )
);
?>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <?php foreach ($table["header"] as $header): ?>
                <th><?php echo $header; ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($table["body"] as $row): ?>
            <tr>
                <?php foreach ($row as $cell): ?>
                    <td><?php echo $cell; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>