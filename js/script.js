//Number only Input
function numberonly(input) {
  var num = /[^0-9]/gi;
  input.value = input.value.replace(num, "");
}

/* Form Validations */
function validateTenDigits(inputString) {
  const regex = /^\d{10}$/; // Matches exactly 10 digits
  return regex.test(inputString);
}

function isNumeric(inputString) {
  return /^\d+$/.test(inputString);
}

// Getting names of elements with their IDs
// 1. Declare a GLOBAL object to store the names
let selectData = {
  inst_dist: "",
  inst_block: "",
  inst: "",
  exam_dist: "",
  exam_block: "",
};

// 2. Short reusable function to get data and update global object
const updateSelect = (id, key, globalKey) => {
  const el = document.getElementById(id);
  if (!el) return;
  el.addEventListener("change", (e) => {
    const opt = e.target.options[e.target.selectedIndex];

    // Update the global object
    selectData[globalKey] = opt.dataset[key] || opt.text;

    // Log the global object to see results outside
    // console.log("Global Data Updated:", selectData);
  });
};

// 3. Initialize for your three elements
updateSelect("inst_dist", "d_name", "inst_dist");
updateSelect("inst_block", "b_name", "inst_block");
updateSelect("inst_name", "inst_name", "inst");
updateSelect("exam_district", "d_name", "exam_dist");
updateSelect("exam_block", "b_name", "exam_block");

// 4. Access anywhere in your script
function checkGlobals() {
  console.log("Current District Name:", selectData.dist);
}

// Initialize Cashfree (use "sandbox" for testing, "production" for live)
const cashfree = Cashfree({ mode: "production" });

// Form submission
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
    const inst_add = document.getElementById("inst_vill").value.trim();

    const inst_vill = document.getElementById("inst_vill").value.trim();
    const inst_dist = document.getElementById("inst_dist").value.trim();
    const inst_block = document.getElementById("inst_block").value.trim();

    const ssse_code = document.getElementById("ssse_code").value.trim();
    const ssse_incharge = document.getElementById("ssse_incharge").value.trim();

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

    if (!dob) errors.push("DOB no is required.");
    if (!inst_type) errors.push("Institute type no is required.");
    if (!inst_name) errors.push("Institute name no is required.");
    if (!inst_add) errors.push("Institute address no is required.");
    if (!inst_dist) errors.push("Institute district no is required.");
    if (!inst_block) errors.push("Institute block no is required.");
    if (!ssse_code) errors.push("SSSE Code is required.");
    if (!ssse_incharge) errors.push("SSSE Incharge is required.");

    // 1. Define your "Ignore Validation" condition
    const isNotApplicable =
      ssse_code === "Not Applicable" && ssse_incharge === "Not Applicable";

    if (!isNotApplicable) {
      if (!exam_district) {
        errors.push("Exam district is required.");
      }
      if (!exam_block) {
        errors.push("Exam Block is required.");
      }
    }

    if (mobile && !validateTenDigits(mobile))
      errors.push("Mobile no must be 10 digits.");
    if (whatsapp && !validateTenDigits(whatsapp))
      errors.push("whatsapp no must be 10 digits.");
    if (mobile && !isNumeric(mobile))
      errors.push("Mobile must contain only numbers.");
    if (whatsapp && !isNumeric(whatsapp))
      errors.push("Whatsapp must contain only numbers.");

    if (errors.length > 0) {
      event.preventDefault();
      document.getElementById("errorMessages").innerHTML = errors
        .map((error) => `<p class="error">${error}</p>`)
        .join("");
      return; // Stop execution if there are errors
    }

    document.getElementById("errorMessages").innerHTML = ""; // Clear previous errors

    document.getElementById("popupData").innerHTML = `
                <p>फॉर्म सबमिशन के बाद आपको SSSE-2026 का रजिस्ट्रेशन फॉर्म का रसीद मिलेगा, उसको सेव कर लें एवं उसमें दिए  गए अनुदेशों को ध्यानपूर्वक पढ़  लें |.</p>
            `;
    // Show popup
    document.getElementById("confirmationPopup").style.display = "block";

    document
      .getElementById("backButton")
      .addEventListener("click", function () {
        // Hide popup
        document.getElementById("confirmationPopup").style.display = "none";
      });

    document
      .getElementById("confirmSubmitButton")
      .addEventListener("click", function () {
        // Submit the form
        //document.getElementById("myForm").submit();
        //Bind data into a sigle variable
        const formData = {
          name: name,
          f_name: f_name,
          classs: classs,
          class_group: class_group,
          vil_city: vil_city,
          block: block,
          district: district,
          mobile: mobile,
          whatsapp: whatsapp,
          aadhar: aadhar,
          dob: dob,
          inst_type: inst_type,
          inst_name: inst_name,
          ssse_code: ssse_code,
          inst_vill: inst_vill,
          inst_dist: inst_dist,
          inst_block: inst_block,
          ssse_incharge: ssse_incharge,
          exam_district: exam_district,
          exam_block: exam_block,

          dis_inst_name: selectData.inst,
          dis_inst_dist: selectData.inst_dist,
          dis_inst_block: selectData.inst_block,
          dis_exam_district: selectData.exam_dist,
          dis_exam_block: selectData.exam_block,
        };
        console.log(formData);
        const isNewInst =
          formData.ssse_code === "Not Applicable" &&
          formData.ssse_incharge === "Not Applicable";

        if (isNewInst) {
          newInstForm(formData);
        } else {
          cashfreePayment(formData);
        }
      });
    // fetch to send form data
  });

