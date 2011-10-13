<div class="comments">
        <h2>Teacher</h2>
</div>
<div class="actions">
        <?php $user=($this->Session->read("Auth.User"));?>
        <?php debug($form_a_results);?>
        <?php debug($form_b_results);?>
        <h4><?php echo $html->link($user['username'],array('controller'=>'users','action'=>'edit',$user['id']));?></h4>
        
        <ul>
            <li><?php echo $html->link('Comments',array('controller'=>'comments','action'=>'view'));?></li>
        <li><?php echo $html->link('Logout',array('controller'=>'users','action'=>'logout'));?></li>
        </ul>                 
</div>

