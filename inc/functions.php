<?php
function sanitize ( $input ) {
  $output = trim( $input );
  $output = strip_tags( $output );
  $output = htmlspecialchars( $output );
  return $output;
}
