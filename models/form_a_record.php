<?php
class FormARecord extends AppModel {
	var $name = 'FormARecord';
	
	var $validate = array(
		'student' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'The student field is blank',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'teacher' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'The teacher field is blank',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'subject_code' => array(
			'isSubject' => array(
				'rule' =>array('numeric'),
				'message' => 'the record is not for a registered subject',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'submission_number' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q1' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q2' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q3' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q4' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q5' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q6' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q7' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q8' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q9' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'q10' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'This field must be filled',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Subject' => array(
			'className' => 'Subject',
			'foreignKey' => 'subject_id'			
		)
	);
	
	function afterSave($created){
		if($created){// this entire thing basically keeps subject_memberships up to date very time a form is submitted
			Configure::load("feedback");
			$max = Configure::read('max_sub_num');//max is the max number of submissions possible
			$savedRecords = $this->query('select * from subject_memberships as SubjectMembership where SubjectMembership.form_a_submitted = "'.($max-1).'" and exists (select * from form_a_records as far where far.student = SubjectMembership.student_id and far.subject_id = SubjectMembership.subject_id and far.submission_number = '.$max.')');
			$this->bindModel(
				array('hasMany' => array(
					'SubjectMembership' => array(
						'className' => 'SubjectMembership'
					)
				)),false//present for the remainder of the request
			);
			foreach($savedRecords as $savedRecord){
				$savedRecord['SubjectMembership']['form_a_submitted']++;
				$this->SubjectMembership->save($savedRecord);
			}
		}
	}
	function calcFormAResults($user_id,$sub_num) {
		$userSubjectsData=$this->Subject->find('all', array(
			'recursive' => -1,
			'conditions' => array(
				'Subject.teacher1' => $user_id
				/*'OR' => array(
					'Subject.teacher1' => $user_id,
					'Subject.teacher2' => $user_id
					) no more teacher 2*/
				)
			)
		);
		if($userSubjectsData==null)return "No subjects are associated with you";
		$formAResults=null;
        	$i=1;
        	foreach($userSubjectsData as $userSubjectData) {
        		$userSubject=$userSubjectData['Subject'];
			$totalRows=$this->find('count', array(
				'conditions' => array(
					'subject_id' => $userSubject['id'],
					'teacher' => $user_id,
					'submission_number' => $sub_num
				)
			));
			if($totalRows==null){
				$result="No records for ".$userSubject['code'].' : '.$userSubject['name'];				
			}else{
				$ninetyPerAllRows=0.9*$totalRows;
				$requiredRecords=$this->find('all', array(
						'fields' => array('q1','q2','q3','q4','q5','q6','q7','q8','q9','q10'),
						'order' => array('q1 + q2 + q3 + q4 + q5 + q6 + q7 + q8 + q9 + q10 ASC'),
						'limit' => floor($ninetyPerAllRows),
						'offset' => ceil(0.05*$totalRows),
						'conditions' => array(
							'subject_id' => $userSubject['id'],
							'teacher' => $user_id,
							'submission_number' => $sub_num
						)
					)
				);
				$sumQ1=$sumQ2=$sumQ3=$sumQ4=$sumQ5=$sumQ6=$sumQ7=$sumQ8=$sumQ9=$sumQ10=0;
				foreach($requiredRecords as $requiredRecord){
					$sumQ1 = $sumQ1 + $requiredRecord['FormARecord']['q1'];
					$sumQ2 = $sumQ2 + $requiredRecord['FormARecord']['q2'];
					$sumQ3 = $sumQ3 + $requiredRecord['FormARecord']['q3'];
					$sumQ4 = $sumQ4 + $requiredRecord['FormARecord']['q4'];
					$sumQ5 = $sumQ5 + $requiredRecord['FormARecord']['q5'];
					$sumQ6 = $sumQ6 + $requiredRecord['FormARecord']['q6'];
					$sumQ7 = $sumQ7 + $requiredRecord['FormARecord']['q7'];
					$sumQ8 = $sumQ8 + $requiredRecord['FormARecord']['q8'];
					$sumQ9 = $sumQ9 + $requiredRecord['FormARecord']['q9'];
					$sumQ10 = $sumQ10 + $requiredRecord['FormARecord']['q10'];
				}
				$result= array(
					'subjectCode'=>$userSubject['code'],
					'name'=>$userSubject['name'],
					'submission_number'=>$sub_num,
					'resultQ1'=>($sumQ1*3)/$ninetyPerAllRows,
					'resultQ2'=>($sumQ2*3)/$ninetyPerAllRows,
					'resultQ3'=>($sumQ3*3)/$ninetyPerAllRows,
					'resultQ4'=>($sumQ4)/$ninetyPerAllRows,
					'resultQ5'=>($sumQ5)/$ninetyPerAllRows,
					'resultQ6'=>($sumQ6)/$ninetyPerAllRows,
					'resultQ7'=>($sumQ7)/$ninetyPerAllRows,
					'resultQ8'=>($sumQ8)/$ninetyPerAllRows,
					'resultQ9'=>($sumQ9*2)/$ninetyPerAllRows,
					'resultQ10'=>($sumQ10*2)/$ninetyPerAllRows,
				);
			}
			$formAResults = Set::insert($formAResults,$i++,$result);
        	}
        	return $formAResults;                         	
	}
	
	function calcAllFormAResults($sub_num = null) {
		$allFormAResults = null;
		$allTeachers = $this->query("select id,username,name from users as User where group_id=2");
		$i=1;
		foreach($allTeachers as $teacher) {
			$teachersResults = $this->calcFormAResults($teacher['User']['id'],$sub_num);
			if((!is_string($teachersResults))&&isset($teachersResults)) {
				foreach($teachersResults as $teachersResult) {
					if(!is_string($teachersResult)){
						$teachersResult['teacherUserName']= $teacher['User']['username'];
						$teachersResult['teacherName']= $teacher['User']['name'];
						$allFormAResults=Set::insert($allFormAResults,$i++,$teachersResult);
					}
				}
			}
		}
		 //debug($allFormAResults);
		return $allFormAResults;
	}
}
