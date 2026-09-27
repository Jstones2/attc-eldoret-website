document.addEventListener('DOMContentLoaded', function () {

  var form = document.getElementById('contactForm');
  if (!form) return;

  var formCard = document.getElementById('contactFormCard');
  var successPanel = document.getElementById('contactSuccessPanel');
  var submitBtn = document.getElementById('contactSubmitBtn');
  var btnLabel = submitBtn.querySelector('.btn-label');
  var btnSpinner = submitBtn.querySelector('.btn-spinner');
  var againBtn = document.getElementById('contactAgainBtn');

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();

    if (!form.checkValidity()) {
      form.classList.add('was-validated');
      var firstInvalid = form.querySelector(':invalid');
      if (firstInvalid) firstInvalid.focus();
      return;
    }

    form.classList.add('was-validated');

    // Simulated send — swap this timeout for a fetch() to a PHP mail/DB
    // handler (e.g. send-message.php) once the backend is ready, and only
    // reveal the success panel after a successful response.
    submitBtn.disabled = true;
    btnLabel.classList.add('d-none');
    btnSpinner.classList.remove('d-none');

    setTimeout(function () {
      var name = document.getElementById('cName').value.trim().split(' ')[0];
      var email = document.getElementById('cEmail').value.trim();

      document.getElementById('contactSuccessName').textContent = name || 'there';
      document.getElementById('contactSuccessEmail').textContent = email || 'your email';

      formCard.classList.add('d-none');
      successPanel.classList.remove('d-none');
      successPanel.classList.add('is-visible');

      submitBtn.disabled = false;
      btnLabel.classList.remove('d-none');
      btnSpinner.classList.add('d-none');

      successPanel.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }, 900);
  });

  againBtn.addEventListener('click', function () {
    form.reset();
    form.classList.remove('was-validated');
    successPanel.classList.add('d-none');
    successPanel.classList.remove('is-visible');
    formCard.classList.remove('d-none');
    formCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
  });

});