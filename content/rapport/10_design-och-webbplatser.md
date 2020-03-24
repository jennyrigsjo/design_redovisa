Bildoptimering - i vilken utsträckning följer webbplatser best practices?
=========================================================================

INNEHÅLL:

1. [Syfte](#syfte)
2. [Frågeställningar](#fragestallningar)
3. [Urval](#urval)
4. [Metod](#metod)
5. [Resultat](#resultat)
6. [Analys och diskussion](#analys)
7. [Avslutningsvis](#avslutningsvis)
8. [Källor](#kallor)


Syfte {#syfte}
--------------

Organisationen Valfrihet har bett mig göra en analys inom området design och webbplatser. Jag har valt att analysera bildoptimeringen på ett antal webbplatser samt i vilken utsträckning de följer s.k. "best practices" i detta avseende.

**Bildoptimering** är ett brett begrepp som beroende på vem man frågar omfattar allt från att välja bilder som passar en webbplats innehåll och budskap (8Days, 2014) till att formatera bilderna på bästa sätt och att sökmotoroptimera dem (Khatkar, 2018). Hur väl en webbplats lyckas med bildoptimeringen påverkar bl.a. hur användarna upplever webbplatsen, dess prestanda och nedladdningstid samt hur högt webbplatsen rankas i sökresultat (ibid.).

**Best practices** syftar i sammanhanget på vedertagna metoder, tekniker, riktlinjer och rekommendationer som av experter inom webbutveckling och design bedöms som det bästa sättet att uppnå bildoptimering. Det finns förstås många åsikter om vad som är best practice ifråga om bildoptimering, nästan lika många som det finns experter inom webbutveckling och webbdesign. Vissa best practices tenderar dock att förespråkas och lyftas fram oftare än andra och det är dessa, de "mest populära", best practices samt i vilken utsträckning de åtföljs som jag fokuserar på i denna analys.

**Syftet med analysen är inte** att döma ut webbplatserna genom att påstå att de har gjort "rätt eller fel" eller att deras bildoptimering är "bra" eller "dålig". Målet är endast att observera i vilken utsträckning webbplatserna *till synes verkar följa* vedertagna rekommendationer och riktlinjer rörande bildoptimering samt att diskutera vad detta eventuellt kan bero på.


Frågeställningar {#fragestallningar}
------------------------------------

Jag har valt att analysera i vilken utsträckning webbplatser följer nedanstående fem best practices. Listan är en sammanställning av de vanligaste riktlinjerna och rekommendationerna som presenteras i de guider och artiklar jag har tagit del av inom ämnet bildoptimering. Vilka dessa guider och artiklar är anges i analysens [källförteckning](#kallor).

1. **Använd rätt filtyp**: det finns inget absolut rätt eller fel i detta avseende, dock verkar generell konsensus vara att olika format passar olika bra beroende på bildens syfte och användningsområde. Exempelvis lämpar sig JPEG/JPG för bilder med komplexa färger såsom fotografier vilka måste kunna komprimeras utan att kvaliteten försämras. GIF passar bra för enkelfärgade bilder såsom ikoner samt enklare grafik och animeringar. PNG lämpar sig för högupplösta bilder samt bilder med transparent bakgrund, t.ex. skärmdumpar, clipart och logotyper. SVG passar bra för bilder som måste kunna "skalas" i olika storlekar utan att kvaliteten påverkas, t.ex. logotyper och ikoner.
<br>
<br>
2. **Håll filstorleken så liten möjligt**: ju mindre filstorlekar, desto kortare laddningstid. Någon generellt accepterad "maxstorlek" för bildfiler finns dock inte, det handlar snarare om att hitta en *balans* mellan minsta möjliga filstorlek, acceptabel bildkvalitet och prestanda.
<br>
<br>
3. **Namnge bildfilerna med relevanta och meningsfulla nyckelord**: undvik intetsägande filnamn som innehåller slumpmässiga bokstavs- och sifferkombinationer, välj istället nyckelord som har koppling till bildens motiv och/eller till texten på sidan. Bilder med meningsfulla filnamn rankas ofta högre i sökmotorers bildsökningar och de kan även påverka hur högt själva webbplatsen rankas i sökresultaten.
<br>
<br>
4. **Skriv relevant alt-text**: texten i en bilds alt-attribut (dvs. texten som visas om själva bilden inte kan visas) påverkar liksom dess filnamn hur högt bilden (samt webbplatsen) rankas i sökresultat och bör således innehålla meningsfulla nyckelord med koppling till bildens innehåll.
<br>
<br>
5. **Välj relevanta och meningsfulla bilder**: en bild bör ha en tydlig koppling till webbsidans övriga innehåll. Om bilden inte har ett tydligt syfte bör man överväga att ta bort den, eftersom man annars riskerar att den "tynger ner" webbplatsen utan att bidra till dess budskap.


Urval {#urval}
--------------

Jag har valt att analysera webbplatserna för fyra pizzerior belägna i min hemstad, Alingsås. Jag har valt webbplatser som tillhör samma kategori eftersom jag vill ha möjligheten att jämföra hur olika företag inom samma bransch och med liknande affärsmål hanterar bildoptimering på sina webbplatser. Att jag valt pizzerior som ligger i min hemort är mest en bekvämlighetsfråga, då pizzeriorna ifråga var de första jag kom att tänka på.

Gemensamt för webbplatserna är dessutom att de endast tillhandahåller information såsom meny, öppettider och kontaktuppgifter; däremot går det inte att göra bokningar, lägga ordrar eller beställa mat från restaurangerna via webbplatserna. Det är med andra ord inga e-handelswebbplatser jag analyserar, utan webbplatser vars uppgift endast är att informera om och marknadsföra restaurangerna ifråga.


Metod {#metod}
--------------

Berätta kort om din "metod", hur du gör för att utföra undersökningen. Berätta om du använder något speciellt verktyg.

Jag använder Google's verktyg PageSpeed Insights för att få en inblick i potentiella brister och/eller förbättringsmöjligheter med hänsyn till webbplatsernas hantering av bilder, framför allt ifråga om filtyper och filstorlekar. Jag noterar även betyget som respektive webbplats får då detta kan vara av intresse i samband med diskussionen av resultaten. Jag mäter en sida per webbplats (startsidan), jag gör mätningen en gång och jag tittar på verktygets rekommendationer och mätningar för både mobil och desktop.

Jag gör även en manuell analys av webbplatsernas bilder med hjälp av webbläsaren Google Chromes Inspect-verktyg. Jag väljer ut tre bilder per webbplats och tittar på filernas typ och storlek, hur de är namngivna, om de har någon alt-text samt hur relevanta och meningsfulla de är med hänsyn till webbplatsen i övrigt. (Huruvida en bild är "relevant och meningsfull" är givetvis en subjektiv bedömning, men det är ändå intressant att se hur jag som besökare uppfattar bilden i detta avseende.) I den mån det är möjligt försöker jag välja bilder av olika typ på respektive webbplats, t.ex. logotyp, en thumbnail samt en "vanlig" bild.


Resultat {#resultat}
--------------------

###Alingsås Pizzeria

[FIGURE src="image/image-optimization-analysis/alingsas-pizzeria.png" class="optimization-image center" caption="[Alingsås Pizzeria](http://alingsaspizzeria.se)"]

####PageSpeed Insights

#####Mobil

**Betyg**: 67

**Förbättringsförslag**: [Skjut upp inläsningen av bilder som inte visas på skärmen][3], [koda bilder effektivt][1], [skicka bilder i modernare format][2]

#####Desktop

**Betyg**: 95

**Förbättringsförslag**: --

####Manuell analys

#####Bild 1

**Filtyp**: PNG

**Storlek**: 2,1 KB

**Namn**: pizzeria_logo.png

**Alt-text**: "Alingsås godaste pizza"

**Relevans**: Tydlig. Enkel logotyp som visar företagets namn.

**Övrig kommentar**: --

#####Bild 2

**Filtyp**: JPG

**Storlek**: 32,7 KB

**Namn**: tetsarosa.jpg

**Alt-text**: --

**Relevans**: Tydlig. Bild på en pizza som representerar menykategorin "pizzor". "Tetsarosa" är troligtvis namnet på pizzan ifråga.

**Övrig kommentar**: --

#####Bild 3

**Filtyp**: JPG

**Storlek**: 19,7 KB

**Namn**: hamburgare.jpg

**Alt-text**: --

**Relevans**: Tydlig. Bild på en hamburgare för menykategorin "hamburgare".

**Övrig kommentar**: --




###Pizzeria Venezia

[FIGURE src="image/image-optimization-analysis/pizzeria-venezia.png" class="optimization-image center" caption="[Pizzeria Venezia](http://pizzeriavenezia.se/)"]

####PageSpeed Insights

#####Mobil

**Betyg**: 100

**Förbättringsförslag**: [Skicka bilder i modernare format][2], [använd bilder med rätt storlek][4], [använd videoformat för animationer][5]

#####Desktop

**Betyg**: 100

**Förbättringsförslag**: [Skicka bilder i modernare format][2], [använd bilder med rätt storlek][4], [använd videoformat för animationer][5]

####Manuell analys

#####Bild 1

**Filtyp**: GIF

**Storlek**: 367 KB

**Namn**: k9.gif

**Alt-text**: --

**Relevans**: Tydlig. Mysig animation föreställande en brasa, anspelar kanske på att pizzerian serverar stenugnsbakad pizza?

**Övrig kommentar**: --

#####Bild 2

**Filtyp**: PNG

**Storlek**: 764 KB

**Namn**: k1.png

**Alt-text**: --

**Relevans**: God. Bild innehåller text som beskriver nyheter i restaurangens meny.

**Övrig kommentar**: --

#####Bild 3

**Filtyp**: JPG

**Storlek**: 577 KB

**Namn**: m5.jpg

**Alt-text**: --

**Relevans**: God. Bilden föreställer en pizza och passar därmed in i webbplatsens "tema", däremot känns dess användning på sidan en aning överflödig i och med att samma bild visas i bildspelet strax ovanför.

**Övrig kommentar**: --

###Pizzeria Kvarnen

[FIGURE src="image/image-optimization-analysis/pizzeria-kvarnen.png" class="optimization-image center" caption="[Pizzeria Kvarnen](http://pizzeriakvarnen.se/)"]

####PageSpeed Insights

#####Mobil

**Betyg**: 72

**Förbättringsförslag**: [Skicka bilder i modernare format][2], [koda bilder effektivt][1]

#####Desktop

**Betyg**: 93

**Förbättringsförslag**: [Skicka bilder i modernare format][2], [koda bilder effektivt][1]

####Manuell analys

#####Bild 1

**Filtyp**: PNG

**Storlek**: 11,5 KB

**Namn**: logo.png

**Alt-text**: --

**Relevans**: Tydlig. Enkel logotyp föreställande en kvarn.

**Övrig kommentar**: --

#####Bild 2

**Filtyp**: JPG

**Storlek**: 39,2 KB

**Namn**: side-pix03.jpg

**Alt-text**: --

**Relevans**: Tydlig. Bilden, som är en länk med rubriken "lunch", föreställer en hamburgare. När man klickar på länken kommer man dock inte till lunchdelen av restaurangens meny som man skulle kunna tro, utan endast till toppen av menysidan.

**Övrig kommentar**: Bilden ligger som bakgrundbild i en <code>&lt;div&gt;</code> via css-egenskapen <code>background-image</code>.

#####Bild 3

**Filtyp**: JPG

**Storlek**: 78,1 KB

**Namn**: DSC03263-1024x576.jpg

**Alt-text**: --

**Relevans**: God. Bild på restaurangen utifrån gatan.

**Övrig kommentar**: Bilden visas som bakgrundbild i en <code>&lt;div&gt;</code> via css-egenskapen <code>background-image</code>.


###LaFontana Pizzeria

[FIGURE src="image/image-optimization-analysis/lafontana-pizzeria.png" class="optimization-image center" caption="[LaFontana Pizzeria](https://lafontanapizzeria.se/)"]

####PageSpeed Insights

#####Mobil

**Betyg**: 64

**Förbättringsförslag**: [Skicka bilder i modernare format][2]

#####Desktop

**Betyg**: 97

**Förbättringsförslag**: [Skicka bilder i modernare format][2]

####Manuell analys

#####Bild 1

**Filtyp**: PNG

**Storlek**: 21.4 KB

**Namn**:La fontana ALINGSÅS-1.png

**Alt-text**: --

**Relevans**: Tydlig. Enkel logotyp med företagets namn.

**Övrig kommentar**: --

#####Bild 2

**Filtyp**: PNG

**Storlek**: 430 KB

**Namn**: PIZZA ALINGSÅS-22.png

**Alt-text**: --

**Relevans**: Tydlig. Bilden föreställer en pizza och utgör webbplatsens bakgrundsbild.

**Övrig kommentar**: Bildelementet är satt som bakgrundsbild i en <code>&lt;div&gt;</code> via css-egenskapen <code>background-image</code>.

#####Bild 3

**Filtyp**: JPG

**Storlek**: 40 KB

**Namn**: aft.jpg

**Alt-text**: --

**Relevans**: Tydlig. Bilden föreställer ett gäng människor som dricker öl och minglar och texten framför/ovanpå bilden informerar om afterwork-evenemang som anordnas av restaurangen.

**Övrig kommentar**: Bilden visas som bakgrundsbild i en <code>&lt;div&gt;</code> via css-egenskapen <code>background-image</code>.


Analys och diskussion {#analys}
-------------------------------

###I vilken utsträckning följer webbplatserna best practices?

Nedan diskuteras resultatet av analysen i relation till de best practices som beskrivs under rubriken ["Frågeställningar"](#fragestallningar).

**Använd rätt filtyp**. Analysen visar att webbplatser för det mesta följer de riktlinjer som brukar ges gällande filtyper, t.ex. att använda PNG för logotyper och JPG för fotografier. Intressant nog är PageSpeed Insights rekommendation för samtliga webbplatser i analysen att "skicka bilder i modernare format" såsom JPEG 2000, JPEG XR och WebP. Dessa s.k. "next-generation image formats" har flera fördelar, inklusive bättre bildkvalitet och effektivare kompression, vilket i sin tur leder till minskad dataförbrukning och kortare nedladdningstider (Jung, 2019). Nackdelen med next-genformaten är dock att det än så länge saknas utbrett stöd för dem hos de flesta webbläsare (ibid.), vilket kan vara en förklaring till att samtliga webbplatser i analysen valt att hålla sig till mer traditionella och generellt accepterade bildformat.

**Håll filstorleken så liten möjligt**. Alingsås Pizzeria, Pizzeria Kvarnen och Pizzeria Venezias webbplatser innehåller bildfiler vars storlek enligt PageSpeed Insights skulle kunna minskas ytterligare genom å ena sidan effektivare kodning/komprimering och å andra sidan genom att använda "rätt storlek" på bilderna i förhållande till enheten de visas på, dvs. genom att göra dem responsiva. Därmed inte sagt att de som byggt webbplatserna inte redan har gjort sitt bästa för att optimera bilderna i detta avseende, den enda slutsats som kan dras utifrån verktygets analys är att det verkar finnas utrymme för ytterligare förbättring. Det är också värt att notera att PageSpeed flaggar en bild som komprimerbar/optimerbar om besparingspotentialen är så liten som 4 KB, och det är oklart i vilken utsträckning verktyget tar hänsyn till komprimeringens eventuella påverkan på bildkvaliteten.

**Namnge bildfilerna med relevanta och meningsfulla nyckelord**. Två av webbplatserna i analysen följer denna praxis. Bäst i detta avseende är (enligt min personliga bedömning) Alingsås Pizzeria följt av LaFontana Pizzeria, vilka båda innehåller bilder med filnamn som på något sätt speglar eller anspelar på bildernas innehåll. Övriga webbplatser (Venezia och Kvarnen) innehåller bildfiler vars namn består av mer eller mindre godtyckliga kombinationer av siffror och bokstäver. Varför vissa webbplatser använder meningsfulla filnamn och andra inte kan man endast spekulera i. En förklaring skulle kunna vara att man inte får eller har möjlighet att ändra bildernas namn, men det troligaste är att man helt enkelt inte är medveten om filnamnens betydelse för bildernas och webbplatsens placering i sökresultaten och/eller att sökmotoroptimering av någon anledning inte prioriterats under utvecklingen av webbplatsen.

**Skriv relevant alt-text**. Endast en av webbplatserna i analysen (Alingsås Pizzeria) använder alt-attributet för att beskriva bildernas innehåll och detta endast för webbplatsens logotyp. Att så få webbplatser utnyttjar bildernas alt-attribut kan delvis ha en teknisk förklaring, vilken är att alt-attributet i vissa fall (på Kvarnens och LaFontanas webbplatser) inte är tillämpligt eftersom bilden inte visas i ett traditionellt <code>&lt;img&gt;</code>-element utan som bakgrundsbild i ett annat element, ofta en <code>&lt;div&gt;</code>. Fördelen med denna metod är att bildernas proportioner inte förvanskas och behåller ett normalt utseende när elementens storlek förändras. I övrigt tror jag att en vanlig anledning till att man inte utnyttjar bildelementens alt-attribut är bristande medvetenhet om dess betydelse för sökmotoroptimering.

**Välj relevanta och meningsfulla bilder**. Samtliga webbplatser i analysen innehåller bilder som känns meningsfulla och relevanta med hänsyn till övrigt innehåll och till företagens bransch. En av bilderna på Pizzeria Venezias webbplats upplevde jag som aningen överflödig, men detta är snarare en stilistisk/layoutrelaterad fråga och har egentligen ingenting att göra med bildens relevans till webbplatsens innehåll. Majoriteten av bilderna på samtliga webbplatser har en tydlig koppling till mat och/eller till restaurangmiljöer och lokaler, vilket är föga förvånande då det ligger i företagens intresse att visa upp sin verksamhet i hopp om att attrahera kunder.

###Övriga observationer kring webbplatsernas bildoptimering

Nedan följer ett par kortare reflektioner kring webbplatsernas bilder och bildoptimering som inte direkt har att göra med hur de följer best practices, men som ändå är värda att ta upp:

####Minnesvärda bilder

Det är intressant att notera att webbplatserna i anaylsen har relativt enkla logotyper, i tre av fyra fall bestående endast av företagens namn i ett enkelt typsnitt och färglagda med en eller max ett par färger. Vad denna "trend" beror på kan man förstås bara spekulera kring &mdash; en förklaring skulle kunna vara att en enkel logotyp är lättare att komma ihåg och känna igen, en annan att en enkel design gör att restaurangens namn hamnar i fokus. Om man minns företagets namn efter att man besökt dess webbplats är sannolikheten självklart större att man känner igen restaurangen i andra sammanhang och väljer att besöka dess fysiska lokaler. Konsten att göra en bild minnesvärd har kanske mindre att göra med (teknisk) bildoptimering utan är snarare en marknadsföringsfråga, men det är ändå något man som webbutvecklare bör vara medveten om när man bearbetar och behandlar bilder.

####Bildoptimering för mobila enheter

Tre av fyra företag i analysen får högre betyg av Pagespeed Insights för desktopversionen av webbplatsen än för den mobila varianten. Undantaget till detta är Pizzeria Venezia, vars webbplats får samma betyg (100 av 100) för både mobil och desktop. "Desktop first" verkar med andra ord vara den mest populära design- och utvecklingsstrategin, och det känns inte orimligt att anta att denna strategi även innefattar hur man ser på och jobbar med bildoptimering. Idag använder de flesta människor sina mobiltelefoner när de besöker webbplatser (Statista, 2020); trots detta kommer optimering av bilder (liksom optimering av webbplatserna i övrigt) för mobila enheter till synes i andra hand under utvecklingen av webbplatserna. Återigen kan man bara spekulera i vad detta beror på. En förklaring skulle kunna vara att pizzeriornas kunder för det mesta använder stationära datorer och/eller laptops för att besöka webbplatserna, och att bildoptimering för mobila enheter således inte är högprioriterad. Detta är dock ren spekulation från min sida och inget jag har belägg för. En annan och kanske mer trolig förklaring är att det saknas medvetenhet om bildoptimeringens betydelse för den mobila användarupplevelsen, möjligtvis i kombination med bristande kännedom om vilka verktyg som behövs och finns för detta ändamål.

Avslutningsvis {#avslutningsvis}
--------------------------------

Sammantaget kan man säga att webbplatserna i analysen ibland följer best practice inom bildoptimering, ibland inte. Bäst är webbplatserna på att hålla sig till rekommenderade filformat samt att välja meningsfulla bilder, sämst är de på att namnge bildfilerna, att skriva relevant alt-text och (baserat på PageSpeeds analys) att hålla filstorlekarna nere. Det är svårt att dra några definitiva slutsatser om varför webbplatserna inte alltid följer vedertagna riktlinjer och rekommendationer &mdash; ibland finns det till synes tekniska förklaringar (t.ex. att alt-attributet inte kan användas ihop med css-egenskapen <code>background-image</code>), ibland verkar det som att det helt enkelt saknas kunskap och medvetenhet om bildoptimeringens betydelse för exempelvis prestanda och sökmotoroptimering.

Huruvida resultaten kan generaliseras till att gälla samtliga webbplatser inom restaurangbranschen är tveksamt då endast fyra webbplatser har analyserats. Man kan också fundera över om resultatet hade sett annorlunda ut ifall fler best practices hade analyserats. I en uppföljande analys skulle man kunna titta närmare på om bildoptimeringen skiljer sig mellan å ena sidan webbplatser som endast tillhandahåller information om en restaurang (såsom meny och öppettider) och å andra sidan webbplatser genom vilka man även kan göra bokningar och beställa mat. Man skulle även kunna genomföra samma analys på webbplatser inom olika kategorier, för att på så sätt få en bredare uppfattning om hur arbetet med bildoptimering ser ut och prioriteras inom olika branscher.


Källor {#kallor}
----------------

**Listan med best practices som används i analysen har sammanställts med utgångspunkt i följande källor:**

8Days (2014). Web Graphics for Beginners: A Best Practices Handbook. 8Days [blogg], 22 juli. https://www.jimdo.com/blog/web-graphics-for-beginners-best-practices/ [2020-03-19]

Fagerström, A. (2018). How to use images on your website and what to avoid. https://uxplanet.org/how-to-use-images-on-your-website-and-what-to-avoid-47a9d11c0b46 [2020-03-19]

Grigorik, I. (2019). Image Optimization. https://developers.google.com/web/fundamentals/performance/optimizing-content-efficiency/image-optimization [2020-03-19]

Hayes, M. (2018). 10 Must Know Image Optimization Tips. Shopify Blog [blogg], 30 mars. https://www.shopify.com/blog/7412852-10-must-know-image-optimization-tips [2020-03-19]

Heijmans, M. (2019). Image SEO: Optimizing images for search engines. Yoast [blogg]. 2 juli. https://yoast.com/image-seo/ [2020-03-20]

Idler, S. (2012). 10 Things To Know About Images In Web Design. Usabilla [blogg], 6 september. https://usabilla.com/blog/10-things-to-know-about-images-in-web-design/ [2020-03-19]

Jackson, B. (2019). How to Optimize Images for Web and Performance. Kinsta Blog [blogg], 16 augusti. https://kinsta.com/blog/optimize-images-for-web/ [2020-03-19]

Jackson, B. (2020). WordPress SEO Checklist – 45 Tips to Increase Traffic by 571% in 13 Months. Kinsta Blog [blogg], 2 mars. https://kinsta.com/blog/optimize-images-for-web/ [2020-03-19]

Khatkar, S. (2018). What Is Image Optimization And Why Is It Important For A Website?. imagekit.io [blogg], 17 maj. https://imagekit.io/blog/image-optimization-its-importance/ [2020-03-19]

Seward, S. (2015). 7 Best Practices for Using Imagery on Your Website. TREW Marketing [blogg], 31 mars. https://www.trewmarketing.com/smartmarketingblog/smartmarketingblog/web-design-and-development/imagery-seo-best-practices/ [2020-03-19]

Soave, C. (2017). The Best Practices for Optimizing Images for Web. Web Ascender Blog [blogg], 15 augusti. https://www.webascender.com/blog/best-practices-for-optimizing-images-for-web/ [2020-03-19]

**Övriga referenser:**

Jung, A. (2019). Next-gen formaten att hålla koll på för effektivare bildoptimering. SEO-bloggen [blogg]. 28 augusti. https://blogg.dagensmedia.se/seo-bloggen/2019/08/28/next-gen-formaten-att-halla-koll-pa-for-effektivare-bildoptimering/ [2020-03-20]

Statista. (2020-02-13). Mobile internet traffic as percentage of total web traffic in January 2020, by region. https://www.statista.com/statistics/306528/share-of-mobile-internet-traffic-in-global-regions/#statisticContainer. [2020-03-10]



<!-- Links to articles referenced in PageSpeed Insights recommendations -->

[1]: https://web.dev/uses-optimized-images/
[2]: https://web.dev/uses-webp-images/
[3]: https://web.dev/offscreen-images/
[4]: https://web.dev/uses-responsive-images/
[5]: https://web.dev/efficient-animated-content/
