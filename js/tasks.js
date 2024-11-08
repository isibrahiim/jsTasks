// TEHTÄVÄ 1 KOODI STARTAA TÄSTÄ
function vaihdaTeksti1() {
    const element = document.getElementById("text-above-1");
    element.innerHTML = "Teksti vaihdettu yläpuolelle";
    element.classList.add("task1");
}

function vaihdaTeksti2() {
    const element = document.getElementById("text-below-1");
    element.innerHTML = "Teksti vaihdettu alapuolelle";
    element.classList.add("task1");
}

// NEW TASK 2 
//TEHTÄVÄ 2 KOODI STARTAA TÄSTÄ
function initializeTask2() {
    const img1 = document.getElementById("img1");
    const img2 = document.getElementById("img2");
    
    const btn1 = document.getElementById("btn1");
    const btn2 = document.getElementById("btn2");

    // Dynamically assign image sources
    img1.src = "./images/tampereTower.jpg";  // Ensure the path is correct
    img2.src = "./images/oodi.jpg";  // Ensure the path is correct

    // Get references to the paragraphs
    const p1 = document.getElementById("p1");
    const p2 = document.getElementById("p2");

    // Add click event listeners to the images
    img1.onclick = function() {
        p1.innerText = "Image 1 was clicked!";
        img1.src = "./images/oodi.jpg";  // Change to a new image
    };

    img2.onclick = function() {
        p2.innerText = "Image 2 was clicked!";
        img2.src = "./images/tampereTower.jpg";  // Change to a new image
    };

    // Add click event listeners to the buttons
    btn1.onclick = function() {
        p1.innerText = "Button 1 was clicked using btn!";
    };

    btn2.onclick = function() {
        p2.innerText = "Button 2 was clicked!";
    };
}
// NEW TASK 3 
// TEHTÄVÄ 3 KOODI STARTAA TÄSTÄ
function calculateTotalResistance() {
    // Get resistor values from input fields
    const r1 = parseFloat(document.getElementById("resistor1").value);
    const r2 = parseFloat(document.getElementById("resistor2").value);
    const r3 = parseFloat(document.getElementById("resistor3").value);
    const resistors = [r1, r2, r3]; // Resistance values in ohms

    // Create and display resistor elements dynamically
    const container = document.getElementById("resistor-container");

    // Clear previous resistors before adding new ones
    container.innerHTML = ""; // Clear the container

    // Display R1, R2, R3
    resistors.forEach((value, index) => {
        const resistorParagraph = document.createElement("p");
        resistorParagraph.innerText = `R${index + 1} = ${value} ohm`;
        container.appendChild(resistorParagraph);
    });

    // Calculate equivalent resistance for resistors in parallel
    const totalResistance = 1 / resistors.reduce((acc, r) => acc + (1 / r), 0);

    // Update the displayed total resistance (Rkok)
    const totalResistanceElement = document.getElementById("resistorResult");
    if (totalResistanceElement) {
        totalResistanceElement.innerHTML = `Rkok = ${totalResistance.toFixed(5)} ohm`;
        console.log("Total resistance calculated: ", totalResistance); // For debugging
    } else {
        console.log("Total resistance element not found!");
    }
}

// Combine all tasks into a single window.onload
window.onload = function() {
    // Initialize tasks
    initializeTask2();
};

//Task 3
document.getElementById("calculateBtn").addEventListener("click", function() {
  const r1 = parseFloat(document.getElementById("resistor1").value);
  const r2 = parseFloat(document.getElementById("resistor2").value);
  const r3 = parseFloat(document.getElementById("resistor3").value);

  // Get elements for displaying results and error messages
  const placeholder = document.getElementById("placeholder");
  const errorMessage = document.getElementById("error-message");
  const resultR1 = document.getElementById("result-r1");
  const resultR2 = document.getElementById("result-r2");
  const resultR3 = document.getElementById("result-r3");
  const resultRkok = document.getElementById("result-rkok");

  // Clear previous results and messages
  errorMessage.textContent = "";
  resultR1.textContent = "";
  resultR2.textContent = "";
  resultR3.textContent = "";
  resultRkok.textContent = "";

  // Validate input
  if (isNaN(r1) || isNaN(r2) || isNaN(r3) || r1 <= 0 || r2 <= 0 || r3 <= 0) {
    errorMessage.textContent = "Oops! You haven't entered valid numbers. Please enter positive values for all resistors.";
    placeholder.style.display = "block";
    return;
  }

  // Hide placeholder and calculate total parallel resistance
  placeholder.style.display = "none";
  const rkok = 1 / (1 / r1 + 1 / r2 + 1 / r3);

  // Display each result in its respective placeholder
  resultR1.textContent = `R1 = ${r1.toFixed(2)} Ω`;
  resultR2.textContent = `R2 = ${r2.toFixed(2)} Ω`;
  resultR3.textContent = `R3 = ${r3.toFixed(2)} Ω`;
  resultRkok.textContent = `Rkok = ${rkok.toFixed(5)} Ω`;
});