// Close the popup if the user clicks outside of it.
/* window.onclick = function (event) {
  if (event.target == document.getElementById("confirmationPopup")) {
    document.getElementById("confirmationPopup").style.display = "none";
  }
}; */

// Function for payment order
function cashfreePayment(data) {
  //1. Create order in php (Send ₹200 & student details)
  fetch("assets/cashfree/create_order.php", {
    method: "POST",
    body: JSON.stringify({ amount: 200, customer_id: data.mobile, ...data }),
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      if (data.success === false) {
        document.getElementById("confirmationPopup").style.display = "none";
        aadharErr.innerHTML = "";
        aadharErr.innerHTML = `
                <p>Aadhar no is already exist. Please check your aadhar no.</p>
            `;
        aadharErr.style.display = "block";
        document.getElementById("myForm").reset();
        if (aadharErr) {
          setTimeout(() => {
            aadharErr.style.display = "none";
          }, 8000);
        }
        return;
      }
      if (!data.payment_session_id) {
        alert("Failed to create payment session. Please try again.");
        return;
      }
      //2. Open Cashfree checkout modal
      let checkoutOptions = {
        paymentSessionId: data.payment_session_id,
        redirectTarget: "_modal", // Opens as a popup
        /* appearance: {
          width: "425px",
          height: "700px",
        }, */
      };

      cashfree.checkout(checkoutOptions).then((result) => {
        if (result.error) {
          alert("There is some payment error, Check for Payment Status");
          console.error(result.error);
        }
        if (result.redirect) {
          console.log("Payment will be redirected");
        }
        if (result.paymentDetails) {
          history.pushState(null, null, location.href);
          window.onpopstate = function () {
            history.pushState(null, null, location.href);
          };

          window.location.href =
            "https://elle-noisy-carelessly.ngrok-free.dev/stremax-new/assets/cashfree/verify.html?txnId=" +
            data.order_id;
        }
      });
    })
    .catch((err) => {
      console.error("Error during order creation:", err);
      alert("Something went wrong. Please try again.");
    });
}

// Function for new inst form submission
function newInstForm(data) {
  const aadharErr = document.getElementById("aadharErr"); // Clear previous errors
  fetch("assets/direct_form_sub.php", {
    method: "POST",
    body: JSON.stringify({ customer_id: data.mobile, ...data }),
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
      const customerId = data.id;
      if (customerId) {
        // REDIRECT with customer ID to form_print.php
        window.location.href = `direct_print.php?customer_id=${encodeURIComponent(customerId)}`;
      } else {
        document.getElementById("confirmationPopup").style.display = "none";
        aadharErr.innerHTML = "";
        aadharErr.innerHTML = `
                <p>Aadhar no is already exist. Please check your aadhar no.</p>
            `;
        aadharErr.style.display = "block";
        document.getElementById("myForm").reset();
        if (aadharErr) {
          setTimeout(() => {
            aadharErr.style.display = "none";
          }, 8000);
        }
      }
    })
    .catch((err) => {
      console.error("Error during form submission:", err);
      alert("Something went wrong. Please try again.");
    });
}

