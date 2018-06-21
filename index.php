<?php
//Enter your code here, enjoy!


$people = array(
    array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
    array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
    array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
    array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
    array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
//creating a table using a nested for each loop to go through each array and printing all the data in table row

echo "<table border='1' align='center'>";
echo ("<tr>".
    "<th>id</th>".
    "<th>First Name</th>".
    "<th>Last Name</th>".
    "<th>Email</th>".
    "<th>Action</th>".
        "</tr>");
foreach( $people as $a) {
    echo "<tr>";
    $name = $a['first_name'].'\u0020'.$a['last_name'];
    $email = $a['email'];
    $data = $name.'\n'.$email;
    foreach( $a as $key => $value ){
        echo "<td>".$value."</td>";
    }
    echo '<td><button onclick= alert("'.$data.'")>Show Info</button></td>';
    echo "</tr>";
}
echo "</table>";
?>
