<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of index
 *
 * @author Masande
 */

?>
<?php foreach ($surveys as $survey): ?>
<p><small><?php echo $survey['Survey']['name']; ?></small></p>
<p><small><?php echo $survey['Survey']['company']; ?></small></p>
 <?php endforeach; ?>
