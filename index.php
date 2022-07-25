<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<!-- Creo il database contenente le FAQ -->
<?php 
$questionsAnswers = [
    [
        'question' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
        'answer' => 'La recente <a href="https://curia.europa.eu/juris/document/document.jsf?text=&docid=152065&amppageIndex=0&doclang=it&mode=lst&dir=&occ=first&part=1&cid=276332">decisione della Corte di giustizia dell\'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni <br>
                    utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter <br>
                    essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi. <br>
                    <br>  
                    <br>
                    Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura <br>
                    complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'\ individuo a controllare i suoi dati personali ed il <br>
                    diritto di tutti di conoscere e distribuire le informazioni. <br>
                    <br>  
                    <br>
                    Per presentare una richiesta di rimozione, compila questo <a href="https://www.google.com/webmasters/tools/legal-removal-request?complaint_type=rtbf&visit_id=637943469738349294-985755506&hl=it&rd=1">modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. <br>
                    Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po\'\ di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la <br>
                    richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le <br>
                    informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua <br>
                    condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo <br>
                    non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'\accordo con la nostra valutazione, puoi rivolgerti all\'\Autorità <br>
                    garante per la protezione dei dati personali nel tuo paese. <br>
                    <br>
                    <br>
                    Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione <br>
                    della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia <br>
                    importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge. <br>
                    <br>
                    <br>
                    Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per <br>
                    la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.'
    ],
    [
        'question' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
        'answer' => 'Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un\'elevata sicurezza e assicurarti che le tue <br>
                    informazioni sono al sicuro e accessibili quando ne hai bisogno. <br>
                    <br>
                    <br>
                    Siamo costantemente al lavoro per garantire un\'\elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. <br>
                    Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le <br>
                    tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due <br>
                    passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo. <br>
                    <br>
                    <br>
                    Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href="https://safety.google/">Centro Google per la sicurezza online</a>. <br>
                    <br>
                    <br>
                    <a href="https://safety.google/">Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.'
    ],
    [
        'question' => 'Perché il mio account è associato a un paese?',
        'answer' => 'Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, <br>
                    usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell\'ultimo anno.<br>
                    <br>
                    <br>
                    I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno <br>
                    per aggiornare l\'associazione del paese. <br>
                    <br>
                    <br>
                    Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui <br>
                    risiedi, l\'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. <a href="https://support.google.com/accounts/troubleshooter/10082950?al=Italia&visit_id=637943503838373811-3195889682&p=country_association&rd=2">Contattaci</a> se <br>
                    ritieni che il paese associato al tuo account sia sbagliato.'

    ],
    [
        'question' => 'Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?',
        'answer' => 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente <br>
                    dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <br>
                    <a href="https://support.google.com/websearch/answer/9109?hl=it">contattare il webmaster</a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la <br>
                    protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href="https://www.google.com/webmasters/tools/legal-removal-request?complaint_type=rtbf&visit_id=637943475425630143-290713224&hl=it&rd=1">fai clic qui</a>. Una volta che i <br>
                    contenuti saranno stati rimossi e che Google avrà rilevato l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In <br>
                    caso di una richiesta di rimozione urgente, è inoltre possibile <a href="https://support.google.com/websearch/troubleshooter/3111061?hl=it">visitare la nostra pagina di assistenza per avere ulteriori informazioni.</a>'
    ],
    [
        'question' => 'Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?',
        'answer' => 'In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l\'indirizzo <br>
                    Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href="https://policies.google.com/privacy/key-terms#toc-terms-referrer-url">URL referrer. Talvolta, l\'URL della pagina dei risultati di ricerca potrebbe contenere la query di <br>
                    ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati <br>
                    come parte dell\'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni <br>
                    sulla ricerca SSL sono disponibili <a href="https://support.google.com/websearch/answer/173733">qui</a>. Le query di ricerca o le informazioni contenute nell\'URL referrer potrebbero essere disponibili mediante Google Analytics <br>
                    o un\'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all\'esatte parole chiave che hanno determinato <br>
                    il clic su un annuncio.'
    ]       
]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Google FAQ</title>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="img-wrapper">
            <img src="./img/logo.jpeg" alt="logo">
        </div>
    </header>

    <!-- Main -->
    <main>
        <div class="container">

            <!-- Creo un ciclo Foreach che scorrerà gli array associativi all'interno di $questionsAnswers: -->
            <?php foreach($questionsAnswers as $faq) { ?>
            
            <!-- Question -->
            <h2>

                <!-- Stampo nel DOM le domande: -->
                <?php echo $faq['question']; ?>
            </h2>
    
            <!-- Answer -->
            <p>

                <!-- Stampo  nel DOm le risposte -->
                <?php echo $faq['answer']; ?>
            </p>
    
            <?php } ?>    
        </div>
    </main>

    
</body>
</html>