// // TEHTÄVÄ 2 KOODI STARTAA TÄSTÄ
// function initializeTask2() {
//     const img1 = document.getElementById("img1");
//     const img2 = document.getElementById("img2");
    
//     const btn1 = document.getElementById("btn1");
//     const btn2 = document.getElementById("btn2");

//     // Dynamically assign image sources
//     img1.src = "./images/tampereTower.jpg";  // Ensure the path is correct
//     img2.src = "./images/oodi.jpg";  // Ensure the path is correct


//     // Get references to the paragraphs
//     const p1 = document.getElementById("p1");
//     const p2 = document.getElementById("p2");

//     // Add click event listeners to the images
//     img1.onclick = function() {
//         p1.innerText = "Image 1 was clicked!";
//     };

//     // Add click event listeners to the buttons
//     btn1.onclick = function() {
//         p1.innerText = "Button 1 was clicked using btn!";
//     };

//     img2.onclick = function() {
//         p2.innerText = "Image 2 was clicked!";
//     };

//     btn2.onclick = function() {
//         p2.innerText = "Button 2 was clicked!";
//     };
// }

// TEHTÄVÄ 3 KOODI STARTAA TÄSTÄ
// function calculateTotalResistance() {
//     const resistors = [100, 100, 100]; // Resistance values in ohms

//     // Create and display resistor elements dynamically
//     const container = document.getElementById("resistor-container");

//     // Clear previous resistors before adding new ones
//     container.innerHTML = ""; // Clear the container

//     // Display R1, R2, R3
//     resistors.forEach((value, index) => {
//         const resistorParagraph = document.createElement("p");
//         resistorParagraph.innerText = `R${index + 1} = ${value} ohm`;
//         container.appendChild(resistorParagraph);
//     });

//     // Calculate equivalent resistance for resistors in parallel
//     const totalResistance = 1 / resistors.reduce((acc, r) => acc + (1 / r), 0);

//     // Update the displayed total resistance (Rkok)
//     const totalResistanceElement = document.getElementById("resistorResult");
//     if (totalResistanceElement) {
//         totalResistanceElement.innerHTML = `Rkok = ${totalResistance.toFixed(5)} ohm`;
//         console.log("Total resistance calculated: ", totalResistance); // For debugging
//     } else {
//         console.log("Total resistance element not found!");
//     }
// }

// // Combine all tasks into a single window.onload
// window.onload = function() {
//     // Initialize tasks
//     initializeTask2();
//     calculateTotalResistance();
// };


//TEHTÄVÄ 4 KOODI STARTAA TÄSTÄ
// task 4
// Variables holding different texts
let text1 = 'Seitsemän veljestä on Aleksis Kiven kirjoittama romaani, joka julkaistiin vuonna 1870. Se kertoo seitsemästä veljeksestä, jotka asuvat Jukolan tilalla.';
let text2 = 'Romaani kuvaa veljesten elämää ja heidän kamppailuaan yhteiskunnan sääntöjen ja odotusten kanssa. Se on yksi suomalaisen kirjallisuuden merkkiteoksista.';

// Variables holding titles for the texts
let title1 = 'Seitsemän veljestä - Osa 1';
let title2 = 'Seitsemän veljestä - Osa 2';

// Inserting titles and texts into the webpage
document.getElementById("title1").innerHTML = title1;
document.getElementById("text1").innerHTML = text1;
document.getElementById("title2").innerHTML = title2;
document.getElementById("text2").innerHTML = text2;


// task 5
document.addEventListener('DOMContentLoaded', () => {
    // One-dimensional array
    let numbers = [3, 5, 7, 9];
    let sum = numbers.reduce((a, b) => a + b, 0);
    let average = sum / numbers.length;
    numbers.push(average);

    // Display one-dimensional array and average
    document.getElementById("oneDArray").innerHTML = `
        Luvut: ${numbers.slice(0, -1).join(', ')}<br>
        Keskiarvo: ${average.toFixed(2)}
    `;

    // Two-dimensional array
    let table = [
        ["Luku 1", "Luku 2", "Luku 3", "Luku 4", "Ka"],
        [3, 5, 7, 9, average.toFixed(2)]
    ];

    // Display two-dimensional array
    let tableContent = table[0].map((label, index) => `${label} = ${table[1][index]}`).join('<br>');
    document.getElementById("twoDArray").innerHTML = tableContent;

    // Insert numbers into the table cells
    document.getElementById('num1').innerText = numbers[0];
    document.getElementById('num2').innerText = numbers[1];
    document.getElementById('num3').innerText = numbers[2];
    document.getElementById('num4').innerText = numbers[3];
    document.getElementById('average').innerText = average.toFixed(2); // Show with 2 decimal points

    // Display table contents in the console
    const rows = document.querySelectorAll('#numbersTable tr');
    rows.forEach(row => {
        const cells = row.querySelectorAll('td');
        cells.forEach((cell, index) => {
            if (index < cells.length - 1) {
                console.log(`Luku ${index + 1} = ${cell.innerText}`);
            } else {
                console.log(`Ka = ${cell.innerText}`);
            }
        });
    });
});

