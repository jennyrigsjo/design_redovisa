Laddningstid och användbarhet
=======================

Syftet med denna rapport är att utvärdera prestandan för tre webbplatser genom att mäta deras respektive laddningstider. Målet är att se om webbplatserna innehåller några saker som kan förbättras med hänsyn till laddningstid och användbarhet.

Urval
-----------------------

Jag har valt att utvärdera samma webbplatser som i föregående uppgift, (dvs. [FitnessBlender](https://www.fitnessblender.com/), [TV Tropes](https://tvtropes.org/) och [Vegomagasinet](https://www.vegomagasinet.se/)) eftersom jag tyckte att det kunde vara intressant att fördjupa sig i deras respektive design och uppbyggnad. Mer information om webbplatserna finns i <a href="http://www.student.bth.se/~anri16/dbwebb-kurser/design/me/redovisa/htdocs/rapport/fargschema">rapporten för kmom04</a>.

Metod
-----------------------

För att mäta hastigheten för de utvalda sidorna inom respektive webbplats har jag använt Googles verktyg <a href="https://developers.google.com/speed/pagespeed/insights/">PageSpeed Insights</a>. För att mäta sidornas laddningstid, antalet resurser samt totala storlek har jag använt funktionen *Record network log* under fliken *Network* i Google Chromes *developer tools*. Mätningarna gjordes med alternativet *disble cache* aktiverat för att undvika att mina tidigare besök på webbplatserna skulle påverka laddningstiden.

I sammanfattningspanelen under fliken Networks visas tre olika tidsmått som på olika sätt beskriver hur snabbt en webbsida laddas: Finish, DOMContentLoaded och Load. Jag har så långt som möjligt använt mig av det sistnämnda av dessa mått, dvs. Load, för att mäta varje sidas laddningstid, då detta mått enligt <a href="https://stackoverflow.com/questions/30266960/website-response-time-difference-between-load-and-finish">detta inlägg på Stack Overflow</a> är det mått som har störst inverkan på/relevans för *användarupplevelsen* av en webbsidas hastighet. I de fall då Load-måttet inte varit tillgängligt har jag använt DOMContentLoaded som mått på laddningstiden. De laddningstider som avser DOMContentLoaded **visas med blå färg** i <a href="https://docs.google.com/spreadsheets/d/1z7zE6eS6_jfvT_eIiBfTqNhIdciwZmS2aZcF6OvUGhY/edit?usp=sharing">kalkylarket med rådatan för mätningarna</a>.

I kalkylarket visas vissa mätningar av resurser och sidstorlekar med **kursiva siffror**; detta beror på att resurserna på vissa sidor laddades asynkront under en längre tid och att den siffra som noterats således är en *preliminär men inte nödvändigtvis slutgiltig* (med andra ord inte exakt) siffra för sidans totala antal resurser och storlek.

Resultat
-----------------------

<a href="https://docs.google.com/spreadsheets/d/1z7zE6eS6_jfvT_eIiBfTqNhIdciwZmS2aZcF6OvUGhY/edit?usp=sharing">Länk till kalkylark med rådatan för mätningarna</a>.

<h3><a href="https://www.fitnessblender.com/">FitnessBlender</a></h3>

[FIGURE src="image/color-analysis/fb.png" class="pagespeed-image center" caption="FitnessBlenders startsida"]

FitnessBlender är den webbplats som överlag klarar sig bäst i mätningarna, både i mobil- och desktopläge. Mobilversionen av webbplatsen skulle kunna göras bättre, framför allt genom att ta bort resurser som blockerar sidans rendering, skicka bilder i modernare format samt städa upp i CSS:en och rensa bort onödiga stilregler.

<h3><a href="https://tvtropes.org/">TV Tropes</a></h3>

[FIGURE src="image/color-analysis/tvt.png" class="pagespeed-image center" caption="TV Tropes startsida"]

Desktopversionen av TV Tropes klarar sig medelbra i mätningarna med Google PageSpeed medan mobilversionen klarar sig sämre. Det som framför allt skulle kunna snabba upp inläsningen av webbplatsen är att ta bort resurser som blockeringen renderingen av sidorna samt minska svarstiden från servern ("tiden till första byte"). Att skicka bilder i modernare bildformat, streamlina CSS:en och skjuta upp inläsningen av bilder som inte visas på skärmen skulle också hjälpa.

<h3><a href="https://www.vegomagasinet.se/">Vegomagasinet</a></h3>

[FIGURE src="image/color-analysis/vego.png" class="pagespeed-image center" caption="Vegomagasinets startsida"]

Enligt PageSpeed är Vegomagasinet ungefär lika snabb som TV Tropes både i desktop- och mobilläge, men den *känns* långsammare. När man besöker webbplatsen tar den lång tid på sig att ladda färdigt och när jag försöker utvärdera sidorna med PageSpeed får jag till en början ett felmeddelande som säger att "the page could not be reliably loaded". De förbättringsåtgärder som föreslås av PageSpeed gäller till största delen hanteringen av bilder och videoklipp på sajten, framför allt rekommenderas det att man använder videoformat istället för GIF för animationer, att man använder bilder av rätt storlek och att bilderna skickas i ett modernare format. Andra återkommande förbättringsförslag är att koda bilder effektivt, att skjuta upp inläsningen av bilder som inte visas på skärmen, att minska svarstiderna från servern (den s.k. "tiden till första byte") samt att skjuta upp CSS som inte används.

Analys & diskussion
-----------------------

Gemensamt för samtliga webbplatser i testet är att de är betydligt långsammare i mobilläge än i desktopläge. När det gäller TV Tropes och Vegomagasinet är en del av förklaringen sannolikt att de är extremt resurstunga (TV Tropes har i genomsnitt mer än 330 resurser per sida!) och stora, vilket kan resultera i längre laddningstider på mindre, mobila enheter utan tillgång till snabb och stabil internetuppkoppling. När det gäller FitnessBlender, vars genomsnittliga resursbelastning och sidstorlek är jämförelsevis liten, är förklaringen troligtvis att innehållet, framför allt bilder, inte optimerats för visning på mobila enheter.

Den absolut vanligaste förbättringsåtgärden som föreslås av Google PageSpeed Insights för samtliga webbplatser är att ta bort resurser som blockerar sidans rendering, t.ex. skriptfiler som måste exekveras innan uppritningen av sidan kan fortsätta. Att minska svarstiden från servern (den s.k. "tiden till första byte") är också ett vanligt åtgärdsförslag; här kan jag inte låta bli att undra om det låga betyget för webbplatsernas mobilversioner beror på att de använder sig av s.k. "load balancing", dvs. att olika typer av trafik hanteras av olika servrar och att man som mobilanvändare därmed riskerar att omdirigeras till en server med längre/sämre svarstid.

FitnessBlender och Vegomagasinet är relativt "bildtunga" webbplatser och av den anledningen är det inte så konstigt att förbättrad bildhantering, framför allt genom att välja rätt format för bilderna och skjuta upp inläsningen av bilder som inte visas på skärmen, föreslås av PageSpeed Insights som en viktig åtgärd för att förbättra laddningstiden för båda webbplatserna. Vegomagasinet använder dessutom GIF-bilder för sina animationer, något som PageSpeed Insights menar orsakar onödig nätverksbelastning i jämföresle med att använda videoformat som t.ex. MPEG4 för animationerna.

Sist men inte minst skulle samtliga webbplatser må bra av att städa upp i och streamlina sina CSS-filer, framför allt genom att ta bort överflödiga och oanvända stilregler för att på så sätt minska antalet byte som skickas via nätverket.

Och vinnaren är...
-----------------------

FitnessBlender har genomgående de bästa mätresultaten sett både till hastighet, laddningstid, resurser och sidstorlek och är således testets solklara vinnare. Mellan TV Tropes och Vegomagasinet är resultatet mer jämlikt. Jämför man genomsnittlig laddningstid och antalet laddade resurser är Vegomagasinet bättre än TV Tropes, men tittar man på hastighetsmätningarna med PageSpeed och den genomsnittliga sidstorleken blir resultatet det motsatta. Resultatet för TV Tropes innehåller också en del avvikande siffror, t.ex. ligger laddningstiden för två av webbplatsens sidor vid första mättillfället på mer än 20 sekunder, vilket driver upp den genomsnittliga siffran för webbplatsens laddningstid och gör den något missvisande. På det stora hela är TV Tropes och Vegomagasinet med andra ord ungefär lika snabba och landar således på en delad andraplats.

Min personliga gräns för laddningstid
-------------------------------------

Min egen tålamodsgräns för hur lång tid en webbsida får ta på sig att ladda färdigt går någonstans mellan två och tre sekunder. Detta är en gräns som samtliga webbplatser i testet klarar, med undantag för några avvikande mätresultat här och där. FitnessBlender är helt klart den webbplats som känns snabbast, följt av TV Tropes och sist Vegomagasinet. Egentligen är det inte särskilt stor skillnad mellan TV Tropes och Vegomagasinet, anledningen till att Vegomagasinet hamnar sist är att webbplatsen *känns* långsammare eftersom det lilla "laddningshjulet" uppe i fliken i webbläsarens fönster ibland tar lång tid på sig att sluta snurra när man besöker webbplatsen.

Referenser
-----------------------

Stack Overflow; "Website response time: Difference between 'load' and 'finish'"; https://stackoverflow.com/questions/30266960/website-response-time-difference-between-load-and-finish; senast tillgänglig 2018-12-16;

### Övriga källor

Följande källor har gett stöd och inspiration i analysen av mätningarna:

Faeth, Bill; 2015-05-04; "7 Must-Know Reasons Your Mobile Website is Super Slow to Load"; http://www.inboundmarketingagents.com/inbound-marketing-agents-blog/bid/362900/7-Must-Know-Reasons-Your-Mobile-Website-is-Super-Slow-to-Load; senast tillgänglig 2018-12-16;

Leiva-Gomez, Miguel; 2015-10-15; "Why Do Some Websites Take Longer to Load on Mobile Devices?"; https://www.maketecheasier.com/websites-take-longer-load-on-mobile/; senast tillgänglig 2018-12-16;

Övrigt
-----------------------

Testet och rapporten har utförts och författats av Jenny Rigsjö (anri16).
