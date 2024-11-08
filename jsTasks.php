<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- Font Awesome for social media icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <!-- header  -->
  <header role="banner" aria-label="Main navigation">
    <a class="skip-link" href="#main-content">Skip to main content</a>
    <div class="logo">
      <figure>
        <a href="index.php">
          <img src="./images/logo-user-img.png" alt="Little Lemon Website Logo" />
        </a>
        <figcaption class="visually-hidden">User image Logo</figcaption>
      </figure>
    </div>

    <button type="button" class="toggle-menu" id="mobile-menu" aria-label="Toggle navigation">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </button>

    <nav aria-label="Primary navigation">
      <ul class="nav-items">
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="tutorials.php" class="dropdown-toggle" aria-haspopup="true"
            aria-expanded="false">Tutorials</a>
          <ul class="dropdown-menu" aria-label="Tutorial Categories">
            <li><a href="html.php">HTML</a></li>
            <li class="dropdown-submenu">
              <a href="php.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">PHP</a>
              <ul class="dropdown-menu" aria-label="PHP Submenu">
                <li><a href="php-lessons.php">Lessons</a></li>
                <li><a href="php-tasks.php">Tasks</a></li>
              </ul>
            </li>
            <li><a href="clanguage.php">C Language</a></li>
            <!-- <li><a href="js.php">JavaScript</a></li> -->
            <li class="dropdown-submenu">
              <a href="php.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Js</a>
              <ul class="dropdown-menu" aria-label="PHP Submenu">
                <li><a href="php-lessons.php">Lessons</a></li>
                <li><a href="#">Tasks</a></li>
              </ul>
            </li>
            <li><a href="css.php">CSS & Sass</a></li>
            <li><a href="jquery.php">jQuery</a></li>
            <li><a href="angular.php">Angular</a></li>
            <li><a href="database.php">Database</a></li>
          </ul>
        </li>
        <li><a href="resources.php">Resources</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a class="btns order-now" href="subscribe.php">Subscribe</a></li>
      </ul>
    </nav>
  </header>

  <!-- slide bar  -->
  <div class="slide-bar-container">
    <!-- Scrollable Navigation for tasks -->
    <div class="scroll-nav-container">
      <button class="scroll-nav-prev" aria-label="Previous" onclick="prevPage()">&lsaquo;</button>
      <nav class="scroll-nav">
        <div class="slide-bar" id="sections"></div>
      </nav>
      <button class="scroll-nav-next" aria-label="Next" onclick="nextPage()">&rsaquo;</button>
    </div>
  </div>

  <!-- Social Media Links - vertical/leftside -->
  <div class="social-media">
    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-vk"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
  </div>

  <!-- main content -->
  <main class="main-container">

    <h1>javascript tasks</h1>
    <!-- Task 1 -->
<section class="my-section" id="task1">
      <h2>Task: 1</h2>

      <!-- Button to open the modal -->
      <button id="task1Btn" class="question-btn"> Show Code</button>

      <!-- Modal Structure -->
      <div id="task1Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 1 Question</h3>

          <!-- Using <pre> to show unsolved PHP code -->
      <pre>
        &lt;h1 id='text-above-1'&gt;Yläpuolella oleva teksti&lt;/h1&gt;
        &lt;button type='button' onclick='vaihdaTeksti1()'&gt;Vaihda 1&lt;/button&gt;
        &lt;br /&gt;&lt;br /&gt;
        &lt;button type='button' onclick='vaihdaTeksti2()'&gt;Vaihda 2&lt;/button&gt;
        &lt;h2 id='text-below-1'&gt;Alapuolella oleva teksti&lt;/h2&gt;
      </pre>
        </div>
      </div>
      <!-- <div class="hgroup">
    <h3>TEHTÄVÄ 1: Vastaus</h3>
  </div> -->
      <div class="arrays-container">
        <div>
          <p id="text-above-1">Yläpuolella oleva teksti</p>
          <button class="btn btn-dark" type="button" onclick="vaihdaTeksti1()">Vaihda 1</button>
        </div>
        <div>
          <button class="btn btn-dark" type="button" onclick="vaihdaTeksti2()">Vaihda 2</button>
          <p id="text-below-1">Alapuolella oleva teksti</p>
        </div>
      </div>
