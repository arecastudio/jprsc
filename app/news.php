<?php
        // create curl resource
        $ch = curl_init();

// set url
// curl https://newsapi.org/v2/everything -G -d q=jayapura -d from=2022-06-17 -d sortBy=popularity -d apiKey=3d9e3025db8741129842d546ede99e64
        curl_setopt($ch, CURLOPT_URL, "newsapi.org/v2/everything -G -d q=jayapura -d from=2022-06-17 -d sortBy=popularity -d apiKey=3d9e3025db8741129842d546ede99e64");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);

        // close curl resource to free up system resources
        curl_close($ch);     
?>
