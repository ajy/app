<?php
class Comment extends AppModel {
	var $name = 'Comment';
	
	var $validate = array(
		'from' => array(
			'isUser' => array(
				'rule' => array('numeric'),
				'message' => 'the Comment is not from a valid user',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'to' => array(
			'isUser' => array(
				'rule' => array('numeric'),
				'message' => 'the Comment is not to a valid user',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'subject_id' => array(
			'isUser' => array(
				'rule' => array('numeric'),
				'message' => 'the Comment is not about a valid subject',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'comment' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'You must give a comment',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
        public function comments($user) {
        	$sql = "SELECT * FROM `comments` WHERE ( `from`=" .$user." OR `to`= ".$user." )order by  `created` DESC  ";
	        $allComments=$this->query($sql);
        	return($this->build($allComments));
	}
	
        public function build($allComments){
        $i=0;
        $comments=null;// default value
        foreach ($allComments as $p_com){
            if($p_com['comments']['parent_id']==NULL){
                $comments[$i++]= $p_com;
                 foreach ($allComments as $com) {
                        if($p_com['comments']['id']==$com['comments']['parent_id']){
                            $comments[$i++]=$com;
                        }
                }  

            }
          
        }
          return $comments;

        }

    function search($teacher,$subject){
        if(is_null($subject)){
            return $this->comments($teacher);//comments build themselves, so no need for the later call
        }
        elseif(is_null($teacher)){
            $sql = "SELECT * FROM comments WHERE subject_id=".$subject." order by  created DESC  ";            
        }
        else{
            $sql = "SELECT * FROM comments WHERE (comments.from= " .$teacher." or comments.to= ".$teacher.") and comments.subject_id=".$subject." order by  created DESC  ";
        }


    

        return $this->build($this->query($sql));
    }


    
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Sender' => array(
			'className' => 'User',
			'foreignKey' => 'from',			
		),
		'Receiver' => array(
			'className' => 'User',
			'foreignKey' => 'to'
		),
		'Subject' => array(
			'className' => 'Subject',
			'foreignKey' => 'subject_id'			
		)
	);
	
	var $hasOne = array(
		'child' => array(
			'className' => 'Comment',
			'foreignKey' => 'parent_id',
			'dependent' => true
		),
	);
}