</section>

    <!-- Task 2 -->
    <section class="my-section" id="task2">
      <h2>Task: 2</h2>

      <!-- Button to open the modal -->
      <button id="task2Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task2Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 2 Question</h3>
          <!-- Using <pre> to show unsolved PHP code -->
          <pre>
        Hae Google:lla kaksi pientä kuvaa ja lisää www-sivulle kaksi kuva-elementtiä (img) JavaScript:iä käyttäen:

        Kuvasta 1, josta vaihtuu painikkeen yläpuolella oleva teksti.
        Kuvasta 2, josta vaihtuu painikkeen alapuolella oleva teksti.
        Lisää kuville myös CSS-ohje, jolla kuvaa klikatessa www-sivulla esitetään "painamis-efekti."

        Kuvan näyttäminen img-elementtiin (jolla JSKuva id):

        document.getElementById("JSkuva").src="tiedostonnimi.jpg";
      </pre>
        </div>
      </div>

      <!-- Container for images and buttons, using flexbox -->
      <h3 class="txt-center">Click the image to change the text or click the button to change the text also.</h3>

      <div class="arrays-container">
        <!-- Image 1 Section -->
        <div class="image-item">
          <p id="p1">Yläpuolella oleva teksti</p> <!-- Static paragraph for Image 1 -->
          <img id="img1" alt="Kuva 1" class="task2IMG" /> <!-- Image created in JS -->
          <button id="btn1" class="btn btn-dark">Kuva 1</button> <!-- Added id="btn1" -->
        </div>

        <!-- Image 2 Section -->
        <div class="image-item">

          <img id="img2" alt="Kuva 2" class="task2IMG" /> <!-- Image created in JS -->
          <p id="p2">Alapuolella oleva teksti</p> <!-- Static paragraph for Image 2 -->
          <button id="btn2" class="btn btn-dark">Kuva 2</button> <!-- Added id="btn2" -->
        </div>
      </div>
    </section>

    <!-- NEW TASK 3 -->
    <!-- Task 3 -->
    <section class="my-section" id="task3">
      <h2>Task: 3</h2>

      <!-- Button to open the modal for Task 3 -->
      <button id="task3Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task3Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 3 Question</h3>
          <p>Kolmen vastuksen rinnankytkennän laskeva scriptaus joka näyttää kytkennän vastusten arvot sekä yhteisvastuksen arvon.</p>
          <pre>
        Esimerkki näyttö www-sivulla:
        R1 = 100 ohmia, R2 = 100 ohmia, R3 = 100 ohmia. Rkok = 3.33333 ohmia.
      </pre>
        </div>
      </div>

      <div class="arrays-container">
        <div class="task3-inputs">
          <div>
            <label for="resistor1">R1:</label>
            <input type="number" id="resistor1" placeholder="100" /> ohm
          </div>
          <div>
            <label for="resistor2">R2:</label>
            <input type="number" id="resistor2" placeholder="100" /> ohm
          </div>
          <div>
            <label for="resistor3">R3:</label>
            <input type="number" id="resistor3" placeholder="100" /> ohm
          </div>
          <button id="calculateBtn">Calculate</button>
        </div>

        <!-- Results section with initial placeholder -->
        <div class="task3-results">
          <p id="placeholder">Results will be displayed here after calculation.</p>
          <p id="error-message" style="color: red;"></p>
          <p id="result-r1"></p>
          <p id="result-r2"></p>
          <p id="result-r3"></p>
          <p id="result-rkok"></p>
        </div>
      </div>
    </section>


    <!-- Task 4 -->
    <section class="my-section" id="task4">
      <h2>Task: 4</h2>

      <!-- Button to open the modal for Task 4 -->
      <button id="task4Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task4Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 4 Question</h3>
          <pre>
            Display the titles and texts for "Seitsemän veljestä".
          </pre>
        </div>
      </div>
      <!-- <div class="hgroup">
        <h3>TEHTÄVÄ 4: Vastaus</h3>
      </div> -->
      <div class="arrays-container">
        <div>
          <h1 id="title1"></h1>
          <p id="text1"></p>
        </div>
        <div>
          <h1 id="title2"></h1>
          <p id="text2"></p>
        </div>
      </div>
    </section>


    <!-- Task 5 -->
    <section class="my-section" id="task5">
      <h2>Task: 5</h2>

      <!-- Button to open the modal for Task 5 -->
      <button id="task5Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task5Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 5 Question</h3>
          <pre>
        Display one-dimensional and two-dimensional arrays, and a table with numbers and their average.
      </pre>
        </div>
      </div>
      <!-- <div class="hgroup">
    <h3>TEHTÄVÄ 5: Vastaus</h3>
  </div> -->
      <div class="arrays-container">
        <div>
          <h2>Yksiuloitteinen Taulukko</h2>
          <div id="oneDArray"></div>
        </div>
        <div>
          <h2>Kaksiuloitteinen Taulukko</h2>
          <div id="twoDArray"></div>
        </div>
      </div>
      <h2>Taulukko</h2>
      <div class="CSSTableGenerator">
        <table id="numbersTable">
          <tr>
            <td>Luku 1</td>
            <td>Luku 2</td>
            <td>Luku 3</td>
            <td>Luku 4</td>
            <td>Ka</td>
          </tr>
          <tr>
            <td id="num1"></td>
            <td id="num2"></td>
            <td id="num3"></td>
            <td id="num4"></td>
            <td id="average"></td>
          </tr>
        </table>
      </div>
    </section>
    <!-- Task 6 -->
    <section class="my-section" id="task6">
      <h2>Task: 6</h2>

      <!-- Button to open the modal for Task 6 -->
      <button id="task6Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task6Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 6 Question</h3>
          <pre>
        Display a table with car prices, including model, power, CO2 emissions, price without tax, estimated tax, and total price.
      </pre>
        </div>
      </div>
      <!-- <div class="hgroup">
    <h3>TEHTÄVÄ 6: Vastaus</h3>
  </div> -->
      <h2 class="text-center">Car Price Table</h2>
      <div class="CSSTableGenerator">
        <table id="carTable">
          <thead>
            <tr>
              <th>Malli</th>
              <th>Suurin teho (kW/hv)</th>
              <th>Arvioitu CO2</th>
              <th>Autoveroton hinta (alv 24%) €</th>
              <th>Arvioitu Autovero €</th>
              <th>Kokonais Hinta €</th>
            </tr>
          </thead>
          <tbody id="tableBody">
            <!-- Rows will be added dynamically -->
          </tbody>
        </table>
      </div>
    </section>
    <!-- Task 7 -->
    <section class="my-section" id="task7">
      <h2>Task: 7</h2>

      <!-- Button to open the modal for Task 7 -->
      <button id="task7Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task7Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 7 Question</h3>
          <pre>
        Write a program to calculate the addition of two numbers, the series resistance of three resistors, and the parallel resistance of three resistors.
      </pre>
        </div>
      </div>
      <div class="arrays-container">
        <div>
          <p id="koe1"></p>
        </div>
        <div>
          <p id="koe2"></p>
        </div>
      </div>
    </section>
    <!-- Task 8 -->
    <section class="my-section" id="task8">
      <h2>Task: 8</h2>

      <!-- Button to open the modal for Task 8 -->
      <button id="task8Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task8Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 8 Question</h3>
          <pre>
        Write a program to calculate the surface area and volume of a sphere given its radius.
      </pre>
        </div>
      </div>
      <div class="task3-container">
        <!-- Left section for input and calculate button -->
        <div class="task3-inputs">
          <div>
            <label for="radius">Pallon säde:</label>
            <input type="number" id="radius" value="5" /> cm
          </div>
          <button onclick="calculateSphere()">Calculate</button>
        </div>
        <!-- Right section for displaying results -->
        <div class="task3-results">
          <div id="surfaceArea">
            <p>Surface area will be displayed here.</p>
          </div>
          <div id="volume">
            <p>Volume will be displayed here.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Task 9 -->
    <section class="my-section" id="task9">
      <h2>Task: 9</h2>

      <!-- Button to open the modal for Task 9 -->
      <button id="task9Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task9Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 9 Question</h3>
          <pre>
        Write a program to calculate the total parallel resistance of an array of resistors.
      </pre>
        </div>
      </div>
      <!-- <div class="hgroup">
    <h3>TEHTÄVÄ 9: Vastaus</h3>
  </div> -->
      <div class="arrays-container">
        <div>
          <p id="vastukset"></p>
        </div>
        <div>
          <p id="kokonaisresistanssi"></p>
        </div>
      </div>
    </section>
    <!-- Task 10 -->
    <section class="my-section" id="task10">
      <h2>Task: 10</h2>

      <!-- Button to open the modal for Task 10 -->
      <button id="task10Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task10Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 10 Question</h3>
          <pre>
        Write a program to display the names and prices of two products.
      </pre>
        </div>
      </div>
      <!-- <div class="hgroup">
    <h3>TEHTÄVÄ 10: Vastaus</h3>
  </div> -->
      <div class="arrays-container">
        <div>
          <p id="tuote1"></p>
        </div>
        <div>
          <p id="tuote2"></p>
        </div>
      </div>
    </section>
    <!-- Task 11 -->
    <section class="my-section" id="task11">
      <h2>Task: 11</h2>

      <!-- Button to open the modal for Task 11 -->
      <button id="task11Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task11Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 11 Question</h3>
          <pre>
        1. Toteuta JS-koodaus joka vaihtaa tekstiä hiiren vasemmalla, keskimmäisellä ja oikealla painikkeella käyttäen if-lauseita ja event.which tai event.button -metodia.
        2. Estä selaimen valikon näkyminen tämän tehtävän yllä puolella mainitulla metodilla.
        3. Kun osan 1 toteutus toimii, tee laatikko jonka sisällä on hiiren painikkeilla vaihtuva teksti.
        4. Etsi ratkaisu jolla vaihdetaan myös laatikon taustaväri samalla kuin tekstiä vaihdetaan.
      </pre>
        </div>
      </div>
      <div class="hgroup">
        <h3>TEHTÄVÄ 11: Vastaus</h3>
      </div>
      <div class="arrays-container">
        <div>
          <div id="box11" onmousedown="changeText11(event)">Klikkaa hiiren painikkeilla</div>
        </div>
      </div>
    </section>
    <!-- Task 12 -->
    <section class="my-section" id="task12">
      <h2>Task: 12</h2>

      <!-- Button to open the modal for Task 12 -->
      <button id="task12Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task12Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 12 Question</h3>
          <pre>
        1. Aiemmin oppaassa on tehtävissä toteutettu kolmen vastuksen sarja ja rinnan laskutoimitukset.
        2. Toteuta aluksi ns box model eli CSS-muotoiluilla laatikko.
        3. Toteuta laskutoimitusten tulosten näyttäminen box model laatikossa:
           a) Kun painetaan hiiren vasenta painiketta, näytetään sarjakytkennän tulos.
           b) Kun painetaan ALT-painiketta ja hiiren vasenta yhtäaikaa, näytetään rinnankytkennän tulos.
        Muotoile "laatikko" ja siinä näytettävät tekstit CSS-muotoiluilla !!
      </pre>
        </div>
      </div>
      <div class="hgroup">
        <h3>TEHTÄVÄ 12: Vastaus</h3>
      </div>
      <div class="arrays-container">
        <div>
          <div id="box">Klikkaa tässä laatikossa hiiren painikkeilla</div>
        </div>
      </div>
    </section>


    <!-- Task 13 -->
    <section class="my-section" id="task13">
      <h2>Task: 13</h2>

      <!-- Button to open the modal for Task 16 -->
      <button id="task16Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task16Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 16 Question</h3>
          <pre>
        Toteuta noppapeliä simuloiva ohjelma seuraavasti:
        1. Luo ohjelma, joka arpoo satunnaisesti luvun 1-6 väliltä ja näyttää sen.
        2. Näytä nopan tulos sekä tekstinä että kuvana. Lisää jokaista silmälukua vastaava kuva esimerkiksi tiedostoista dice1.jpg, dice2.jpg jne.
        3. Nopan kuvaa tulee klikata, jolloin arvonta tapahtuu uudelleen.
      </pre>
        </div>
      </div>

      <div class="arrays-container">
        <div id="diceContainer">
          <p id="resultText">Heitä noppaa!</p>
          <img id="diceImage" src="images/dice/dice-1.png" alt="Dice Image" onclick="rollDice()">
        </div>
      </div>
    </section>
    <!-- Task 14 -->
    <section class="my-section" id="task14">
      <h2>Task: 14</h2>

      <!-- Button to open the modal for Task 14 -->
      <button id="task14Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task14Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 14 Question</h3>
          <pre>
        Tehtävä on kaksiosainen, tehtävä 2 liittyy tässä olevaan tehtävään.
        Kopioi yllä oleva esimerkki ja testaa sen toiminta.
        Lisää esimerkkiin myös kuukauden näyttäminen ja lisää esimerkkiin
        kuukausi- ja kk-muuttujat.
        Sijoita kuukausi-muuttujaan suomenkieliset kuukaudet ja käytä kk-muuttujaa esimerkin mukaisesti kuukauden näyttämiseen www-sivulle.
        Näkymä www-sivulle esimerkiksi seuraavasti:
        Helmikuu maanantai
      </pre>
        </div>
      </div>
      <div class="hgroup">
        <h3>TEHTÄVÄ 14: Vastaus</h3>
      </div>
      <div class="arrays-container">
        <div>
          <p id="dateDisplay"></p>
        </div>
      </div>
    </section>

    <!-- Task 15 -->
    <section class="my-section" id="task15">
      <h2>Task: 15</h2>

      <!-- Button to open the modal for Task 15 -->
      <button id="task15Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task15Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 15 Question</h3>
          <pre>
        Tehtävä 1 jatko-osa.
        Lisää aiemmin tekemääsi Tehtävä 1 myös kuukauden päivän sekä kellonajan näyttäminen.
        Näkymä www-sivula esimerkiksi seuraavasti tyyppisenä:
        24. Helmikuu 2019 maanantai klo 13:15
      </pre>
        </div>
      </div>
      <div class="hgroup">
        <h3>TEHTÄVÄ 15: Vastaus</h3>
      </div>
      <div class="arrays-container">
        <div>
          <p id="dateTimeDisplay"></p>
        </div>
      </div>
    </section>

    <!-- Task 16 -->
    <section class="my-section" id="task16">
      <h2>Task: 16</h2>

      <!-- Button to open the modal for Task 16 -->
      <button id="task16Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task16Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 16 Question</h3>
          <pre>
        Kello www-sivulle.
        Lisää yllä oleva esimerkki 1 kello JavaScript-harjoitusten palautussivustollesi.
        Sijoita kello header-osaan, oikeaan reunaan.
        Muokkaa kellon CSS-muotoiluja erilaiseksi.
      </pre>
        </div>
      </div>
      <div class="hgroup">
        <h3>TEHTÄVÄ 16: Vastaus</h3>
      </div>
      <div class="arrays-container">
        <div>
          <div id="clockContainer">
            <p id="clock"></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Task 17 -->
    <section class="my-section" id="task17">
      <h2>Task: 17</h2>

      <!-- Button to open the modal for Task 17 -->
      <button id="task17Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task17Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 17 Question</h3>
          <pre>
        3 sekunnin tekstilaatikko.
        Muokkaa kello-esimerkistä 2 versio joka,
        a) avaa www-sivulle "tekstilaatikon" kolmen sekunnin kuluttua siitä kun www-sivu on päivitetty.
        b) muokkaa tekstilaatikko avautumaan painikkeen klikkauksesta 3 sekunnin kuluttua.
        c) tee painikkeelle sekä tekstilaatikolle CSS-muotoiluohjeet.
      </pre>
        </div>
      </div>
      <!-- <div class="hgroup">
        <h3>TEHTÄVÄ 17: Vastaus</h3>
      </div> -->
      <div class="arrays-container">
        <div id="textField" class="hidden"></div>
        <button id="openButton" class="btn btn-primary">Avaa tekstikenttä</button>
      </div>
    </section>