// Loading districts from database
function loadDis() {
  //load districts with fetch
  fetch("assets/get_district.php")
    .then((response) => response.json())
    .then((data) => {
      // Get all district dropdowns by class
      const districtDropdowns = document.querySelectorAll(".districts");

      // Loop through each district dropdown
      districtDropdowns.forEach((dropdown) => {
        dropdown.innerHTML =
          '<option value="">-- Select a District --</option>';

        data.forEach((district) => {
          const option = document.createElement("option");
          option.value = district.d_id;
          option.textContent = district.dname;
          option.dataset.d_name = district.dname;
          dropdown.appendChild(option);
        });
      });

      // Add event listeners to all district dropdowns
      districtDropdowns.forEach((dropdown) => {
        dropdown.addEventListener("change", function () {
          const selectedDistrictId = this.value;
          const targetBlockClass = this.dataset.targetBlock || "blocks"; // Get target block class or use default

          if (selectedDistrictId) {
            fetchBlocks(selectedDistrictId, targetBlockClass);
          } else {
            // Clear all block dropdowns if no district selected
            clearBlockDropdowns(targetBlockClass);
          }
        });
      });
    });
}

// Clear all block dropdowns
function clearBlockDropdowns(blockClass) {
  const blockDropdowns = document.querySelectorAll(`.${blockClass}`);
  blockDropdowns.forEach((dropdown) => {
    dropdown.innerHTML = '<option value="">-- Select a Block --</option>';
    dropdown.disabled = true;
  });
}

// Loading blocks from database
function fetchBlocks(
  d_id,
  blockClass = "blocks",
  instituteClass = "institute",
) {
  const blockDropdowns = document.querySelectorAll(`.${blockClass}`);

  // Show loading state in all block dropdowns
  blockDropdowns.forEach((dropdown) => {
    dropdown.innerHTML = "<option>-- Loading Blocks --</option>";
    dropdown.disabled = true;
  });

  // Clear all institute dropdowns
  //clearInstituteDropdowns(instituteClass);

  // Fetch blocks based on selected district
  fetch(`assets/get_block.php?d_id=${d_id}`)
    .then((response) => response.json())
    .then((data) => {
      // Update all block dropdowns
      blockDropdowns.forEach((dropdown) => {
        dropdown.innerHTML = '<option value="">-- Select a Block --</option>';

        if (data.length > 0) {
          data.forEach((block) => {
            const option = document.createElement("option");
            option.value = block.b_id;
            option.textContent = block.bname;
            option.dataset.b_name = block.bname;
            dropdown.appendChild(option);
          });
          dropdown.disabled = false;
        } else {
          dropdown.innerHTML =
            '<option value="">-- No Blocks Available --</option>';
        }
      });

      // Add event listeners to all block dropdowns
      blockDropdowns.forEach((dropdown) => {
        dropdown.addEventListener("change", function () {
          const selectedBlockId = this.value;
          const targetInstituteClass =
            this.dataset.targetInstitute || instituteClass;

          if (selectedBlockId && targetInstituteClass === "institute1") {
            fetchInst(selectedBlockId, targetInstituteClass);
          }
        });
      });
    })
    .catch((error) => {
      console.error("Error fetching blocks:", error);
      blockDropdowns.forEach((dropdown) => {
        dropdown.innerHTML =
          '<option value="">-- Error Loading Blocks --</option>';
      });
    });
}

// Loading institutes from database (new function based on your existing fetchInst)
function fetchInst(b_id, instituteClass = "institute1") {
  const instituteDropdowns = document.querySelectorAll(`.${instituteClass}`);

  // Show loading state
  instituteDropdowns.forEach((dropdown) => {
    dropdown.innerHTML = "<option>-- Loading Institutes --</option>";
    dropdown.disabled = true;
  });

  // Fetch institutes based on selected block
  fetch(`assets/get_inst.php?b_id=${b_id}`)
    .then((response) => response.json())
    .then((data) => {
      instituteDropdowns.forEach((dropdown) => {
        dropdown.innerHTML = '<option value="">-- Select Institute --</option>';

        if (data.length > 0) {
          data.forEach((institute) => {
            const option = document.createElement("option");
            option.value = institute.inst_id;
            option.textContent = institute.inst_name;
            option.dataset.inst_name = institute.inst_name || "";
            option.dataset.inst_type = institute.inst_type || "";
            option.dataset.ssse_code = institute.ssse_code || "";
            option.dataset.inst_incharge = institute.inst_incharge || "";
            option.dataset.inst_add = institute.inst_add || "";

            dropdown.appendChild(option);
          });
          dropdown.disabled = false;

          // Add "Other" option if needed
          const otherOption = document.createElement("option");
          otherOption.value = "other";
          otherOption.textContent = "-- Other (Add New Institute) --";
          dropdown.appendChild(otherOption);
        } else {
          dropdown.innerHTML =
            '<option value="">-- No Institutes Available --</option>';

          dropdown.disabled = false;
          // Add "Other" option even if no institutes
          const otherOption = document.createElement("option");
          otherOption.value = "other";
          otherOption.textContent = "-- Add New Institute --";
          dropdown.appendChild(otherOption);
        }
      });

      // Add change event listeners
      instituteDropdowns.forEach((dropdown) => {
        dropdown.addEventListener("change", function () {
          if (this.value === "other") {
            // Handle "Other" selection - show custom input
            const container = document.getElementById(
              "custom_institute_container",
            );
            if (container) container.style.display = "block";
          } else if (this.value) {
            // Handle institute selection
            const container = document.getElementById(
              "custom_institute_container",
            );
            if (container) container.style.display = "none";

            const selectedOption = this.options[this.selectedIndex];
            if (
              selectedOption.dataset &&
              Object.keys(selectedOption.dataset).length > 0
            ) {
              displayInstDet(selectedOption.dataset);
            }
          }
        });
      });
    })
    .catch((error) => {
      console.error("Error fetching institutes:", error);
      instituteDropdowns.forEach((dropdown) => {
        dropdown.innerHTML =
          '<option value="">-- Error Loading Institutes --</option>';
      });
    });
}

