<?php  


// Created by MRHRTZ

	require"api.php";

	$req = file_get_contents('php://input');
	$data = json_decode($req);
	$masuk = $data->query->message;
	$param = explode(" ", $masuk, 2);
//	print_r($param);
	$url = ucfirst($param[1]);


$ua = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36";
ini_set("user_agent", $ua);

//$url = isset($_GET['url']) ? $_GET['url'] : "";

if (!empty($url)) {
    if (checkUrl($url)) {
        header('Content-Type:application/json');
        echo genLink(file_get_contents($url));
        exit;
    } else {
        header('Content-Type:application/json');
        // $out = array(
        //         "status"  => "error",
        //         "err_msg" => "invalid instagram url!",
        //        );
	   $outgoing = '
	{
	"replies": [
	    {
	        "message": "*Kesalahan! Tautan tidak valid, gunakan tautan instagram yang benar*"
	    }
	]
	}
	';

	echo $outgoing;
    }
} else {
    header('Content-Type:application/json');
    // $out = array(
    //         "status"  => "error",
    //         "err_msg" => "no input!",
    //        );

            $outgoing = '
        {
            "replies": [
                {
                    "message": "*Tidak ada tautan yang terdeteksi!*\\nMasukan link instagram setelah /igdl."
                }
            ]
        }
        ';

        echo $outgoing;
}//end if


?>