// task 6
// Data from the image
const cars = [
    { model: "V60 D3 Momentum", power: "110/150", co2: 137, priceNoTax: 35500, tax: 5557.97 },
    { model: "V60 D3 Momentum aut", power: "110/150", co2: 146, priceNoTax: 36400, tax: 6747.80 },
    { model: "V60 D4 AWD Momentum aut", power: "140/190", co2: 146, priceNoTax: 38000, tax: 7693.43 },
    { model: "V60 D4 Momentum", power: "140/190", co2: 150, priceNoTax: 39000, tax: 6470.60 },
    { model: "V60 D4 Momentum aut", power: "140/190", co2: 150, priceNoTax: 40600, tax: 7094.55 },
    { model: "V60 D4 AWD Momentum aut", power: "140/190", co2: 150, priceNoTax: 40400, tax: 8141.49 },
];

// Function to add rows to the table
function populateTable() {
    const tableBody = document.getElementById("tableBody");

    cars.forEach(car => {
        const row = document.createElement("tr");

        // Columns
        row.innerHTML = `
            <td>${car.model}</td>
            <td>${car.power}</td>
            <td>${car.co2}</td>
            <td>${car.priceNoTax.toLocaleString()}</td>
            <td>${car.tax.toLocaleString()}</td>
            <td>${(car.priceNoTax + car.tax).toLocaleString()}</td>
        `;

        tableBody.appendChild(row);
    });
}

// Call the function to populate the table
populateTable();

//task 7 
// TEHTÄVÄ 7 KOODI STARTAA TÄSTÄ
// Task 7
const r1 = 100; 
const r2 = 70;  
const r3 = 25;  

// Function to calculate the series resistance of three resistors
function kolmeSarjaan(r1, r2, r3) {
  const Rsarja = r1 + r2 + r3;
  return Rsarja;
}

document.getElementById('koe1').innerHTML = `Kolmesarjaan on: <br> R1 = ${r1}, R2 = ${r2}, R3 = ${r3} <br> Tuloksena: ${kolmeSarjaan(r1, r2, r3)} ohmia`;

// Function to calculate the parallel resistance of three resistors
function kolmeRinnan(r1, r2, r3) {
  const Rrinnan = 1 / (1 / r1 + 1 / r2 + 1 / r3);
  return Rrinnan;
}

document.getElementById('koe2').innerHTML = `Kolme vastuksen rinnankytkentä: <br>
  Käytetyt vastukset: R1 = ${r1}, R2 = ${r2}, R3 = ${r3} <br>
  Tuloksena: ${kolmeRinnan(r1, r2, r3).toFixed(2)} ohmia`;
  
//task 8
// Tehtävä 8 - Koodi alkaa tästä
// Function to calculate the surface area of a sphere
function calculateSurfaceArea(radius) {
  return 4 * Math.PI * Math.pow(radius, 2); // Surface area formula: 4πr²
}

// Function to calculate the volume of a sphere
function calculateVolume(radius) {
  return (4 / 3) * Math.PI * Math.pow(radius, 3); // Volume formula: (4/3)πr³
}

// Function to calculate and display the surface area and volume
function calculateSphere() {
  // Get the radius from the input field
  const radius = parseFloat(document.getElementById('radius').value);

  // Display the results
  document.getElementById('surfaceArea').innerHTML = 
    `Pallon säde: ${radius} cm <br> Pinta-ala: ${calculateSurfaceArea(radius).toFixed(2)} cm²`;

  document.getElementById('volume').innerHTML = 
    `Pallon säde: ${radius} cm <br> Tilavuus: ${calculateVolume(radius).toFixed(2)} cm³`;
}

