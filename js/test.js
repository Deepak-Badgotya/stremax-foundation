// Number only Input

/* function numberonly(input) {
  var num = /[^0-9]/gi;
  input.value = input.value.replace(num, "");
}

// Dependent Select JS
const districtSelect = document.getElementById("district");
const blockSelect = document.getElementById("block");

const blocks = {
  Bokaro: [
    "Bermo",
    "Chandankiyari",
    "Chandrapura",
    "Chas",
    "Chitarpur",
    "Gomia",
    "Jaridih",
    "Kasmar",
    "Nawadih",
  ],
  Chatra: [
    "Chatra",
    "Giddhor",
    "Hunterganj",
    "Itkhori",
    "Kanhachatti",
    "Kunda",
    "Lawalong",
    "Mayurhand",
    "Pathalgada",
    "Pratappur",
    "Simaria",
    "Tandwa",
  ],
  Deoghar: [
    "Deoghar",
    "Devipur",
    "Karon",
    "Madhupur",
    "Margomunda",
    "Mohanpur",
    "Palojori",
    "Sarath",
    "Sarwan",
    "Sonaraithari",
  ],
  Dhanbad: [
    "Baghmara",
    "Baliapur",
    "Dhanbad",
    "Egarkund",
    "Govindpur",
    "Kaliasole",
    "Nirsa / Chirkunda",
    "Purbi Tundi",
    "Topchanchi",
    "Tundi",
  ],
  Dumka: [
    "Dumka",
    "Gopikandar",
    "Jama",
    "Jarmundi",
    "Kathikund",
    "Masaliya",
    "Ramgarh",
    "Ranishwar",
    "Saraiyahat",
    "Shikaripara",
  ],
  EastSinghbhum: [
    "Baharagora",
    "Boram",
    "Chakulia",
    "Dhalbhumgarh",
    "Dumaria",
    "Ghatshila",
    "Jamshedpur",
    "Gurabandha",
    "Musabani",
    "Patamda",
    "Potka",
  ],
  Garhwa: [
    "Baragar",
    "Bardiha",
    "Bhandaria",
    "Bhawnathpur",
    "Bishunpura",
    "Chinia",
    "Danda",
    "Dandai",
    "Dhurki",
    "Garhwa",
    "Kandi",
    "Ketar",
    "Majhiaon",
    "Meral (Pipra Kalan)",
    "Nagaruntari",
    "Ramkanda",
    "Ramna",
    "Ranka",
    "Sagma",
  ],
  Giridih: [
    "Bagodar",
    "Bengabad",
    "Birni",
    "Deori",
    "Dhanwar",
    "Dumri",
    "Gandey",
    "Gawan",
    "Giridih",
    "Jamua",
    "Pirtand",
    "Sariya",
    "Tisri",
  ],
  Godda: [
    "Basantrai",
    "Boarijore",
    "Godda",
    "Mahagama",
    "Meharma",
    "Pathargama",
    "Poraiyahat",
    "Sundarpahari",
    "Thakurgangti",
  ],
  Gumla: [
    "Albert Ekka (Jari)",
    "Basia",
    "Bishunpur",
    "Chainpur",
    "Dumri",
    "Ghaghra",
    "Gumla (Sadar Block)",
    "Kamdara",
    "Palkot",
    "Raidih",
    "Sisai",
    "Verno",
  ],
  Hazaribag: [
    "Barhi",
    "Barkagaon",
    "Barkatha",
    "Bishungarh",
    "Chalkusa",
    "Chaouparan",
    "Churchu",
    "Dadi",
    "Daru",
    "Sadar ( Hazaribag Town)",
    "Ichak",
    "Katkamdag",
    "Katkamsandi",
    "Keredari",
    "Padma",
    "Tatijhariya",
    "Sadar 1 (Hazaribagh Village)",
  ],
  Jamtara: [
    "Fatehpur",
    "Jamtara",
    "Karmatanr (or Vidyasagar)",
    "Kundhit (Sudrakshipur)",
    "Nala",
    "Narayanpur",
  ],
  Khunti: [
    "Arki block",
    "Karra block",
    "Khunti block",
    "Murhu block",
    "Rania block",
    "Torpa block",
  ],
  Koderma: [
    "Chandwara",
    "Domchanch",
    "Jainagar",
    "Koderma",
    "Markacho",
    "Satgawan",
  ],
  Latehar: [
    "Balumath",
    "Bariyatu ",
    "Barwadih",
    "Chandwa",
    "Garu",
    "Herhanj",
    "Latehar",
    "Mahuadanr",
    "Manika",
  ],
  Lohardaga: [
    "Bhandra",
    "Kairo",
    "Kisko",
    "Kuru",
    "Lohardaga",
    "Peshrar",
    "Senha",
  ],
  Pakur: [
    "Amrapara Block",
    "Hiranpur Block",
    "Littipara Block",
    "Maheshpur Block",
    "Pakuria Block",
    "Pakur Block",
  ],
  Palamu: [
    "Chainpur",
    "Chhatarpur",
    "Haidernagar",
    "Hariharganj",
    "Hussainabad",
    "Manatu",
    "Mohamadganj",
    "NaudihaBazar",
    "Nawabazar",
    "Nilambar-Pitambarpur",
    "Pandu",
    "Pandwa",
    "Panki",
    "Patan",
    "Pipra",
    "Ramgarh",
    "Sadar Medininagar",
    "Satbarwa",
    "Tarhasi",
    "UtariRoad",
  ],
  Ramgarh: ["Chitarpur", "Dulmi", "Gola", "Mandu", "Patratu", "Ramgarh"],
  Ranchi: [
    "Angara",
    "Bero",
    "Burmu",
    "Bundu",
    "Chanho",
    "Itki",
    "Kanke",
    "Khelari",
    "Lapung",
    "Mandar",
    "Nagri",
    "Namkum",
    "Ormanjhi",
    "Rahe",
    "Ratu",
    "Silli",
    "Sonahatu",
    "Tamar",
  ],
  Sahebganj: [
    "Barhait Block",
    "Barharwa Block",
    "Borio Block",
    "Mandro Block",
    "Pathna Block",
    "Rajmahal Block",
    "Sahibganj Block",
    "Taljhari Block",
    "Udhwa Block",
  ],
  SaraikelaKharsawan: [
    "Chandil",
    "Gamharia",
    "Ichagarh",
    "Kharsawan",
    "Kuchai",
    "Kukru",
    "Nimdih",
    "Rajnagar",
    "Seraikella",
  ],
  Simdega: [
    "Bano",
    "Bansor",
    "Bolba",
    "Jaldega",
    "Kersai",
    "Kolebira",
    "Kurdeg",
    "Pakara Tann",
  ],
  WestSinghbhum: [
    "Anandpur",
    "Bandgaon",
    "Chaibasa",
    "Chakradharpur",
    "Goilkera",
    "Gudri",
    "Hat Gamharia",
    "Jagannathpur",
    "Jhinkpani",
    "Khuntpani",
    "Kumardungi",
    "Majhgaon",
    "Manjhari",
    "Manoharpur",
    "Noamundi",
    "Sonua",
    "Tantnagar",
    "Tonto",
  ],
};

districtSelect.addEventListener("change", function () {
  const selectedDistrict = this.value;
  blockSelect.innerHTML = '<option value="">Select Block</option>'; // Clear previous options

  if (selectedDistrict && blocks[selectedDistrict]) {
    blocks[selectedDistrict].forEach((block) => {
      const option = document.createElement("option");
      option.value = block;
      option.textContent = block;
      blockSelect.appendChild(option);
    });
  }
});

// Form Validations =====
function validateTenDigits(inputString) {
  const regex = /^\d{10}$/; // Matches exactly 10 digits
  return regex.test(inputString);
}

function validateTwelveDigits(inputString) {
  const regex = /^\d{12}$/; // Matches exactly 10 digits
  return regex.test(inputString);
}

function isNumeric(inputString) {
  return /^\d+$/.test(inputString);
}

document
  .getElementById("submitButton")
  .addEventListener("click", function (event) {
    event.preventDefault(); // Prevent default form submission

    //new data
    // Candidate Details:
    const name = document.getElementById("name").value.trim();
    const f_name = document.getElementById("f_name").value.trim();
    const classs = document.getElementById("class").value.trim();
    const class_group = document.getElementById("class_group").value.trim();
    //Candidate Address:
    const vil_city = document.getElementById("vil_city").value.trim();
    const blocks = document.getElementById("blocks").value.trim();
    const districts = document.getElementById("districts").value.trim();
    const mobile = document.getElementById("mobile").value.trim();
    const whatsapp = document.getElementById("whatsapp").value.trim();
    const aadhar = document.getElementById("aadhar").value.trim();
    const dob = document.getElementById("dob").value.trim();
    //Insti
    const inst_type = document.getElementById("inst_type").value.trim();
    const inst_name = document.getElementById("inst_name").value.trim();
    // Inst Address
    const inst_vill = document.getElementById("inst_vill").value.trim();
    const district = document.getElementById("district").value;
    const block = document.getElementById("block").value;

    let errors = [];

    if (!name) errors.push("Candidate's name is required.");
    if (!f_name) errors.push("Father's name is required.");
    if (!classs) errors.push("Class is required.");
    if (!class_group) errors.push("Class group is required.");

    if (!vil_city) errors.push("Village/City is required.");
    if (!blocks) errors.push("Block is required.");
    if (!districts) errors.push("District is required.");
    if (!mobile) errors.push("Mobile no. is required.");
    if (!whatsapp) errors.push("Whatsapp no. is required.");
    if (!aadhar) errors.push("Aadhar no. is required.");
    if (!dob) errors.push("DOB is required.");

    if (!inst_type) errors.push("Institute type is required.");
    if (!inst_name) errors.push("Institute name is required.");

    if (!inst_vill) errors.push("Institute village is required.");
    if (!district) errors.push("Institute district is required.");
    if (!block) errors.push("Institute Block is required.");

    if (aadhar && !validateTwelveDigits(aadhar))
      errors.push("Registration must be 12 digits.");
    if (mobile && !validateTenDigits(mobile))
      errors.push("Mobile no must be 10 digits.");
    if (whatsapp && !validateTenDigits(whatsapp))
      errors.push("whatsapp no must be 10 digits.");

    if (aadhar && !isNumeric(aadhar))
      errors.push("Aadhar no. must contain only numbers.");
    if (mobile && !isNumeric(mobile))
      errors.push("Mobile no. must contain only numbers.");
    if (whatsapp && !isNumeric(whatsapp))
      errors.push("Whatsapp no. must contain only numbers.");

    if (errors.length > 0) {
      document.getElementById("errorMessages").innerHTML = errors
        .map((error) => `<p class="error">${error}</p>`)
        .join("");
      return; // Stop execution if there are errors
    }

    document.getElementById("errorMessages").innerHTML = ""; // Clear previous errors

    document.getElementById("popupData").innerHTML = `
				<p>फॉर्म सबमिशन के बाद आपको SSSE-2026 का रजिस्ट्रेशन रिक्वेस्ट फॉर्म का रसीद मिलेगा, उसको सेव कर लें एवं उसमें दिए  गए अनुदेशों को ध्यानपूर्वक पढ़  लें |.</p>
			`;
    // Show popup
    document.getElementById("confirmationPopup").style.display = "block";
  });

document.getElementById("backButton").addEventListener("click", function () {
  // Hide popup
  document.getElementById("confirmationPopup").style.display = "none";
});

document
  .getElementById("confirmSubmitButton")
  .addEventListener("click", function () {
    // Submit the form
    document.getElementById("myForm").submit();
  });

// Close the popup if the user clicks outside of it.
window.onclick = function (event) {
  if (event.target == document.getElementById("confirmationPopup")) {
    document.getElementById("confirmationPopup").style.display = "none";
  }
};

// New code analyzation =================
function fetchInstitutes(b_id) {
  const inst_name = document.getElementById("inst_name");
  inst_name.innerHTML = "<option>-- Loading Institutes --</option>";
  inst_name.disabled = true;

  // Hide custom input field initially
  document.getElementById("custom_institute_container").style.display = "none";

  fetch(`assets/get_institutes.php?b_id=${b_id}`)
    .then((response) => response.json())
    .then((data) => {
      inst_name.innerHTML = '<option value="">-- Select Institute --</option>';

      if (data.length > 0) {
        data.forEach((institute) => {
          const option = document.createElement("option");
          option.value = institute.i_id;
          option.textContent = institute.iname;

          // Store institute data
          option.dataset.address = institute.address || "";
          option.dataset.phone = institute.phone || "";
          option.dataset.email = institute.email || "";

          inst_name.appendChild(option);
        });

        // Add "Other" option at the end
        const otherOption = document.createElement("option");
        otherOption.value = "other";
        otherOption.textContent = "-- Other (Add New Institute) --";
        inst_name.appendChild(otherOption);

        inst_name.disabled = false;

        // Add change event for institute selection
        inst_name.addEventListener("change", function () {
          const selectedValue = this.value;

          if (selectedValue === "other") {
            // Show custom input field for new institute
            document.getElementById(
              "custom_institute_container",
            ).style.display = "block";
            document.getElementById("institute_details").style.display = "none";
          } else if (selectedValue) {
            // Hide custom input and show selected institute details
            document.getElementById(
              "custom_institute_container",
            ).style.display = "none";
            const selectedOption = this.options[this.selectedIndex];
            displayInstituteDetails(selectedOption.dataset);
          } else {
            // Hide both if nothing selected
            document.getElementById(
              "custom_institute_container",
            ).style.display = "none";
            clearInstituteDetails();
          }
        });
      } else {
        inst_name.innerHTML =
          '<option value="">-- No Institutes Available --</option>';

        // Add "Other" option even if no institutes
        const otherOption = document.createElement("option");
        otherOption.value = "other";
        otherOption.textContent = "-- Add New Institute --";
        inst_name.appendChild(otherOption);

        inst_name.disabled = false;

        inst_name.addEventListener("change", function () {
          if (this.value === "other") {
            document.getElementById(
              "custom_institute_container",
            ).style.display = "block";
          } else {
            document.getElementById(
              "custom_institute_container",
            ).style.display = "none";
          }
        });
      }
    });
}

// Function to save new institute
function saveNewInstitute() {
  const b_id = document.getElementById("inst_block").value;
  const instituteName = document.getElementById("new_institute_name").value;
  const instituteAddress = document.getElementById(
    "new_institute_address",
  ).value;

  if (!instituteName) {
    alert("Please enter institute name");
    return;
  }

  // Show loading
  document.getElementById("save_institute_btn").disabled = true;
  document.getElementById("save_institute_btn").textContent = "Saving...";

  // Send data to server
  fetch("assets/save_institute.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      b_id: b_id,
      name: instituteName,
      address: instituteAddress,
      // Add other fields as needed
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        alert("Institute added successfully!");

        // Add the new institute to dropdown
        const inst_name = document.getElementById("inst_name");
        const newOption = document.createElement("option");
        newOption.value = data.i_id;
        newOption.textContent = instituteName;

        // Insert before "Other" option
        inst_name.insertBefore(newOption, inst_name.lastElementChild);

        // Select the new institute
        inst_name.value = data.i_id;

        // Hide custom input
        document.getElementById("custom_institute_container").style.display =
          "none";

        // Clear form
        document.getElementById("new_institute_name").value = "";
        document.getElementById("new_institute_address").value = "";
      } else {
        alert("Error: " + data.message);
      }
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("Failed to save institute");
    })
    .finally(() => {
      document.getElementById("save_institute_btn").disabled = false;
      document.getElementById("save_institute_btn").textContent =
        "Save Institute";
    });
} */

// temp here============

// Clear all institute dropdowns
/* function clearInstituteDropdowns(instituteClass) {
  const instituteDropdowns = document.querySelectorAll(`.${instituteClass}`);
  instituteDropdowns.forEach((dropdown) => {
    dropdown.innerHTML = '<option value="">-- Select Institute --</option>';
    dropdown.disabled = true;
  });
} */

