Puedes administrar:
<br />
<ul>
    <li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index','controller'=>'users'));?></li>
    <li><?php echo $this->Html->link(__('List Candidates', true), array('action' => 'index','controller'=>'candidates'));?></li>
    <li><?php echo $this->Html->link(__('List Questions', true), array('action' => 'index','controller'=>'questions'));?></li>
    <li><?php echo $this->Html->link(__('List Source Of Answers', true), array('action' => 'index','controller'=>'source_of_answers'));?></li>
</ul>