// Combine all tasks into a single window.onload
window.onload = function() {
    // Initialize tasks
    initializeTask2();
    calculateTotalResistance();
};
  //task 9
    // Tehtävä 9 - Koodi alkaa tästä
    const vastukset = [10, 20, 30]; 
    let yhteisresistanssi = 0;
    
    // Function to calculate total parallel resistance
    function laskeRinnakkaisResistanssi(vastukset) {
        let summa = 0;
        for (let i = 0; i < vastukset.length; i++) {
            summa += 1 / vastukset[i]; // Summing the reciprocals of resistances
        }
        yhteisresistanssi = 1 / summa; // Total resistance is the reciprocal of the sum
        return yhteisresistanssi.toFixed(2); // Return result rounded to 2 decimal places
    }
    
    // Display resistor values and total resistance
    document.getElementById('vastukset').innerHTML = "Vastukset (ohmeina): " + vastukset.join(", ");
    document.getElementById('kokonaisresistanssi').innerHTML = "Kokonaisresistanssi: " + laskeRinnakkaisResistanssi(vastukset) + " ohmia";

    //task 10
    // Tehtävä 10 - Koodi alkaa tästä
    // First product: Drillhammer
    const drillhammer = "BOSCH PBH 2100 RE";
    const drillhammerHinta = 99.90;  // Price for the drillhammer
    
    // Second product: Another device
    const laite = "Makita DF457DWE";  // Another device type
    const laiteHinta = 129.90;  // Price for the other device
    
    // Display products and their prices
    document.getElementById("tuote1").innerHTML = "Poravasara: " + drillhammer + ", Hinta: " + drillhammerHinta + "€";
    document.getElementById("tuote2").innerHTML = "Laite: " + laite + ", Hinta: " + laiteHinta + "€";

      // Tehtävä 11 - Koodi alkaa tästä
          // Task 11
 // Task 11
document.addEventListener('DOMContentLoaded', () => {
  document.addEventListener('contextmenu', event => event.preventDefault());

  function changeText11(event) {
    let box = document.getElementById('box11');
    if (event.button === 0) {
      box.innerText = "Vasen painike";
      box.style.backgroundColor = "lightblue";
    } else if (event.button === 1) {
      box.innerText = "Keskimmäinen painike";
      box.style.backgroundColor = "lightgreen";
    } else if (event.button === 2) {
      box.innerText = "Oikea painike";
      box.style.backgroundColor = "lightcoral";
    }
  }

  document.getElementById('box11').onmousedown = changeText11;
});
    //task 12
    // Tehtävä 12 - Koodi alkaa tästä
