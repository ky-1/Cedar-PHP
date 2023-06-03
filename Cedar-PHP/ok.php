<?php
require_once('lib/connect.php');

if ($_SESSION['user_id'] === 1) {
	phpinfo();
}