function checkAverage() {
    console.log("Fungsi checkAverage dipanggil");

    let toolsManagement = parseFloat(document.getElementById('tools_management').value);
    let robotBuilding = parseFloat(document.getElementById('robot_building').value);
    let coding = parseFloat(document.getElementById('coding').value);
    let focus = parseFloat(document.getElementById('focus').value);
    let interaction = parseFloat(document.getElementById('interaction').value);

    console.log("Nilai input:", toolsManagement, robotBuilding, coding, focus, interaction);

    if (isNaN(toolsManagement) || isNaN(robotBuilding) || isNaN(coding) || isNaN(focus) || isNaN(interaction)) {
        alert("Pastikan semua nilai telah diinput.");
        return;
    }

    let total = toolsManagement + robotBuilding + coding + focus + interaction;
    let average = total / 5;

    let resultText = `Rata-rata: ${average.toFixed(2)} - `;

    if (average >= 3) {
        resultText += "Lulus";
        document.getElementById('result').style.color = "green";
    } else {
        resultText += "Gagal";
        document.getElementById('result').style.color = "red";
    }

    document.getElementById('result').innerText = resultText;
    console.log("Hasil:", resultText);
}
