<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<body>
    <?php
    include('Student.php');
    $students = array();

    $first = new Student();
    $first->surname = "Doe";
    $first->first_name = "John";
    $first->add_email('home', 'john@doe.com');
    $first->add_email('work', 'jdoe@mcdonalds.com');
    $first->add_grade(65);
    $first->add_grade(75);
    $first->add_grade(55);
    $students['j123'] = $first;

    $second = new Student();
    $second->surname = "Einstein";
    $second->first_name = "Albert";
    $second->add_email('home', 'albert@braniacs.com');
    $second->add_email('work1', 'a_einstein@bcit.ca');
    $second->add_email('work2', 'albert@physics.mit.edu');
    $second->add_grade(95);
    $second->add_grade(80);
    $second->add_grade(50);
    $students['a456'] = $second;

    $third = new Student();
    $third->surname = "qianru";
    $third->first_name = "li";
    $third->add_email('home', '1806924304@qq.com');
    $third->add_email('work1', 'dgpt4711.ca');
    $third->add_email('work2', 'dgpt4711.edu');
    $third->add_grade(95);
    $third->add_grade(95);
    $third->add_grade(90);
    $students['c789'] = $third;
    
    $fourth = new Student();
    $fourth->surname = "vivi";
    $fourth->first_name = "li";
    $fourth->add_email('home', '6234557@qq.com');
    $fourth->add_email('work1', 'dgpt:4711.ca');
    $fourth->add_email('work2', 'dgpt:4711.edu');
    $fourth->add_grade(90);
    $fourth->add_grade(85);
    $fourth->add_grade(90);
    $students['d101112'] = $fourth;

    foreach ($students as $student)
        echo $student->toString();
    ?>
</body>
</html>
