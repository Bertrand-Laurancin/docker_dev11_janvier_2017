
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" />
        <title>Test Docker</title>
<style>
	h1{
		color: purple;
	}
</style>
    </head>
    <body>
        
	<h1>Hello world - test docker</h1>
    
    <?php


        require '../vendor/autoload.php';
        
        // Sendmail
        $transport = Swift_SmtpTransport::newInstance('mail.server.com', 1025);

        
        // Create the Mailer using your created Transport
        $mailer = Swift_Mailer::newInstance($transport);

        // Create a message
        $message = Swift_Message::newInstance('Wonderful Subject')
          ->setFrom(array('john@doe.com' => 'John Doe'))
          ->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'))
          ->setBody('Here is the message itself')
          ;

        // Send the message
        $result = $mailer->send($message);

        
        $i = 0;
        while ($i < 10) {
            $i = $i+1;
            echo '<code>Bonjour le monde</code>'.'<br>';
        }
        
        function ecrireSeparateur() {
            echo "******************************************************************************************************</br>";
        }
        
        function ecrireSeparateur2($txt) {
            echo $txt.'</br>';
        }
        
        $personnes[0] = 'Bob';
        $personnes[1] = 'Léon';
        $personnes[2] = 'Zak';
        $personnes[3] = 'Zoé';
        $personnes[4] = 'Bibi';
        $personnes[5] = 'Georges';
        $personnes[6] = 'Jade';
        
        rsort($personnes);

        $tab = array();
        $tab2 = ['bibi', 'baba'];

        $tab3 = [
                'title' => 'Mon livre',
                'auteur' => 'bla'
        ];

        print '</br><pre>';

        print_r($tab2);
        print '</pre>';
        ecrireSeparateur();
        
        for ($i=0; $i<count($personnes); $i++) {
            echo '<code>'.$personnes[$i].'</code>'.'<br>';
        }

        print '<hr>';
        kint::dump($tab2, $tab3);

        $age = array('Bob' => 28, 'Léon' => 37, 'Zak' => 19, 'Zoé' => 20, "Jade" => 24);
        //sort($age);
        echo("<pre>Jade a ".$age['Jade']. " ans </pre>"."</br><hr>");
        
        foreach ($age as $cle => $val) {
            echo ("<pre>");
            echo($cle." => ".$val);
            echo "</pre>";
        }
        ecrireSeparateur();
        
        print '<pre>';
        print_r($age);
        print '</pre>';
            
        ecrireSeparateur2("==================================================================");

    ?>
    

      <?php phpinfo(); ?>
        
    <?php
        $link = mysql_connect('127.0.0.1:81', 'root', 'paris');
        if (!$link) {
            die('Connexion impossible : ' . mysql_error());
        }
        echo 'Connecté correctement';
        mysql_close($link);

    ?>
        
    </body>
</html>

