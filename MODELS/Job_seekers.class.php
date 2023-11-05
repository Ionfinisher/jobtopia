<?php
require_once('Data.class.php');
class Job_seeker extends Data
{


    // Get job seeker by ID
    public function getJob_seekerById($id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('SELECT * FROM Job_seekers WHERE id = ?');
        $req->execute([$id]);
        return $req;
    }

    // Get all job seekers
    public function getAllJob_seeker()
    {
        $bdd = $this->connect();
        $req = $bdd->query('SELECT * FROM Job_seekers');
        return $req;
    }

    // Add a new job seeker
    public function setJob_seeker($username, $email, $password)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('INSERT INTO Job_seekers (username, email, password) VALUES (:username, :email, :password)');
        $req->execute(
            array(
                'username' => $username,
                'email' => $email,
                'password' => $password
            )
        );
    }

    // Update an existing job seeker
    public function updateJob_seeker($username, $email, $password, $id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('UPDATE Job_seekers SET username=:username, email=:email, password=:password WHERE id=:id');
        $req->execute(
            array(
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'id' => $id
            )
        );
    }

    // Delete a job seeker by ID
    public function deleteJob_seeker($id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('DELETE FROM Job_seekers WHERE id = ?');
        $req->execute([$id]);
    }
}
