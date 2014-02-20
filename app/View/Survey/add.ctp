
<h1> Survey </h1>
<?php


echo $this->Form->create('Survey');
echo $this->Form->input('name');
echo $this->Form->input('company');
echo $this->Form->input('contact');
echo $this->Form->input('email');
echo $this->Form->input('constultant');

echo $this->Form->input('Please indicate your experience regarding communication', array(
   
    'options' => array('Poor', 'below Average', 'Average', 'Good', 'Excellent')
    ));

echo $this->Form->input('Please indicate experience regarding value of money', array(
   
    'options' => array('Poor', 'below Average', 'Average', 'Good', 'Excellent')
    ));

echo $this->Form->input('Please rate your overall experience dealing with our company', array(
   
    'options' => array('Poor', 'below Average', 'Average', 'Good', 'Excellent')
    ));
echo $this->Form->input('Would you recommend our services to anyone else', array(
   
    'options' => array('Yes', 'No')
    ));

echo $this->Form->input('Please provide feedback or suggestions which could further help us improve our services.', array('rows' => '3'));
echo $this->Form->end('Save Survey');
?>
