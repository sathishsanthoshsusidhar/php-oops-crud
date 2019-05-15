abstract class DBCommonMethods
{
    private $host;
    private $db;
    private $uid;
    private $password;
    public function __construct($host, $db, $uid, $password)
    {
        $this->host     = $host;
        $this->db       = $db;
        $this->uid      = $uid;
        $this->password = $password;
    }
}

interface DBInterface
{
    public function db_connect();
    public function insert($data);
    public function read($where);
    public function update($where);
    public function delete($where);
}

class MySQLDriver extends 
DBCommonMethods implements DBInterface { public function __construct($host, $db, $uid, $password) 
{ 
parent::__construct($host, $db, $uid, $password); } 
public function db_connect() { //connect code goes here } 
public function delete($where) { //delete code goes here } 
public function insert($data) { //insert code goes here } 
public function read($where) { //read code goes here } 
public function update($where) { //update code goes here } 
} 

class MSSQLServerDriver extends 
DBCommonMethods implements DBInterface { public function __construct($host, $db, $uid, $password)
 { 
 parent::__construct($host, $db, $uid, $password); } 
 public function db_connect() { //connect code goes here } 
 public function delete($where) { //delete code goes here }
 public function insert($data) { //insert code goes here }
 public function read($where) { //read code goes here }
 public function update($where) { //update code goes here }
 } 
 
 $db = new MySQLDriver($host,$db,$uid,$password);
 
$db->db_connect();
$db->insert($data);
