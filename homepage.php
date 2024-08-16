<?php
session_start();
include("connect.php")
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier League Prediction</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://fonts.cdnfonts.com/css/minecraft-4" rel="stylesheet">
</head>
<body>
    <div class="cover"></div>
    <header>
        <div class="left-header">
            <img src="https://b.fssta.com/uploads/application/soccer/competition-logos/EnglishPremierLeague.png">
        </div>
        <div class="middle-header">
            <button onclick="lastSeasonShow()">Forrige sesong</button>
            <button onclick="regler()">Regler</button>
        </div>
        <div class="right-header">
            
        </div>
    </header>
    <div id="regler">
        Regler <hr>
        &#x2022 målet med spillet er å få så få poeng som mulig <hr>
        &#x2022 du får poeng per plass du bommer- f.eks hvis man gjetter laget som kommer på 8.plass på 9. plass, er det ett poeng. <hr>
        &#x2022 bonusspørsmålene (toppskårer, toppassister, osv) gir deg -5 poeng hvis riktig. <hr>
        &#x2022 de røde tallene som tilsynliggjøres etter man trykker på 'Forrige sesong' viser hvilken plass laget fikk
    </div>
    <div class="games">
        <div class="tabellspill">
            <h1>Tabelltips</h1>
            <div class="table">
                <ul id="numberList">
                    <li>#1</li>
                    <li>#2</li>
                    <li>#3</li>
                    <li>#4</li>
                    <li>#5</li>
                    <li>#6</li>
                    <li>#7</li>
                    <li>#8</li>
                    <li>#9</li>
                    <li>#10</li>
                    <li>#11</li>
                    <li>#12</li>
                    <li>#13</li>
                    <li>#14</li>
                    <li>#15</li>
                    <li>#16</li>
                    <li>#17</li>
                    <li>#18</li>
                    <li>#19</li>
                    <li>#20</li>
                </ul>
                <ul id="clubList">
                    <li draggable="true"><p>Manchester United</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F10260.png&w=48&q=75"><p class="lastSeason" style="color:red">8</p></li>
                    <li draggable="true"><p>Arsenal</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F9825.png&w=48&q=75"><p class="lastSeason" style="color:red">2</p></li>
                    <li draggable="true"><p>Chelsea</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F8455.png&w=48&q=75"><p class="lastSeason" style="color:red">6</p></li>
                    <li draggable="true"><p>Tottenham</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F8586.png&w=48&q=75"><p class="lastSeason" style="color:red">5</p></li>
                    <li draggable="true"><p>Newcastle</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F10261.png&w=48&q=75"><p class="lastSeason" style="color:red">7</p></li>
                    <li draggable="true"><p>Aston Villa</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F10252.png&w=48&q=75"><p class="lastSeason" style="color:red">4</p></li>
                    <li draggable="true"><p>Brighton</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F10204.png&w=48&q=75"><p class="lastSeason" style="color:red">11</p></li>
                    <li draggable="true"><p>West Ham</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F8654.png&w=48&q=75"><p class="lastSeason" style="color:red">9</p></li>
                    <li draggable="true"><p>Brentford</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F9937.png&w=48&q=75"><p class="lastSeason" style="color:red">16</p></li>
                    <li draggable="true"><p>Fulham</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F9879.png&w=48&q=75"><p class="lastSeason" style="color:red">13</p></li>
                    <li draggable="true"><p>Crystal Palace</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F9826.png&w=48&q=75"><p class="lastSeason" style="color:red">10</p></li>
                    <li draggable="true"><p>Wolves</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F8602.png&w=48&q=75"><p class="lastSeason" style="color:red">14</p></li>
                    <li draggable="true"><p>Forest</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F10203.png&w=48&q=75"><p class="lastSeason" style="color:red">17</p></li>
                    <li draggable="true"><p>Bournemouth</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F8678.png&w=48&q=75"><p class="lastSeason" style="color:red">12</p></li>
                    <li draggable="true"><p>Ipswich</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F9902.png&w=48&q=75"><p class="lastSeason" style="color:red">(2)</p></li>
                    <li draggable="true"><p>Leicester</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F8197.png&w=48&q=75"><p class="lastSeason" style="color:red">(1)</p></li>
                    <li draggable="true"><p>Southampton</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F8466.png&w=48&q=75"><p class="lastSeason" style="color:red">(4)</p></li>
                    <li draggable="true"><p>Everton</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F8668.png&w=48&q=75"><p class="lastSeason" style="color:red">15</p></li>
                    <li draggable="true"><p>Liverpool</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F8650.png&w=48&q=75"><p class="lastSeason" style="color:red">3</p></li>
                    <li draggable="true"><p>Manchester City</p><img class="badge" src="https://www.fotmob.com/_next/image?url=https%3A%2F%2Fimages.fotmob.com%2Fimage_resources%2Flogo%2Fteamlogo%2F8456.png&w=48&q=75"><p class="lastSeason" style="color:red">1</p></li>
                </ul>
            </div> 
        </div>
        <div class="top-scorer">
            <h2>Individuelle prestasjoner</h2>
            <div class="topnav">
                <form class="ind-pres">
                    <h3>Toppskårer</h3>
                    <input list="spillere" type="text" placeholder="Søk...">
                    <h3>Toppassister</h3>
                    <input list="spillere" type="text" placeholder="Søk...">
                    <h3>Årets spiller</h3>
                    <input list="spillere" type="text" placeholder="Søk...">
                    <button type="submit">SUBMIT</button>
                </form>
                <datalist id="spillere">
                    <option value="Aaron Ramsdale"></option>
                    <option value="David Raya"></option>
                    <option value="Jakub Kiwior"></option>
                    <option value="Takehiro Tomiyasu"></option>
                    <option value="William Saliba"></option>
                    <option value="Gabriel Magalhães"></option>
                    <option value="Oleksandr Zinchenko"></option>
                    <option value="Riccardo Calafiori"></option>
                    <option value="Ben White"></option>
                    <option value="Jurrien Timber"></option>
                    <option value="Kieran Tierney"></option>
                    <option value="Declan Rice"></option>
                    <option value="Thomas Partey"></option>
                    <option value="Jorginho"></option>
                    <option value="Kai Havertz"></option>
                    <option value="Martin Ødegaard"></option>
                    <option value="Emile Smith Rowe"></option>
                    <option value="Fabio Vieira"></option>
                    <option value="Bukayo Saka"></option>
                    <option value="Gabriel Jesus"></option>
                    <option value="Eddie Nketiah"></option>
                    <option value="Leandro Trossard"></option>
                    <option value="Gabriel Martinelli"></option>
                    <option value="Reiss Nelson"></option>
                    <option value="Emiliano Martínez"></option>
                    <option value="Robin Olsen"></option>
                    <option value="Matty Cash"></option>
                    <option value="Ezri Konsa"></option>
                    <option value="Tyrone Mings"></option>
                    <option value="Pau Torres"></option>
                    <option value="Diego Carlos"></option>
                    <option value="Lucas Digne"></option>
                    <option value="Alex Moreno"></option>
                    <option value="Leander Dendoncker"></option>
                    <option value="Douglas Luiz"></option>
                    <option value="Boubacar Kamara"></option>
                    <option value="John McGinn"></option>
                    <option value="Youri Tielemans"></option>
                    <option value="Jacob Ramsey"></option>
                    <option value="Philippe Coutinho"></option>
                    <option value="Leon Bailey"></option>
                    <option value="Emiliano Buendía"></option>
                    <option value="Moussa Diaby"></option>
                    <option value="Ollie Watkins"></option>
                    <option value="Jhon Durán"></option>
                    <option value="Cameron Archer"></option>
                    <option value="Sander Berge"></option>
                    <option value="Neto"></option>
                    <option value="Darren Randolph"></option>
                    <option value="Marcos Senesi"></option>
                    <option value="Chris Mepham"></option>
                    <option value="Lloyd Kelly"></option>
                    <option value="Ilya Zabarnyi"></option>
                    <option value="Max Aarons"></option>
                    <option value="Milos Kerkez"></option>
                    <option value="Adam Smith"></option>
                    <option value="Lewis Cook"></option>
                    <option value="Ryan Christie"></option>
                    <option value="Philip Billing"></option>
                    <option value="Joe Rothwell"></option>
                    <option value="Alex Scott"></option>
                    <option value="Hamed Traorè"></option>
                    <option value="Antoine Semenyo"></option>
                    <option value="David Brooks"></option>
                    <option value="Justin Kluivert"></option>
                    <option value="Dominic Solanke"></option>
                    <option value="Dango Ouattara"></option>
                    <option value="Kieffer Moore"></option>
                    <option value="Mark Flekken"></option>
                    <option value="Thomas Strakosha"></option>
                    <option value="Ben Mee"></option>
                    <option value="Pontus Jansson"></option>
                    <option value="Ethan Pinnock"></option>
                    <option value="Zanka"></option>
                    <option value="Rico Henry"></option>
                    <option value="Aaron Hickey"></option>
                    <option value="Kristoffer Ajer"></option>
                    <option value="Christian Nørgaard"></option>
                    <option value="Vitaly Janelt"></option>
                    <option value="Mathias Jensen"></option>
                    <option value="Frank Onyeka"></option>
                    <option value="Mikkel Damsgaard"></option>
                    <option value="Bryan Mbeumo"></option>
                    <option value="Yoane Wissa"></option>
                    <option value="Keane Lewis-Potter"></option>
                    <option value="Shandon Baptiste"></option>
                    <option value="Neal Maupay"></option>
                    <option value="Ivan Toney"></option>
                    <option value="Kevin Schade"></option>
                    <option value="Jason Steele">Jason Steele</option>
                    <option value="Bart Verbruggen">Bart Verbruggen</option>
                    <option value="Robert Sanchez">Robert Sanchez</option>
                    <option value="Lewis Dunk">Lewis Dunk</option>
                    <option value="Adam Webster">Adam Webster</option>
                    <option value="Joël Veltman">Joël Veltman</option>
                    <option value="Pervis Estupiñán">Pervis Estupiñán</option>
                    <option value="James Milner">James Milner</option>
                    <option value="Moises Caicedo">Moises Caicedo</option>
                    <option value="Pascal Groß">Pascal Groß</option>
                    <option value="Billy Gilmour">Billy Gilmour</option>
                    <option value="Adam Lallana">Adam Lallana</option>
                    <option value="Kirsty Gilmour">Kirsty Gilmour</option>
                    <option value="Evan Ferguson">Evan Ferguson</option>
                    <option value="Joao Pedro">Joao Pedro</option>
                    <option value="Solly March">Solly March</option>
                    <option value="Kaoru Mitoma">Kaoru Mitoma</option>
                    <option value="Sully March">Sully March</option>
                    <option value="Julio Enciso">Julio Enciso</option>
                    <option value="Simon Adingra">Simon Adingra</option>
                    <option value="Tariq Lamptey">Tariq Lamptey</option>
                    <option value="Ryan Longman">Ryan Longman</option>
                    <option value="Deniz Undav">Deniz Undav</option>
                    <option value="Billy Gilmour">Billy Gilmour</option>
                    <option value="Sarmiento">Sarmiento</option>
                    <option value="Kepa Arrizabalaga">Kepa Arrizabalaga</option>
                    <option value="Robert Sánchez">Robert Sánchez</option>
                    <option value="Benoît Badiashile">Benoît Badiashile</option>
                    <option value="Thiago Silva">Thiago Silva</option>
                    <option value="Wesley Fofana">Wesley Fofana</option>
                    <option value="Levi Colwill">Levi Colwill</option>
                    <option value="Marc Cucurella">Marc Cucurella</option>
                    <option value="Ben Chilwell">Ben Chilwell</option>
                    <option value="Reece James">Reece James</option>
                    <option value="Enzo Fernández">Enzo Fernández</option>
                    <option value="Moises Caicedo">Moises Caicedo</option>
                    <option value="Conor Gallagher">Conor Gallagher</option>
                    <option value="Mateo Kovačić">Mateo Kovačić</option>
                    <option value="Carney Chukwuemeka">Carney Chukwuemeka</option>
                    <option value="Caio Jorge">Caio Jorge</option>
                    <option value="Raheem Sterling">Raheem Sterling</option>
                    <option value="Mykhailo Mudryk">Mykhailo Mudryk</option>
                    <option value="Noni Madueke">Noni Madueke</option>
                    <option value="Armando Broja">Armando Broja</option>
                    <option value="Christopher Nkunku">Christopher Nkunku</option>
                    <option value="Romelu Lukaku">Romelu Lukaku</option>
                    <option value="Christian Pulisic">Christian Pulisic</option>
                    <option value="Hakim Ziyech">Hakim Ziyech</option>
                    <option value="Vicente Guaita">Vicente Guaita</option>
                    <option value="Sam Johnstone">Sam Johnstone</option>
                    <option value="Dean Henderson">Dean Henderson</option>
                    <option value="Joachim Andersen">Joachim Andersen</option>
                    <option value="Marc Guehi">Marc Guehi</option>
                    <option value="James Tomkins">James Tomkins</option>
                    <option value="Tyric Mitchell">Tyric Mitchell</option>
                    <option value="Nathan Ferguson">Nathan Ferguson</option>
                    <option value="Joel Ward">Joel Ward</option>
                    <option value="Cheick Doucouré">Cheick Doucouré</option>
                    <option value="Jairo Riedewald">Jairo Riedewald</option>
                    <option value="Jeffrey Schlupp">Jeffrey Schlupp</option>
                    <option value="Will Hughes">Will Hughes</option>
                    <option value="Eberechi Eze">Eberechi Eze</option>
                    <option value="Jordan Ayew">Jordan Ayew</option>
                    <option value="Wilfried Zaha">Wilfried Zaha</option>
                    <option value="Michael Olise">Michael Olise</option>
                    <option value="Jean-Philippe Mateta">Jean-Philippe Mateta</option>
                    <option value="Odsonne Édouard">Odsonne Édouard</option>
                    <option value="Matheus França">Matheus França</option>
                    <option value="Sambi Lokonga">Sambi Lokonga</option>
                    <option value="Danilho Doekhi">Danilho Doekhi</option>
                    <option value="Ryan Onyedine">Ryan Onyedine</option>
                    <option value="Jordan Pickford">Jordan Pickford</option>
                    <option value="Asmir Begović">Asmir Begović</option>
                    <option value="João Virginia">João Virginia</option>
                    <option value="Conor Coady">Conor Coady</option>
                    <option value="James Tarkowski">James Tarkowski</option>
                    <option value="Yerry Mina">Yerry Mina</option>
                    <option value="Ben Godfrey">Ben Godfrey</option>
                    <option value="Seamus Coleman">Seamus Coleman</option>
                    <option value="Vitalii Mykolenko">Vitalii Mykolenko</option>
                    <option value="Nathan Patterson">Nathan Patterson</option>
                    <option value="Abdoulaye Doucouré">Abdoulaye Doucouré</option>
                    <option value="Amadou Onana">Amadou Onana</option>
                    <option value="James Garner">James Garner</option>
                    <option value="Idrissa Gana Gueye">Idrissa Gana Gueye</option>
                    <option value="Allan">Allan</option>
                    <option value="Alex Iwobi">Alex Iwobi</option>
                    <option value="Dwight McNeil">Dwight McNeil</option>
                    <option value="Anthony Gordon">Anthony Gordon</option>
                    <option value="Dominic Calvert-Lewin">Dominic Calvert-Lewin</option>
                    <option value="Neal Maupay">Neal Maupay</option>
                    <option value="Ellis Simms">Ellis Simms</option>
                    <option value="Andros Townsend">Andros Townsend</option>
                    <option value="João Pedro">João Pedro</option>
                    <option value="Abdoulaye Dabo">Abdoulaye Dabo</option>
                    <option value="Bernd Leno">Bernd Leno</option>
                    <option value="Gabriel Slonina">Gabriel Slonina</option>
                    <option value="Marek Rodak">Marek Rodak</option>
                    <option value="Tim Ream">Tim Ream</option>
                    <option value="Jooś Kiwior">Jooś Kiwior</option>
                    <option value="Issa Diop">Issa Diop</option>
                    <option value="Calvin Bassey">Calvin Bassey</option>
                    <option value="Antonee Robinson">Antonee Robinson</option>
                    <option value="Harrison Reed">Harrison Reed</option>
                    <option value="João Palhinha">João Palhinha</option>
                    <option value="Tom Cairney">Tom Cairney</option>
                    <option value="Andreas Pereira">Andreas Pereira</option>
                    <option value="Sasa Lukic">Sasa Lukic</option>
                    <option value="Bobby Decordova-Reid">Bobby Decordova-Reid</option>
                    <option value="Willian">Willian</option>
                    <option value="Manor Solomon">Manor Solomon</option>
                    <option value="Raúl Jiménez">Raúl Jiménez</option>
                    <option value="Alexander Mitrovic">Alexander Mitrovic</option>
                    <option value="Carlos Vinícius">Carlos Vinícius</option>
                    <option value="Luca de la Torre">Luca de la Torre</option>
                    <option value="Adama Traoré">Adama Traoré</option>
                    <option value="Kiernan Dewsbury-Hall">Kiernan Dewsbury-Hall</option>
                    <option value="Christian Walton">Christian Walton</option>
                    <option value="Nico Ratti">Nico Ratti</option>
                    <option value="Cameron Humphreys">Cameron Humphreys</option>
                    <option value="George Edmundson">George Edmundson</option>
                    <option value="Luke Woolfenden">Luke Woolfenden</option>
                    <option value="Leif Davis">Leif Davis</option>
                    <option value="Greg Leigh">Greg Leigh</option>
                    <option value="Janoi Donacien">Janoi Donacien</option>
                    <option value="Sam Morsy">Sam Morsy</option>
                    <option value="Lee Evans">Lee Evans</option>
                    <option value="Omari Hutchinson">Omari Hutchinson</option>
                    <option value="Cohen Bramall">Cohen Bramall</option>
                    <option value="Paddy Lane">Paddy Lane</option>
                    <option value="Massimo Luongo">Massimo Luongo</option>
                    <option value="Andre Dozzell">Andre Dozzell</option>
                    <option value="Bersant Celina">Bersant Celina</option>
                    <option value="Freddie Ladapo">Freddie Ladapo</option>
                    <option value="James Norwood">James Norwood</option>
                    <option value="Nathan Broadhead">Nathan Broadhead</option>
                    <option value="Jack Taylor">Jack Taylor</option>
                    <option value="Tom Carroll">Tom Carroll</option>
                    <option value="Ben Wight">Ben Wight</option>
                    <option value="Wes Burns">Wes Burns</option>
                    <option value="Danny Ward">Danny Ward</option>
                    <option value="Daniel Iversen">Daniel Iversen</option>
                    <option value="Mads Hermansen">Mads Hermansen</option>
                    <option value="Wout Faes">Wout Faes</option>
                    <option value="Jonny Evans">Jonny Evans</option>
                    <option value="Caglar Söyüncü">Caglar Söyüncü</option>
                    <option value="Harry Souttar">Harry Souttar</option>
                    <option value="Luke Thomas">Luke Thomas</option>
                    <option value="Timothy Castagne">Timothy Castagne</option>
                    <option value="James Justin">James Justin</option>
                    <option value="Kiernan Dewsbury-Hall">Kiernan Dewsbury-Hall</option>
                    <option value="Wilfred Ndidi">Wilfred Ndidi</option>
                    <option value="Boubakary Soumaré">Boubakary Soumaré</option>
                    <option value="Yuri Tielemans">Yuri Tielemans</option>
                    <option value="Marc Albrighton">Marc Albrighton</option>
                    <option value="Harvey Barnes">Harvey Barnes</option>
                    <option value="James Maddison">James Maddison</option>
                    <option value="Patson Daka">Patson Daka</option>
                    <option value="Kelechi Iheanacho">Kelechi Iheanacho</option>
                    <option value="Vardy">Jamie Vardy</option>
                    <option value="Ben Nelson">Ben Nelson</option>
                    <option value="Sam Smith">Sam Smith</option>
                    <option value="Alisson Becker">Alisson Becker</option>
                    <option value="Caoimhin Kelleher">Caoimhin Kelleher</option>
                    <option value="Adrián">Adrián</option>
                    <option value="Virgil van Dijk">Virgil van Dijk</option>
                    <option value="Ibrahima Konaté">Ibrahima Konaté</option>
                    <option value="Joe Gomez">Joe Gomez</option>
                    <option value="Joel Matip">Joel Matip</option>
                    <option value="Andrew Robertson">Andrew Robertson</option>
                    <option value="Trent Alexander-Arnold">Trent Alexander-Arnold</option>
                    <option value="Kostas Tsimikas">Kostas Tsimikas</option>
                    <option value="Jarell Quansah">Jarell Quansah</option>
                    <option value="Dominik Szoboszlai">Dominik Szoboszlai</option>
                    <option value="Alexis Mac Allister">Alexis Mac Allister</option>
                    <option value="Jordan Henderson">Jordan Henderson</option>
                    <option value="Thiago Alcântara">Thiago Alcântara</option>
                    <option value="Stefan Bajčetić">Stefan Bajčetić</option>
                    <option value="Harvey Elliott">Harvey Elliott</option>
                    <option value="Curtis Jones">Curtis Jones</option>
                    <option value="Luis Díaz">Luis Díaz</option>
                    <option value="Mohamed Salah">Mohamed Salah</option>
                    <option value="Diogo Jota">Diogo Jota</option>
                    <option value="Darwin Núñez">Darwin Núñez</option>
                    <option value="Ben Doak">Ben Doak</option>
                    <option value="Roberto Firmino">Roberto Firmino</option>
                    <option value="Ederson">Ederson</option>
                    <option value="Stefan Ortega">Stefan Ortega</option>
                    <option value="Zack Steffen">Zack Steffen</option>
                    <option value="Kyle Walker">Kyle Walker</option>
                    <option value="John Stones">John Stones</option>
                    <option value="Ruben Dias">Ruben Dias</option>
                    <option value="Nathan Aké">Nathan Aké</option>
                    <option value="Manuel Akanji">Manuel Akanji</option>
                    <option value="Josko Gvardiol">Josko Gvardiol</option>
                    <option value="Ben Mendy">Benjamin Mendy</option>
                    <option value="Marc Cucurella">Marc Cucurella</option>
                    <option value="Rodri">Rodri</option>
                    <option value="Kevin De Bruyne">Kevin De Bruyne</option>
                    <option value="Ilkay Gündogan">Ilkay Gündogan</option>
                    <option value="Bernardo Silva">Bernardo Silva</option>
                    <option value="Mateo Kovačić">Mateo Kovačić</option>
                    <option value="Phil Foden">Phil Foden</option>
                    <option value="Jack Grealish">Jack Grealish</option>
                    <option value="Julian Álvarez">Julian Álvarez</option>
                    <option value="Erling Braut Håland">Erling Braut Haaland</option>
                    <option value="Riyad Mahrez">Riyad Mahrez</option>
                    <option value="Cole Palmer">Cole Palmer</option>
                    <option value="James McAtee">James McAtee</option>
                    
                    <option value="Andre Onana">Andre Onana</option>
                    <option value="Tom Heaton">Tom Heaton</option>
                    <option value="Harry Maguire">Harry Maguire</option>
                    <option value="Mathijs De Ligt">Mathijs De Ligt</option>
                    <option value="Leny Yoro">Leny Yoro</option>
                    <option value="Lisandro Martínez">Lisandro Martínez</option>
                    <option value="Victor Lindelöf">Victor Lindelöf</option>
                    <option value="Luke Shaw">Luke Shaw</option>
                    <option value="Noussair Mazraoui">Noussair Mazraoui</option>
                    <option value="Tyrell Malacia">Tyrell Malacia</option>
                    <option value="Casemiro">Casemiro</option>
                    <option value="Christian Eriksen">Christian Eriksen</option>
                    <option value="Bruno Fernandes">Bruno Fernandes</option>
                    <option value="Kobbie Mainoo &#9733;">Kobbie Mainoo &#9733;</option>
                    <option value="Scott McTominay">Scott McTominay</option>
                    <option value="Jadon Sancho">Jadon Sancho</option>
                    <option value="Marcus Rashford">Marcus Rashford</option>
                    <option value="Rasmus Højlund">Rasmus Højlund</option>
                    <option value="Alejandro Garnacho &#9733;">Alejandro Garnacho &#9733;</option>
                    <option value="Amad Diallo">Amad Diallo</option>
                    <option value="Joshua Zirkzee">Joshua Zirkzee</option>
                    <option value="Nick Pope">Nick Pope</option>
                    <option value="Loris Karius">Loris Karius</option>
                    <option value="Karl Darlow">Karl Darlow</option>
                    <option value="Kieran Trippier">Kieran Trippier</option>
                    <option value="Sven Botman">Sven Botman</option>
                    <option value="Fabian Schär">Fabian Schär</option>
                    <option value="Jamaal Lascelles">Jamaal Lascelles</option>
                    <option value="Dan Burn">Dan Burn</option>
                    <option value="Matt Targett">Matt Targett</option>
                    <option value="Tino Livramento">Tino Livramento</option>
                    <option value="Lewis Hall">Lewis Hall</option>
                    <option value="Bruno Guimarães">Bruno Guimarães</option>
                    <option value="Jonjo Shelvey">Jonjo Shelvey</option>
                    <option value="Joe Willock">Joe Willock</option>
                    <option value="Sean Longstaff">Sean Longstaff</option>
                    <option value="Alexander Isak">Alexander Isak</option>
                    <option value="Callum Wilson">Callum Wilson</option>
                    <option value="Miguel Almirón">Miguel Almirón</option>
                    <option value="Anthony Gordon">Anthony Gordon</option>
                    <option value="Jack Harrison">Jack Harrison</option>
                    <option value="Joelinton">Joelinton</option>
                    <option value="Elliot Anderson">Elliot Anderson</option>
                    <option value="Harvey Barnes">Harvey Barnes</option>
                    <option value="Keylor Navas">Keylor Navas</option>
                    <option value="Matt Turner">Matt Turner</option>
                    <option value="Henderson">Dean Henderson</option>
                    <option value="Joe Worrall">Joe Worrall</option>
                    <option value="Felipe">Felipe</option>
                    <option value="Moussa Niakhaté">Moussa Niakhaté</option>
                    <option value="Steve Cook">Steve Cook</option>
                    <option value="Neco Williams">Neco Williams</option>
                    <option value="Omar Richards">Omar Richards</option>
                    <option value="Renan Lodi">Renan Lodi</option>
                    <option value="Jonjo Shelvey">Jonjo Shelvey</option>
                    <option value="Cheikhou Kouyaté">Cheikhou Kouyaté</option>
                    <option value="Lewis O'Brien">Lewis O'Brien</option>
                    <option value="Ryan Yates">Ryan Yates</option>
                    <option value="Morgan Gibbs-White">Morgan Gibbs-White</option>
                    <option value="Brendan Johnson">Brendan Johnson</option>
                    <option value="Taiwo Awoniyi">Taiwo Awoniyi</option>
                    <option value="Orel Mangala">Orel Mangala</option>
                    <option value="Danilo">Danilo</option>
                    <option value="Chris Wood">Chris Wood</option>
                    <option value="Emmanuel Dennis">Emmanuel Dennis</option>
                    <option value="Jesse Lingard">Jesse Lingard</option>
                    <option value="Cafu">Cafu</option>
                    <option value="Gavin Bazunu">Gavin Bazunu</option>
                    <option value="Alex McCarthy">Alex McCarthy</option>
                    <option value="Willy Caballero">Willy Caballero</option>
                    <option value="Jan Bednarek">Jan Bednarek</option>
                    <option value="Lianco">Lianco</option>
                    <option value="Mohammed Salisu">Mohammed Salisu</option>
                    <option value="Jack Stephens">Jack Stephens</option>
                    <option value="Kyle Walker-Peters">Kyle Walker-Peters</option>
                    <option value="Tino Livramento">Tino Livramento</option>
                    <option value="Romain Perraud">Romain Perraud</option>
                    <option value="Thomas O'Connor">Thomas O'Connor</option>
                    <option value="James Ward-Prowse">James Ward-Prowse</option>
                    <option value="Romeo Lavia">Romeo Lavia</option>
                    <option value="Ibrahima Diallo">Ibrahima Diallo</option>
                    <option value="Adam Armstrong">Adam Armstrong</option>
                    <option value="Che Adams">Che Adams</option>
                    <option value="Sekou Mara">Sekou Mara</option>
                    <option value="Kamaldeen Sulemana">Kamaldeen Sulemana</option>
                    <option value="Stuart Armstrong">Stuart Armstrong</option>
                    <option value="Moussa Djenepo">Moussa Djenepo</option>
                    <option value="Theo Walcott">Theo Walcott</option>
                    <option value="Ryan Fraser">Ryan Fraser</option>
                    <option value="Paul Onuachu">Paul Onuachu</option>
                    <option value="Hugo Lloris">Hugo Lloris</option>
                    <option value="Guglielmo Vicario">Guglielmo Vicario</option>
                    <option value="Fraser Forster">Fraser Forster</option>
                    <option value="Cristian Romero">Cristian Romero</option>
                    <option value="Davinson Sánchez">Davinson Sánchez</option>
                    <option value="Eric Dier">Eric Dier</option>
                    <option value="Ben Davies">Ben Davies</option>
                    <option value="Yves Bissouma">Yves Bissouma</option>
                    <option value="Pierre-Emile Højbjerg">Pierre-Emile Højbjerg</option>
                    <option value="Rodrigo Bentancur">Rodrigo Bentancur</option>
                    <option value="Oliver Skipp">Oliver Skipp</option>
                    <option value="James Maddison">James Maddison</option>
                    <option value="Giovani Lo Celso">Giovani Lo Celso</option>
                    <option value="Dejan Kulusevski">Dejan Kulusevski</option>
                    <option value="Son Heung-min">Son Heung-min</option>
                    <option value="Richarlison">Richarlison</option>
                    <option value="Antonio Conte">Antonio Conte</option>
                    <option value="Pedro Porro">Pedro Porro</option>
                    <option value="Emerson Royal">Emerson Royal</option>
                    <option value="Ivan Perišić">Ivan Perišić</option>
                    <option value="Ryan Sessegnon">Ryan Sessegnon</option>
                    <option value="Alejo Véliz">Alejo Véliz</option>
                    <option value="Tanguy Ndombele">Tanguy Ndombele</option>
                    <option value="Lukasz Fabianski">Lukasz Fabianski</option>
                    <option value="Alphonse Areola">Alphonse Areola</option>
                    <option value="Gianluca Scamacca">Gianluca Scamacca</option>
                    <option value="Kurt Zouma">Kurt Zouma</option>
                    <option value="Tomas Soucek">Tomas Soucek</option>
                    <option value="Declan Rice">Declan Rice</option>
                    <option value="Jarrod Bowen">Jarrod Bowen</option>
                    <option value="Pablo Fornals">Pablo Fornals</option>
                    <option value="Said Benrahma">Said Benrahma</option>
                    <option value="Michail Antonio">Michail Antonio</option>
                    <option value="Lucas Paquetá">Lucas Paquetá</option>
                    <option value="Nayef Aguerd">Nayef Aguerd</option>
                    <option value="Emerson Palmieri">Emerson Palmieri</option>
                    <option value="Aaron Cresswell">Aaron Cresswell</option>
                    <option value="Ben Johnson">Ben Johnson</option>
                    <option value="Thilo Kehrer">Thilo Kehrer</option>
                    <option value="Angelo Ogbonna">Angelo Ogbonna</option>
                    <option value="Flynn Downes">Flynn Downes</option>
                    <option value="Conor Coventry">Conor Coventry</option>
                    <option value="George Hirst">George Hirst</option>
                    <option value="Dane Scarlett">Dane Scarlett</option>
                    <option value="Edson Álvarez">Edson Álvarez</option>
                    <option value="José Sá">José Sá</option>
                    <option value="Dan Bentley">Dan Bentley</option>
                    <option value="Matija Šarkić">Matija Šarkić</option>
                    <option value="Max Kilman">Max Kilman</option>
                    <option value="Craig Dawson">Craig Dawson</option>
                    <option value="Nathan Collins">Nathan Collins</option>
                    <option value="Toti Gomes">Toti Gomes</option>
                    <option value="Rayan Aït-Nouri">Rayan Aït-Nouri</option>
                    <option value="Jonny Castro">Jonny Castro</option>
                    <option value="Hugo Bueno">Hugo Bueno</option>
                    <option value="Mario Lemina">Mario Lemina</option>
                    <option value="Ruben Neves">Ruben Neves</option>
                    <option value="João Gomes">João Gomes</option>
                    <option value="Matheus Nunes">Matheus Nunes</option>
                    <option value="Pedro Neto">Pedro Neto</option>
                    <option value="Daniel Podence">Daniel Podence</option>
                    <option value="Hwang Hee-chan">Hwang Hee-chan</option>
                    <option value="Raúl Jiménez">Raúl Jiménez</option>
                    <option value="Sasa Kalajdzic">Sasa Kalajdzic</option>
                    <option value="Diego Costa">Diego Costa</option>
                    <option value="Gonçalo Guedes">Gonçalo Guedes</option>
                    <option value="Boubacar Traoré">Boubacar Traoré</option>
                    <option value="Luis Henrique">Luis Henrique</option>
                                                                                                                                                 
                </datalist>
              </div>
        </div>
    </div>

    <script src="js/index.js"></script>
</body>
</html>
