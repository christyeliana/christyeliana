function validateRegex(inputId, regexPattern, validationTextId)
{
    const input = document.getElementById(inputId);
    const validationText = document.getElementById(validationTextId);
    input.addEventListener("input", function() 
{
    const inputValue = input.value;
    if (regexPattern.test(inputValue)) 
    {
        validationText.textContent = "Input valid.";
        validationText.style.color = "green";
    } 
    else 
    {
        validationText.textContent = "Input tidak valid.";
        validationText.style.color = "red";
    }
});
}

validateRegex("email", /^[^\s@]+@[^\s@]+\.[^\s@]+$/, "validemail");
validateRegex("uname", /^[a-zA-Z0-9]{1,10}$/, "validuname");
validateRegex("birth", /^\d{4}-\d{2}-\d{2}$/, "validbirth");
validateRegex("phone", /^\d{4} \d{4} \d{4}$/, "validphone");
validateRegex("nim", /^[0-9]{9}$/, "validnim");