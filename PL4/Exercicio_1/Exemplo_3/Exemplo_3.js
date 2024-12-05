function validate () {
    const email = document.getElementById("email").value
    const age = document.getElementById("age").value
    const fname = document.getElementById("fname").value
    let submitOK = true

    if (fname.length > 10) {
        alert("The name must be less than 10 characters")
        submitOK = false
    }
    if (isNaN(age) || age < 1 || age > 100) {
        alert("The age must be a number between 1 and 100")
        submitOK = false
    }
    if (!email.includes('@')) {
        alert("Not a valid e-mail!")
        submitOK = false
    }
    return submitOK
}
    