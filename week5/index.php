<?php
$courses=[
    "CMT-111 HTML5 ",
    "CMT-113 JavaScript",
    "CMT-125 Cascading Style Sheets (CSS)",
    "CMT-225 jQuery",
    "CMT-228 Web Design With Ajax",
    "CMT-241 PHP/MySQL",
    "CMT-117 XML",
    "CMT-227 Javascript Object Notation (JSON)",
    "CMT-235 Node.js",
    "CMT-250 Mobile Web Applications"
    
];
sort($courses,SORT_NATURAL | SORT_FLAG_CASE)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHCC Web Development Courses</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <div class="container">
        <h1>
           BHCC Web Development Courses 
        </h1>
        <p class="description">
            List of Web Development Courses in Alphabetical Order

        </P>
        <table>
            <thead>
                <tr>
                <th>#</th>
                <th>Courses Names</th>
                </tr>

            </thead>
            <tbody>
                <?php foreach ($courses as $index => $course):?>
                    <tr>
                        <td><?php echo $index + 1;?></td>
                        <td><?php echo htmlspecialchars($course);?></td>

                    </tr>
                    <?php endforeach;?>

            </tbody>
        </table>
        <footer>
            Total Courses: <?php echo count($courses);?>
        </footer>


    </div>
    
</body>
</html>