// Task 12
document.addEventListener('DOMContentLoaded', () => {
  // Resistance values
  const resistors = [10, 20, 30]; // Ohms

  // Function to calculate series resistance
  function calculateSeries(resistances) {
    let total = 0;
    for (let i = 0; i < resistances.length; i++) {
      total += resistances[i];
    }
    return total;
  }

  // Function to calculate parallel resistance
  function calculateParallel(resistances) {
    let reciprocalSum = 0;
    for (let i = 0; i < resistances.length; i++) {
      reciprocalSum += 1 / resistances[i];
    }
    return 1 / reciprocalSum;
  }

  // Disable right-click menu
  document.addEventListener('contextmenu', event => event.preventDefault());

  // Function to handle mouse clicks
  document.getElementById('box').onmousedown = function(event) {
    let box = document.getElementById('box');
    if (event.button == 0 && !event.altKey) {
      // Left mouse button
      let seriesResult = calculateSeries(resistors);
      box.innerHTML = "Sarjakytkennän tulos: " + seriesResult + " Ω";
      box.style.backgroundColor = "lightgreen";
    } else if (event.button == 0 && event.altKey) {
      // Left mouse button with ALT key
      let parallelResult = calculateParallel(resistors);
      box.innerHTML = "Rinnankytkennän tulos: " + parallelResult.toFixed(2) + " Ω";
      box.style.backgroundColor = "lightblue";
    } else if (event.button == 1) {
      // Middle mouse button
      box.innerHTML = "Keskimmäinen painike painettu!";
      box.style.backgroundColor = "yellow";
    } else if (event.button == 2) {
      // Right mouse button
      box.innerHTML = "Oikea painike painettu!";
      box.style.backgroundColor = "lightcoral";
    }
  }
});

    // //task 13
    // // Tehtävä 13 - Koodi alkaa tästä
    // document.addEventListener('DOMContentLoaded', () => {
    //   // Resistance values
    //   const resistors = [10, 20, 30]; // Ohms
      
    //   // Function to calculate series resistance
    //   function calculateSeries(resistances) {
    //     let total = 0;
    //     for (let i = 0; i < resistances.length; i++) {
    //       total += resistances[i];
    //     }
    //     return total;
    //   }
    
    //   // Function to calculate parallel resistance
    //   function calculateParallel(resistances) {
    //     let reciprocalSum = 0;
    //     for (let i = 0; i < resistances.length; i++) {
    //       reciprocalSum += 1 / resistances[i];
    //     }
    //     return 1 / reciprocalSum;
    //   }
    
    //   // Add event listener for mouse clicks on the box
    //   document.getElementById('calculationBox').addEventListener('mousedown', function(event) {
    //     let resultBox = document.getElementById('calculationBox');
        
    //     // Check if ALT is pressed and left button (event.button == 0) is clicked
    //     if (event.altKey && event.button == 0) {
    //       let parallelResult = calculateParallel(resistors);
    //       resultBox.innerHTML = "Rinnankytkentä: " + parallelResult.toFixed(2) + " Ω";
    //     }
    //     // If only the left mouse button is clicked
    //     else if (event.button == 0) {
    //       let seriesResult = calculateSeries(resistors);
    //       resultBox.innerHTML = "Sarjakytkentä: " + seriesResult + " Ω";
    //     }
    //   });
    // });

    // //task 14
    // // Tehtävä 14 - Koodi alkaa tästä
    // document.addEventListener('DOMContentLoaded', () => {
    //   document.addEventListener('contextmenu', event => event.preventDefault());
    
    //   function changeText14(event) {
    //     let box = document.getElementById('box14');
    //     if (event.button === 0) {
    //       box.innerText = "Vasen painike";
    //       box.style.backgroundColor = "lightblue";
    //     } else if (event.button === 1) {
    //       box.innerText = "Keskimmäinen painike";
    //       box.style.backgroundColor = "lightgreen";
    //     } else if (event.button === 2) {
    //       box.innerText = "Oikea painike";
    //       box.style.backgroundColor = "lightcoral";
    //     }
    //   }
    
    //   document.getElementById('box14').onmousedown = changeText14;
    // });

    // //task 15
    // // Tehtävä 15 - Koodi alkaa tästä
    // document.addEventListener('DOMContentLoaded', () => {
    //   // Resistance values
    //   const resistors = [10, 20, 30]; // Ohms
    
    //   // Function to calculate series resistance
    //   function calculateSeries(resistances) {
    //     let total = 0;
    //     for (let i = 0; i < resistances.length; i++) {
    //       total += resistances[i];
    //     }
    //     return total;
    //   }
    
    //   // Function to calculate parallel resistance
    //   function calculateParallel(resistances) {
    //     let reciprocalSum = 0;
    //     for (let i = 0; i < resistances.length; i++) {
    //       reciprocalSum += 1 / resistances[i];
    //     }
    //     return 1 / reciprocalSum;
    //   }
    
    //   function calculate15(event) {
    //     let resultBox = document.getElementById('resultBox15');
    //     if (event.button === 0 && !event.altKey) {
    //       let seriesResult = calculateSeries(resistors);
    //       resultBox.innerText = "Sarjakytkentä tulos: " + seriesResult + " Ω";
    //       resultBox.style.backgroundColor = "lightblue";
    //     } else if (event.button === 0 && event.altKey) {
    //       let parallelResult = calculateParallel(resistors);
    //       resultBox.innerText = "Rinnankytkentä tulos: " + parallelResult.toFixed(2) + " Ω";
    //       resultBox.style.backgroundColor = "lightgreen";
    //     }
    //   }
    
    //   document.getElementById('resultBox15').onmousedown = calculate15;
    // });

    //task 13
    // Tehtävä 16 - Koodi alkaa tästä
    document.addEventListener('DOMContentLoaded', () => {
      // Dice images array (replace these filenames with actual images you have saved)
      const diceImages = [
        "images/dice/dice-1.png", // Image for dice showing 1
        "images/dice/dice-2.png", // Image for dice showing 2
        "images/dice/dice-3.png", // Image for dice showing 3
        "images/dice/dice-4.png", // Image for dice showing 4
        "images/dice/dice-5.png", // Image for dice showing 5
        "images/dice/dice-6.png"  // Image for dice showing 6
      ];
    
      function rollDice() {
        // Generate a random number between 1 and 6
        const diceNumber = Math.floor(Math.random() * 6) + 1;
    
        // Set the corresponding dice image
        document.getElementById("diceImage").src = diceImages[diceNumber - 1];
    
        // Set the result text based on the rolled number
        let resultText = "Arpa " + diceNumber;
        document.getElementById("resultText").innerText = resultText;
      }
    
      document.getElementById("diceImage").onclick = rollDice;
    });

    //task 14   
    // Tehtävä 14 - Koodi alkaa tästä
    document.addEventListener('DOMContentLoaded', () => {
      function getDateDisplay() {
        const date = new Date();
        const days = ["sunnuntai", "maanantai", "tiistai", "keskiviikko", "torstai", "perjantai", "lauantai"];
        const months = ["tammikuu", "helmikuu", "maaliskuu", "huhtikuu", "toukokuu", "kesäkuu", "heinäkuu", "elokuu", "syyskuu", "lokakuu", "marraskuu", "joulukuu"];
        
        const day = days[date.getDay()];
        const month = months[date.getMonth()];
        
        return `${month} ${day}`;
      }
    
      document.getElementById('dateDisplay').innerText = getDateDisplay();
    });

    //task 17
    // Tehtävä 17 - Koodi alkaa tästä
    document.addEventListener('DOMContentLoaded', () => {
      function getGreeting() {
        const date = new Date();
        const hours = date.getHours();
        const minutes = date.getMinutes();
        const time = hours + minutes / 100;
    
        if (time >= 5.01 && time < 10.01) {
          return "Hyvää huomenta";
        } else if (time >= 10.01 && time < 14.01) {
          return "Hyvää päivää";
        } else if (time >= 14.01 && time < 17.01) {
          return "Hyvää iltapäivää";
        } else if (time >= 17.01 && time < 23.01) {
          return "Hyvää iltaa";
        } else {
          return "Hyvää yötä";
        }
      }
    
      document.getElementById('greeting').innerText = getGreeting();
    });

    // task 15
