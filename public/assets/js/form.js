const selectElement = document.querySelector('.contract');

selectElement.addEventListener('change', (event) => {
  const result = document.querySelector('.result');
  result.textContent = `${event.target.value}`;
});

document.getElementById("cp_btn").addEventListener("click", copy_password);

function copy_password() {
    var copyText = document.getElementById("pwd_spn");
    var textArea = document.createElement("textarea");
    textArea.value = copyText.textContent;
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand("Copy");
    textArea.remove();
}