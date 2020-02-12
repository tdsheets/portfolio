<html>
<body>

<?php

   //Check to see if there is a folder name present and that it's not an empty string
   if(isset($_GET['folder']) && $_GET['folder'] !== '') {
      $folder = $_GET['folder'];		//set the value of the folder name
      $folderlen = strlen($folder);		//find the length of the value of the folder name
      $files = array();
      $i = 1;
      
      //Check that the value of the folder name is a capitalized letter and that there's only one
      if(ctype_upper($folder) && $folderlen === 1) {
         $dir = 'images/letterFiles/' . $folder . '/BW/';		//set the directory in which to look for files
         
         if (is_dir($dir)) {			//Check to see if this is a real directory
            if ($dh = opendir($dir)) {		//If there is a directory handle -> continue
               while (($file = readdir($dh)) !== false) {	//Do the following steps as long as there is still a file to read
                  if ($file != "." && $file != "..") {
                     array_push($files, $file);		//create an array of files from the directory
                     $id = $folder . '_' . $i;
                     echo '<img src="' . $dir . $file . '" class="imageChoices" id="' . $id . '" onclick="parent.letterSelected(\'' . $folder . '\', \'' . $file. '\');" />';
                  }
                  $i++;
               }
               closedir($dh);		//close the directory when finished creating the array
            }
         }
      }
   }
	   	
?>

<style>

   .imageChoices {
      width: 100px;
      background-color: #000000;
      border: solid #000000 1px;
      border-radius: 5px;
      margin: 10px;
      position: relative;
      padding: 5px 0;
      cursor: pointer;
         transition: all 0.3s ease-in;
   }
   .imageChoices:hover {
      width: 120px;
      position: relative;
      margin: 0;
      padding: 0;
      -webkit-box-shadow: 0 0 30px rgba(187, 64, 49, 0.67);
      -moz-box-shadow:    0 0 30px rgba(187, 64, 49, 0.67);
      box-shadow:         0 0 30px rgba(187, 64, 49, 0.67);
   }
   
</style>

</body>
</html>