// Tehtävä 15 - Koodi alkaa tästä
document.addEventListener('DOMContentLoaded', () => {
  function getDateTimeDisplay() {
    const date = new Date();
    const days = ["sunnuntai", "maanantai", "tiistai", "keskiviikko", "torstai", "perjantai", "lauantai"];
    const months = ["tammikuu", "helmikuu", "maaliskuu", "huhtikuu", "toukokuu", "kesäkuu", "heinäkuu", "elokuu", "syyskuu", "lokakuu", "marraskuu", "joulukuu"];
    
    const day = days[date.getDay()];
    const month = months[date.getMonth()];
    const dayOfMonth = date.getDate();
    const year = date.getFullYear();
    const hours = date.getHours().toString().padStart(2, '0');
    const minutes = date.getMinutes().toString().padStart(2, '0');
    
    return `${dayOfMonth}. ${month} ${year} ${day} klo ${hours}:${minutes}`;
  }

  document.getElementById('dateTimeDisplay').innerText = getDateTimeDisplay();
});

//task 16
// Tehtävä 16 - Koodi alkaa tästä
document.addEventListener('DOMContentLoaded', () => {
  function updateClock() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');
    const timeString = `${hours}:${minutes}:${seconds}`;
    document.getElementById('clock').innerText = timeString;
  }

  setInterval(updateClock, 1000); // Update the clock every second
  updateClock(); // Initial call to display the clock immediately
});

//task 17
// Tehtävä 17 - Koodi alkaa tästä
document.addEventListener('DOMContentLoaded', () => {
  function openTextField() {
    var textField = document.getElementById('textField');
    textField.style.display = 'block';
    textField.innerHTML = "<textarea placeholder='Kirjoita teksti tähän'></textarea>";
  }

  // Part a: Show text box 3 seconds after page load
  setTimeout(openTextField, 3000);

  // Part b: Show text box 3 seconds after button click
  document.getElementById('openButton').addEventListener('click', function() {
    setTimeout(openTextField, 3000);
  });
});

//task 18
// Tehtävä 18 - Koodi alkaa tästä
document.addEventListener('DOMContentLoaded', () => {
  // Create objects
  const etunimi = { 1: "Matti", 2: "Teppo", 3: "Liisa" };
  const sukunimi = { 1: "Virtanen", 2: "Korhonen", 3: "Mäkinen" };
  const ika = { 1: 25, 2: 30, 3: 22 };

  // Display the first name, last name, and age for all three persons
  let personInfo = "";
  for (let i = 1; i <= 3; i++) {
    personInfo += `<div class="person-row">${sukunimi[i]} ${etunimi[i]} ${ika[i]} vuotta</div>`;
  }
  document.getElementById('personInfo').innerHTML = personInfo;
});
  
  
// //task 18
// // Tehtävä 18 - Koodi alkaa tästä
// document.addEventListener('DOMContentLoaded', () => {
//   // Create objects
//   const etunimi = { 1: "Matti", 2: "Teppo", 3: "Liisa" };
//   const sukunimi = { 1: "Virtanen", 2: "Korhonen", 3: "Mäkinen" };
//   const ika = { 1: 25, 2: 30, 3: 22 };

//   // Display the first name, last name, and age for all three persons
//   let personInfo = "";
//   for (let i = 1; i <= 3; i++) {
//     personInfo += `${sukunimi[i]} ${etunimi[i]} ${ika[i]} vuotta<br>`;
//   }
//   document.getElementById('personInfo').innerHTML = personInfo;
// });

// Task 19
document.addEventListener('DOMContentLoaded', () => {
  function getGreeting() {
    const date = new Date();
    const hours = date.getHours();
    const minutes = date.getMinutes();
    const time = hours + minutes / 100;

    if (time >= 5.01 && time < 10.01) {
      return "Hyvää huomenta";
    } else if (time >= 10.01 && time < 14.01) {
      return "Hyvää päivää";
    } else if (time >= 14.01 && time < 17.01) {
      return "Hyvää iltapäivää";
    } else if (time >= 17.01 && time < 23.01) {
      return "Hyvää iltaa";
    } else {
      return "Hyvää yötä";
    }
  }

  document.getElementById('greeting').innerText = getGreeting();
});

