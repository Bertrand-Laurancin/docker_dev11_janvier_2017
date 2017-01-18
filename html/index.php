
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
        $i = 0;
        while ($i < 10) {
            $i = $i+1;
            echo '<code>Bonjour le monde</code>'.'<br>';
        }
        
        $personnes[0] = 'Bob';
        $personnes[1] = 'Léon';
        $personnes[2] = 'Zak';
        $personnes[3] = 'Zoé';
        $personnes[4] = 'Bibi';
        $personnes[5] = 'Georges';
        
        echo '<hr>';
        
        for ($i=0; $i<count($personnes); $i++) {
            echo '<code>'.$personnes[$i].'</code>'.'<br>';
        }
    ?>
        
        <?php phpinfo(); ?>

    </body>
</html>

