/**
 * ! This is data loading in the cards on the careers page
 *  **/

console.log("load script");

const addFilterItemsToCard = async () => {
  const elementsCard = document.querySelectorAll(".rt-list__offer-item");
  for (const card of elementsCard) {
    const dataID = card.getAttribute("data-offer-id");
    const eventElementID = "rt-list__offer-item-" + dataID;

    card.setAttribute("id", eventElementID);

    const response = await fetch(`/wp-json/v1/careers/${dataID}`, {
      method: "GET",
    });
    const data = await response.json();
    if (data.offer_tags === "") {
      card.innerHTML +=
        '<span class="skill" style="display:none!important;">null</span>';
    } else {
      card.innerHTML +=
        '<span class="skill" style="display:none!important;">' +
        data.offer_tags +
        "</span>";
    }
  }
};

const checkOnElement = async () => {
  console.log("function started");
  const findElement = document.querySelector(".rt-list__items");
  if (findElement !== null && findElement !== undefined) {
    try {
      console.log("test 1");
      await addFilterItemsToCard();
      console.log("test 2");
      await getUrlData();
      console.log("test 3");
      await countCard();
      console.log("test 4");
    } catch (error) {
      console.log(error);
    }
    await loadingIcon();
  } else {
    setTimeout(() => {
      checkOnElement();
    }, 500);
  }
};
addEventListener("DOMContentLoaded", () => {
  console.log("dom loaded");
  checkOnElement();
});

/**
 * ! this is the dropdown menu for the careers page
 *  **/
const elementNavbarfirstDiv = document.querySelector(".dropdown-careers");
const elementNavbarfirstInput = document.querySelector(
  ".dropdown-careers input"
);
const elementNavbarSecondDiv = document.querySelector(".dropdown-careers-1");

const navbarDropdownPackages = () => {
  elementNavbarfirstDiv?.classList.remove("activedropdown");
  elementNavbarSecondDiv?.classList.remove("activedropdown");
};

window.addEventListener("scroll", () => {
  const scrollpos = window.scrollY;

  if (scrollpos > 200) {
    navbarDropdownPackages();
  }
});

document.addEventListener("click", (event) => {
  const isClickInsideElement = elementNavbarfirstDiv?.contains(event.target);
  if (!isClickInsideElement) {
    elementNavbarfirstDiv?.classList.remove("activedropdown");
  }
});

document.addEventListener("click", (eventSec) => {
  const isClickInsideElementSecond = elementNavbarSecondDiv?.contains(
    eventSec.target
  );
  if (!isClickInsideElementSecond) {
    elementNavbarSecondDiv?.classList.remove("activedropdown");
  }
});

elementNavbarfirstDiv.addEventListener("click", () => {
  elementNavbarfirstDiv.classList.toggle("activedropdown");
  elementNavbarSecondDiv.classList.remove("activedropdown");
});

elementNavbarSecondDiv.addEventListener("click", () => {
  elementNavbarSecondDiv.classList.toggle("activedropdown");
  elementNavbarfirstDiv.classList.remove("activedropdown");
});

// Select all dropdown items in both dropdowns
const dropdownItems = document.querySelectorAll(
  ".dropdown-careers .options div, .dropdown-careers-1 .options-1 div"
);

// Attach click event listeners to each dropdown item
dropdownItems.forEach((item) => {
  item.addEventListener("click", () => {
    const value = item.getAttribute("value");
    const inputField = item
      .closest(".dropdown-careers, .dropdown-careers-1")
      .querySelector("input");
    changeValueAndURL(value, inputField);
  });
});

const changeValueAndURL = async (value, inputField) => {
  // Change the input value
  inputField.value = value;

  // Determine the parameter name based on the input field's id
  const param = inputField.id === "filter-technologies-button" ? "tech" : "loc";

  // Get the current URL and its parameters
  const url = new URL(window.location.href);

  if (value === "All Tech Stack" || value === "All locations") {
    // If the selected option is "All technologies" or "All locations",
    // set the corresponding parameter to an empty string
    url.searchParams.set(param, "");
  } else {
    // Otherwise, update the appropriate parameter
    url.searchParams.set(param, value);
  }

  // Update the URL without reloading the page
  window.history.pushState({}, "", url.toString());

  await getUrlData();
  await countCard();
};
/**
 * ! filter function for the careers page
 *  **/
