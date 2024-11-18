
document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const firstname = document.getElementById('firstName').value;
    const lastname = document.getElementById('lastName').value;
    const age = document.getElementById('age').value;
    const formData = {
        firstname : firstname,
        lastname : lastname,
        age: age
    }
    if (!firstname || !lastname) {
        alert("First name and last name required!");
        return;
    }
    if (!age || age < 18) {
        alert("You must be 18 to sign up!");
        return;
    }

    const formData1 = {
        firstName: firstname,
        lastname: lastname,
        password: document.getElementById('password').value,
        state: document.getElementById('state').value
    };
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "submit.js", true);
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200 ) {
            const response = JSON.parse(xhr.responseText)
            documnet.getElementById("message").innerHTML = response.message
        }else if (xhr.readyState === 4) {
            alert('Error submitting form.');
        
        }
    };
    xhr.send(JSON.stringify(formData));

    console.log(formData);

});