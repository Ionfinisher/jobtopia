<?php
require_once('Data.class.php');
class Job_application extends Data
{
    public function getJob_applicationByJId($Job_seeker_id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('SELECT * FROM Job_applications WHERE Job_seeker_id = ?');
        $req->execute([$Job_seeker_id]);
        return $req;
    }

    public function getJob_applicationById($id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('SELECT * FROM Job_applications WHERE id = ?');
        $req->execute([$id]);
        return $req;
    }

    public function getNumberJob_application($Job_seeker_id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare("SELECT COUNT(*) myApps FROM Job_applications WHERE job_seeker_id = ?;");
        $nbr = $req->execute([$Job_seeker_id]);
        return $nbr;
    }

    public function setJob_application($Job_seeker_id,  $Job_id, $resume,)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare("INSERT INTO Job_applications SET Job_seeker_id=:Job_seeker_id, Job_id=:Job_id, resume=:resume");
        $req->execute(
            array(
                'Job_seeker_id' => $Job_seeker_id,
                'Job_id' => $Job_id,
                'resume' => $resume
            )
        );
    }

    public function acceptJob_application($id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare("UPDATE Job_applications SET status='accepted' WHERE id=:id");
        $req->execute(
            array(
                'id' => $id
            )
        );
    }

    public function denyJob_application($id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare("UPDATE Job_applications SET status='rejected' WHERE id=:id");
        $req->execute(
            array(
                'id' => $id
            )
        );
    }

    public function deleteJob_application($id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('DELETE FROM Job_applications WHERE id = ?');
        $req->execute([$id]);
    }
}