// Task 20
// Tehtävä 20 - Koodi alkaa tästä
document.addEventListener('DOMContentLoaded', () => {
  function tarkistaKenttä() {
    const kenttä = document.forms["lomake"]["email"].value;
    if (kenttä === "") {
      alert("Lomake-kenttä on jäänyt täyttämättä. Ole hyvä, anna sähköpostiosoitteesi.");
      return false;
    }
  }

  document.forms["lomake"].onsubmit = tarkistaKenttä;
});

// Task 21
document.addEventListener('DOMContentLoaded', () => {
  function showInfoBox(boxId) {
    var box = document.getElementById(boxId);
    box.style.display = "block";
    box.style.top = "50%";
    box.style.left = "50%";
    box.style.transform = "translate(-50%, -50%)";
  }

  function closeInfoBox(boxId) {
    var box = document.getElementById(boxId);
    box.style.display = "none";
  }

  document.getElementById("image").addEventListener("click", function(event) {
    var x = event.clientX; 
    var y = event.clientY; 
    var imageOffset = document.getElementById("image").getBoundingClientRect();
    var imageX = x - imageOffset.left;
    var imageY = y - imageOffset.top;

    // Check if the click falls within the defined areas and show the respective info box
    if (window.innerWidth > 768) {
      // Desktop coordinates
      if (imageX > 175 && imageX < 225 && imageY > 120 && imageY < 175) {
        showInfoBox("infoBox1");
      } else if (imageX > 315 && imageX < 395 && imageY > 200 && imageY < 280) {
        showInfoBox("infoBox2");
      } else if (imageX > 435 && imageX < 485 && imageY > 35 && imageY < 105) {
        showInfoBox("infoBox3");
      }
    } else {
      // Mobile coordinates
      if (imageX > imageOffset.width * 0.25 && imageX < imageOffset.width * 0.32 && imageY > imageOffset.height * 0.50 && imageY < imageOffset.height * 0.58) {
        showInfoBox("infoBox1");
      } else if (imageX > imageOffset.width * 0.46 && imageX < imageOffset.width * 0.56 && imageY > imageOffset.height * 0.73 && imageY < imageOffset.height * 0.88) {
        showInfoBox("infoBox2");
      } else if (imageX > imageOffset.width * 0.73 && imageX < imageOffset.width * 0.93 && imageY > imageOffset.height * 0.55 && imageY < imageOffset.height * 0.75) {
        showInfoBox("infoBox3");
      }
    }
  });

  // Attach close event listeners to the close buttons
  document.querySelectorAll('.closeButton').forEach(button => {
    button.addEventListener('click', function() {
      closeInfoBox(this.parentElement.id);
    });
  });
});

  //   // Task 21
  // document.addEventListener('DOMContentLoaded', () => {
  //   function showInfoBox(boxId) {
  //     var box = document.getElementById(boxId);
  //     box.style.display = "block";
  //     box.style.top = "50%";
  //     box.style.left = "50%";
  //     box.style.transform = "translate(-50%, -50%)";
  //   }
  
  //   function closeInfoBox(boxId) {
  //     var box = document.getElementById(boxId);
  //     box.style.display = "none";
  //   }
  
  //   document.getElementById("image").addEventListener("click", function(event) {
  //     var x = event.clientX; 
  //     var y = event.clientY; 
  //     var imageOffset = document.getElementById("image").getBoundingClientRect();
  //     var imageX = x - imageOffset.left;
  //     var imageY = y - imageOffset.top;
  
  //     // Check if the click falls within the defined areas and show the respective info box
  //     if (window.innerWidth > 768) {
  //       // Desktop coordinates
  //       if (imageX > 170 && imageX < 220 && imageY > 180 && imageY < 235) {
  //         showInfoBox("infoBox1");
  //       } else if (imageX > 320 && imageX < 370 && imageY > 270 && imageY < 350) {
  //         showInfoBox("infoBox2");
  //       } else if (imageX > 490 && imageX < 610 && imageY > 210 && imageY < 280) {
  //         showInfoBox("infoBox3");
  //       }
  //     } else {
  //       // Mobile coordinates
  //       if (imageX > imageOffset.width * 0.25 && imageX < imageOffset.width * 0.32 && imageY > imageOffset.height * 0.50 && imageY < imageOffset.height * 0.58) {
  //         showInfoBox("infoBox1");
  //       } else if (imageX > imageOffset.width * 0.46 && imageX < imageOffset.width * 0.56 && imageY > imageOffset.height * 0.73 && imageY < imageOffset.height * 0.88) {
  //         showInfoBox("infoBox2");
  //       } else if (imageX > imageOffset.width * 0.73 && imageX < imageOffset.width * 0.93 && imageY > imageOffset.height * 0.55 && imageY < imageOffset.height * 0.75) {
  //         showInfoBox("infoBox3");
  //       }
  //     }
  //   });
  
  //   // Attach close event listeners to the close buttons
  //   document.querySelectorAll('.closeButton').forEach(button => {
  //     button.addEventListener('click', function() {
  //       closeInfoBox(this.parentElement.id);
  //     });
  //   });
  // });
     


    // //task 18
    // // Tehtävä 18 - Koodi alkaa tästä
    // document.addEventListener('DOMContentLoaded', () => {
    //   function tarkistaKenttä() {
    //     const kenttä = document.forms["lomake"]["email"].value;
    //     if (kenttä === "") {
    //       alert("Lomake-kenttä on jäänyt täyttämättä. Ole hyvä, anna sähköpostiosoitteesi.");
    //       return false;
    //     }
    //   }
    
    //   document.forms["lomake"].onsubmit = tarkistaKenttä;
    // });








