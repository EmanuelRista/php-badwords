<!-- Creare una variabile con un paragrafo di testo.
Recuperare dalla query string un parametro badword che contiene una parola definita dall'utente
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->

<?php

$badword = $_GET["badword"];

$text = "Il cavolo si adopera innanzitutto come affermazione, quando ti chiedono qualcosa. Ad esempio: 'Li hai già fatti i compiti delle vacanze?'. Risposta: 'cavolo!'. Oppure: 'Hai rinnovato l'abbonamento del treno?'. Risposta: 'cavolo!'. O anche: 'Ti sei ricordato di lavarti le ascelle?'. Risposta: 'cavolo!'. Tuttavia, grazie alla sua versatilità, il 'cavolo' si può pure usare come negazione. Nello specifico: 'Che hai mangiato oggi?'. Risposta: 'Un cavolo'. Oppure: 'Ci hai capito qualcosa delle spiegazione?' Risposta: 'Un cavolo'. O perfino: 'Che cosa vedi all’orizzonte?' Risposta: 'Un cavolo'. E via dicendo. Esso però funziona parimenti come interrogativo, nel caso di 'cavolo fai?', 'cavolo vai?', 'cavolo vuoi?', 'cavolo sei?', 'cavolo è?', ma anche 'cavolo dici?', 'cavolo rompi?', 'cavolo parli?', eccetera. In definitiva, il cavolo lo si può mettere praticamente dappertutto.";

$text = str_replace($badword, "***", $text);


?>

<p> <?php echo ($text)  ?> </p>
<p> <?php echo ("Questo paragrafo è lungo " . strlen($text) . " caratteri")  ?> </p>