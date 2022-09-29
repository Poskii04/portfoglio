<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatti</title>
	<?php
        include 'header.php'
    ?>
</head>
<body>
	<header>
			<p>Poschina</p>
	</header>
	<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="chisono.html">Chi sono</a></li>
            <li><a href="portfoglio.html">Portfoglio</a></li>
            <li id="link">Contatti</li>
        </ul>
    </nav>
    <div id="container">
        
        <!--intput di tipo nome, email, radio(genere), selezione provincia di nascita, data di nascita, checkbox per inserire interessi
        campo di testo per un messaggio breve
        Raggruppiamo separatamente dati anagrafici e messaggio breve-->
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get"> 
            <fieldset>
                <legend>Dati Anagrafici</legend>
                <label for="nome">Nome</label>
                <input id=nome type="text" name="nome">
                <br>
                <label for="cognome">Cognome</label>
                <input id=cognome type="text" name="cognome">
                <br>
                <label for="provincia">Indica la provincia di nascita</label>
                <select id="provincia" name="provincia">
                        <option value="ud">UD</option>
                        <option value="go">GO</option>
                        <option value="ts">TS</option>
                        <option value="pn">PN</option>
                </select>
                <br>
                <input type="radio" id="m" name="genere">
                <label for="m">Uomo</label>
                <input type="radio" id="f" name="genere">
                <label for="f">Donna</label>
                <input type="radio" id="x" name="genere">
                <label for="x">Altro</label>
                <br>
                <label for="email">e-mail</label>
                <input type="e-mail" name="email" id="email">
            </fieldset>
            <fieldset>
                <legend>I tuoi interessi</legend>
                <input type="checkbox" id="sport" name="interessi"> <label for=sport>Sport</label>
                 <br>
                <input type="checkbox" id="cinema" name="interessi"> <label for=cinema>Cinema</label>
                 <br>
                <input type="checkbox" id="musica" name="interessi"> <label for=musica>Musica</label>
                 <br>
            </fieldset>
            <input type="submit" value="procedi">
             <!-- casella di testo  -->
        
        </form>

        <h2>Ecco i dati inviati</h2>
        <?php 
            if($_SERVER["REQUEST_METHOD"]== "GET"){
                if(isset($_REQUEST['nome'])){
                    $nome=$_REQUEST['nome'];
                    echo "il nome inserito e' " .$nome;
                }else{
                    $nome=$_REQUEST['nome'];
                    echo "Inserisci il nome " . $nome;
                }}
        ?>
    </div>
    <footer>
        <p>
            <small>5BS &copy; 2022. Poschina Vladimir</small>
        </p>
    </footer>

</body>
</html>