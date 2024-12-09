document.getElementById("voteForm").addEventListener("submit", function (event) {
    // Prevent default form submission behavior
    event.preventDefault();

    // Retrieve and validate form data
    const formData = {
        name: document.getElementById("name").value.trim(),
        age: document.getElementById("age").value.trim(),
        email: document.getElementById("email").value.trim(),
        favorite: document.getElementById("favorite").value,
    };

    // Check if all required fields are filled
    if (!formData.name || !formData.age || !formData.email || !formData.favorite) {
        alert("Please fill in all the required fields.");
        return;
    }

    // Display a confirmation message
    const resultDiv = document.getElementById("result");
    resultDiv.textContent = `Thank you, ${formData.name}! Your vote for ${formData.favorite} has been submitted.`;

    // Clear the form
    document.getElementById("voteForm").reset();
});
