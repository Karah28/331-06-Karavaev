function togglePassword(id) {
    const input = document.getElementById(id);
    if (input.type === "password") {
        input.type = "text";
    } else {
        input.type = "password";
    }
}

function validateRegisterForm() {
    const login = document.querySelector('input[name="login"]').value;
    const pass = document.querySelector('input[name="pass"]').value;

    const loginRegex = /^[a-zA-Z0-9]{2,32}$/;
    const passRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).{4,16}$/;

    if (!loginRegex.test(login)) {
        alert("Имя пользователя должно содержать только латинские буквы и цифры (2-32 символа).");
        return false;
    }

    if (!passRegex.test(pass)) {
        alert("Пароль должен содержать 4-16 символов, минимум одну заглавную букву, цифру и спецсимвол.");
        return false;
    }

    return true;
}