function redirectPage() {
    // Get the selected value from the dropdown
    var selectedValue = document.getElementById("gifticol").value;

    // Redirect to the selected page
    if (selectedValue) {
      window.location.href = selectedValue;
    }
}
