<?php 

// Dependency cycle 
// Driver->Vehicle->Engine

class User
{
    protected $db;

    public function __construct(DbInterface $db)
    {
        $this->db = $db;
    }

    public function display()
    {
        echo $this->db->connect();
    }
    
}

class MySql implements DbInterface
{
    public function connect()
    {
        echo "mysql connect";
    }
}

class PostSql implements DbInterface
{
    public function connect()
    {
        echo "Postsql connect";
    }
}

interface DbInterface
{
    public function connect();
}

$user = new User(new Postsql());
$user->display();
?>