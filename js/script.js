//Number only Input
function numberonly(input) {
  var num = /[^0-9]/gi;
  input.value = input.value.replace(num, "");
}

/* ===== SSSE Verification with institute address =====*/
// District-Block data
/*const districtBlocks = {
  jaipur: [
    { n: "Gopalpura", c: "02" },
    { n: "Amer", c: "05" },
  ],
  udaipur: [
    { n: "Girwa", c: "01" },
    { n: "Kotra", c: "04" },
  ],
};

// DOM Elements
const instDistrictSelect = document.getElementById("inst_dist");
const instBlockSelect = document.getElementById("inst_block");
const ssseInput = document.getElementById("userSSSECode");
const errorDiv = document.getElementById("ssseError");
const previewDiv = document.getElementById("ssseCodePreview");

// Generate district-block code
const generateCode = (district, blockName, blockCode) =>
  `${district.slice(0, 3).toUpperCase()}${blockName.slice(0, 3).toUpperCase()}${blockCode.padStart(2, "0")}`;

// Validate SSSE code
const validateSSSE = (input, expected) => {
  if (!input || input.length !== 11)
    return { valid: false, msg: "Code must be 11 characters" };
  if (!/^[A-Z]{6}\d{5}$/.test(input))
    return { valid: false, msg: "Format: 6 letters + 5 digits" };
  if (input.slice(0, 8) !== expected)
    return {
      valid: false,
      msg: `District-Block mismatch. Expected: ${expected}XXX`,
    };
  if (!/^\d{3}$/.test(input.slice(8)))
    return { valid: false, msg: "Institution code must be 3 digits" };
  return { valid: true, institution: input.slice(8) };
};

// Update block dropdown
districtSelect.onchange = () => {
  const district = districtSelect.value;
  blockSelect.innerHTML = '<option value="">Select Block</option>';
  blockSelect.disabled = !district;

  if (district && districtBlocks[district]) {
    districtBlocks[district].forEach((b) => {
      blockSelect.innerHTML += `<option value="${b.n}|${b.c}">${b.n} (${b.c})</option>`;
    });
  }

  previewDiv.style.display = "none";
  ssseInput.value = "";
  errorDiv.textContent = "";
};

/* ===== Institute District & Block Sellection =====*/
const instDistrictSelect = document.getElementById("inst_dist");
const instBlockSelect = document.getElementById("inst_block");

const instBlocks = {
  hazaribag_inst: [
    "Barhi_inst",
    "Barkagaon_inst",
    "Barkatha_inst",
    "Bishungar_insth",
    "Churchu_inst",
    "Dari_inst",
    "Keredari_inst",
    "Padma_inst",
    "Daru_inst",
    "Ichak_inst",
    "Tatijhariya_inst",
    "Katkamdag_inst",
    "Katkamsandi_inst",
    "Chauparan_inst",
    "Sadar H.bag_inst",
  ],
  koderma_inst: ["Markacho_inst", "Sadar Koderma_inst"],
  chatra_inst: [
    "Tandwa_inst",
    "Hunterganj_inst",
    "Gidhor_inst",
    "Simariya_inst",
    "Itkhori_inst",
    "Mayurhand_inst",
  ],
  ramgarh_inst: ["Mandu_inst"],
  latehar_inst: ["Balumath_inst"],
  palamu_inst: ["Bishrampur_inst", "Untari Road_inst"],
};

instDistrictSelect.addEventListener("change", function () {
  const selectedInstDistrict = this.value;
  instBlockSelect.innerHTML = '<option value="">Select Block</option>'; // Clear previous options

  if (selectedInstDistrict && instBlocks[selectedInstDistrict]) {
    instBlocks[selectedInstDistrict].forEach((inst_block) => {
      const option = document.createElement("option");
      option.value = inst_block;
      option.textContent = inst_block;
      instBlockSelect.appendChild(option);
    });
  }
});

/* ===== District & Block Sellection =====*/
const districtSelect = document.getElementById("exam_district");
const blockSelect = document.getElementById("exam_block");

