/**
 * ! this is the dropdown menu for the careers page
 *  **/
const elementNavbarfirstDiv = document.querySelector(".dropdown-careers");
const elementNavbarfirstInput = document.querySelector(
  ".dropdown-careers input"
);

const navbarDropdownPackages = () => {
  elementNavbarfirstDiv?.classList.remove("activedropdown");
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

elementNavbarfirstDiv.addEventListener("click", () => {
  elementNavbarfirstDiv.classList.toggle("activedropdown");
});

// Select all dropdown items in both dropdowns
const dropdownItems = document.querySelectorAll(
  ".dropdown-careers .options div"
);

// Attach click event listeners to each dropdown item
dropdownItems.forEach((item) => {
  item.addEventListener("click", () => {
    const value = item.getAttribute("value");
    const inputField = item.closest(".dropdown-careers").querySelector("input");
    console.log(value, inputField);
    changeValueAndURL(value, inputField);
  });
});

const changeValueAndURL = async (value, inputField) => {
  // Change the input value
  inputField.value = value;

  // Determine the parameter name based on the input field's id
  const param = "careers";

  // Get the current URL and its parameters
  const url = new URL(window.location.href);

  // Convert spaces in the value to hyphens for cleaner URLs
  const cleanedValue = value.replace(/ /g, "-");

  if (value === "All careers") {
    // If the selected option is "All careers",
    // set the corresponding parameter to an empty string
    url.searchParams.set(param, "");
  } else {
    // Otherwise, update the appropriate parameter
    url.searchParams.set(param, cleanedValue);
  }

  // Update the URL without reloading the page
  window.history.pushState({}, "", url.toString());
  const idFieldsName = document.querySelector(
    "#job_function-ef663a25-598d-4953-a6d4-0d8c9bc2de89"
  );
  idFieldsName.value = value;
};
