<?php
  include("incl/config.php");

  $title = "Mina redovisningar av kursmomenten";
  $pageId = "report";

  include("incl/header.php");
?>

<div id="content">
  <aside class="left" style="width:22%;">
    <nav id="left-menu" class="left">
    <h3>Kursmoment</h3>
      <ul>
        <li><a href=#kmom1><strong>Kmom01:</strong> Kom igång med HTML, CSS och PHP</a></li>
        <li><a href=#kmom2><strong>Kmom02:</strong> HTML-element och CSS-konstruktioner</a></li>
        <li><a href=#kmom3><strong>Kmom03:</strong> Dynamisk webbplats med PHP</a></li>
        <li><a href=#kmom4><strong>Kmom04:</strong> CSS och en style-väljare i PHP</a></li>
        <li><a href=#kmom5><strong>Kmom05:</strong> HTML-formulär och PHP</a></li>
        <li><a href=#kmom6><strong>Kmom06:</strong> PHP och SQLite</a></li>
      </ul>
    </nav>
  </aside>

  <article class="right border justify-para" style="width:72%;">
    <section>
      <h1 id="kmom1">Kmom01: Kom igång med HTML, CSS och PHP</h1>
      <p>Hade inga större problem med denna första uppgift. Den var tydlig, pedagogisk och lätt att följa. Lite meckigt var det att
        behöva chmod:a varje gång man för över en ny fil eller mapp, men så hittade jag ett
        <a href="http://db-o-webb.blogspot.se/2009/09/sshstudentbthse-editera-initfilen-vid.html" target="_blank">inlägg</a> om just detta här på bloggen och vips
        så var det problemet löst.
      </p>
      <p>Det var också lite trixigt att hitta inställningarna för Unix-radbrytningar i den editor jag använder, men till slut gick det.
        Den var redan inställd på UTF-8, så det behövde jag inte ändra.</p>
      <p>Valideringen gick bra, fick grön skylt med några varningar för CSS:en. Främst gällde de färgerna men fick även en om att
        type-attributet saknades i länken till CSS:en från me.php så lade till det då det kändes som en simpel åtgärd.</p>
      <p>Den editor jag använder i första hand är Sublime Text 2, men det händer även att jag jobbar i NetBeans.
        Sitter i första hand på Mac (OS X 10.6.8) när jag jobbar med uppgifterna i den här kursen, men det kommer nog även hända att jag
        jobbar från en Linux-dator (Ubuntu). Min lokala webbserver (båda datorerna) är en LAMP-stack som jag kör via VirtualBox.</p>
      <p>Webbläsare är vanligtvis i första hand Chrome, men FF funkar också. Har även de övriga vanliga installerade för test
        (FF, Opera, Safari). Min gamla windows-dator (Win 7) får tjänstgöra som IE-testmiljö. Som filöverföringsprogram använder jag
        FileZilla eller Cyberduck. </p>
      <p>Kan inte klara mig utan versionshantering nu för tiden så Git har också en given plats i min verktygslåda.</p>
      <a href=#top class="back-to-top">Upp</a>
      <hr/>

    </section>

    <section>
      <h1 id="kmom2">Kmom02: HTML-element och CSS-konstruktioner</h1>
      <p>Momentet fungerade rätt så bra, hade inga större problem. Hade lite problem med att få faviconen att visas.
        Lade den in img-mappen, men av någon märklig anledning visades den inte efter att jag laddat upp sidan på BTH-servern,
        trots att jag hade rätt sökväg i header. php (funkade på min lokala som har samma struktur). Efter att ha testat att rensat webbläsarens cache
        och det inte hjälpte så flyttade jag den till roten istället och ändrade sökvägen, då funkade det bra. </p>

      <p>Det var kul att testa de olika CSS3-effekterna och debug stylesheeten var superbra! Har använt FireBug innan för att åstadkomma
        samma sak, men på det här sättet får man ju ett varaktigt resultat som man lätt kan gå tillbaka till.
        FireBug använder jag dagligen i mitt jobb, så det verktyget känner jag till väl. Mycket användbart,
        man hittar hela tiden nya saker som underlättar! </p>

      <p>Har pluggat mycket webb och jobbar med det dagligen. Trots att jag inte anser mig vara nybörjare på HTML eller CSS, så känns
        det som att det finns det otroligt mycket mer kvar att lära. Det är stora områden där man kontinuerligt lär sig nya tekniker och förfinar dem man redan kan.
        Dessutom kommer det nya spännande saker hela tiden.</p>

      <p>Tycker guiderna är riktigt bra, de är pedagogiskt skrivna och jag har inga problem med strukturen. Letar man efter något särskilt
        så är det ju bara att använda sökfunktionen. En sak jag saknade i stycket som handlade om styling av länkar (i CSS-20) är att
        ordningen som man skriver de olika pseudoklasserna i är av betydelse.</p>

      <p>Strukturen av mapparna i Me-sidan känns logisk och jag tycker den underlättar överblicken av sajten.</p>
      <a href=#top class="back-to-top">Upp</a>
      <hr/>
    </section>

    <section>
      <h1 id="kmom3">Kmom03: Dynamisk webbplats med PHP</h1>
      <p>Denna uppgift var både rolig och lite klurig! Fick ordning på min favicon, testade att flytta den till img-mappen igen.
        Förmodligen hade jag missat något i sökvägen trots allt, för nu funkade den även på servern.</p>

      <p>Multisidan var lite meckig, men inte så svår som det först verkade. Saknade en ordentlig beskrivning av hur den var tänkt
        att fungera (lite mer som ett use case), så kände inte att jag fick en egentlig möjlighet att försöka klura ut en lösning på egen hand.
        Det blev lite väl mycket "serverat" så att säga, dock finns det ju fortfarande mycket att lära av att studera koden.</p>

      <p>Jättebra att få repetition på de olika fördefinierade variablerna, querystrings osv. De är så pass användbara att
        det alltid är bra att friska upp minnet på det området. PHP-guiden är till stor hjälp, kortfattad med bra beskrivningar.</p>

      <p>Trivs mer och mer med PHP, det är så kul att lära sig om alla möjligheter som språket erbjuder! Och det finns alltid mer att lära,
        vilket passar mig jättebra. Språk som jag tidigare programmerat i är C# och JavaScript.</p>

      <p>Login-sidan var en kul utmaning, det var inga problem att få till den trots att den verkade klurig från början.</p>
      <a href=#top class="back-to-top">Upp</a>
      <hr/>
    </section>

    <section>
      <h1 id="kmom4">Kmom04: CSS och en style-väljare i PHP</h1>
      <p>
        Detta kursmoment var riktigt kul, men så har jag ju en förkärlek för frontend-utveckling. Känner mig å ena
        sidan rätt säker på CSS, men å andra sidan lär jag mig nya saker hela tiden. Så var det även i detta moment.
        Saker som box model och float tål ju även att repeteras många gånger, då det är lite knepigt att få grepp om hur
        det fungerar.
      </p>
      <p>
        I övrigt gillar jag alla tips på verktyg etc. Ett annat tips när det gäller att lära sig CSS är att även läsa på
        om och förstå de olika <a href="http://www.w3schools.com/cssref/css_selectors.asp">CSS-selektorerna och pseudo-
        klasserna</a>, hur de kan användas och kombineras. I synnerhet man jobbar med CMS, då de ofta spottar ur sig en
        massa markup som man inte har någon direkt kontroll över. Jag har haft enormt stor hjälp av detta i mitt jobb.
      </p>
      <p>
        Som sista moment hade jag lite svårt för att bestämma mig då jag tyckte alla alternativ för en egen stylesheet lät
        kul. Men då jag kan sitta och pilla och justera stylesheets i all oändlighet bestämde jag mig istället för att
        avgränsa mig rejält och göra en grund-CSS som jag kan använda i framtida projekt. Det var riktigt utmanande, trots
        att jag tyckte att jag skrev väldigt lite CSS undrar jag om det inte var för mycket trots allt. Det gäller ju att
        fundera ut minsta gemensamma nämnare för framtida sajter. Blev rätt nöjd med den, men den tål nog att slipas på
        lite till.
      </p>
      <p>
        I övrigt går PHP:andet rätt bra, stötte inte på några direkta problem med min style-väljare. Ser dock fram emot
        att få mer av den varan i nästa moment :-)
      </p>
      <a href=#top class="back-to-top">Upp</a>
      <hr/>
    </section>

    <section>
      <h1 id="kmom5">Kmom05: HTML-formulär och PHP</h1>
      <p>
         Detta kursmoment var ganska lätt att följa. Koden är välkommenterad och strukturerad, dock kan filstrukturen vara
         lite förvirrande och kännas överväldigande ibland då det börjar bli många filer nu.
      </p>
      <p>
         Jag hade lite problem med att få mina bilder att synas i Blokket, men det löste jag lätt genom att använda Firebug,
         jag kunde då se att sökvägen var fel.
      </p>
      <p>
         Jag hade också problem med att citattecken escape:ades varje gång en annons
         sparades, vilket gjorde att bildernas sökväg blev fel så att bilden inte visades. Detta problem uppstod dock endast lokalt och berodde
         på en inställning för magic quotes som saknades i min php.ini-fil.
      </p>
      <p>
         PHP programmeringen känns bra, även om jag inte känner att jag helt kommit in i det än. Mitt tips till andra är att
         kolla andras kod, göra tutorials och försöka göra likadant. Därför tycker jag det är ett bra upplägg på den här kursen.
         Det är förvisso lätt att kopiera mos kod, men ta dig ändå tid att testa och leka med den. Gör ändringar och se vad resultatet blir.
         Det har jag lärt mig mycket på.
      </p>
      <p>
         Jag har kollat igenom php20, men har inte använt den i någon större utsträckning. Känner att jag har hyfsad koll på
         grunderna sedan tidigare, det är implementeringen som jag behöver jobba med i första hand. För dem som är helt nya
         verkar guiden vara en bra grund att utgå ifrån.
      </p>
      <a href=#top class="back-to-top">Upp</a>
      <hr/>
    </section>
    <section>
      <h1 id="kmom6">Kmom 06: PHP och SQLite</h1>
      <p>Redovisningstext...</p>

      <a href=#top class="back-to-top">Upp</a>

    </section>
  </article>
</div> <!-- End 'content' div -->
<?php include("incl/footer.php"); ?>
