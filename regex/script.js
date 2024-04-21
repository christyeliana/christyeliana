function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var phone = document.getElementById("phone").value;
    var date = document.getElementById("date").value;
    var zipcode = document.getElementById("zipcode").value;
  
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    var phoneRegex = /^(\(\d{3}\) \d{3}-\d{4}|\d{3}-\d{3}-\d{4})$/;
    var dateRegex = /^\d{4}-\d{2}-\d{2}$/;
    var zipcodeRegex = /^\d{5}(-\d{4})?$/;
  
    if (!emailRegex.test(email)) {
      alert("Email tidak valid");
      return false;
    }
    if (!passwordRegex.test(password)) {
      alert("Password tidak valid");
      return false;
    }
    if (!phoneRegex.test(phone)) {
      alert("Nomor Telepon tidak valid");
      return false;
    }
    if (!dateRegex.test(date)) {
      alert("Format Tanggal tidak valid (YYYY-MM-DD)");
      return false;
    }
    if (!zipcodeRegex.test(zipcode)) {
      alert("Kode Pos tidak valid");
      return false;
    }
    return true;
  }
  