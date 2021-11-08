<?php
class rumahsakit
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "apn";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function add_data($name, $email, $phone, $address)
    {
        $data = $this->db->prepare('INSERT INTO users (name,email,phone,address) VALUES (?, ?, ?,?)');
        $data->bindParam(1, $name);
        $data->bindParam(2, $email);
        $data->bindParam(3, $phone);
        $data->bindParam(4, $address);
        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM users");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public function get_by_id($id)
    {
        $query = $this->db->prepare("SELECT * FROM users where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }
    public function update($name, $email, $phone, $address, $id)
    {
        $query = $this->db->prepare('UPDATE users set name=?,email=?,phone=?,address=? where id=?');

        $query->bindParam(1, $name);
        $query->bindParam(2, $phone);
        $query->bindParam(3, $email);
        $query->bindParam(4, $address);
        $query->bindParam(5, $id);

        $query->execute();
        return $query->rowCount();
    }
    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM users where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }
}
