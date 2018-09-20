<html>
    <head>
        <title>Passenger Data</title>
    </head>

    <body>
        <?php
            require "vendor/autoload.php";

            $client = new SoapClient('https://customertest.videcom.com/RegentAirways/vars/public/webservices/VRSXMLWebservice3.asmx?wsdl');

            $token = "NulFjgDfdI74Tpm0Y6lfqgpcsEDXjX07J3hVE01Qb60=";

            $flights = array(711, 712, 713, 714, 715, 716, 723, 724, 741, 742, 753, 754, 755, 756, 761, 762, 763, 764, 767, 768, 769, 770, 782, 783, 784, 785, 786, 787, 791, 792, 793, 794, 795, 796, 797, 798);

            $len = sizeof($flights);

            echo $len;

            echo "</br>";
            $fulldateinfo = getdate(date("U"));
            $date = $fulldateinfo[mday];
            $month = $fulldateinfo[month];
            echo $date;
            echo $month;
            echo "</br>";
            //for($i=0; $i<$len; $i++) {
                //$command = "A23SEPDACCGP~X";
                $command = "ssrpmanifestnew/RX0" . $flights[4] . "/28aug";
                //  ssrpmanifestnew/RX0786/26aug

                $result = $client->RunVRSCommand(array('Token' => $token, 'Command' => $command));

                var_dump($result);
            //    die();        // die() use korle porer ar kono echo asbe na web a
            //}
            //$return = simplexml_load_string($result);
            //$return = json_decode(json_encode($return), true);

            //print_r($return);

        ?>
    </body>
</html>
