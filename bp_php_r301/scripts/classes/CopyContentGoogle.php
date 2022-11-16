<a href="content_of_google.html">Content of the website copied on content_of_google.html</a>
<?php
$googleContent = new CopyContentGoogle();
$googleContent->CopyContentOfGoogleOnAFile();
class CopyContentGoogle
{
    function CopyContentOfGoogleOnAFile(){
        $file_google = fopen("content_of_google.html", "w");
        $contentOfGoogle = file_get_contents('https://www.google.com');
        fwrite($file_google, ($contentOfGoogle));
        fclose($file_google);
        echo("Content copied !");
    }
}