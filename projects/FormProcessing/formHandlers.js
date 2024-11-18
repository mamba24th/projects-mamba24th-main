document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("userForm");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission

        const formData = {
            name: document.getElementById("name").value.trim(),
            email: document.getElementById("email").value.trim(),
            age: parseInt(document.getElementById("age").value),
            comments: document.getElementById("comments").value.trim(),
        };

        // Validation
        const errors = [];
        if (!formData.name) errors.push("Name is required.");
        if (!formData.email) errors.push("Email is required.");
        if (!formData.comments) errors.push("Comments are required.");
        if (isNaN(formData.age) || formData.age < 18 || formData.age > 100) {
            errors.push("Age must be between 18 and 100.");
        }

        if (errors.length > 0) {
            alert(errors.join("\n"));
            return;
        }

        console.log("Form Data:", formData); // Log form data

        // AJAX request using XMLHttpRequest
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "response.json", true);
        xhr.setRequestHeader("Content-Type", "application/json");

        xhr.onload = function () {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                document.getElementById("responseMessage").innerText = response.message;

                // Reset form and disable fields
                form.reset();
                form.querySelectorAll("input, textarea, button").forEach((field) => {
                    field.disabled = true;
                });
            } else {
                alert("An error occurred while submitting the form.");
            }
        };

        xhr.onerror = function () {
            alert("Failed to connect to the server.");
        };

        xhr.send(JSON.stringify(formData)); // Send form data as JSON
    });
});
