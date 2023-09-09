const fileInput = document.getElementById("fileToUpload");

const fileInputLabel = document.getElementById("label-input");
//© 2019 - 2023 https://daire.eu.org - All Rights Reserved
fileInput.addEventListener("change", () => {
  if (fileInput.value === "") {
    fileInputLabel.innerHTML = "Select a file";
  } else {
    const realPathArray = fileInput.value.split("\\");

    fileInputLabel.innerHTML = realPathArray[realPathArray.length - 1];
  }
});
