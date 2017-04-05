<?php
if($_POST['username'] == 'staff') {
	header('Location: /seng471prototype/staff.html');
} else {
	header('Location: /seng471prototype/manager.html');
}