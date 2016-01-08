<?php
// SET FOLDERS TO CHECK
$bbwpfolder = array(
	"includes",
	"functions"
	);

// OPEN FOLDERS
$countcarpetas = count($bbwpfolder);
for ($i=0;$i<$countcarpetas;$i++)
{
	$dir = plugin_dir_path( __FILE__ ) . '/' . $bbwpfolder[$i];

	if (is_dir($dir))
	{
		if ($dh = opendir($dir))
		{
			while (($file = readdir($dh)) !== false)
			{
				if (strpos($file, 'php') !== false)
				{
					// INCLUDE FILES
					include (plugin_dir_path( __FILE__ ) . '/' . $bbwpfolder[$i] . '/' . $file);
				}
			}
			closedir($dh);
		}
	}
}
?>
