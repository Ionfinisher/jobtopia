<?php
require_once('Data.class.php');
class Job extends Data
{
    public function getAllJobs()
    {
        $bdd = $this->connect();
        $req = $bdd->prepare("SELECT * FROM Job;");
        $req->execute();
        return $req;
    }

    // Get job by employer ID
    public function getJobById($id)
    {
        $bdd = $this->connect();
        $req1 = $bdd->prepare('SELECT * FROM Job WHERE id =:id');
        $req1->execute(array('id' => $id));
        return $req1;
    }

    // Get job by employer ID
    public function getJobByEId($employer_id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('SELECT * FROM Job WHERE employer_id =:employer_id');
        $req->execute(array('employer_id' => $employer_id));
        return $req;
    }

    public function getNumberJob($employer_id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare("SELECT COUNT(ALL id) FROM Job WHERE employer_id = :employer_id AND id IS NOT NULL;");
        $nbr = $req->execute(array('employer_id' => $employer_id));
        return $nbr;
    }

    public function setJob($employer_id, $company_name, $job_title, $location, $description, $requirements)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('INSERT INTO Job (employer_id, company_name, job_title, location, description, requirements) VALUES (:employer_id, :company_name, :job_title, :location, :description, :requirements)');
        $req->execute(
            array(
                'employer_id' => $employer_id,
                'company_name' => $company_name,
                'job_title' => $job_title,
                'location' => $location,
                'description' => $description,
                'requirements' => $requirements
            )
        );
    }

    public function updateJob($id, $employer_id, $company_name, $job_title, $location, $description, $requirements)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('UPDATE Job SET employer_id=:employer_id, company_name=:company_name, job_title=:job_title, location=:location, description=:description, requirements=:requirements WHERE id=:id');
        $req->execute(
            array(
                'id' => $id,
                'employer_id' => $employer_id,
                'company_name' => $company_name,
                'job_title' => $job_title,
                'location' => $location,
                'description' => $description,
                'requirements' => $requirements
            )
        );
    }

    // Delete a job by ID
    public function deleteJob($id)
    {
        $bdd = $this->connect();
        $req = $bdd->prepare('DELETE FROM Job WHERE id =:id');
        $req->execute(array('id' => $id));
    }
}