const blocks = {
  hazaribag: [
    "Barhi",
    "Barkagaon",
    "Barkatha",
    "Bishungarh",
    "Churchu",
    "Dari",
    "Keredari",
    "Padma",
    "Daru",
    "Ichak",
    "Tatijhariya",
    "Katkamdag",
    "Katkamsandi",
    "Chauparan",
    "Sadar H.bag",
  ],
  koderma: ["Markacho", "Sadar Koderma"],
  chatra: [
    "Tandwa",
    "Hunterganj",
    "Gidhor",
    "Simariya",
    "Itkhori",
    "Mayurhand",
  ],
  ramgarh: ["Mandu"],
  latehar: ["Balumath"],
  palamu: ["Bishrampur", "Untari Road"],
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

/* Form Validations */
function validateTenDigits(inputString) {
  const regex = /^\d{10}$/; // Matches exactly 10 digits
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

    const name = document.getElementById("name").value.trim();
    const f_name = document.getElementById("f_name").value.trim();
    const classs = document.getElementById("class").value.trim();
    const class_group = document.getElementById("class_group").value.trim();

    const vil_city = document.getElementById("vil_city").value.trim();
    const block = document.getElementById("block").value.trim();
    const district = document.getElementById("district").value.trim();
    const mobile = document.getElementById("mobile").value.trim();
    const whatsapp = document.getElementById("whatsapp").value.trim();
    const aadhar = document.getElementById("aadhar").value.trim();
    const dob = document.getElementById("dob").value.trim();

    const inst_type = document.getElementById("inst_type").value.trim();
    const inst_name = document.getElementById("inst_name").value.trim();
    //const ssse_code = document.getElementById("ssse_code").value.trim();

    const inst_vill = document.getElementById("inst_vill").value.trim();
    const inst_block = document.getElementById("inst_block").value.trim();
    const inst_dist = document.getElementById("inst_dist").value.trim();

    const exam_district = document.getElementById("exam_district").value;
    const exam_block = document.getElementById("exam_block").value;

    let errors = [];

    if (!name) errors.push("Candidate's name is required.");
    if (!f_name) errors.push("Father's name is required.");
    if (!classs) errors.push("Class is required.");
    if (!class_group) errors.push("Class group is required.");

    if (!vil_city) errors.push("Village/City is required.");
    if (!block) errors.push("Block is required.");
    if (!district) errors.push("District is required.");
    if (!mobile) errors.push("Mobile no is required.");
    if (!whatsapp) errors.push("Whatsapp no is required.");
    if (!exam_district) errors.push("Exam district is required.");
    if (!exam_block) errors.push("Exam Block is required.");

    if (mobile && !validateTenDigits(mobile))
      errors.push("Mobile no must be 10 digits.");
    if (whatsapp && !validateTenDigits(whatsapp))
      errors.push("whatsapp no must be 10 digits.");
    if (mobile && !isNumeric(mobile))
      errors.push("Mobile must contain only numbers.");
    if (whatsapp && !isNumeric(whatsapp))
      errors.push("Whatsapp must contain only numbers.");

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

/*===== Multi Step Form JS =====*/
const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}

// Loading districts from database
function loadDis() {
  //load districts with fetch
  fetch("assets/get_district.php")
    .then((response) => response.json())
    .then((data) => {
      const inst_dist = document.getElementById("inst_dist");
      inst_dist.innerHTML = '<option value="">-- Select a District --</option>'; // Clear loading text

      data.forEach((district) => {
        const option = document.createElement("option");
        option.value = district.d_id; // Use ID as the value
        option.textContent = district.dname; // Use name for display
        inst_dist.appendChild(option);
      });
      // Add event listener to district dropdown
      inst_dist.addEventListener("change", function () {
        const selectedDistrictId = this.value;
        if (selectedDistrictId) {
          fetchBlocks(selectedDistrictId);
        } else {
          // Clear blocks if no district selected
          const inst_block = document.getElementById("inst_block");
          inst_block.innerHTML =
            '<option value="">-- Select a Block --</option>';
        }
      });
    });
}

loadDis();

//Loading blocks from database
function fetchBlocks(d_id) {
  const inst_block = document.getElementById("inst_block");

  // Show loading state
  inst_block.innerHTML = "<option>-- Loading Blocks --</option>";

  // Fetch blocks based on selected district
  fetch(`assets/get_block.php?d_id=${d_id}`)
    .then((response) => response.json())
    .then((data) => {
      // Clear loading text
      inst_block.innerHTML = '<option value="">-- Select a Block --</option>';

      if (data.length > 0) {
        data.forEach((block) => {
          const option = document.createElement("option");
          option.value = block.b_id; // Use block ID as value
          option.textContent = block.bname; // Use block name for display
          inst_block.appendChild(option);
          inst_block.disabled = false;
          // Add event listener to block dropdown
          inst_block.addEventListener("change", function () {
            const selectedBlockId = this.value;
            if (selectedBlockId) {
              fetchInst(selectedBlockId);
            } else {
              // Clear insitute if no block selected
              const inst_name = document.getElementById("inst_name");
              inst_name.innerHTML =
                '<option value="">-- Select a Institute --</option>';
            }
          });
        });
      } else {
        inst_name.innerHTML =
          '<option value="">-- No Institute Availabe--</option>';
      }
    })
    .catch((error) => {
      console.error("Error fetching Institutes:", error);
      inst_name.innerHTML =
        '<option value="">-- Error Loading Institutes --</option>';
    });
}

// Loading institutes for db
function fetchInst(b_id) {
  const inst_name = document.getElementById("inst_name");

  // Show loading state
  inst_name.innerHTML = "<option>-- Loading Institues --</option>";

   // Hide custom input field initially
  document.getElementById("custom_institute_container").style.display = "none";
  // Fetch Institues based on selected district
  fetch(`assets/get_inst.php?b_id=${b_id}`)
    .then((response) => response.json())
    .then((data) => {
      // Clear loading text
      inst_name.innerHTML = '<option value="">-- Select a Institue --</option>';

      if (data.length > 0) {
        data.forEach((institue) => {
          const option = document.createElement("option");
          option.value = institue.inst_id; // Use institue ID as value
          option.textContent = institue.inst_name; // Use institue name for display
          option.dataset.ssse_code = institue.ssse_code || "";
          option.dataset.inst_incharge = institue.inst_incharge || "";
          inst_name.appendChild(option);
          inst_name.disabled = false;
          // Add event listener to institue dropdown to get SSSE code & incharge of institute
          inst_name.addEventListener("change", function () {
            const selectedOption = this.options[this.selectedIndex];
            if (this.value) {
              displayInstDet(selectedOption.dataset);
            } else {
              // Clear insitute if no Inst selected
              clearInstDet();
            }
          });
        });
      } else {
        inst_name.innerHTML =
          '<option value="">-- No Institute Availabe--</option>';
      }
    })
    .catch((error) => {
      console.error("Error fetching Institutes:", error);
      inst_name.innerHTML =
        '<option value="">-- Error Loading Institutes --</option>';
    });
}

// New function to display complete institute details
function displayInstDet(data) {
  document.getElementById("ssse_code").value = data.ssse_code;
  document.getElementById("ssse_incharge").value = data.inst_incharge;
}
