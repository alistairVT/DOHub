<?php
class View_model extends CI_model
{
	private $dbconn;

	public function __construct(){
		$this->dbconn = $this->load->database('mysql://kevin:12345@127.0.0.1/offensetracker', TRUE);
	}

	public function Viewoffenses()
	{
		$result = $this->dbconn->query("SELECT * from violation");
		$listResult = $result->result();
		return $listResult;
	}

	public function Viewstudents()
	{	
		$result = $this->dbconn->query("SELECT idnumber,fname,mname,lname from students");

		$listResult = $result->result();
		return $listResult;
	}
	public function Summarystudents() {
		$result = $this->dbconn->query("SELECT COUNT(DISTINCT idnumber) as boom  from students");
		
		$listResult = $result->row();
		return $listResult;
	}

	public function RegisterStudent() {
		$idnumber = $this->input->post('idnumber');
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$violcode = $this->input->post('violcode');

		$query =  $this->dbconn->query("SELECT * FROM students WHERE idnumber = '$idnumber'"); 
		$checkselect = $query->result();
		
		if (empty($checkselect)) 
		{ 	/* $addstudent = "INSERT INTO `students` VALUES (NULL, '$firstname', NULL, '$lastname', '$idnumber'); ";
		   		$addoffense = "INSERT INTO `record` VALUES ('$idnumber', '$violcode', NULL); "; 

		   		$sql = "INSERT into students VALUES (".$this->dbconn->escape(NULL, $firstname, NULL, $lastname, $idnumber).")";
		   		$sql2 = "INSERT into record VALUES (".$this->dbconn->escape($idnumber, $violcode, NULL).")";*/
		   		$sql = array('username' => $idnumber, 'fname' => $firstname, 'lname' => $lastname, 'idnumber' => $idnumber);
		   		$sql2 = array('idnumber' => $idnumber, 'violcode' => $violcode);

		   		$insertstudent = $this->dbconn->insert_string('students', $sql);
		   		$insertrecord = $this->dbconn->insert_string('record', $sql2);
		   	
/*
		   		$insertstudent = $this->dbconn->query("INSERT into students VALUES (NULL, '$firstname', NULL, '$lastname', '$idnumber', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)");
		   		$insertrecord = $this->dbconn->query("INSERT into record VALUES ('$idnumber', '$violcode', NULL)");
*/
		   		 $checkstudent = $this->dbconn->call_function('query', $insertstudent);
				 $checkrecord  = $this->dbconn->call_function('query', $insertrecord);
		
		
			if (!$checkstudent&&!$checkrecord) {
 			   echo 'Could not run query:' .

 			    $error =$this->dbconn->call_function('error');
 			    echo $error;
    			exit;
						  }
			else if($checkstudent&&$checkrecord)
			{ echo 'You have succesfully registered the student';

				mysql_close();
			}


			else echo "I did not record well!";
		}
		else 
		{
			echo 'you have an existing account';
		}
	}

	public function RegisterDO() {
		$username = $this->input->post('username');
		$firstname = $this->input->post('fname');
		$lastname = $this->input->post('lname');
		$email = $this->input->post('email');
		$contactno = $this->input->post('contactno');

		$query =  $this->dbconn->query("SELECT * FROM do WHERE username = '$username'"); 
		$checkselect = $query->result();
		
		if (empty($checkselect)) 
		{ 	/* $addstudent = "INSERT INTO `students` VALUES (NULL, '$firstname', NULL, '$lastname', '$idnumber'); ";
		   		$addoffense = "INSERT INTO `record` VALUES ('$idnumber', '$violcode', NULL); "; 

		   		$sql = "INSERT into students VALUES (".$this->dbconn->escape(NULL, $firstname, NULL, $lastname, $idnumber).")";
		   		$sql2 = "INSERT into record VALUES (".$this->dbconn->escape($idnumber, $violcode, NULL).")";*/
		   		$sql = array('username' => $username, 'fname' => $firstname, 'lname' => $lastname, 'email' => $email, 'contactno' => $contactno);

		   		$insertDO = $this->dbconn->insert_string('do', $sql);
/*
		   		$insertstudent = $this->dbconn->query("INSERT into students VALUES (NULL, '$firstname', NULL, '$lastname', '$idnumber', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)");
		   		$insertrecord = $this->dbconn->query("INSERT into record VALUES ('$idnumber', '$violcode', NULL)");
*/
		   		 $checkDO = $this->dbconn->call_function('query', $insertDO);
		
		
			if (!$checkDO) {
 			   echo 'Could not run query:' .

 			    $error =$this->dbconn->call_function('error');
 			    echo $error;
    			exit;
						  }
			else if($checkDO)
			{ echo 'You have succesfully registered the Discipline Officer';

				mysql_close();
			}


			else echo "I did not record well!";
		}
		else 
		{
			echo 'you have an existing account';
		}
	}


