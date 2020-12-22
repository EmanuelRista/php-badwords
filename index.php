<!-- Creare una variabile con un paragrafo di testo.
Recuperare dalla query string un parametro badword che contiene una parola definita dall'utente
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->

<?php

$badword = $_GET["badword"];

$text = "Il $badword si adopera innanzitutto come affermazione, quando ti chiedono qualcosa. Ad esempio: 'Li hai già fatti i compiti delle vacanze?'. Risposta: '$badword!'. Oppure: 'Hai rinnovato l'abbonamento del treno?'. Risposta: '$badword!'. O anche: 'Ti sei ricordato di lavarti le ascelle?'. Risposta: '$badword!'. Tuttavia, grazie alla sua versatilità, il '$badword' si può pure usare come negazione. Nello specifico: 'Che hai mangiato oggi?'. Risposta: 'Un $badword'. Oppure: 'Ci hai capito qualcosa delle spiegazione?' Risposta: 'Un $badword'. O perfino: 'Che cosa vedi all’orizzonte?' Risposta: 'Un $badword'. E via dicendo. Esso però funziona parimenti come interrogativo, nel caso di '$badword fai?', '$badword vai?', '$badword vuoi?', '$badword sei?', '$badword è?', ma anche '$badword dici?', '$badword rompi?', '$badword parli?', eccetera. In definitiva, il $badword lo si può mettere praticamente dappertutto.";

$text = str_replace($badword, "***", $text);


?>

<p> <?php echo ($text)  ?> </p>
<p> <?php echo ("Questo paragrafo è lungo " . strlen($text) . " caratteri")  ?> </p>