document.addEventListener("DOMContentLoaded", function () {
  const currentPath = window.location.pathname;
  const menuLinks = document.querySelectorAll("ul .nav-link > a");
  menuLinks.forEach((link) => {
    const linkPaths = link.getAttribute("data-active-url").split(",");
    if (linkPaths.includes(currentPath)) {
      link.parentElement.classList.add("active-menu");
    }
  });

  // navigate
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e) => {
      let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
      console.log(1);
      arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  sidebarBtn.addEventListener("click", () => {
    sidebar.classList.toggle("close");
  });

  // append độ tổi
  const currentUrl = window.location.href;
  if (currentUrl.includes("campaigns/adsets")) {
    const min_age = document.getElementById("min_age");
    const max_age = document.getElementById("max_age");
    for (let i = 18; i <= 65; i++) {
      const minOption = document.createElement("option");
      minOption.value = i;
      minOption.textContent = i;
      min_age.appendChild(minOption);

      // Create option for max_age
      const maxOption = document.createElement("option");
      maxOption.value = i;
      maxOption.textContent = i;
      if (i === 65) {
        maxOption.textContent += "+";
      }
      max_age.appendChild(maxOption);
    }

    // select budget
    const budgetSelect = document.getElementById("budget");
    const dailyBudgetInput = document.getElementById("daily-budget-input");
    const lifetimeBudgetInput = document.getElementById(
      "lifetime-budget-input"
    );
    function toggleBudgetInputs() {
      if (budgetSelect.value === "LIFT_TIME") {
        dailyBudgetInput.style.display = "none";
        lifetimeBudgetInput.style.display = "block";
      } else {
        dailyBudgetInput.style.display = "block";
        lifetimeBudgetInput.style.display = "none";
      }
    }
    toggleBudgetInputs();
    budgetSelect.addEventListener("change", toggleBudgetInputs);

    // call api
    TOKEN = getCookie("token_campaign");
    axios
      .get("https://graph.facebook.com/v20.0/act_431786637562827/campaigns", {
        params: {
          fields: "id,name",
        },
        headers: {
          Authorization: `Bearer ${TOKEN}`,
        },
      })
      .then((response) => {
        const data = response.data.data; // Assuming the response structure has a 'data' property
        const select = document.getElementById("campaign");

        // Clear existing options
        select.innerHTML = "";

        // Add new options from the response data
        data.forEach((item) => {
          const option = document.createElement("option");
          option.value = item.id;
          option.textContent = item.name;
          select.appendChild(option);
        });
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const inputs = document.querySelectorAll(".form-control");
  inputs.forEach((input) => {
    if (input.value.trim() !== "") {
      input.classList.add("has-content");
    } else {
      input.classList.remove("has-content");
    }
    input.addEventListener("input", (e) => {
      if (e.target.value.trim() !== "") {
        e.target.classList.add("has-content");
      } else {
        e.target.classList.remove("has-content");
      }
    });
  });
});

// Post data api
function createCampaign(event) {
  event.preventDefault();
  const name = document.getElementById("name").value;
  const purchaseMethod = document.getElementById("purchase_method").value;
  const status = document.getElementById("status").value;
  const objective = document.getElementById("objective").value;
  const data = {
    name,
    purchase_method: purchaseMethod,
    status,
    objective,
  };
  axios
    .post("/campaigns/create", {
      data: data,
    })
    .then(function (response) {
      if (response.status == 200) {
        alert("Thêm thành công");
      }
    })
    .catch(function (error) {
      alert("Có lỗi xảy ra");
    });
}

function createCampaignAdset(event) {
  event.preventDefault();
  console.log(1);
  const name = document.getElementById("name").value;
  const billing_event = document.getElementById("billing_event").value;
  const status = document.getElementById("status").value;
  const lift_time_budget = document.getElementById("lift_time_budget").value;
  const daily_budget = document.getElementById("daily_budget").value;
  const gender = document.getElementById("gender").value;
  const max_age = document.getElementById("max_age").value;
  const min_age = document.getElementById("min_age").value;
  const start_time = document.getElementById("start_time").value;
  // const data = {
  //   name,
  //   purchase_method: purchaseMethod,
  //   status,
  //   objective,
  // };
  // axios
  //   .post("/campaigns/create", {
  //     data: data,
  //   })
  //   .then(function (response) {
  //     if (response.status == 200) {
  //       alert("Thêm thành công");
  //     }
  //   })
  //   .catch(function (error) {
  //     alert("Có lỗi xảy ra");
  //   });
}
