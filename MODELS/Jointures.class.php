<?php
require_once('Data.class.php');
class Jointure extends Data
{
    public function getCredents($username, $password)
    {
        // credents == credentials
        $bdd = $this->connect();
        $req = $bdd->prepare("SELECT id, table_name, username, password FROM Job_seekers WHERE username = :username AND password = :password UNION SELECT * FROM Employers WHERE username = :username AND password = :password");
        $req->execute(array(
            'username' => $username,
            'password' => $password
        ));
        $user = $req->fetch();
        return $user;
    }

    public function getJob_applicationByEId($employer_id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare("SELECT *
        FROM Job_applications
        INNER JOIN Job ON Job_applications.Job_id = Job.id
        WHERE Job.employer_id =:employer_id");
        $req->execute(array(
            'employer_id' => $employer_id
        ));
        return $req;
    }
}
