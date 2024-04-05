Cluj_cities = ["Cluj-Napoca", "Turda", "Dej"];
Ilfov_cities = ["Bucuresti", "Otopeni", "Pantelimon"];
Timis_cities = ["Timisoara"];

function update_cities() {
    let selection_value = document.getElementById("counties-combo-box").value;

    document.getElementById("cities-combo-box").options.length = 0;

    switch (selection_value) {
        case "1":
            for (i = 0; i < Cluj_cities.length; i++) {
                let option = document.createElement("option");
                option.text = Cluj_cities[i];
                document.getElementById("cities-combo-box").appendChild(option);
            }
            break;

        case "2":
            for (i = 0; i < Ilfov_cities.length; i++) {
                let option = document.createElement("option");
                option.text = Ilfov_cities[i];
                document.getElementById("cities-combo-box").appendChild(option);
            }
            break;

        case "3":
            for (i = 0; i < Timis_cities.length; i++) {
                let option = document.createElement("option");
                option.text = Timis_cities[i];
                document.getElementById("cities-combo-box").appendChild(option);
            }
            break;

        default:
            break;
    }
}