	public function delete()
	{	$dousername = $this->$dbconn->post('doUsername');


		$querydelete =  $this->db->delete('do', array('username' => $dousername)); 
		$checkdelete = $this->dbconn->call_function('query', $querydelete);


		if (!$checkdelete)
		{
			echo 'Could not run query:' .

 			    $error =$this->dbconn->call_function('error');
 			    echo $error;
    			exit;
		}

		else if ($checkdelete)
		{
			echo 'You have deleted ';
			echo $doUsername;
		}
	}

	public function DemoGraphProf() {

	}

	public function savebackground()
	{

			$letter = $this->input->post('letter');
			$reason = $this->input->post('reason');
			$pconcerns = $this->input->post('pconcerns');
			$sconcerns= $this->input->post('sconcerns');
			$aconcerns= $this->input->post('aconcerns');
			$cconcerns= $this->input->post('cconcerns');
			$oconcerns= $this->input->post('oconcerns');
			$learnings = $this->input->post('learnings');
			$stopbehave = $this->input->post('stopbehave');
			$startbehave = $this->input->post('startbehave');
			$contbehave = $this->input->post('contbehave');
			$support = $this->input->post('support');
			$casefocus = $this->input->post('casefocus');
			$hbook = $this->input->post('hbook');
			$feeling = $this->input->post('feeling');
			$reasonhbook = $this->input->post('reasonhbook');
			$faith = $this->input->post('faith');
			$effects = $this->input->post('effects');
			$whattodo = $this->input->post('whattodo');
			$change = $this->input->post('change');
			
	/* $addstudent = "INSERT INTO `students` VALUES (NULL, '$firstname', NULL, '$lastname', '$idnumber'); ";
		   		$addoffense = "INSERT INTO `record` VALUES ('$idnumber', '$violcode', NULL); "; 

		   		$sql = "INSERT into students VALUES (".$this->dbconn->escape(NULL, $firstname, NULL, $lastname, $idnumber).")";
		   		$sql2 = "INSERT into record VALUES (".$this->dbconn->escape($idnumber, $violcode, NULL).")"; 
		   	*/
		   		
	   		$sql = array('reason' => $reason, 'learnings' => $learnings, 'stopbehavior'=> $stopbehave, 'startbehavior' => $startbehave, 'contbehavior' => $contbehave,'programs' => $support, 'conftopic' => $casefocus);
	   		$sql2 = array('personal' => $pconcerns, 'social' => $sconcerns, 'academic' => $aconcerns, 'career' => $cconcerns, 'others' => $oconcerns);
	   		$sql3 = array('handbook' => $hbook, 'feeling' => $feeling, 'reasonhb' => $reasonhbook, 'faith' => $faith,'implications' => $effects,'currentaction' => $whattodo,'changeattitude' => $change);
	   		$sql4 = array('letter' => $letter);

	   		$insertbackground = $this->dbconn->insert_string('casebackground', $sql);
	   		$insertconcerns = $this->dbconn->insert_string('concerns', $sql2);
	   		$insertthoughts = $this->dbconn->insert_string('thoughts', $sql3);
	   		$insertletter = $this->dbconn->insert_string('letter', $sql4);
/*		
		   		$insertstudent = $this->dbconn->query("INSERT into `students` VALUES (NULL, '$firstname', NULL, '$lastname', '$idnumber', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)");
		   		$insertrecord = $this->dbconn->query("INSERT into `record` VALUES ('$idnumber', '$violcode', NULL)");
*/
	   		$checkbackground = $this->dbconn->call_function('query', $insertbackground);
			$checkconcerns  = $this->dbconn->call_function('query', $insertconcerns);	
			$checkthoughts = $this->dbconn->call_function('query', $insertthoughts);
			$checkletter = $this->dbconn->call_function('query', $insertletter);

			if (!$checkbackground&&!$checkconcerns&&!$checkthoughts&&!$checkletter) {
 			   echo 'Could not run query:' .

 			   $error =$this->dbconn->call_function('error');

    		   exit;
  			}
						
			else if($checkbackground&&$checkconcerns&&$checkthoughts&&$checkletter)	{
				echo 'You have succesfully saved your letter';
			}

			else 
				echo 'The letter did not record well!';

			}
}
?>