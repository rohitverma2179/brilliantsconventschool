<?php
//include("include/constants.php");
error_reporting(1);
//folder name from which we have to read all .zip files
#$folder="C:/Program Files/VertrigoServ/www/partwebsite/online/dataupload/bmw/";
$folder="/var/www/vhosts/partswebsite.com/httpdocs/dataupload/bmw/";

//now we are reading all the .zip files from folder
if ($handle = opendir($folder)) 
{
    while (false !== ($file = readdir($handle))) 
    {
        if ($file != "." && $file != "..") 
        {//its a file checking its extension
        	//checking if its a zip file file then unzipping
        	$file_=$folder.$file;
        	$ext=strtolower(substr($file,strlen($file)-4));
        	if($ext==".zip")
        	{//its a zip file, unzipping it!
        		$zip = zip_open($file_);
				if ($zip)
				{
					while ($zip_entry = zip_read($zip)) 
				    {//its a file inside zip file, checking if its file size validation
				    	if(zip_entry_filesize($zip_entry)==0)
				    	{//oh file size is 0
				    		print zip_entry_name($zip_entry)." size is invalid". zip_entry_filesize($zip_entry)."<br>";
				    		continue;
				    	}
				    	print zip_entry_name($file."/".$zip_entry)." File executed successfully<br>";
				    	print exec("mysql -h localhost -u nee -p General1 -D partsweb_nee < $file1",$opt);
				    	print_r($opt);
				        /*if (zip_entry_open($zip, $zip_entry, "r")) 
				        {
				            echo "File Contents:\n";
				            $buf = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
				            echo "$buf\n";
				
				            zip_entry_close($zip_entry);
				        }*/
				    }
				    zip_close($zip);
				}
        	}
        }
    }
    closedir($handle);
}

?>