const filterSearch = (skillValue = "", landValue = "") => {
  let name, profile, nameLocal;

  profiles = document.getElementsByClassName("rt-list__offer-item");

  for (profile of profiles) {
    name = profile.getElementsByClassName("skill")[0];
    nameLocal = profile.getElementsByClassName("rt-list__offer-location")[0];
    if (
      name.textContent.toUpperCase().includes(skillValue.toUpperCase()) > -1
    ) {
      profile.style.display = "flex";
    }
    if (
      name.textContent.toUpperCase().indexOf(skillValue.toUpperCase()) > -1 &&
      nameLocal.textContent.toUpperCase().indexOf(landValue.toUpperCase()) > -1
    ) {
      profile.style.display = "flex";
    } else if (
      name.textContent.toUpperCase().indexOf("/" + skillValue.toUpperCase()) >
        -1 &&
      nameLocal.textContent.toUpperCase().indexOf(landValue.toUpperCase()) > -1
    ) {
      profile.style.display = "flex";
    } else {
      profile.style.display = "none";
    }
  }
};
const getUrlData = async () => {
  // Filter the results
  const urlParams = new URLSearchParams(window.location.search);
  const techValue = urlParams.get("tech") || "";
  const locValue = urlParams.get("loc") || "";
  filterSearch(techValue, locValue);
};

addEventListener("DOMContentLoaded", () => {
  // Get the current URL parameters
  const urlParams = new URLSearchParams(window.location.search);

  // Get the values of the 'tech' and 'loc' parameters
  const techValue = urlParams.get("tech");
  const locValue = urlParams.get("loc");

  // Get the input fields
  const techInput = document.getElementById("filter-technologies-button");
  const locInput = document.getElementById("filter-location-button");

  // Set the values of the input fields
  if (techValue !== null) techInput.value = techValue;
  if (locValue !== null) locInput.value = locValue;
});

/**
 * ! loading icon
 *  **/

const loadingIcon = async () => {
  document.querySelector(".section-filter").classList.remove("hidden");
  document.querySelector(".loader").classList.add("hidden");
};

/**
 * ! count card with flex
 *  **/

const countCard = async () => {
  const cards = document.querySelectorAll(".rt-list__offer-item");
  let count = 0;
  await cards.forEach((card) => {
    if (window.getComputedStyle(card).display === "flex") {
      count++;
    }
  });

  if (count === 0) {
    document.querySelector(".no-result").classList.remove("hidden");
  } else {
    document.querySelector(".no-result").classList.add("hidden");
  }
};
const addIdToButtons = async (data) => {
  const buttonApplyID = "apply-button-job-" + data;
  const buttonSubmitID = "submit-button-job-" + data;
  const buttonBackID = "back-button-job-" + data;
  const buttonCloseID = "rt-details__close-" + data;

  const buttonSubmitSpanClass = document.querySelector(".rt__button--action");

  if (buttonSubmitSpanClass !== null) {
    const buttonSubmitSpan = document.querySelector(".rt__button--action");
    const ButtonSunmitIDControl = document.getElementById(buttonSubmitID);
    console.log(ButtonSunmitIDControl);

    buttonSubmitSpan.setAttribute("id", buttonSubmitID);
    const buttonBackSpan = document.querySelector(
      ".rt-details__footer-item--left"
    );
    buttonBackSpan.setAttribute("id", buttonBackID);

    const buttonCloseSpan = document.querySelector(".rt-details__close");
    buttonCloseSpan.setAttribute("id", buttonCloseID);

    document.getElementById(buttonBackID).addEventListener("click", () => {
      if (typeof popupDiv != "undefined" && popupDiv != null) {
        const buttonApplySpan = document.querySelector(".rt__button--action");
        buttonApplySpan.setAttribute("id", buttonApplyID);
      }
    });
  } else {
    setTimeout(() => {
      addIdToButtons(data);
    }, 500);
  }
};

window.addEventListener("hashchange", async () => {
  addClass();
});

addEventListener("DOMContentLoaded", async () => {
  addClass();
});

const addClass = async () => {
  const data = window.location.hash.slice(1) || null;

  if (data === null) {
    return;
  }

  const targetButton = document.querySelector(".rt__button.rt__button--action");

  if (targetButton !== null) {
    let initialText;
    const intervalId = setInterval(async () => {
      const currentText = targetButton.textContent;
      console.log("noo");
      if (currentText !== initialText) {
        console.log("heey");
        clearInterval(intervalId);
        initialText = targetButton.textContent;
        await addIdToButtons(data);
      }
    }, 500);
  } else {
    setTimeout(() => {
      addClass();
    }, 500);
  }
};
