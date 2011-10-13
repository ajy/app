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
	
	function afterFind($results, $primary=false) {
 	       if($primary == true) {
 	          if(Set::check($results, '0.0')) {
 	             $fieldName = key($results[0][0]);
 	              foreach($results as $key=>$value) {
 	                 $results[$key][$this->alias][$fieldName] = $value[0][$fieldName];
 	                 unset($results[$key][0]);
 	              }
 	           }
 	       } 
	       return $results;
	}
	
	
	function calcFormAResults($userId) {
		$userSubjectsData=$this->Subject->find('all', array(
			'recursive' => -1,
			'fields' => array('Subject.id'),
			'conditions' => array(
				'OR' => array(
					'Subject.teacher1' => $userId,
					'Subject.teacher2' => $userId
					)
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
					'teacher' => $userId
				)
			));
			if($totalRows==null)return "No records for your subjects";
			$ninetyPerAllRows=0.9*$totalRows;
			$requiredRecords=$this->find('all', array(
					'fields' => array('sum(q1)','sum(q2)','sum(q3)','sum(q4)','sum(q5)','sum(q6)','sum(q7)','sum(q8)','sum(q9)','sum(q10)'),
					'order' => array('q1 + q2 + q3 + q4 + q5 + q6 + q7 + q8 + q9 + q10 ASC'),
					'limit' => floor($ninetyPerAllRows),
					'offset' => ceil(0.05*$totalRows),
					'conditions' => array(
						'subject_id' => $userSubject['id'],
						'teacher' => $userId
					)
				)
			);
			return $requiredRecords;
			$result= array(
				'subjectCode'=>$userSubject['code'],
				'resultQ1'=>($requiredRecords['sum(q1)']*6)/$ninetyPerAllRows,
				'resultQ2'=>($requiredRecords['sum(q2)']*6)/$ninetyPerAllRows,
				'resultQ3'=>($requiredRecords['sum(q3)']*6)/$ninetyPerAllRows,
				'resultQ4'=>($requiredRecords['sum(q4)']*2)/$ninetyPerAllRows,
				'resultQ5'=>($requiredRecords['sum(q5)']*2)/$ninetyPerAllRows,
				'resultQ6'=>($requiredRecords['sum(q6)']*2)/$ninetyPerAllRows,
				'resultQ7'=>($requiredRecords['sum(q7)']*2)/$ninetyPerAllRows,
				'resultQ8'=>($requiredRecords['sum(q8)']*2)/$ninetyPerAllRows,
				'resultQ9'=>($requiredRecords['sum(q9)']*4)/$ninetyPerAllRows,
				'resultQ10'=>($requiredRecords['sum(q10)']*4)/$ninetyPerAllRows,
			);
			$formAResults = Set::insert($formAResults,$i++,$result);
        	}
        	return $formAResults;                         	
	}
	
	function calcAllFormAResults() {
		$allFormAResults = null;
		$allTeachers = $this->Teacher->query("select id,username from users as User where group_id=2");
		$i=1;
		foreach($allTeachers as $teacher) {
			$teachersResults = $this->calcFormAResults($teacher['User']['id']);
			if(isset($teachersResults)) {
				$result = array(
					'teacherName' => $teacher['User']['name']
				);
				foreach($teachersResults as $teachersResult) {
					$allFormAResults=Set::insert($allFormAResults,$i++,$result+$teachersResult);
				}
			}
		}
		return $allFormAResults;
	}
}
