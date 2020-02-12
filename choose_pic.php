<html>

<link rel="stylesheet" type="text/css" href="photoArt.css" />
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
         $dir = '/letterArtPics/' . $folder . '/';		//set the directory in which to look for files
         
         if (is_dir($dir)) {	//Check to see if this is a real directory
            if ($dh = opendir($dir)) {	//If there is a directory handle -> continue
               while (($file = readdir($dh)) !== false) {	//Do the following steps as long as there is still a file to read
                  if ($file != "." && $file != ".." && $file != "BW") {
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
<script type="text/javascript">

function letterSelected(folder, file) {
   var ifrmid = findIframeId();
   var ifrm = document.getElementById(ifrmid);
   var imageReplace = ifrmid.replace("iframe", "");
   var newSrc;
   var background = document.getElementById("hide");
   var close = document.getElementById("close");
   
   newSrc = "images/letterFiles/" + folder + "/" + file;

   document.body.removeChild(background);
   document.body.removeChild(close);
   document.body.removeChild(ifrm);
   
   document.getElementById(imageReplace).src = newSrc;
}

</script>

</body>
</html>