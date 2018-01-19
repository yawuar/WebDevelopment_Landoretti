# Web Development: Landoretti

Landoretti is een veiling website voor kunstwerken.
Als opdracht moesten wij de meegeleverde designs omzetten en ontwikkelen.
Het is ontwikkeld in HTML in combinatie met bootstrap, hier heb ik ook gebruik gemaakt van SASS, 
Gulp is ook van toepassing geweest en als laatste is de interactie ontwikkeld in Javascript.

# Deployment
Om deze repo te gebruiken moet je gebruik maken van een lokale server, dit kan een server ontwikkeld in Ubuntu zijn of kan je MAMP gebruiken voor windows-gebruikers kan je XAMPP gebruiken.
Om verder te gaan op dit project is het heel belangrijk om eerst te beginnen met de packages te downloaden die in de package.json staan. Gebruik de volgende commando om alle packages te downloaden.

        (sudo) npm install

Nadat de packages zijn gedownload kan men de website starten. 
Ik maak gebruik van een task Manager genaamd GULP. Ik heb hier een paar TASKS klaar staan die SASS gaat converteren naar CSS en ook taken zoals het builden van de website.
Zoals je kan zien in het mappen-sructuur zijn er 2 mappen, app en dist.
De ontwikkeling gebeurt in de app map. In de map is er een SCSS aanwezig map waar ik al de scss heb ontwikkeld voor de website. Je kan er altijd aanpassingen aan doen maar het moet natuurlijk ook geconverteerd worden naar CSS.
Dit kan gerealiseerd worden door de volgende commando:

        gulp watch

Deze commando gaat ervoor zorgen dat alle scss-code die wordt ingevoerd wordt geconverteerd naar CSS en watch zorgt ervoor dat de taak continu gaat zoeken naar wijzigingen in het bestand om zo te kunnen converteren.

Na de aanpassingen aan de website is het enorm belangrijk dat heel de website gebuilt wordt. Hiervoor gebruik je de commando:

        gulp build

Eens dat heel het project gebuild is, is het belangrijk dat ENKEL de dist folder op de server/host komt te staan. Daar staan mappen zoals images, includes, js die de website allemaal nodig heeft.

# Frontend Guideline

## Breadcrumbs
Omdat alle breadcrumbs ongeveer hetzelfde zijn op de website heb ik dit ook een vaste css-structuur voor kunnen bouwen. Het is belangrijk dat je de volgende css class gebruikt.

        breadcrumbs

Voorbeeld:

        <div class="breadcrumbs">
            <ul>
                <li><a href="#">Home &gt;</a></li>
                <li><a href="#">Auctions &gt;</a></li>
                <li><a href="#">Salvador Dali &gt;</a></li>
                <li><a href="#">Dance of Time III</a></li>
            </ul>
        </div>

## Landingpage.php

Ook zijn er op vele pagina's dezelfde landingpages aanwezig. Dit is de landingpage.php die vindbaar is in de includes map. Als er een nieuw pagina ontwikkeld moet worden met dezelfdz landingpage. Zorg er dan voor dat in het begin van het bestand de volgende lijn code komt.

        <?php
                include('includes/landingpage.php');
        ?>

Voor de rest moet je daar geen rekening meer mee houden. De css is ontwikkeld zowel voor op desktop als op mobile.

## overlay on images

Er is ook een standaard overlay css ontwikkeld. Dit komt ook voor op meerdere website. De volgende class kan hier gebruikt voor worden:

        overlay

Voorbeeld:

        <div class="overlay">
	        <div class="svg-icon"></div>
		<div class="transparent"></div>
        </div>

Er zijn nog 2 klasses die niet besproken zijn. Dit zijn svg-icon en transparent.
svg-icon kan worden ingestoken als je het vergrootglas wilt en transparent wordt gebruikt om grijze doorschijnende achtergrond te geven.

## custom input

Ook zijn er veel text inputs die dezelfde hoogte hebben, kleur, border enzo. Dus als er nog eens ongeveer dezelfde input moet worden gecreerd maak dan gebruik van de volgende klasse.

        custom-input

Voorbeeld:

        <input type="text" class="form-control custom-input" name="company" id="company" placeholder="Studio 6">

## input error 

Error output is natuurlijk ook herbruikbaar gemaakt. De volgende klasse zorgt voor de error css

        error

Voorbeeld:

        <input type="text" class="form-control custom-input error" name="company" id="company" placeholder="Studio 6">

## Grootte van een input field

De meeste input fields doorheen de website is ofwel de helft van de container, of wel de helft van de helft van een container.
Hiervoor heb ik 2 aparte klasses ontwikkeld.

        big-form en small-form

Voorbeeld:

        <div class="col-sm-6 form-group big-form">
                <label for="country">Country</label>
                <input type="text" class="form-control custom-input " name="country" id="country" placeholder="Password">
        </div>
        <div class="col-sm-3 form-group small-form">
                <label for="zipcode">Zip code</label>
                <input type="text" class="form-control custom-input " name="zipcode" id="zipcode" placeholder="8400">
        </div>

## table

De table komt ook meerdere keren voor op de website. Hiervoor heb ik mogelijk gemaakt dat enkel 1 klasse opgroepd hoeft te worden om de klasse te maken. Deze klasse is 

        table-overflow

Voorbeeld:

        <div class="table-overflow">
                <table>
                    <thead>
                        <tr>
                            <th>Auction details</th>
                            <th>Estimated price</th>
                            <th>End date</th>
                            <th>Remaining time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="image">
                                    <img src="../images/myauctions/lady.jpg" alt="Radio">
                                </div>
                                <div class="info">
                                    <div>
                                        <h3>Dance of Time III</h3>
                                        <a href="#">1979, Salvador Dali</a>
                                    </div>
                                </div>
                            </td>
                            <td>&euro; 8.900</td>
                            <td>September 09, 2013 13:00 p.m. (EST)</td>
                            <td>x</td>
                        </tr>
                    </tbody>
                </table>
            </div>

