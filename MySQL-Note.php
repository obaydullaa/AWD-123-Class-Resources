/**
* Date: 01-01-23
* MySQL part 01 - 11
*=============================
*/

<!-- Mysql 5 way to connect in server  -->
1. mysql_connect(); // Old 
2. mysql_select_db(); // Old

3. mysqli_connect(); // new not use
4. new mysqli(); // new use it bcz it's oop
5. new PDO(); // new use it bcz it's oop


$network = new mysqli('localhost', 'obaydul', '123456'); // connect in database

<!-- For 2 statement communication in server -->
$network -> prepare() // Secure. Bcs it's do mysql injection.
$network -> query()  // Good first use query statement.


<!-- Database Create and Delete  -->
$network -> query("CREATE DATABASE sm"); // DB create
$network -> query("DROP DATABASE sm"); // DB Drop


/**
 * MySQL part 10 (CREATE TABLE)
 */
$network = new mysqli('localhost','rifat','asdfg', 'Student'); // connect database
//  $network -> query("CREATE DATABASE Student");  // Create Table 

 $network -> query("CREATE TABLE users (
    id int(11),
    name varchar(100),
    age int(3),
    cell varchar(20)
   )");   

   /**
    * Data Insert in sql (part 15 )
    */
 
   $connection = new mysqli('localhost', 'root', '', 'student');
   $sql = "INSERT INTO users (name, age, cell) VALUES ('Obaydul', '30', '01755265017')";

   $connection->query($sql);

   /**
   * MySQL part 16 (  DELETE data from table  )
   */

 $connection = new mysqli('localhost', 'root','', 'mydb');

 $sql = "DELETE FROM Users WHERE ID='14' ";

 $connection->query($sql);

 /**
 * MySQL part 17 (  DELETE  by prepare  )
 */
  $connection = new mysqli('localhost', 'root','', 'mydb');

  $sql = "DELETE FROM Users WHERE ID='17' ";

  $statement = $connection->prepare($sql);
  $statement->execute(); 

/**
 * MySQL part 18 (update)
 */
  $connection = new mysqli('localhost', 'root','', 'mydb');

  $sql = "UPDATE Users SET name='Rifat' WHERE id='19' ";

  $connection->query($sql);


/**
 * MySQL part 19 (Select)
 */

  <?php
    /**
     * Type of fetch
     * // Use for PDO
     *  fetch()
     * fetchAll();
     * 
     * fetch_array(); // data get index array and associative array. 
     * fetch_assoc(); // data get only associative array.
     * fetch_object() // data get associative array for catch different way.
     * 
     * 
     * 
     */
    
    $sql = "SELECT * FROM users";
    $data = $connection->query($sql);

    // if use fetch_assoc()
    // $user_data = $data->fetch_assoc(); 
    // echo $user_data['id'];

    // / if use fetch_object()
     
    while($user_data = $data->fetch_object()){
      echo"Name: ". $user_data->name." Email: ".$user_data->email." cell: ". $user_data->cell. "<hr>";
    }

    
    ?>
  /**
  * MySQL part 20 (auto file)
  * File Create and organize file.
 */

  /**
  * MySQL part 21 (data show)
 */
    <tbody>
      <?php
        $sql = "SELECT * FROM users ORDER BY name ASC";
        $data = $connection->query($sql);
        $i = 1;
        while ($users_data =  $data->fetch_object()):
      ?>
      <tr>
        <td><?php echo $i; $i++; ?></td>
        <td><?php echo $users_data->name ?></td>
        <td><?php echo $users_data->email ?></td>
        <td><?php echo $users_data->cell ?></td>
        <td><?php echo $users_data->username ?></td>
        <td><img src="assets/img/user-image.jpg" alt=""></td>
        <td>
          <a class="btn btn-sm btn-info" href="#">View</a>
          <a class="btn btn-sm btn-warning" href="#">Edit</a>
          <a class="btn btn-sm btn-danger" href="#">Delete</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>

  /**
  * MySQL part 22 ( ORDER BY ASC )
 *
 $sql = "SELECT * FROM users ORDER BY id ASC";

 /**
  * MySQL part 23 ( LIMIT )
 *
 
 $sql = "SELECT * FROM users LIMIT 5";


 /**
  * MySQL part 24 ( WHERE, NOT )
 *

 $sql = "SELECT * FROM users WHERE Location='Mirpur' ";
 $sql = "SELECT * FROM users WHERE NOT Location='Mirpur' ";

 /**
  * MySQL part 26 ( WHERE AND OR )
 *

 $sql = "SELECT * FROM users WHERE gender='Female' OR Location='Mirpur' ";
 $sql = "SELECT * FROM users WHERE email='moriomnela@gmail.com' AND Location='Mirpur' ";


/**
  * MySQL part 27 ( cmd mysql )
 *
** Open CMD 

1. mysql -u root -p // Connect Server
2. show databases;    // see all data after connection_aborted (USED= ;)
3. use mydb;     // in db
4. select * from users  // see all data users
5. select * from users order by id desc;
6. select * from users where location='Uttara';
7. insert into users (name, email, cell, username, location, gender) values ('Rajue', 'r@gmail.com', '555555', 'firoz', 'Uttara', 'Male')

