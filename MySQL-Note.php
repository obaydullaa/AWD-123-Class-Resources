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