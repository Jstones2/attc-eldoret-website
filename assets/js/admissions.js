document.addEventListener('DOMContentLoaded', function () {

  var form = document.getElementById('admissionForm');
  if (!form) return;

  var formCard = document.getElementById('applyFormCard');
  var successPanel = document.getElementById('successPanel');
  var submitBtn = document.getElementById('submitBtn');
  var btnLabel = submitBtn.querySelector('.btn-label');
  var btnSpinner = submitBtn.querySelector('.btn-spinner');
  var applyAgainBtn = document.getElementById('applyAgainBtn');

  // Pre-fill School / Program when arriving from a course row on
  // courses.php (?school=...&program=...)
  var params = new URLSearchParams(window.location.search);
  var prefilledSchool = params.get('school');
  var prefilledProgram = params.get('program');

  if (prefilledSchool) {
    var schoolSelect = document.getElementById('school');
    var match = Array.prototype.find.call(schoolSelect.options, function (opt) {
      return opt.value === prefilledSchool;
    });
    if (match) schoolSelect.value = prefilledSchool;
  }

  if (prefilledProgram) {
    document.getElementById('program').value = prefilledProgram;
  }

  function generateReference() {
    var year = new Date().getFullYear();
    var random = Math.floor(100000 + Math.random() * 900000);
    return 'ATTC-' + year + '-' + random;
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    e.stopPropagation();

    // Bootstrap-style client-side validation
    if (!form.checkValidity()) {
      form.classList.add('was-validated');
      var firstInvalid = form.querySelector(':invalid');
      if (firstInvalid) {
        firstInvalid.focus();
      }
      return;
    }

    form.classList.add('was-validated');

    // Show a brief "submitting" state for a polished feel.
    // NOTE: this currently simulates the send. Once the PHP/MySQL
    // backend is ready, replace the setTimeout below with a
    // fetch('process-admission.php', { method:'POST', body: new FormData(form) })
    // call and only show the success panel after a successful response.
    submitBtn.disabled = true;
    btnLabel.classList.add('d-none');
    btnSpinner.classList.remove('d-none');

    setTimeout(function () {
      var name = document.getElementById('fullName').value.trim().split(' ')[0];
      document.getElementById('successName').textContent = name || 'there';
      document.getElementById('successRef').textContent = generateReference();

      formCard.classList.add('d-none');
      successPanel.classList.remove('d-none');
      successPanel.classList.add('is-visible');

      submitBtn.disabled = false;
      btnLabel.classList.remove('d-none');
      btnSpinner.classList.add('d-none');

      successPanel.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }, 900);
  });

  applyAgainBtn.addEventListener('click', function () {
    form.reset();
    form.classList.remove('was-validated');
    successPanel.classList.add('d-none');
    successPanel.classList.remove('is-visible');
    formCard.classList.remove('d-none');
    formCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
  });

});