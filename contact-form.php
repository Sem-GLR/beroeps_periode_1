<?php
$topic = filter_input(INPUT_GET, 'topic', FILTER_UNSAFE_RAW);

require __DIR__ . '/views/contact-form.view.php';
