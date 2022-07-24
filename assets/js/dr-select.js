(function () {
  const customSelect = document.querySelector(".custom-select");
  const selectDisplay = customSelect.querySelector(".custom-select__display");
  const selectOptions = customSelect.querySelector(".custom-select__options");
  const selectOptionItems = selectOptions.querySelectorAll("li");
  const selectDisplayValue = selectDisplay.querySelector(
  ".custom-select__display__value");


  selectDisplay.addEventListener("click", () => {
    selectOptions.classList.add("active");
    selectOptions.focus();
  });

  selectOptions.addEventListener("blur", () => {
    selectOptions.classList.remove("active");
  });

  selectOptionItems.forEach(el => {
    el.addEventListener("click", evt => {
      selectDisplayValue.innerHTML = evt.target.innerHTML;
      selectOptions.classList.remove("active");
      selectOptions.blur();
    });
  });
})();