// New function to display complete institute details
function displayInstDet(data) {
  document.querySelectorAll(".institute1").value = data.inst_name;
  const ssse_code = (document.getElementById("ssse_code").value =
    data.ssse_code);
  document.getElementById("inst_type").value = data.inst_type;
  const ssse_incharge = (document.getElementById("ssse_incharge").value =
    data.inst_incharge);
  document.getElementById("inst_vill").value = data.inst_add;
  if (ssse_code === "Not Applicable" && ssse_incharge === "Not Applicable") {
    document.querySelectorAll(".exams").forEach((el) => {
      el.style.display = "none";
    });
  }
  else {
    document.querySelectorAll(".exams").forEach((el) => {
      el.style.display = "block";
    });
  }
}

// Function to save new institute-------------
function saveNewInstitute() {
  // hide exam district & block
  document.getElementById("ex_dis").style.display = "none";
  document.getElementById("ex_blo").style.display = "none";
  document.getElementById("ex_h6").style.display = "none";
  const b_id = document.getElementById("inst_block").value;
  const instituteName = document.getElementById("new_institute_name").value;
  const instituteType = document.getElementById("new_institute_type").value;
  const instituteAddress = document.getElementById(
    "new_institute_address",
  ).value;

  if (!instituteName || !instituteType || !instituteAddress) {
    alert("Please fill required fields");
    return;
  }

  // Show loading
  document.getElementById("save_institute_btn").disabled = true;
  document.getElementById("save_institute_btn").textContent = "Saving...";

  // Send data to server
  fetch("assets/new_inst.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      b_id: b_id,
      name: instituteName,
      type: instituteType,
      address: instituteAddress,
      // Add other fields as needed
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        alert("Institute added successfully!");
        console.log(data);

        // Add the new institute to dropdown
        const inst_name = document.getElementById("inst_name");
        const inst_add = document.getElementById("inst_vill");
        const inst_type = document.getElementById("inst_type");
        const newOption = document.createElement("option");
        newOption.value = data.inst_id;
        newOption.textContent = instituteName;
        // 1. SET THE DATA ATTRIBUTE (Important: This is what your listener reads)
        newOption.dataset.inst_name = instituteName;
        newOption.dataset.inst_type = data.inst_type;
        newOption.dataset.inst_add = data.inst_add;
        newOption.dataset.ssse_code = "Not Applicable";
        newOption.dataset.inst_incharge = "Not Applicable";

        // 2. Insert before "Other" option
        inst_name.insertBefore(newOption, inst_name.lastElementChild);

        console.log(newOption.dataset.inst_type);
        // 3. Select the new institute
        inst_name.value = data.inst_id;
        inst_type.value = data.inst_type;
        inst_add.value = data.inst_add;

        // 4. TRIGGER THE CHANGE EVENT (This "wakes up" your event listener)
        inst_name.dispatchEvent(new Event("change"));

        // Hide custom input
        document.getElementById("custom_institute_container").style.display =
          "none";

        // Clear form
        document.getElementById("new_institute_name").value = "";
        document.getElementById("new_institute_address").value = "";
        document.getElementById("new_institute_type").value = "";
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
}

// Initialize on page load
loadDis();
