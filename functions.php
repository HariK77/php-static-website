<?php

function getSeoTags() {
    // Getting text file related to current page
    $page = basename($_SERVER['PHP_SELF'], ".php" );

    $seo = [];

    if (file_exists('seo/'.$page.'.txt')) {

        $rows = file('seo/'.$page.'.txt');

        foreach ($rows as $row) {
            // For removing empty spaces
            $test = trim($row);
            // Checking whether the row is empty or not
            if ($test) {
                // Extracting text after and before colon into array
                $test = explode(":", $row); 
                // Assigning first array as key and second array as value (Associative Array)
                $seo[trim($test[0])] = trim($test[1]);
            }
            else {
                continue;
            }
        }
        return $seo;
    }

    return $seo;
}

?>