<!-- Task 18 -->
<section class="my-section" id="task18">
  <h2>Task: 18</h2>

  <!-- Button to open the modal for Task 18 -->
  <button id="task18Btn" class="question-btn">View Question</button>

  <!-- Modal Structure -->
  <div id="task18Modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h3>Task 18 Question</h3>
      <pre>
        Useampi objekti.
        Kopioi yllä oleva esimerkki, testaa sen toiminta ja muokkaa esimerkistä seuraava.
        Tee kolme objektia, etunimi, sukunimi ja ika.
        Kuhunkin objektiin sijoitetaan kolme tietoa:
        etunimi-objektiin kolme etunimeä,
        sukunimi-objektiin kolme sukunimeä ja
        ika-objektiin kolme ikää numeroarvona.
        Näytä www-sivulle 1. etunimi, 2.sukunimi ja 3. ikä, esim:
      </pre>
    </div>
  </div>
  <div class="hgroup">
    <h3>TEHTÄVÄ 18: Vastaus</h3>
  </div>
  <div class="arrays-container">
    <div id="personInfo" class="person-info"></div>
  </div>
</section>
  
    <!-- Task 19 -->
    <section class="my-section" id="task19">
      <h2>Task: 19</h2>

      <!-- Button to open the modal for Task 19 -->
      <button id="task19Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task19Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 19 Question</h3>
          <pre>
        Kellonajan mukaan vaihtuva tervehdys.
        Toteuta www-sivulle kellonajan mukaan toimiva tervehdys if-lauseilla:
        jos on klo 5:01 - 10 näytä "Hyvää huomenta"
        jos klo 10:01 - 14 näytä "Hyvää päivää"
        jos klo 14:01 - 17 näytä "Hyvää iltapäivää"
        jos klo 17:01 - 23 näytä "Hyvää iltaa"
        jos klo 23:01 - 5 näytä "Hyvää yötä"
        Vinkit;
        Testaa aluksi if-rakenteiden toiminta käyttämällä muuttujaan annettuja "kellonaikoja". Kun rakenne toimii, käytä aiemmin oppaan sivulla olevaa oikeaa kellonajan antavaa metodia.
      </pre>
        </div>
      </div>
      <div class="hgroup">
        <h3>TEHTÄVÄ 19: Vastaus</h3>
      </div>
      <div class="arrays-container">
        <div>
          <p id="greeting"></p>
        </div>
      </div>
    </section>

    <!-- Task 20 -->
    <section class="my-section" id="task20">
      <h2>Task: 20</h2>

      <!-- Button to open the modal for Task 20 -->
      <button id="task20Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task20Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 20 Question</h3>
          <pre>
        Tyhjän lomakekentän lähettäminen avaa
        samanlaisen "laatikon" kuin tämä missä tehtävän tässä on.
        Tarvitset tehtävässä yllä käytettyä koodausta sekä
        Kikka-paikka kohdan 2 esimerkin koodauksia ja CSS-muotoiluja.
        Huomaa. Lomakefunktio nimeltään lomakefunktio.php puuttuuu eli sellaista ei ole.
        (action="/lomakefunktio.php")
        Tämä on testattu tehtävä ja ratkaisu on löydettävissä.
      </pre>
        </div>
      </div>
      <div class="hgroup">
        <h3>TEHTÄVÄ 20: Vastaus</h3>
      </div>
      <div class="arrays-container">
        <div>
          <form name="lomake" action="/lomakefunktio.php" onsubmit="return tarkistaKenttä()" method="post">
            <label for="email">Sähköposti:</label>
            <input type="email" id="email" name="email" placeholder="Enter Email..." class="email-input2">
            <input type="submit" value="Lähetä" class="btn btn-primary">
          </form>
        </div>
      </div>
    </section>

    <!-- Task 21 -->
    <section class="my-section" id="task21">
      <h2>Task: 21</h2>

      <!-- Button to open the modal for Task 21 -->
      <button id="task21Btn" class="question-btn">View Question</button>

      <!-- Modal Structure -->
      <div id="task21Modal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h3>Task 21 Question</h3>
          <pre>
        Tehtävä, tarvitset jonkin kuvan jossa on 3 - 4 kohdetta, esimerkiksi rakennuksia, autoja, eläimiä tai henkilöitä. Tarkoituksena JS-koodata kuvaan kohteita joita klikkaamalla avautuu lisätietoa antavia teksti-laatikoita (box-model).
        1. Valisemastasi kuvasta on löydyttävä alueita jotka voisi rajata neliöllä, neliöistä on selvitettävä vasemman yläkulman sekä oikean alakulman X- ja Y-koordinaatit hiiren click-metodi esimerkin avulla.
        - kopioi click-metodin koodaus ja muokkaa se näyttämään kuvasta X- ja Y-koordinaatteja.
        2. Sovella ja toteuta JS-koodaus jolla neliöitä klikkaamalla lisätieto-laatikot avautuu.
        - vihje, koodaa if-lauseet joilla voidaan tutkia X- ja Y-koordinaatteja ja niiden perusteella näyttää lisätietolaatikoita
        3. Lisää myös lisätieto-laatikon sulkeminen.
        4. Muokkaa yksi kohteista avaamaan ja sulkemaan lisätieto-laatikko kun hiiren osoitin on neliö kohdalla.
      </pre>
        </div>
      </div>
      <div class="hgroup">
        <h3>TEHTÄVÄ 21: Vastaus</h3>
      </div>
      <div class="arrays-container">
        <div id="imageContainer">
          <img src="./images/tampere.jpg" id="image" alt="Tampeere Image">

          <div class="yellowBorder" id="border1"></div>
          <div class="yellowBorder" id="border2"></div>
          <div class="yellowBorder" id="border3"></div>

          <div class="infoBox" id="infoBox1">
            <h2>Kaupungin rakennukset</h2>
            <p>Tampereella rakennukset, sekä modernit että historialliset, sijaitsevat usein lähellä puistoja ja vesialueita, tehden kaupungista viehättävän.</p>

            <button class="closeButton" onclick="closeInfoBox('infoBox1')"><i class="fa-sharp-duotone fa-solid fa-rectangle-xmark"></i></button>
          </div>
          <div class="infoBox" id="infoBox2">
            <h2>Hype</h2>
            <p>On Suomen nopein ja korkein vuoristorata, joka sijaitsee Tampereen Särkänniemen huvipuistossa.</p>
            <button class="closeButton" onclick="closeInfoBox('infoBox2')"><i class="fa-sharp-duotone fa-solid fa-rectangle-xmark"></i></button>
          </div>
          <div class="infoBox" id="infoBox3">
            <h2>Näsinneula</h2>
            <p>On Tampereen ikoninen 168-metrinen <br> näkötorni upeilla maisemilla ja pyörivällä ravintolalla.</p>
            <button class="closeButton" onclick="closeInfoBox('infoBox3')"><i class="fa-sharp-duotone fa-solid fa-rectangle-xmark"></i></button>
          </div>
        </div>
      </div>
    </section>

  </main>
  <!-- footer -->
  <footer id="main-footer" class="py-2">
    <div class="footer-content footer-container">
      <div>
        <!-- <img src="./img/ciise.png" alt="news grid" /> -->
        <a href="index.html"><img src="./images/ciise.png" alt="logo image" /></a>
        <p>
          Welcome to My Personal Porfolio Website, I create all kinds of
          Websites and Mobile Apps
        </p>
      </div>
      <div>
        <h3>Email new letter</h3>
        <p>Subscribe To Get The Latest Updates!</p>

        <form method="POST" class="contact-form">
          <input type="email" placeholder="Enter Email..." class="email-input2" required />
          <input type="button" value="Subscribe" class="btn btn-primary" onclick="sendEmail()" />
        </form>
      </div>
      <div>
        <h3>Company</h3>
        <ul class="list">
          <li>
            <i class="fas fa-chevron-right"></i>
            <a href="#">Help & Support</a>
          </li>
          <li>
            <i class="fas fa-chevron-right"></i>
            <a href="#">Privicy Policy</a>
          </li>
          <li>
            <i class="fas fa-chevron-right"></i>
            <a href="about.html">About Us</a>
          </li>
          <li>
            <i class="fas fa-chevron-right"></i>
            <a href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
      <div>
        <h3>Have Project?</h3>
        <p>
          Any Type Of Query & Discussion, Click the Button Below, I`m
          Available
        </p>
        <a href="contact.html" class="btn btn-secondary">Get Free Consultation</a>
      </div>
      <div class="inner-footer">
        <p>This Website Was Designed and Developed By: Isse S.Ibrahim</p>
        <p>Copyright &copy; 2024 All Rights Reserved</p>
        <div class="social">
          <a href="https://facebook.com/issefr" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/isibrahiim/" target="_blank">
            <i class="fab fa-instagram"></i></a>
          <a href="https://vk.com/your_vk_profile" target="_blank"><i class="fab fa-vk"></i></a>
          <a href="https://www.linkedin.com/in/your_linkedin_profile" target="_blank"><i
              class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <script src="./js/script.js"></script>
  <script src="./js/tasks.js"></script>

</body>

</html>