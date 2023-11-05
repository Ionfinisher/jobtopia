<?php
require_once('Data.class.php');
class Employer extends Data
{


    // Get employer by ID
    public function getEmployerById($id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('SELECT * FROM Employers WHERE id = ?');
        $req->execute([$id]);
        return $req;
    }

    // Get all employers
    public function getAllEmployer()
    {
        $bdd = $this->connect();
        $req = $bdd->query('SELECT * FROM Employers');
        return $req;
    }

    // Add a new employer
    public function setEmployer($username,  $password)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('INSERT INTO Employers (username, password) VALUES (:username, :password)');
        $req->execute(
            array(
                'username' => $username,
                'password' => $password
            )
        );
    }

    // Update an existing employer
    public function updateEmployer($id, $username,  $password)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('UPDATE Employers SET username = :username, password = :password WHERE id = :id');
        $req->execute(
            array(
                'username' => $username,
                'id' => $id,
                'password' => $password
            )
        );
    }

    // Delete an employer by ID
    public function deleteEmployer($id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('DELETE FROM Employers WHERE id = ?');
        $req->execute([$id]);
    }
}