// // TEHTÄVÄ 1 KOODI STARTAA TÄSTÄ
// function vaihdaTeksti1() {
//     const element = document.getElementById("text-above-1");
//     element.innerHTML = "Teksti vaihdettu yläpuolelle";
//     element.classList.add("task1");
    
// }

// function vaihdaTeksti2() {
//     const element = document.getElementById("text-below-1");
//     element.innerHTML = "Teksti vaihdettu alapuolelle";
//     element.classList.add("task1");
// }

// // // TEHTÄVÄ 2 KOODI STARTAA TÄSTÄ// Dynamically add two images
// // window.onload = function() {
// //     const imageContainer = document.getElementById("image-container");

// //     // Create Image 1
// //     const img1 = document.createElement("img");
// //     img1.src = "./images/isse1.jpg";  // Add the first image source
// //     img1.alt = "Kuva 1";
// //     img1.id = "img1";
// //     img1.className = "task2IMG "; // Add CSS class for effect
// //     img1.onclick = changeTextAbove;  // Assign click handler for changing the text above

// //     // Create Image 2
// //     const img2 = document.createElement("img");
// //     img2.src = "./images/isse2.jpg";  // Add the second image source
// //     img2.alt = "Kuva 2";
// //     img2.id = "img2";
// //     img2.className = "task2IMG "; // Add CSS class for effect
// //     img2.onclick = changeTextBelow;  // Assign click handler for changing the text below

// //     // Append images to the container
// //     imageContainer.appendChild(img1);
// //     imageContainer.appendChild(img2);
// // };

// // // Change the text above Image 1
// // function changeTextAbove() {
// //     document.getElementById("text-above-2").innerHTML = "Kuva 1 vaihdettu yläpuolelle";
// // }

// // // Change the text below Image 2
// // function changeTextBelow() {
// //     document.getElementById("text-below-2").innerHTML = "Kuva 2 vaihdettu alapuolelle";
// // }


// window.onload = function() {
//     const img1 = document.getElementById("img1");
//     const img2 = document.getElementById("img2");
    
//     const btn1 = document.getElementById("btn1");
//     const btn2 = document.getElementById("btn2");

//     // Dynamically assign image sources
//     img1.src = "./images/isse1.jpg";  // Ensure the path is correct
//     img2.src = "./images/isse2.jpg";  // Ensure the path is correct

//     // Get references to the paragraphs
//     const p1 = document.getElementById("p1");
//     const p2 = document.getElementById("p2");

//     // Add click event listeners to the images
//     img1.onclick = function() {
//         p1.innerText = "Image 1 was clicked!";
//     };

//     // Add click event listeners to the buttons
//     btn1.onclick = function() {
//         p1.innerText = "Button 1 was clicked using btn!";
//     };

//     img2.onclick = function() {
//         p2.innerText = "Image 2 was clicked!";
//     };

//     btn2.onclick = function() {
//         p2.innerText = "Button 2 was clicked!";
//     };
// };

// // // TEHTÄVÄ 3 KOODI STARTAA TÄSTÄ
// function calculateTotalResistance() {
//     const resistors = [100, 100, 100]; // Resistance values in ohms

//     // Create and display resistor elements dynamically
//     const container = document.getElementById("resistor-container");

//     resistors.forEach((value, index) => {
//         const resistorParagraph = document.createElement("p");
//         resistorParagraph.innerText = `R${index + 1} = ${value} ohm`;
//         container.appendChild(resistorParagraph);
//     });

//     // Calculate equivalent resistance for resistors in parallel
//     const totalResistance = 1 / resistors.reduce((acc, r) => acc + (1 / r), 0);
    
//     // Update the displayed total resistance
//     const totalResistanceElement = document.getElementById("resistorResult");
//     if (totalResistanceElement) {
//         totalResistanceElement.innerText += ` Rkok = ${totalResistance.toFixed(5)} ohm`;
//     }
// }

// // Immediately calculate total resistance when the script loads
// window.onload = function() {
//     calculateTotalResistance();
// };


