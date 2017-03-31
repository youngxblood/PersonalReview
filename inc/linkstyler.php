<?php
if (isset($_GET["cat"])) {
	if ($_GET["cat"] == "home") {
        $section = "home";
    } else if ($_GET["cat"] == "about") {
        $section = "about";
    } else if ($_GET["cat"] == "logs") {
        $section = "logs";
    } else if ($_GET["cat"] == "feedback") {
        $section = "feedback";
    } else if ($_GET["cat"] == "bootstrap") {
        $section = "bootstrap";
    }
}
?>