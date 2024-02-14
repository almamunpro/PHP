<?php
//for loop

// $rating =3;

// for($i=1;$i<=5;$i++){
//     echo ($i<= $rating)?"⭐": "✡️";
// }
// echo "</br>";

// $officeEmployee = [
//     'Sales' => ['jim', 'Pam','Dwight'],
//     'Accounting' => ['angela', 'Kevin', 'Oskar'],
//     'HR' => ['Toby', 'Holly'],
//     'Warehouse' => ['Darry', 'Roy']
// ];

// $departments = array_keys($officeEmployee);

// for($i = 0; $i <count($departments); $i++){
//     $department = $departments[$i];
//     echo "departments: $department<br/>";

//     $employees = $officeEmployee[$department];
//     for($j = 0; $j <count($employees); $j++){
//         $employee = $employees[$j];
//         echo "- $employee<br/>";
//     }
//     echo "</br/>";
// }


// while loop
// $validPassword = 'secret';

// $userInput = '';

// while($userInput !== $validPassword){
//     $userInput = readline("Enter your password:");
// }


// do while loop

// do{
//     $email = readline("Enter your email address: ");
//     echo"Confirmation email sent to $email.\n";
//     $confirmation = readline("Did you receive the mail(yes/no): ");
// }while($confirmation !=='yes');

// foreach 
// $name= ['Laravel', 'Symfony', 'Lumen', 'Symfony'];
// foreach ($name as $key => $name) {
//     echo "$key-, $name: <br/>";
// }

$posts = [
    [
        'post_id' => 1,
        'title' => 'Introduction to PHP',
        'content' => 'In this post, we will cover the basics of php.',
        'comments' => [
            ['comment_id' =>101,  'user'=> 'Dwight Schrute', 'message' => 
            'Great post!'],
                ['comment_id' =>102,  'user'=> 'Jane ', 'message' => 
                'Great post!']
        ]
        ],
    [
        'post_id' => 1,
        'title' => 'Introduction to web development',
        'content' => 'In this post, we will cover the basics of php.',
        'comments' => [
            ['comment_id' =>101,  'user'=> 'Dwight Schrute', 'message' => 
            'Great post!'],
                ['comment_id' =>102,  'user'=> 'Jane ', 'message' => 
                'Great post!']
        ]
    ]
   
];


foreach ($posts as $post){

    
    echo "Post Title: {$post['title']}<br>";
    
    echo "Content: {$post['content']}<br><br><br>"; 


    echo "comments: <br>";
    foreach ($post['comments'] as $comment){
        echo "User: {$comment['user']}, Message: {$comment['message']}<br>";

        echo "<br>";
    }
    echo "<hr><br>";

}