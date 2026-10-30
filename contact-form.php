<?php
$topic = filter_input(INPUT_GET, 'topic', FILTER_UNSAFE_RAW);
$topic = $topic === 'help' ? 'Need some help?' : 'Chat with us';
require __DIR__ . '/views/contact-form.view.php';
