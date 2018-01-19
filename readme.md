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