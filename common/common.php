<?php
function redirect_to($url) {
    if ($url != NULL) {
        header ( "Location:{$url}" );
        exit ();
    }
}